<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/verification/notice', function () {
    return view('verification.notice');
})->name('verification.notice');
Route::middleware(['guest'])->group(function () {

    Route::get('/', function () {
        return view('home');
    });
    Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');
});

Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');

    Route::get('/admin/tambah', [AdminController::class, 'tambah'])->name('admin.tambah');

    Route::get('/editAdmin/{id}', [AdminController::class, 'editAdmin'])->name('editAdmin');
    Route::get('/deleteAdmin/{id}', [AdminController::class, 'deleteAdmin'])->name('deleteAdmin');

    Route::get('/admin/buku', [AdminController::class, 'adminBuku'])->name('admin.buku');
    Route::get('/admin/tambahBuku', [AdminController::class, 'tambahBuku'])->name('admin.tambahBuku');
    Route::get('/admin/editBuku/{id}', [AdminController::class, 'editBuku'])->name('admin.editBuku');
    Route::get('/admin/deleteBuku/{id}', [AdminController::class, 'deleteBuku'])->name('admin.deleteBuku');

    Route::get('/admin/peminjaman', [AdminController::class, 'adminPeminjaman'])->name('admin.peminjaman');
    Route::get('/admin/tambahPeminjaman', [AdminController::class, 'tambahPeminjaman'])->name('admin.tambahPeminjaman');
    Route::get('/admin/editPeminjaman/{id}', [AdminController::class, 'editPeminjaman'])->name('admin.editPeminjaman');
    Route::get('/admin/deletePeminjaman/{id}', [AdminController::class, 'deletePeminjaman'])->name('admin.deletePeminjaman');
    Route::get('/admin/detailPeminjaman/{id_peminjaman}/{id_user}/{id_buku}', [AdminController::class, 'detailPeminjaman'])->name('admin.detailPeminjaman');

    Route::get('/admin/cetakPeminjaman', [AdminController::class, 'cetakDataPeminjaman'])->name('admin.cetakDataPeminjaman');

    Route::get('/admin/inputBerita', [AdminController::class, 'inputBerita'])->name('admin.inputBerita');
    Route::post('/submit_berita', [AdminController::class, 'submitBerita'])->name('submit_berita');

    Route::get('/admin/inputData', [AdminController::class, 'inputData'])->name('admin.inputData');
    Route::post('/submit_data_dosen', [AdminController::class, 'submitData'])->name('submit_data_dosen');
});

Route::post('/tambahAdmin', [AdminController::class, 'postTambahAdmin'])->name('postTambahAdmin');
Route::post('/postEditAdmin/{id}', [AdminController::class, 'postEditAdmin'])->name('postEditAdmin');

Route::post('/postTambahPeminjaman', [AdminController::class, 'postTambahPeminjaman'])->name('postTambahPeminjaman');
Route::post('/postEditPeminjaman/{id}', [AdminController::class, 'postEditPeminjaman'])->name('postEditPeminjaman');

Route::post('/postTambahBuku', [AdminController::class, 'postTambahBuku'])->name('postTambahBuku');
Route::post('/postEditBuku/{id}', [AdminController::class, 'postEditBuku'])->name('postEditBuku');

Route::group(['middleware' => ['auth', 'checklevel:user']], function () {
    Route::get('user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');

    Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
    Route::get('/profile_lulusan', [HomeController::class, 'profile_lulusan'])->name('profile_lulusan');
});

Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');


// Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');
// Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
// Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');

// Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
// Route::get('/profile_lulusan', [HomeController::class, 'profile_lulusan'])->name('profile_lulusan');
Route::get('/aktivitas_mahasiswa', [HomeController::class, 'aktivitas_mahasiswa'])->name('aktivitas_mahasiswa');
Route::get('/biodata', [BiodataController::class, 'biodata'])->name('biodata');

// Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');
// Route::get('/user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');
