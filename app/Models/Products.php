<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'gambar',
        

        'namaPangkalan', 'harga', 'notelp', 'jenisPersyaratan', 'tanggal', 'lokasi', 'stock', // tambahkan kolom stock
    ];
}
