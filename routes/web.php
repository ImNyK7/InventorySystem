<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MasterCustomer;
use App\Http\Controllers\CustomerController;

Route::get('/login', function () {
    return view('login');
});


Route::get('/', function () {
    return view('home', [
        "title" => "Home", 
        "role" => "Admin"
    ]);
});

Route::get('/customer/mastercustomer', [RouteController::class, 'mcustomer']);

Route::get('/customer/tambahcustomer', [RouteController::class, 'tambahcustomer']);


Route::get('/supplier/mastersupplier', [RouteController::class, 'msupplier']);

Route::get('/supplier/tambahsupplier',[RouteController::class, 'tambahsupplier']);


Route::get('/kategori/masterkategori', [RouteController::class, 'mkategori']);

Route::get('/kategori/tambahkategori', [RouteController::class, 'tambahkategori']);

Route::get('/stokbarang', [RouteController::class, 'stokbarang']);


Route::get('/barangmasuk/listbarangmasuk', [RouteController::class, 'barangmasuk']);

Route::get('/barangmasuk/tambahbarangmasuk', [RouteController::class, 'tambahbarangmasuk']);

Route::get('/barangkeluar/listbarangkeluar', [RouteController::class, 'barangkeluar']);

Route::get('/barangkeluar/tambahbarangkeluar', [RouteController::class, 'tambahbarangkeluar']);

// Route::get('/coba', function () {
//     return view('coba');
// });
