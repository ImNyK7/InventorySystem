<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin/register', [RegisterController::class, 'register'])->middleware('auth')->name('admin.register');
Route::post('/admin/register', [RegisterController::class, 'store']);

Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware(('auth'));
Route::get('/admin', [RouteController::class, 'adminpage'])->name('adminpage')->middleware(('auth'));

Route::get('/customer/mastercustomer', [RouteController::class, 'mcustomer'])->name('customer.master');
Route::get('/customer/tambahcustomer', [RouteController::class, 'tambahcustomer'])->name('customer.add');


Route::get('/supplier/mastersupplier', [RouteController::class, 'msupplier'])->name('supplier.master');
Route::get('/supplier/tambahsupplier',[RouteController::class, 'tambahsupplier'])->name('supplier.add');


Route::get('/kategori/masterkategori', [RouteController::class, 'mkategori'])->name('category.master');
Route::get('/kategori/tambahkategori', [RouteController::class, 'tambahkategori'])->name('category.add');

Route::get('/stokbarang', [RouteController::class, 'stokbarang'])->name('stock');

Route::get('/barangmasuk/listbarangmasuk', [RouteController::class, 'barangmasuk'])->name('list.barang.masuk');
Route::get('/barangmasuk/tambahbarangmasuk', [RouteController::class, 'tambahbarangmasuk'])->name('tambah.barang.masuk');

Route::get('/barangkeluar/listbarangkeluar', [RouteController::class, 'barangkeluar'])->name('list.barang.keluar');
Route::get('/barangkeluar/tambahbarangkeluar', [RouteController::class, 'tambahbarangkeluar'])->name('tambah.barang.keluar');

// Route::get('/coba', function () {
//     return view('coba');
// });
