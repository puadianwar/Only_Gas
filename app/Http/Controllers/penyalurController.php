<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class penyalurController extends Controller
{
    public function adminagen(Request $request)
    {
        $search = $request->input('search');
        $data = agen::where(function ($query) use ($search) {
                $query->where('nama_penyalur', 'LIKE', '%' . $search . '%');
            })->paginate(5);
        return view('admin.agen', compact('data'));
    }
    public function tambahagen()
    {
        return view('admin.tambahagen');
    }
    public function postTambahAgen(Request $request)
    {
        $request->validate([
            'nama_penyalur' => 'required',
            'kirim_pangkalan' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'tanggal' => 'required|date',
            'no_kendaraan' => 'required',
            'gambar' => 'required|image|max:5120',
        ]);
        $agen = new agen;
        $agen->nama_penyalur = $request->nama_penyalur;
        $agen->kirim_pangkalan = $request->kirim_pangkalan;
        $agen->notelp = $request->notelp;
        $agen->alamat = $request->alamat;
        $agen->tanggal = $request->tanggal;
        $agen->no_kendaraan = $request->no_kendaraan;
        
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $agen->gambar = $filename;
        }
        $agen->save();
        if ($agen) {
            return back()->with('success', 'data baru berhasil ditambahkan!');
        } else {
            return back()->with('failed', 'Data gagal ditambahkan!');
        }
    }
    public function editAgen($id)
    {
        $data = agen::find($id);
        return view('admin.editAgen', compact('data'));
    }
    public function postEditAgen(Request $request, $id)
    {
        $request->validate([
            'nama_penyalur' => 'required',
            'kirim_pangkalan' => 'required',
            'alamat' => 'required',
            'notelp' => 'required',
            'tanggal' => 'required',
            'no_kendaraan' => 'required',
            'gambar' => 'image|max:5120',
            
        ]);

        
        $agen->nama_penyalur = $request->nama_penyalur;
        $agen->kirim_pangkalan = $request->kirim_pangkalan;
        $agen->alamat = $request->alamat;
        $agen->notelp = $request->notelp;
        $agen->tanggal = $request->tanggal;
        $agen->no_kendaraan = $request->no_kendaraan;
        

        if ($request->hasFile('gambar')) {
            $filepath = 'images/' . $agen->gambar;
            if (File::exists($filepath)) {
                File::delete($filepath);
            }
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $agen->gambar = $filename;
        }
        $agen->save();
        if ($agen) {
            return back()->with('success', 'agen berhasil diupdate!');
        } else {
            return back()->with('failed', 'agen gagal diupdate!');
        }
    }
    public function deleteAgen($id)
    {
        $agen = agen::find($id);
        $filepath = 'images/' . $agen->gambar;
        if (File::exists($filepath)) {
            File::delete($filepath);
        }
        $agen->delete();
        if ($agen) {
            return back()->with('success', 'Data agen berhasil di hapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data agen!');
        }
    }
}


