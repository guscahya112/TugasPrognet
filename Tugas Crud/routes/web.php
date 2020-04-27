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
    return redirect('/matakuliaah');
});
Route::resource('/matakuliaah','TbMataKuliaahController');

Route::resource('/dosen','TbDosenController');

Route::resource('/kurikulum','TbKurikulumController');

Route::resource('/prodi','TbProdiController');

Route::resource('/mahasiswa','TbMahasiswaController');

Route::resource('/penawaranmk','TbPenawaranmkController');

Route::resource('/pengempu','TbPengempuController');

Route::resource('/krs','TbKrsController');

