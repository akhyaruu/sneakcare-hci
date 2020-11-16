<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('user_view/register_view');
// });


// ------------------------------ user view ------------------------------

Route::get('/register', 'user\RegisterController@index');
Route::post('/user/register', 'user\RegisterController@store');

Route::get('/login', 'user\LoginController@index');
Route::post('/user/login', 'user\LoginController@authenticate');
Route::get('/user/forget', 'user\LoginController@forgetSession');


Route::get('/' ,'user\Page@index');
Route::get('/pemesanan' ,'user\Page@pemesanan');
Route::get('/about-us' ,'user\Page@tentangKami');
Route::get('/galery' ,'user\Page@galeri');
Route::get('/notifications' ,'user\Page@notifikasi');
// Route::view('/notifications', 'user_view.notifikasi');

Route::post('/user/formsubmitpemesanan', 'user\Page@submitPemesanan');





// ------------------------------ admin view ------------------------------
Route::get('/dashboard-admin-sneakcare/login', 'admin\AdminDashboard@loginView');
Route::post('/dashboard-admin-sneakcare/admin/login', 'admin\LoginController@authenticate');


Route::get('/dashboard-admin-sneakcare/treatment', 'admin\AdminDashboard@treatment');


Route::get('/dashboard-admin-sneakcare/pesanan', 'admin\AdminDashboard@pesanan');
Route::post('/dashboard-admin-sneakcare/konfirmasi-pesanan', 'admin\AdminDashboard@konfirmasiPesanan');


Route::get('/dashboard-admin-sneakcare/admin', 'admin\AdminDashboard@admin');


Route::get('/dashboard-admin-sneakcare/user', 'admin\AdminDashboard@user');
Route::post('/dashboard-admin-sneakcare/user-destory', 'admin\AdminDashboard@destoryUser');