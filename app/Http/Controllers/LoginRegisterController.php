<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Jual;
use App\Models\home;
use App\Models\informasiAgen;
use App\Models\penjualan;


class LoginRegisterController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function loginUser(){
        return view('home.login');
    }

    public function registerUser(){
        return view('home.register');
    }

    public function userHome(Request $request){
        $search = $request->input('search');

        $data = Jual::where(function($query) use ($search) {
            $query->where('namaPangkalan', 'LIKE', '%' .$search. '%' );
        })->paginate(5);
        
        return view('user.home', compact('data'));
    }

    public function adminHome(Request $request){
        $search = $request->input('search');

        $data = User::where('level', 'user')->where(function ($query) use ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        })
            ->paginate(5);

        return view('admin.home', compact('data'));
    }

    public function MasyarakatHome(Request $request){
        $search = $request->input('search');

        $data = User::where('level', 'masyarakat')->where(function ($query) use ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        })
            ->paginate(5);

        return view('home.jual', compact('data'));
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'lokasi' => 'required',
            'no_telp' => 'required',
            'password' => 'required|min:8|max:20|confirmed'
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->lokasi = $request->lokasi;
        $user->no_telp = $request->no_telp;
        $user->password = Hash::make($request->password);

        $user->save();

        if ($user) {
            return redirect('/auth/login')->with('success', 'Akun berhasil dibuat, silahkan melakukan proses login!');
        } else {
            return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
        }
    }
    public function postLogin(Request $request){
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:20'
        ]);
        if (Auth::attempt($request->only('email', 'password'))){
            $user = Auth::user();
            if ($user->level == 'user') {
                return redirect('/user/home');
            } elseif ($user->level == 'admin') {
                return redirect('/admin/home');
            }elseif ($user->level == 'masyarakat') {
                return redirect('/home/jual');
            }
        }
        return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }



    public function userjual(Request $request)
    {
        $search = $request->input('search');
        $data = Jual::where(function ($query) use ($search) {
                $query->where('harga', 'LIKE', '%' . $search . '%');
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
    public function editJual($id)
        {
            $data = Jual::find($id);
            return view('user.editJual', compact('data'));
        }
        public function postEditJual(Request $request, $id)
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
            $user = Jual::find($id);
            $user->namaPangkalan = $request->namaPangkalan;
            $user->harga = $request->harga;
            $user->stok = $request->stok;
            $user->notelp = $request->notelp;
            $user->jenisPersyaratan = $request->jenisPersyaratan;
            $user->tanggal = $request->tanggal;
            $user->lokasi = $request->lokasi;
            $user->save();
            if ($user) {
                return back()->with('success', 'Data admin berhasil di update!');
            } else {
                return back()->with('failed', 'Gagal mengupdate data admin!');
            }
        }
        public function deleteJual($id)
        {
            $data = Jual::find($id);
            $data->delete();
            if ($data) {
                return back()->with('success', 'Data berhasil di hapus!');
            } else {
                return back()->with('failed', 'Gagal menghapus data!');
            }
        }


}
