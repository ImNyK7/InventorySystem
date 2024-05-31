<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokBarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'recordbarangmasuk_id', 'stokbrg', 'namabrg', 'kategori_id', 'satuanbrg_id'
    ];

    public function recordBarangMasuk()
    {
        return $this->belongsTo(RecordBarangMasuk::class, 'recordbarangmasuk_id');
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function satuanbrg()
    {
        return $this->belongsTo(SatuanBrg::class);
    }
}

