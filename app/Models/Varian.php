<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varian extends Model
{
    use HasFactory;
    protected $table = "varian";

    public function produk()
    {
        return $this->hasMany('App\Models\Produk');
    }
}
