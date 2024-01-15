<?php

namespace App\Http\Controllers;

use App\Models\agen;
use App\Models\Jual;
use App\Models\DataDosen;
use App\Models\Pembelian;
use App\Models\User;
use App\Charts\ChartPembelian;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function tambah() {
        return view( 'admin.tambah');
    }

    public function postTambahAdmin(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:20|confirmed'
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = 'user';
        
        $user->password = Hash::make($request->password);

        $user->save();

        if($user){
            return back()->with('success', 'Agen baru berhasil ditambah!');
        }
        else {
            return back()->with('failed', 'Gagal menambah Agen baru!');
        }
    }

    public function editAdmin($id)
    {
        $data = User::find($id);
        return view('admin.edit', compact('data'));
    }
    public function postEditAdmin(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        if ($user) {
            return back()->with('success', 'Data admin berhasil di update!');
        } else {
            return back()->with('failed', 'Gagal mengupdate data admin!');
        }
    }
    public function deleteAdmin($id)
    {
        $data = User::find($id);
        $data->delete();
        if ($data) {
            return back()->with('success', 'Data berhasil di hapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data!');
        }
    }

    

    public function adminjual(Request $request)
    {
        $search = $request->input('search');
        $data = agen::where(function ($query) use ($search) {
                $query->where('lokasi', 'LIKE', '%' . $search . '%');
            })->paginate(5);
        return view('user.jual', compact('data'));
    }
    public function tambahjual()
    {
        return view('user.tambahJual');
    }
    public function postTambahJual(Request $request)
    {
        $request->validate([
            'namaPangkalan' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'notelp' => 'required',
            'jenisPersyaratan' => 'required',
            'tanggal' => 'required|date',
            'lokasi' => 'required',
            'gambar' => 'required|image|max:5120',
        ]);
        $jual = new Jual;
        $jual->namaPangkalan = $request->namaPangkalan;
        $jual->harga = $request->harga;
        $jual->stok = $request->stok;
        $jual->notelp = $request->notelp;
        $jual->jenisPersyaratan = $request->jenisPersyaratan;
        $jual->tanggal = $request->tanggal;
        $jual->lokasi = $request->lokasi;
        
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $jual->gambar = $filename;
        }
        $jual->save();
        if ($jual) {
            return back()->with('success', 'data baru berhasil ditambahkan!');
        } else {
            return back()->with('failed', 'Data gagal ditambahkan!');
        }

    }
        
        
    }

    