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

Route::get('/', function () { return view('home'); });
Route::get('/1001nights', function () { return view('1001nights'); });
Route::get('/palmeira', function () { return view('palmeira'); });
Route::get('/alshams', function () { return view('alshams'); });
Route::get('/buganvillia', function () { return view('buganvillia'); });
Route::get('/laranja', function () { return view('laranja'); });

Route::get('/set-language/{locale}', 'App\Http\Controllers\LocalizationController@index');