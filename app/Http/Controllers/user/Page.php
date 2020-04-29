<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//-------------custom---------------
use App\User;
use App\Order;

class Page extends Controller
{
    public function index(Request $request) {
        if($request->session()->has('id')) {
            $value = $request->session()->get('id');
            $user = User::find($value);
            // return view('user_view.landing_page', compact('value'));
            return view('user_view.landing_page', compact('user'));
        } else {
            // $value = 'none';
            // return view('user_view.landing_page', compact('value'));
            $user = array('information' => 'nouser');
            return view('user_view.landing_page', compact('user'));
        }
    }

    public function pemesanan(Request $request){
        if($request->session()->has('id')) {
            $value = $request->session()->get('id');
            $user = User::find($value);
            return view('user_view.form_pemesanan', compact('user'));
        } else {
            return redirect('/login')->with('error', 'login dulu untuk dapat melakukan pemesanan');
        }
        // return view('user_view.form_pemesanan');
    }

    public function submitorder(Request $request){
        $request->validate([
            'id_treatment'        => ['required'], 
            'id_user'             => ['required'],
            'jenis_sepatu'        => ['required', 'max:20', 'min:2'],
            'ukuran_sepatu'       => ['required', 'min:2', 'max:4'],
            'alamat_pengambilan'  => ['required', 'min:5', 'max:150'],
            'no_telp'             => ['required', 'digits_between:11,15']
        ]);
        $order = new Order;
        $order->id_treatment = $request->id_treatment;
        $order->id_user = $request->id_user;
        $order->jenis_sepatu = $request->jenis_sepatu;
        $order->ukuran_sepatu = $request->ukuran_sepatu;
        $order->alamat_pengambilan = $request->alamat_pengambilan;
        $order->no_telp_customer = $request->no_telp;
        $order->save();
        return redirect('/');
    }

   
}
