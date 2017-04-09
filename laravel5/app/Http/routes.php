<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('Pengguna','PenggunaController@awal');
Route::get('Pengguna/tambah','PenggunaController@tambah');

Route::get('pengguna', 'PenggunaController@awal');
Route::get('pengguna/tambah', 'PenggunaController@tambah');
    
Route::get('dosen', 'DosenController@awal');
Route::get('dosen/tambah', 'DosenController@tambah');
Route::get('dosen/simpan', 'DosenController@simpan');

Route::get('mahasiswa', 'MahasiswaController@awal');
Route::get('mahasiswa/tambah', 'MahasiswaController@tambah');
Route::get('mahasiswa/simpan', 'MahasiswaController@simpan');

Route::get('matakuliah', 'MatakuliahController@awal');
Route::get('matakuliah/tambah', 'MatakuliahController@tambah');
Route::get('matakuliah/simpan', 'MatakuliahController@simpan');

Route::get('ruangan', 'RuanganController@awal');
Route::get('ruangan/tambah', 'RuanganController@tambah');
Route::get('ruangan/simpan', 'RuanganController@simpan');

Route::get('jadwal_matakuliah', 'JadwalMatakuliahController@awal');
Route::get('jadwal_matakuliah/tambah', 'JadwalMatakuliahController@tambah');
Route::get('jadwal_matakuliah/simpan', 'JadwalMatakuliahController@simpan');

Route::get('dosen_matakuliah', 'DosenMatakuliahController@awal');
Route::get('dosen_matakuliah/tambah', 'DosenMatakuliahController@tambah');
Route::get('dosen_matakuliah/simpan', 'DosenMatakuliahController@simpan');


