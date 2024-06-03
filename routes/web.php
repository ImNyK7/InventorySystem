<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StokBarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;

Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin/register', [RegisterController::class, 'register'])->middleware('auth')->name('admin.register');
Route::post('/admin/register', [RegisterController::class, 'store']);

Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware(('auth'));
Route::get('/admin', [RouteController::class, 'adminpage'])->name('adminpage')->middleware(('auth'));


Route::get('/stokbarang', [RouteController::class, 'stokbarang'])->name('stock');


Route::resource('/customer/mastercustomer', CustomerController::class)->middleware("auth");
Route::resource('/supplier/mastersupplier', SupplierController::class)->middleware("auth");
Route::resource('/kategori/masterkategori', KategoriController::class)->middleware("auth");
Route::resource('/barangmasuk/listbarangmasuk', BarangMasukController::class)->middleware("auth");
Route::resource('/barangkeluar/listbarangkeluar', BarangKeluarController::class)->middleware("auth");
Route::resource('/stokbarang', StokBarangController::class)->middleware("auth");

// Route::get('/coba', function () {
//     return view('coba');
// });
