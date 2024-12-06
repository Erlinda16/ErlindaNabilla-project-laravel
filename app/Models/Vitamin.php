<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vitamin extends Model
{
    public function sayuran(): BelongsTo
    {
        return $this->belongsTo(Sayuran::class);
    }
}
