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



Route::get('/', function () {
    return view('index');
});






Route::get('/tabel','controllerbaru@index')->middleware('auth');
Route::get('/create','controllerbaru@create')->middleware('auth');
Route::post('/prosestambah','controllerbaru@store')->middleware('auth');
Route::get('/detailcustomer','controllerbaru@index1')->middleware('auth');
Route::get('/','controllerbaru@root')->middleware('auth');
Route::get('/tabel/export_excel','controllerbaru@export_excel')->middleware('auth');
Route::delete('/tabel/{outletcustomer}','controllerbaru@destroy')->middleware('auth');
Route::get('/editcustomer/{outletcustomer}','controllerbaru@edit')->middleware('auth');
Route::patch('/editcustomer/{outletcustomer}','controllerbaru@update')->middleware('auth');
Route::get('/pdf','controllerbaru@exportPDF')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
