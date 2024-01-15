<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infoAgen extends Model
{
    use HasFactory;

    protected $table = 'jual';

    protected $fillable = [
        'gambar',
        'namaPangkalan',
        'harga',
        'stok',
        'notelp',
        'jenisPersyaratan',
        'tanggal',
        'lokasi'
    ];
}
