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
// ==================================================================================
// bagian login login taru disini ya gaess
// ==================================================================================
route::resource('pengguna',PenggunaController::class);

Route::post('/lookVar', 'App\Http\Controllers\PenggunaController@lookVar')->name('lookVar');
Route::post('/register/store', 'App\Http\Controllers\PenggunaController@store')->name('pengguna.store');
Route::post('/login/validate', 'App\Http\Controllers\PenggunaController@loginValidate')->name('pengguna.login');
Route::view('/login', 'login.loginPage');
Route::get('/register', function () {
    return view('login.registerPage');
});

// ==================================================================================
// ==================================================================================
// bagian Barang barang taru disini ya gaess
// ==================================================================================
route::resource('Product',ProdukController::class);

Route::post('/Admin/produk/create', 'App\Http\Controllers\ProdukController@store')->name('produk.store');
Route::get('/Admin/produk/table', 'App\Http\Controllers\ProdukController@show')->name('produk.show');
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/produk/form', function () {
    return view('admin.formTambahProduk');
});
// ==================================================================================
