<?php

use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ItemsImport;
use App\Exports\ItemExport;
use App\Http\Controllers\ItemControllers;
use Illuminate\Http\Request;
use App\Models\Item;

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

Route::get('/', 'ItemControllers@index'); // go to listItem
Route::get('/listItem', 'ItemControllers@index'); // go to listItem
Route::get('/search', 'ItemControllers@search');
Route::get('/showItem/{id}', 'ItemControllers@show'); // go to showItem
Route::get('items', [ItemController::class, 'index'])->name('users.index');
Route::middleware('auth')->group(function () {
    Route::get('/insertItem', 'ItemControllers@create'); // go to insert item
    Route::post('insert', 'ItemControllers@store'); // send insrtdata to tabel
    Route::get('/delete/{id}', 'ItemControllers@destroy'); // delete item
    Route::get('/edit/{id}', 'ItemControllers@edit'); //go to edit item
    Route::post('edit/{id}', 'ItemControllers@update');
    Route::get('/qrcode', 'QrcodeController@index'); // qrcode
    Route::post('import', function () {
        //backup ke storage/app/public/reports.
        // $fileName = time().'_'.request()->file->getClientOriginalName();
        // request()->file('file')->storeAs('reports', $fileName, 'public');
        Excel::import(new ItemsImport, request()->file('file'));
        return redirect()->back()->with('success', 'Data Imported Successfully');
    });
    Route::get('export', function () {
        return Excel::download(new ItemExport, 'Items.csv');
    });
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
