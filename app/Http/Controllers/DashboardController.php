<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Kategori;
use App\Models\Supplier;
use App\Models\StokBarang;
use Illuminate\Http\Request;
use App\Models\RecordBarangMasuk;
use App\Models\RecordBarangKeluar;

class DashboardController extends Controller
{
    public function index(){
        $recordbarangmasuks = RecordBarangMasuk::count();
        $recordbarangkeluars = RecordBarangKeluar::count();
        $customers = Customer::count();
        $suppliers = Supplier::count();
        $kategoris = Kategori::count();
        $stokbarangs = StokBarang::count();
        $title = "Home";
        $role = "Admin";
        return view("home",compact('recordbarangmasuks', 'recordbarangkeluars' , 'stokbarangs', 'customers', 'suppliers', 'kategoris', 'title','role', ));
    }
}
