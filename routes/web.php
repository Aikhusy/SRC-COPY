<?php

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\SearchProdukController;
use App\Http\Controllers\TransaksiController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// ==================================================================================
// bagian login
// ==================================================================================
route::resource('admin', AdminController::class);
route::resource('pengguna', PenggunaController::class);

Route::post('/lookVar', 'App\Http\Controllers\PenggunaController@lookVar')->name('lookVar');
Route::post('/register/store', 'App\Http\Controllers\PenggunaController@store')->name('pengguna.store');
Route::post('/login/validate', 'App\Http\Controllers\PenggunaController@loginValidate')->name('pengguna.login');
Route::view('/login', 'login.loginPage')->name('login');
Route::get('/', function () {
    return view('landing');
})->name('landingPage');
Route::get('/register', function () {
    return view('login.registerPage');
});

// ==================================================================================
// ==================================================================================
// bagian CRUD barang
// ==================================================================================
route::resource('Product', ProdukController::class);

Route::get('/Admin/produk/tambah', 'App\Http\Controllers\ProdukController@create')->name('produk.create');
Route::get('/Admin/produk/edit/{id}', 'App\Http\Controllers\ProdukController@edit')->name('produk.edit');
Route::get('/Admin/produk/delete/{id}', 'App\Http\Controllers\ProdukController@destroy')->name('produk.delete');
Route::post('/Admin/produk', 'App\Http\Controllers\ProdukController@store')->name('produk.store');
Route::post('/Admin/produk/edit/{id}', 'App\Http\Controllers\ProdukController@update')->name('produk.update');
Route::get('Admin/dashboard', function () {
    return view('admin.dashboardAdmin');
});
Route::get('Admin/dashboard', 'App\Http\Controllers\ProdukController@displayAdmin')->name('display.admin');
Route::get('/search/{active}', [searchController::class, 'search'])->name('search');
// ==================================================================================
// ==================================================================================
// bagian CRUD User
// ==================================================================================
route::get('admin/user/table',function(){
    return view('admin.user.menuShowUser');
})->name('admin.table');
route::get('admin/user','App\Http\Controllers\AdminController@show')->name('admin.show');
route::get('admin/user/tambah','App\Http\Controllers\AdminController@create')->name('admin.create');
Route::get('admin/user/edit/{id}', 'App\Http\Controllers\AdminController@edit')->name('admin.edit');
Route::get('admin/user/delete/{id}', 'App\Http\Controllers\AdminController@destroy')->name('admin.delete');
Route::post('admin/user/update', 'App\Http\Controllers\AdminController@update')->name('admin.update');
route::post('admin/user/store','App\Http\Controllers\AdminController@store')->name('admin.store');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ==================================================================================
// ==================================================================================
// bagian User
// ==================================================================================
Route::get('user/dashboard', 'App\Http\Controllers\ProdukController@displayProduk')->name('produk.display');
Route::get('user/dashboard/detail_produk/{id}','App\Http\Controllers\ProdukController@index')->name('produk.detail');
Route::get('user/addToCart/{id}', 'App\Http\Controllers\CartController@addToCart')->name('produk.addToCart');
Route::get('user/removeFromCart/{id}', 'App\Http\Controllers\CartController@removeFromCart')->name('produk.removeFromCart');
route::get('user/shoppingCart', 'App\Http\Controllers\CartController@showCookie')->name('produk.shoppingCart');
route::get('user/clearCookie', 'App\Http\Controllers\CartController@clearCookie')->name('clear.cookie');

// ==================================================================================
// ==================================================================================
// invoice
// ==================================================================================
route::post('user/invoice/create','App\Http\Controllers\InvoiceController@store')->name('cart.send');
route::get('user/invoice','App\Http\Controllers\InvoiceController@show')->name('invoice.show');
route::get('user/invoice/{id}', 'App\Http\Controllers\TransaksiController@show')->name('invoice.detail');
route::get('user/invoice/cetak/{id}', 'App\Http\Controllers\TransaksiController@cetak')->name('transaksi.cetak');
