<?php

namespace App\Models;

use App\Models\RecordBarangMasuk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StokBarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'recordbarangmasuk_id',
        'jmlhstokbrg'
    ];
    protected $guarded =['id'];

    public function recordbarangmasuk()
    {
        return $this->hasMany(RecordBarangMasuk::class);
    }
}
