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



//--------------PAGE
Route::get('/' ,'user\Page@index');
Route::get('/pemesanan' ,'user\Page@pemesanan');

//--------------FORM SUBMIT
Route::post('/user/formsubmitpemesanan', 'user\Page@submitorder');

//--------------LOGIN dan REGISTER 
Route::get('/register', 'user\RegisterController@index');
Route::post('/user/register', 'user\RegisterController@store');

Route::get('/login', 'user\LoginController@index');
Route::post('/user/login', 'user\LoginController@authenticate');
Route::get('/user/forget', 'user\LoginController@forgetSession');

//--------------ADMIN
Route::get('/dashboard-admin-sneakcare/pesanan', 'admin\AdminDashboard@index');

