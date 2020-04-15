<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Page extends Controller
{
    public function index(Request $request) {
        if($request->session()->has('id')) {
            echo $request->session()->get('id');
        } else {
            echo 'No data in the session';
        }
    }
}
