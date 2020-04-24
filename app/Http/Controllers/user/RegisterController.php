<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//--------------custom------------
use App\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('nama')) {
            return view('user_view.registerbaru');
        } else {
            return redirect('/lihat1');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi form di sisi server
        $request->validate([
            // 'nama'      => 'required|min:5|max:50',
            'nama'      => ['required', 'min:5', 'max:50'],
            'email'     => ['required', 'min:12', 'max:50'],
            'no_telp'   => ['required', 'digits_between:11,12'],
            'password'  => 'required|max:12'
        ]);
        $user = new User;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->no_telp = $request->no_telp;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/lihat1');
    }

}
