<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanBrg extends Model
{
    use HasFactory;

    protected $fillable = ['namasatuan'];

    protected $guarded = ['id'];

    public function recordbarangmasuk(){
        return $this->hasMany(RecordBarangMasuk::class);
    }
    public function recordbarangkeluar(){
        return $this->hasMany(RecordBarangKeluar::class);
    }
}
