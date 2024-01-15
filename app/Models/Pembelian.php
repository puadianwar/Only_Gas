<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembeli';

    protected $fillable = [
        'id_user',
        'id_jual',
        'tanggal_beli',
        'tanggal_ambil'
    ];
}
