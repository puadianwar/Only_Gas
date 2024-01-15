<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyalur extends Model
{
    use HasFactory;

    protected $table = 'Penyalur';

    protected $fillable = [
        'nama_penyalur',
        'alamat',
        'notelp',
        'no_kendaraan'
    ];
}
