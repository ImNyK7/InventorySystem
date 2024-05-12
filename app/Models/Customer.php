<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'kode',
        'perusahaan',
        'kontak',
        'kota',
        'alamat',
        'notelpon',
        'term',
        'limit',
    ];
}
