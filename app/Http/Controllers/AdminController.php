<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function adminBerita() {
        return view('admin.berita');
    }

    public function adminLulusan() {
        return view('admin.lulusan');
    }
    public function adminTambah() {
        return view('admin.tambah');
    }
}
