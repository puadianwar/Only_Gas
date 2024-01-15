<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PembayaranController;




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

    Route::get('/admin/infoAgen', [HomeController::class, 'admininfoAgen'])->name('admin.infoAgen');

    Route::get('/admin/pembeli', [HomeController::class, 'homepembeli'])->name('admin.pembeli');
    Route::get('/admin/tambah', [AdminController::class, 'tambah'])->name('admin.tambah');

    Route::get('/editAdmin/{id}', [AdminController::class, 'editAdmin'])->name('editAdmin');
    Route::get('/deleteAdmin/{id}', [AdminController::class, 'deleteAdmin'])->name('deleteAdmin');

    Route::get('/admin/Agen', [penyalurController::class, 'adminAgen'])->name('admin.Agen');
    Route::get('/admin/tambahAgen', [penyalurController::class, 'tambahAgen'])->name('admin.tambahAgen');


});
Route::post('/tambahAgen', [penyalurController::class, 'postTambahAgen'])->name('postTambahAgen');
Route::post('/tambahAdmin', [AdminController::class, 'postTambahAdmin'])->name('postTambahAdmin');
Route::post('/postEditAdmin/{id}', [AdminController::class, 'postEditAdmin'])->name('postEditAdmin');

//user
Route::group(['middleware' => ['auth', 'checklevel:user']], function () {



    Route::get('/user/products', [HomeController::class, 'increaseStock'])->name('user.products');
    Route::get('user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');
    Route::get('/user/profil', [LoginRegisterController::class, 'userprofil'])->name('user.profil');

    Route::get('/user/tambahAgen', [LoginRegisterController::class, 'tambahAgen'])->name('user.tambahAgen');
    
    Route::get('/user/jual', [HomeController::class, 'userjual'])->name('user.jual');

    Route::get('/user/home', [HomeController::class, 'userStok'])->name('user.home');
    Route::post('/home/jual', [HomeController::class, 'jual'])->name('home.jual');


    Route::get('/user/pembeli', [HomeController::class, 'userpembeli'])->name('user.pembeli');

    
    
    Route::get('/user/tambahJual', [LoginRegisterController::class, 'tambahJual'])->name('user.tambahJual');
    Route::get('/user/editjual/{id}', [HomeController::class, 'editjual'])->name('user.editjual');
    Route::post('/postEditJual/{id}', [LoginRegisterController::class, 'postEditJual'])->name('postEditJual');
    

    Route::get('/user/halamanUser', [HomeController::class, 'userhalamanUser'])->name('user.halamanUser');

    Route::get('/user/tambahPembelian', [HomeController::class, 'tambahPembelian'])->name('user.tambahPembelian');
    Route::get('/user/editPembelian', [HomeController::class, 'editPembelian'])->name('user.editPembelian');
    Route::get('/user/deletePembelian', [HomeController::class, 'deletPembelian'])->name('user.deletPembelian');
    Route::get('/user/detailPembelian/{id_Pembelian}/{id_jual}', [HomeController::class, 'detailPembelian'])->name('admin.detailPembelian');

    Route::post('/postTambahPembelian', [HomeController::class, 'postTambahPembelian'])->name('postTambahPembelian');
    Route::post('/posteditPembelian/{id}', [HomeController::class, 'postEditPembelian'])->name('postEdiPembelian');

    Route::get('/user/cetakPembelian', [HomeController::class, 'cetakDataPembelian'])->name('user.cetakDataPembelian');
    


});


Route::get('pembayaran/form', [PembayaranController::class, 'form'])->name('pembayaran.from');
Route::post('/konfirmasi', [PembayaranController::class, 'konfirmasi'])->name('pembayaran.konfirmasi');
// Route::post('pembayaran/konfirmasi', [PembayaranController::class, 'konfirmasi'])->name('pembayaran.konfirmasi');

// routes/web.php

Route::prefix('jual')->group(function () {
    Route::put('/increase-stock/{id}/{quantity}', 'HomeController@increaseStock')->name('jual.increaseStock');
    Route::put('/decrease-stock/{id}/{quantity}', 'HomeController@decreaseStock')->name('jual.decreaseStock');
});


Route::get('/home/informasiAgen', [HomeController::class, 'informasiAgen'])->name('home.informasiAgen');
Route::get('/home/jual', [HomeController::class, 'homejual'])->name('home.jual');
Route::get('/home/form', [HomeController::class, 'homeform'])->name('home.form');

Route::get('/home/pembeli', [HomeController::class, 'homepembeli'])->name('home.pembeli');
Route::post('/tambahform', [HomeController::class, 'postTambahForm'])->name('postTambahForm');
Route::post('/tambahJual', [HomeController::class, 'postTambahJual'])->name('postTambahJual');
Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
