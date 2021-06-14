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
});

Auth::routes();

Route::middleware(['guest:aslab', 'guest:dosen'])->group(function () {
    Route::get('/login/{url}', 'Auth\LoginController@showLoginForm')->name('login.show');
    Route::post('/login/dosen', 'Auth\LoginController@dosenLogin')->name('login.dosen');
    Route::post('/login/aslab', 'Auth\LoginController@aslabLogin')->name('login.aslab');
    Route::post('/register', 'Auth\RegisterController@create')->name('register.create');
});

Route::get('/dosen', 'DosenController@index')->name('dosen')->middleware('auth:dosen');
Route::get('/aslab', 'AslabController@index')->name('aslab')->middleware('auth:aslab');