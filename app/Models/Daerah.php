<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daerah extends Model
{
    protected $table = 'daerah';
    protected $guarded = [];

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
