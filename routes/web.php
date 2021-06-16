<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
})->name('/');

Auth::routes();

Route::middleware(['guest:aslab', 'guest:dosen'])->group(function () {
    Route::get('/login/{url}', 'Auth\LoginController@showLoginForm')->name('login.show');
    Route::post('/login/dosen', 'Auth\LoginController@dosenLogin')->name('login.dosen');
    Route::post('/login/aslab', 'Auth\LoginController@aslabLogin')->name('login.aslab');
    Route::post('/register', 'Auth\RegisterController@create')->name('register.create');
});

Route::prefix('aslab')->middleware(['auth:aslab'])->group(function(){
    Route::get('/praktikum', 'PraktikumController@index')->name('aslab.praktikum');
    Route::get('/{matakuliah:slug}/kontrak', 'PraktikumController@kontrak')->name('praktikum.kontrak');
    Route::post('/{matakuliah:slug}/aturan', 'PraktikumController@kontrakAturan')->name('kontrak.aturan');
    Route::post('/{matakuliah:slug}/jadwal', 'PraktikumController@kontrakJadwal')->name('kontrak.jadwal');
    Route::post('/{matakuliah:slug}/persen', 'PraktikumController@kontrakPersen')->name('kontrak.persen');
    Route::get('/{matakuliah:slug}/nilai', 'PraktikumController@nilai')->name('praktikum.nilai');
    Route::patch('/{matakuliah:slug}/nilai', 'PraktikumController@updateNilai')->name('praktikum.nilai.update');
    Route::get('/{matakuliah:slug}/jadwal', 'PraktikumController@jadwal')->name('praktikum.jadwal');
});

Route::prefix('dosen')->middleware(['auth:dosen'])->group(function(){
    Route::get('/matakuliah', 'MatakuliahController@index')->name('dosen.matakuliah');
    Route::patch('/matakuliah/aslab', 'MatakuliahController@setStatusAslab')->name('matakuliah.statusAslab');
    Route::get('/{matakuliah:slug}', 'MatakuliahController@showAslab')->name('matakuliah.aslab');
    Route::get('/{matakuliah:slug}/aslab', 'MatakuliahController@showAslabTerpilih')->name('matakuliah.aslabTerpilih');
});

Route::prefix('materi')->middleware(['auth:dosen,aslab'])->group(function(){
    Route::get('/{matakuliah:slug}', 'MateriController@index')->name('matakuliah.materi');
    Route::get('/{matakuliah:slug}/download/{slug}', 'MateriController@download')->name('matakuliah.materi.download');
    Route::get('/{matakuliah:slug}/{slug}', 'MateriController@show')->name('matakuliah.materi.detail');
    Route::middleware(['auth:dosen'])->group(function(){
        Route::post('/{matakuliah:slug}', 'MateriController@store')->name('matakuliah.materi.store');
        Route::patch('/{matakuliah:slug}/{slug}', 'MateriController@update')->name('matakuliah.materi.update');
        Route::delete('/{matakuliah:slug}/{slug}', 'MateriController@destroy')->name('matakuliah.materi.delete');
    });
});