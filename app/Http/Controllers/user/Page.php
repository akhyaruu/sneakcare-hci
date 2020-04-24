<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Page extends Controller
{
    public function index(Request $request) {
        if($request->session()->has('nama')) {
            // echo $request->session()->get('nama');
            return view('user_view.loginbaru');
        } else {
            // echo 'No data in the session';
            return redirect('/lihat1');
        }
    }
}
