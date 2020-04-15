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

Route::post('/user/register', 'user\RegisterController@store');
Route::get('/', 'user\RegisterController@index');
Route::post('/user/login', 'user\LoginController@authenticate');
Route::get('/login', 'user\LoginController@index');

Route::get('/user/forget', 'user\LoginController@forget');

Route::get('/landingpage', 'user\Page@index');


