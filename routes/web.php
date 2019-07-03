<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::resource('admin','admincontroller');

//transaksi
Route::get('transaksi/tambahdata','transaksicontroller@tambahdata');
Route::post('transaksi','transaksicontroller@importtransaksi');
Route::get('transaksi/listdata','transaksicontroller@listdata');
Route::post('tambahtransaksi','transaksicontroller@tambah');
Route::get('/detailtransaksi/{kode}','transaksicontroller@caridetail');
