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


//--------------LOGIN dan REGISTER 
Route::get('/register', 'user\RegisterController@index');
Route::post('/user/register', 'user\RegisterController@store');

Route::get('/login', 'user\LoginController@index');
Route::post('/user/login', 'user\LoginController@authenticate');
Route::get('/user/forget', 'user\LoginController@forgetSession');



Route::view('/lihat', 'admin_view/layout/main');
//--------------DEVELOPMENT ONLY
// Route::view('/lihat' ,'user_view/loginbaru');
// Route::view('/lihat2' ,'user_view/registerbaru');
// Route::view('/lihat1' ,'admin_view/layout/main');
// Route::view('/lihat1' ,'user_view/landing_page');


