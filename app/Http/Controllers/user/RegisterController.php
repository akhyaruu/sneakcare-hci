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
        if($request->session()->has('id')) {
            return redirect('/');
        } else {
            return view('user_view.register_view');
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
        try {
            // validasi form di sisi server
            $request->validate([
                'nama'      => ['required', 'min:5', 'max:35', ["regex", "^([a-zA-Z' ]+)$^"]], 
                'email'     => ['required', 'min:5', 'max:50'],
                'no_telp'   => ['required', 'digits_between:11,13'],
                'password'  => ['required', 'confirmed','min:5', 'max:15']
            ]);
            $user = new User;
            $user->nama = $request->nama;
            $user->email = $request->email;
            $user->no_telp = $request->no_telp;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect('/login')->with('message', 'Register berhasil! sekarang kamu dapat login');
        } catch(\Throwable $th) {
            return redirect('/register')->with('error', 'Register gagal!');
        }
    }

}
