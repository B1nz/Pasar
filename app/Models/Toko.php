<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $fillable=['nama', 'deskripsi'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
