<?php

namespace App\Http\Controllers;
use App\Namespace\CheckLevel;
use App\Models\homeJual;
use Illuminate\Http\Request;
use App\Models\Jual;
use App\Models\Form;
use App\Models\informasiAgen;
use App\Models\penjualan;
use App\Models\infoAgen;
use App\Charts\ChartPembelian;
use App\Models\Pembelian;
use App\Models\Stok;
use Barryvdh\DomPDF\Facade\Pdf;



class HomeController extends Controller
{
   
    public function pembayaran(){
        return view('views.pembayaran');
    }
   
    public function tips(){
        return view('views.tips');
    }
    public function home(){
        return view('home');
    }

    public function userprofil(){
        return view('profil');
    }

    public function agenHome(){
        return view('agen.home');
    }
    
    public function persyaratangas(){
        return view('home.persyaratangas');
    }
   
    public function userjual(Request $request)
    {
        $search = $request->input('search');
        $data = Jual::where(function ($query) use ($search) {
                $query->where('namaPangkalan', 'LIKE', '%' . $search . '%');
            })->paginate(5);
        return view('user.jual', compact('data'));

    }
    public function postTambahJual(Request $request)
    {
        $request->validate([
            'namaPangkalan' => 'required',
            
            'stok' => 'required',
            
            
            'tanggal' => 'required|date',
            'lokasi' => 'required',
            'gambar' => 'required|image|max:5120',
        ]);
        $jual = new Jual;
        $jual->namaPangkalan = $request->namaPangkalan;
        
        $jual->stok = $request->stok;
        
        
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

    public function userStok(Request $request)
    {
        $search = $request->input('search');
        $data = Stok::where(function ($query) use ($search) {
                $query->where('stokk', 'LIKE', '%' . $search . '%');
            })->paginate(5);
        return view('user.home', compact('data'));

    }
    public function postTambahStok(Request $request)
    {
        $request->validate([
            'stokk' => 'required',
            'tanggall' => 'required|date',
            
            
        ]);
        $stok = new Stok;
        $stok->stokk = $request->stokk;
        $stokk->tanggall = $request->tanggall;
        
        
        $stok->save();
        if ($stok) {
            return back()->with('success', 'data baru berhasil ditambahkan!');
        } else {
            return back()->with('failed', 'Data gagal ditambahkan!');
        }

    }  

    public function homejual(Request $request)
    {
        $search = $request->input('search');
        $data = Jual::where(function ($query) use ($search) {
                $query->where('namaPangkalan', 'LIKE', '%' . $search . '%');
            })->paginate(5);
        return view('home.jual', compact('data'));

    }

    public function admininfoAgen(Request $request)
    {
        $search = $request->input('search');
        $data = infoAgen::where(function ($query) use ($search) {
                $query->where('namaPangkalan', 'LIKE', '%' . $search . '%');
            })->paginate(5);
        return view('admin.infoAgen', compact('data'));

    }

    public function homeform(Request $request)
    {
        $search = $request->input('search');
        $data = Form::where(function ($query) use ($search) {
                $query->where('namaLengkap', 'LIKE', '%' . $search . '%');
            })->paginate(5);
        return view('home.form', compact('data'));

    }
    public function postTambahForm(Request $request)
    {
        $request->validate([
            'namaLengkap' => 'required',
            'nik' => 'required',
            'No_telp' => 'required',
            'alamat' => 'required',
        ]);
        $form = new Form;
        $form->namaLengkap = $request->namaLengkap;
        $form->nik = $request->nik;
        $form->jumlahBeli = $request->jumlahBeli;
        $form->No_telp = $request->No_telp;
        $form->alamat = $request->alamat;
        
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $form->gambar = $filename;
        }
        $form->save();
        if ($form) {
            return back()->with('success', 'Anda Sudah Mendaftar Silahkan Pergi Ke Halaman Persetujuan Untuk Pembelian');
        } else {
            return back()->with('failed', 'Pendafataran Gagal!');
        }

    }  

    public function homepembeli(Request $request)
    {
        $search = $request->input('search');
        $data = Form::where(function ($query) use ($search) {
                $query->where('nik', 'LIKE', '%' . $search . '%');
            })->paginate(5);
        return view('home.pembeli', compact('data'));

    }

