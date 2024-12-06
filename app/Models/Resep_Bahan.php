<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep_Bahan extends Model
{
    use HasFactory;
    public function resep_makanan(): BelongsTo
    {
        return $this->belongsTo(Resep_Makanan::class);
    }

    protected $fillable = [
        'nama_bahan',
        'resep_id'
    ];
}