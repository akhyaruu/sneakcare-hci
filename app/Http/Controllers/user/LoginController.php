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
        if($request->session()->has('nama')) {
            return redirect('/');
        } else {
            $value = 'none';
            return view('user_view.login_view', compact('value'));
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
            $request->session()->put('nama',$user->nama);
            return redirect('/');
        }
    }
    public function forgetSession(Request $request) {
        // function ini digunakan pada saat logout
        if($request->session()->has('nama')) {
            $request->session()->flush();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

}
