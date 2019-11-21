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

Route::get('halo', function() {
    return "Halo, Selamat Datang";
});

Route::get('blog', function(){
    return view('blog');
});

Route::get('dosen', 'DosenController@index');

// Route::get('/pegawai/{nama}','PegawaiController@index');
//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

// route formulir untuk menginput data
Route::get('/formulir', 'PegawaiController@formulir');
// route formulir/proses untuk output data
Route::post('/formulir/proses', 'PegawaiController@proses');
/* syntax diatas tujuannya adalah pada saat direktori awal (/) project dijalankan,
maka akan menampilkan me-return view welcome (welcome.blade.php) cukup menulisakn
nama view nya saja  */