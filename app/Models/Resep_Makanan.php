<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep_Makanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_resep',
        'deskripsi'
    ];
}

