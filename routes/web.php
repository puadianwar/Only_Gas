<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\adminController;

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

// Define a middleware to check if the user is authenticated
Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');
});
  // Protect admin routes and check the user's role
Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/berita', [AdminController::class, 'adminBerita'])->name('admin.berita');
    Route::get('/admin/lulusan', [AdminController::class, 'adminLulusan'])->name('admin.lulusan');
    Route::get('/admin/tambah', [AdminController::class, 'adminTambah'])->name('admin.tambah');
});
// Protect user routes and check the user's role
Route::group(['middleware' => ['auth', 'checklevel:user']], function () {
    Route::get('/user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');
    Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');
    Route::get('/profile', [BeritaController::class, 'Profile'])->name('profile');
    Route::get('/Aktivitas', [BeritaController::class, 'Aktivitas'])->name('aktivitas');
});
 
Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
Route::get('/home', [LoginRegisterController::class, 'home'])->name('home');
// Routes for registration and login
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');


// Route for the user biodata
Route::get('/biodata', [BeritaController::class, 'biodata'])->name('biodata');