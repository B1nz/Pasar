<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    protected $table = 'order_items';

    public function produk()
    {
        return $this->belongsTo(Produk::class);

    }
}
