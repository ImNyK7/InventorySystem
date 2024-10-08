<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Customer;
use App\Models\Kategori;
use Illuminate\Support\Facades\Hash;
use App\Models\Supplier;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\SatuanBrg;
use App\Models\StokBarang;
use Illuminate\Database\Seeder;
use App\Models\RecordBarangMasuk;
use App\Models\RecordBarangKeluar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::factory(5)->create();

        User::create([
            'username' => 'NyK',
            'password' => bcrypt('12345'),
            'role' => User::ROLE_ADMIN,
        ]);
        
        Kategori::create([
            'kodekat' => 'K01',
            'namakat' => 'Laptop'
        ]);

        Kategori::create([
            'kodekat' => 'K02',
            'namakat' => 'Printer'
        ]);

        Kategori::create([
            'kodekat' => 'K03',
            'namakat' => 'Kamera CCTV'
        ]);

        // StokBarang::create([
        //     'namabrg' => 'Laptop Asus Vivobook S14',
        //     'jmlhbrg' => '5',
        //     'satuanbrg_id' => '3',
        //     'kategori_id' => '2'
        // ]);
        // StokBarang::create([
        //     'namabrg' => 'Kamera CTV',
        //     'jmlhbrg' => '10',
        //     'satuanbrg_id' => '2',
        //     'kategori_id' => '3'
        // ]);
        // StokBarang::create([
        //     'namabrg' => 'Printer EPSON 3242',
        //     'jmlhbrg' => '15',
        //     'satuanbrg_id' => '1',
        //     'kategori_id' => '1'
        // ]);
        //Customer::factory(5)->create();
        Customer::create([
            'kodecust' => 'C01',
            'perusahaancust' => 'PT Customer Setia',
            'kontakcust' => 'Bu Madison',
            'kotacust' => 'Surabaya',
            'alamatcust' => 'Jl. Bersamamu No 60',
            'notelponcust' => '083618365917',
            'termcust' => '14',
            'limitcust' => '12'
        ]);

        //Supplier::factory(5)->create();
        Supplier::create([
            'kodesupp' => 'S01',
            'perusahaansupp' => 'PT Supplier Setia',
            'kontaksupp' => 'Bu Sabrina',
            'kotasupp' => 'Gresik',
            'alamatsupp' => 'Jl. Ditempat N0. 1',
            'notelponsupp' => '084926572044',
            'termsupp' => '7',
        ]);

        //RecordBarangMasuk::factory(15)->create();
        // RecordBarangMasuk::create([
        //     'kodebrgmsk' => 'BM-0001',
        //     'tanggalbrgmsk' => '2022-04-05',
        //     'jmlhbrgmsk' => '10',
        //     'namabrgmsk' => 'Laptop ACER Gaming',
        //     'hrgbeli' => '14.000.000',
        //     'kategori_id' => 1,
        //     'supplier_id' => 1,
        // ]);

        //RecordBarangKeluar::factory(15)->create();
        // RecordBarangKeluar::create([
        //     'kodebrgklr' => 'BK-0001',
        //     'tanggalbrgklr' => '2022-07-08',
        //     'jmlhbrgklr' => '2',
        //     'namabrgklr' => 'EPSON 3547',
        //     'hrgjual' => '7.500.000',
        //     'kategori_id' => 2,
        //     'customer_id' => 1,
        // ]);
        
        SatuanBrg::create([
            'namasatuan' => 'Pcs'
        ]);
        SatuanBrg::create([
            'namasatuan' => 'Roll'
        ]);
        SatuanBrg::create([
            'namasatuan' => 'Box'
        ]);
        SatuanBrg::create([
            'namasatuan' => 'EA'
        ]);
        SatuanBrg::create([
            'namasatuan' => 'Unit'
        ]);
        SatuanBrg::create([
            'namasatuan' => 'LCS'
        ]);
    }
}
