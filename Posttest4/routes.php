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
Route::get('/', function(){
	return view('master');
});

Route::get('pengguna', 'PenggunaController@awal');
Route::get('pengguna/tambah', 'PenggunaController@tambah');
Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');


Route::get('dosen', 'DosenController@awal');
Route::get('dosen/tambah', 'DosenController@tambah');

Route::get('mahasiswa', 'MahasiswaController@awal');
Route::get('mahasiswa/tambah', 'MahasiswaController@tambah');

Route::get('matakuliah', 'MatakuliahController@awal');
Route::get('matakuliah/tambah', 'MatakuliahController@tambah');
Route::get('matakuliah/{matakuliah}', 'MatakuliahController@lihat');
Route::post('matakuliah/simpan', 'MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}', 'MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}', 'MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}', 'MatakuliahController@hapus');

Route::get('ruangan', 'RuanganController@awal');
Route::get('ruangan/tambah', 'RuanganController@tambah');
Route::post('ruangan/simpan', 'RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}', 'RuanganController@edit');
Route::post('ruangan/edit/{ruangan}', 'RuanganController@update');
Route::get('ruangan/hapus/{ruangan}', 'RuanganController@hapus');


Route::get('dosen_matakuliah', 'Dosen_MatakuliahController@awal');
Route::get('dosen_matakuliah/tambah', 'Dosen_MatakuliahController@tambah');

Route::get('jadwal_matakuliah', 'Jadwal_MatakuliahController@awal');
Route::get('jadwal_matakuliah/tambah', 'Jadwal_MatakuliahController@tambah');