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

Route::get('/login','sesiController@form');
Route::post('/login','sesiController@validasi');
Route::get('/logout','sesiController@logout');
Route::get('/','sesiController@index');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/pengguna', function () {
	return view('public');
});
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');
Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');

Route::get('ruangan','ruanganController@awal');
Route::get('ruangan/tambah','ruanganController@tambah');
Route::post('ruangan/simpan','ruanganController@simpan');
Route::get('ruangan/edit/{ruangan}','ruanganController@edit');
Route::post('ruangan/edit/{ruangan}','ruanganController@update');
Route::get('ruangan/hapus/{ruangan}','ruanganController@hapus');
Route::get('ruangan/lihat/{ruangan}','ruanganController@lihat');

Route::get('pelajar','pelajarController@awal');
Route::get('pelajar/tambah','pelajarController@tambah');
Route::post('pelajar/simpan','pelajarController@simpan');
Route::get('pelajar/edit/{pelajar}','pelajarController@edit');
Route::post('pelajar/edit/{pelajar}','pelajarController@update');
Route::get('pelajar/hapus/{pelajar}','pelajarController@hapus');
Route::get('pelajar/lihat/{pelajar}','pelajarController@lihat');

Route::get('tutor','tutorController@awal');
Route::get('tutor/tambah','tutorController@tambah');
Route::post('tutor/simpan','tutorController@simpan');
Route::get('tutor/edit/{tutor}','tutorController@edit');
Route::post('tutor/edit/{tutor}','tutorController@update');
Route::get('tutor/hapus/{tutor}','tutorController@hapus');
Route::get('tutor/{tutor}','tutorController@lihat');

Route::get('bimbel','bimbelController@awal');
Route::get('bimbel/tambah','bimbelController@tambah');
Route::post('bimbel/simpan','bimbelController@simpan');
Route::get('bimbel/edit/{bimbel}','bimbelController@edit');
Route::post('bimbel/edit/{bimbel}','bimbelController@update');
Route::get('bimbel/hapus/{bimbel}','bimbelController@hapus');
Route::get('bimbel/lihat/{bimbel}','bimbelController@lihat');

Route::get('tutor_bimbel','tutor_bimbelController@awal');
Route::get('tutor_bimbel/tambah','tutor_bimbelController@tambah');
Route::post('tutor_bimbel/simpan','tutor_bimbelController@simpan');
Route::get('tutor_bimbel/edit/{tutor_bimbel}','tutor_bimbelController@edit');
Route::post('tutor_bimbel/edit/{tutor_bimbel}','tutor_bimbelController@update');
Route::get('tutor_bimbel/hapus/{tutor_bimbel}','tutor_bimbelController@hapus');
Route::get('tutor_bimbel/lihat/{tutor_bimbel}','tutor_bimbelController@lihat');

Route::get('jadwal','jadwalController@awal');
Route::get('jadwal/tambah','jadwalController@tambah');
Route::get('jadwal/lihat/{jadwal}','jadwalController@lihat');
Route::post('jadwal/simpan','jadwalController@simpan');
Route::get('jadwal/edit/{jadwal}','jadwalController@edit');
Route::post('jadwal/edit/{jadwal}','jadwalController@update');
Route::get('jadwal/hapus/{jadwal}','jadwalController@hapus');







use Illuminate\Http\Request;


Route::get('pengguna/{pengguna}', function ($pengguna)
{
	return "Hallo World Dari pengguna $pengguna";
});