    public function userpembeli(Request $request)
    {
        $search = $request->input('search');
        $data = Form::where(function ($query) use ($search) {
                $query->where('nik', 'LIKE', '%' . $search . '%');
            })->paginate(5);
        return view('user.pembeli', compact('data'));

    }
    public function userhalamanUser(Request $request, ChartPembelian $chartPembelian) {
        $search = $request->input('search');
        $data = Pembelian::where(function($query) use ($search) {
            $query->where('id_jual', 'LIKE', '%' . $search . '%');
        })->paginate(5);
    
        // Menggunakan $chartPembelian, bukan $chart
        return view('user.halamanUser', compact('data', 'chartPembelian'));
    }
    
    
    public function tambahPembelian() {
        return view('user.tambahPembelian');
    }
    
    public function postTambahPembelian(Request $request) {
        $request->validate([
            'idUser' => 'required',
            'idJual' => 'required|int',
            'tanggalbeli' => 'required|date',
            'tanggalambil' => 'required|date'
        ]);
    
        $pembeli = new Pembelian;
        $pembeli->id_user = $request->idUser;
        $pembeli->id_jual = $request->idJual;
        $pembeli->tanggal_beli = $request->tanggalbeli;
        $pembeli->tanggal_ambil = $request->tanggalambil;
        $pembeli->status = 'Belum Dikembalikan';
        $pembeli->save();
    
        if ($pembeli) {
            return back()->with('success', 'Data pembeli berhasil ditambahkan!');
        } else {
            return back()->with('failed', 'Gagal menambahkan data pembeli!');
        }
    }
    
    public function editPembelian($id) {
        $data = Pembelian::find($id);
        return view('user/editPembelian', compact('data'));
    }
    
    public function postEditPembelian(Request $request, $id) {
        $request->validate([
            'idUser' => 'required',
            'idJual' => 'required|int',
            'tanggalbeli' => 'required',
            'tanggalambil' => 'required',
            'status' => 'required'
        ]);
    
        $pembelian = Pembelian::find($id);
        $pembelian->id_user = $request->idUser;
        $pembelian->id_jual = $request->idJual;
        $pembelian->tanggal_beli = $request->tanggalbeli;
        $pembelian->tanggal_ambil = $request->tanggalambil;
        $pembelian->status = $request->status;
        $pembelian->save();
    
        if ($pembelian) {
            return back()->with('success', 'Data pembelian berhasil diupdate!');
        } else {
            return back()->with('failed', 'Gagal mengupdate data pembelian!');
        }
    }
    
    public function deletepembelian($id) {
        $data = Pembelian::find($id);
        $data->delete();
    
        if ($data) {
            return back()->with('success', 'Data pembelian berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data pembelian!');
        }
    }

    public function detailPembelian($id_Pembelian, $idUser, $idJual) {
        $detailPembelian = Pembelian::select('pembelian.*', 'jual.*', 'users.*')
            ->join('jual', 'pembelian.id_jual', '=', 'jual.id')
            ->join('users', 'pembelian.id_user', '=', 'users.id')
            ->where('pembelian.id', $idPembelian)
            ->where('jual.id', $idJual)
            ->where('users.id', $idUser)
            ->first();
    
        if (!$detailPembelian) {
            abort(404, 'Data tidak ditemukan');
        }
    
        return view('admin.detailPembelian', compact('detailPembelian'));
    }
    public function editjual($id) {
        $data = jual::find($id);
        return view('user/editjual', compact('data'));
    }
        
     public function postEditjual(Request $request, $id) {
        $request->validate([
            'idUser' => 'required',
            'idJual' => 'required|int',
            'tanggalbeli' => 'required',
            'tanggalambil' => 'required',
            'status' => 'required'
        ]);
        
            $jual = jual::find($id);
            $jual->id_user = $request->idUser;
            $jual->id_jual = $request->idJual;
            $jual->tanggal_beli = $request->tanggalbeli;
            $jual->tanggal_ambil = $request->tanggalambil;
            $jual->status = $request->status;
            $jual->save();
        
            if ($jual) {
                return back()->with('success', 'Data jual berhasil diupdate!');
            } else {
                return back()->with('failed', 'Gagal mengupdate data jual!');
            }
        }


        public function increaseStock($id, $quantity)
    {
        $products = Products::findOrFail($id);
        $products->stock += $quantity;
        $products->save();

        return redirect()->route('products.user')->with('success', 'Stok produk berhasil ditambahkan.');
    }

    public function decreaseStock($id, $quantity)
    {
        $products = Products::findOrFail($id);

        if ($products->stock >= $quantity) {
            $products->stock -= $quantity;
            $products->save();
            return redirect()->route('products.user')->with('success', 'Stok produk berhasil dikurangi.');
        } else {
            return redirect()->route('products.user')->with('error', 'Stok produk tidak mencukupi.');
        }
    }
    public function jual(Request $request)
    {
        // Handle the POST request for /home/jual
        // Add your logic here to process the form data
    }
}