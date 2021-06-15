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

Route::middleware(['auth:dosen'])->group(function(){
    Route::get('/matakuliah', 'MatakuliahController@index')->name('dosen.matakuliah');
    Route::patch('/matakuliah/aslab', 'MatakuliahController@setStatusAslab')->name('matakuliah.statusAslab');
    Route::get('/{matakuliah:slug}', 'MatakuliahController@showAslab')->name('matakuliah.aslab');
    Route::get('/{matakuliah:slug}/aslab', 'MatakuliahController@showAslabTerpilih')->name('matakuliah.aslabTerpilih');
    Route::get('/{matakuliah:slug}/materi', 'MateriController@index')->name('matakuliah.materi');
    Route::get('/{matakuliah:slug}/{materi}', 'MateriController@show')->name('matakuliah.materi.detail');
    Route::post('/{matakuliah:slug}/materi', 'MateriController@store')->name('matakuliah.materi.store');
});

Route::middleware(['auth:aslab'])->group(function(){
    Route::get('/aslab', 'PraktikumController@index')->name('aslab.praktikum');
});