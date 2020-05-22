<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\ClerkMiddleware;
use App\Http\Middleware\CustomerMiddleware;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', AdminController@home)->middleware('auth');
Route::get('home', ClerkController@home)->middleware('auth');
Route::get('home', CustomerController@home)->middleware('auth');

Route::get('shop/home', 'ShopController@home');
Route::post('shop/home', 'ShopController@search');
Route::get('shop/show', 'ShopController@index');
Route::get('shop/show/{id}', 'ShopController@show');
Route::get('shop/add', 'ShopController@add');

Route::get('reserve/home', 'ReserveController@home');
Route::post('reserve/home', 'ReserveController@search');
Route::get('reserve/index', 'ReserveController@show');
Route::get('reserve/add', 'ReserveController@add');
Route::post('reserve/add', 'ReserveController@store');
Route::get('reserve/show_message', 'ReserveController@show_message');
Route::get('reserve/edit', 'ReserveController@edit');
Route::get('reserve/edit', 'ReserveController@edit');

Route::post('tag/add', 'TagController@store');
