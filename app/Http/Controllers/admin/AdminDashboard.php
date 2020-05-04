<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//--------------custom------------
use App\Order;
use Illuminate\Support\Facades\DB;

class AdminDashboard extends Controller
{
    public function index() {
        $order = DB::table('orders')
            ->join('treatments', 'orders.id_treatment', '=', 'treatments.id')
            ->join('users', 'orders.id_user', '=', 'users.id')
            ->select('orders.*', 'treatments.jenis_treatment', 'users.nama')
            ->get();

        return view('admin_view.dashboard', ['orders' => $order]);
    }
}
