<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//--------------custom------------
use App\Notification;
use App\User;
use Illuminate\Support\Facades\DB;

class AdminDashboard extends Controller
{
    // ------------------------------ view ------------------------------
    public function index() 
    {
        
    }

    public function loginView() 
    {
        
    }

    public function treatment() 
    {
        
    }

    public function pesanan() 
    {
        $order = DB::table('orders')
            ->join('treatments', 'orders.id_treatment', '=', 'treatments.id')
            ->join('users', 'orders.id_user', '=', 'users.id')
            ->select('orders.alamat_pengambilan', 'treatments.jenis_treatment', 'users.nama', 'users.id')
            ->get();

        return view('admin_view.pesanan', ['orders' => $order]);
    }

    public function admin() 
    {

    }

    public function user() 
    {
        $users = User::all();
        return view('admin_view.user', ['users' => $users]);
    }


    // ------------------------------ method ------------------------------
    public function authenticate() {

    }

    public function forgetSession() {

    }

    public function konfirmasiPesanan(Request $request) 
    {
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

    public function destoryUser(Request $request) {
        $user = User::find($request->id_user);
        $user->delete();
        return redirect('/dashboard-admin-sneakcare/user')->with('message', 'User telah terhapus');
    }

}
