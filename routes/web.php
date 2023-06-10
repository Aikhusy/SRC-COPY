<?php

use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//bagian login login taru disini ya gaess

route::resource('pengguna',PenggunaController::class);

Route::post('/lookVar', 'App\Http\Controllers\PenggunaController@lookVar')->name('lookVar');
Route::post('/pengguna', 'App\Http\Controllers\PenggunaController@store')->name('pengguna.store');
Route::view('/login', 'login.loginPage');

