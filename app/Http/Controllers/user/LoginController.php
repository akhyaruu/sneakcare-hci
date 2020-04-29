<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//--------------custom------------
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('id')) {
            return redirect('/');
        } else {
            return view('user_view.login_view');
            // $alert = array('noalert' => 'no alert');
            // return view('user_view.login_view', compact('alert'));
        }
    }

    /**
     * Membuat native autentikasi user
     * 
     */
    public function authenticate(Request $request) {
        $user = User::where('email',  $request->email)->first();
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $request->session()->put('id',$user->id);
            return redirect('/');
        } else {
            // $alert = array('alert' => 'Pastikan alamat email dan password benar');
            // return redirect('/login', compact('alert'));
            return redirect('/login')->with('error', 'alamat email atau password salah');
        }
    }
    public function forgetSession(Request $request) {
        // function ini digunakan pada saat logout
        if($request->session()->has('id')) {
            $request->session()->flush();
            return redirect('/');
        } else {
            return redirect('/login')->with('error', 'kamu belum login!');
        }
    }

}
