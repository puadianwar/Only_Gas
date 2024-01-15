<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jual extends Model
{
    use HasFactory;

    protected $table = 'jual';

    protected $fillable = [
        'gambar',
        'namaPangkalan',
        
        'stok',
        
        'tanggal',
        'lokasi'


    ];
}
