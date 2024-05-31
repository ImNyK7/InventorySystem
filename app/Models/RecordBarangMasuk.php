<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Supplier;

class RecordBarangMasuk extends Model
{
    use HasFactory;

    protected $fillable = [
        'kodebrgmsk', 'tanggalbrgmsk', 'jmlhbrgmsk', 'satuanbrg_id', 'namabrgmsk', 'hrgbeli', 'kategori_id', 'supplier_id'
    ];

    public function stokBarang()
    {
        return $this->hasOne(StokBarang::class, 'recordbarangmasuk_id');
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
    public function satuanbrg()
    {
        return $this->belongsTo(SatuanBrg::class);
    }

    public function getRouteKeyName(){
        return 'kodebrgmsk';
    }
}

// class StokBarang extends Model
// {
//     use HasFactory;

//     protected $fillable = [
//         'recordbarangmasuk_id', 'stokbrg'
//     ];

//     public function recordBarangMasuk()
//     {
//         return $this->belongsTo(RecordBarangMasuk::class, 'recordbarangmasuk_id');
//     }
// }
