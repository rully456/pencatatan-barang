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

Route::get('/viewItem/{id}', 'ViewController@show'); // go to viewItem
Route::get('/listItem', 'ItemControllers@index'); // go to listItem
Route::get('/', 'ViewController@index'); // go to showItem
Route::post('/master', 'ItemControllers@store'); // send insrtdata to tabel
Route::get('/qrcode', 'QrcodeController@index'); // qrcode
