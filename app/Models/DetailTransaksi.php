<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $table = "detail_transaksi";

    public function transaksi()
    {
        return $this->hasMany('App\Models\Transaksi');
    }
}