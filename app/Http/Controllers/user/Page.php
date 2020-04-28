<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Page extends Controller
{
    public function index(Request $request) {
        if($request->session()->has('nama')) {
            $value = $request->session()->get('nama');
            return view('user_view.landing_page', compact('value'));
        } else {
            $value = 'none';
            return view('user_view.landing_page', compact('value'));
        }
    }

    public function pemesanan(){
        return view('user_view.form_pemesanan');
    }

   
}
