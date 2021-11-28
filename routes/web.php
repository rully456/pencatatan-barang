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


Route::middleware('auth')->group(function () {
    Route::get('/showItem/{id}', 'ItemControllers@show'); // go to showItem
    Route::get('/listItem', 'ItemControllers@index'); // go to listItem
    Route::get('/', 'ItemControllers@index'); // go to listItem
    Route::get('/insertItem', 'ItemControllers@create'); // go to insert item
    Route::get('/delete/{id}', 'ItemControllers@destroy'); // delete item
    Route::post('insert', 'ItemControllers@store'); // send insrtdata to tabel
    Route::get('/qrcode', 'QrcodeController@index'); // qrcode
    Route::post('/logout', 'ItemControllers@logout');
});
// Route::post('import', function () {
//     Excel::import(new UsersImport, request()->file('file'));
//     return redirect()->back()->with('success', 'Data Imported Successfully');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
