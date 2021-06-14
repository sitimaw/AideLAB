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

Route::get('/login/{url}', 'Auth\LoginController@showLoginForm')->name('login.show');
Route::post('/login/dosen', 'Auth\LoginController@dosenLogin')->name('login.dosen');
Route::post('/login/aslab', 'Auth\LoginController@aslabLogin')->name('login.aslab');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dosen', 'DosenController@index')->name('dosen');
Route::get('/aslab', 'AslabController@index')->name('aslab');
