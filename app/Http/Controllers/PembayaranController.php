<?php

// app/Http/Controllers/PembayaranController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PembayaranController extends Controller
{
    public function form()
    {
        return view('pembayaran.form');
    }

    public function prosesPembayaran(Request $request)
    {
        // Proses pembayaran
        $nama = $request->input('nama');
        $email = $request->input('email');
        $jumlah = $request->input('jumlah');
    }

        // Contoh: Menyimpan data pembayaran ke database atau menghubungkan ke gateway pembayaran
        // ...

        // Tampilkan konfirmasi
        public function konfirmasi()
        {
            return view('pembayaran.konfirmasi'); // Sesuaikan dengan halaman konfirmasi yang ingin ditampilkan
    
        } 
}
