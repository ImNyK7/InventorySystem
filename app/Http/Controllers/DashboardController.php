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
        $totalJumlahBarang = StokBarang::sum('jmlhbrg');
        $title = "Home";
        return view("home",compact('totalJumlahBarang','recordbarangmasuks', 'recordbarangkeluars' , 'customers', 'suppliers', 'kategoris', 'title', ));
    }
}
