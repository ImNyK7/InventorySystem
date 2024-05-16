<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'kodesupp',
        'perusahaansupp',
        'kontaksupp',
        'kotasupp',
        'alamatsupp',
        'notelponsupp',
        'termsupp',
    ];

    protected $guarded =['id'];
}
