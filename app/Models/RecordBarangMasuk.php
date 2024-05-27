<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RecordBarangMasuk extends Model
{
    use HasFactory;

    protected $fillable = [
            'kodebrgmsk',
            'tanggalbrgmsk',
            'tanggalbrgmsk',
            'namabrgmsk',
            'jmlhbrgmsk',
            'hrgbeli',
            'kategori_id',
            'supplier_id'
    ];
    protected $guarded = ['id'];

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
}
