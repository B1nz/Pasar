<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public function toko()
    {
        return $this->belongsTo(Toko::class, 'toko_id');
    }
}
