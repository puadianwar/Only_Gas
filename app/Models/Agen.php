<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agen extends Model
{
    use HasFactory;

    protected $table = 'agen';

    protected $fillable = [
        'gambar',
        'nama_penyalur',
        'kirim_pangkalan',
        'notelp',
        'alamat',
        'tanggal',
        'no_kendaraan'
    ];
}
