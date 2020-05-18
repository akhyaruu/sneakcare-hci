<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//--------------custom------------
use App\Notification;
use Illuminate\Support\Facades\DB;

class AdminDashboard extends Controller
{
    public function index() {
        $order = DB::table('orders')
            ->join('treatments', 'orders.id_treatment', '=', 'treatments.id')
            ->join('users', 'orders.id_user', '=', 'users.id')
            ->select('orders.alamat_pengambilan', 'treatments.jenis_treatment', 'users.nama', 'users.id')
            ->get();

        return view('admin_view.dashboard', ['orders' => $order]);
    }

    public function konfirmasiPesanan(Request $request) {
        $request->validate([
            'isi_notifikasi' => ['required'],
            'id_user'        => ['required']
        ]);
        $notification = new Notification;
        $notification->id_user = $request->id_user;
        $notification->isi_notifikasi = $request->isi_notifikasi;
        $notification->save();
        return redirect('/dashboard-admin-sneakcare/pesanan')->with('message', 'Pesanan telah dikonfirmasi');
    }
}
