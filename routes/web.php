<?php
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
Route::get('/transaksi/kirim/{kode}','transaksicontroller@kirimdata');
Route::get('transaksi/listdatadikirim','transaksicontroller@listdatadikirim');
Route::get('/transaksi/cancel/{kode}','transaksicontroller@canceldata');
Route::get('/transaksi/sukses/{kode}','transaksicontroller@suksesdata');
Route::get('/transaksi/listdatacancel','transaksicontroller@listdatacancel');
Route::get('/transaksi/hapus/{kode}','transaksicontroller@hapusdata');
Route::get('transaksi/listdatasukses','transaksicontroller@listdatasukses');
Route::get('transaksi/caridata','transaksicontroller@carisemuadata');
Route::get('laporan/caridata','laporancontroller@cari');
Route::get('laporan/tampil','laporancontroller@tampil');

//backup
Route::get('backup/caridata','backupcontroller@caridata');
Route::get('backup/tampil','backupcontroller@tampil');
Route::get('backup/hapus/{mulai}/{sampai}','backupcontroller@hapus');