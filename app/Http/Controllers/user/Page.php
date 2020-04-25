<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Page extends Controller
{
    public function index() {
        return view('user_view.landing_page');
    }
}
