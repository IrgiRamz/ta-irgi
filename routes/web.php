<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SetchatbotController;
use App\Http\Controllers\MetodebayarController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukjasaController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('admin.dashboard.index');
});

Route::get('/produk', function () {
    return view('admin.produk.index');
});

Route::get('/bayar', function () {
    return view('admin.metodebayar.index');
});

Route::get('/pemesanan', function () {
    return view('admin.pemesanan.index');
});

Route::get('/history', function () {
    return view('admin.history.index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Users
Route::resource('kelolausers', UserController::class);
Route::get('/kelolausers', [UserController::class, 'index'])->name('kelolausers.index');
Route::post('/kelolausers/store', [UserController::class, 'store'])->name('kelolausers.store');
// End Users

// Chatbot
Route::resource('setchatbot', SetchatbotController::class);
Route::get('/setchatbot', [SetchatbotController::class, 'index'])->name('setchatbot.index');
// End Chatbot


// Metodebayar
Route::resource('metodebayar', MetodebayarController::class);
Route::get('/metodebayar', [MetodebayarController::class, 'index'])->name('metodebayar.index');
// End Metodebayar

// Produkjasa
Route::resource('produkjasa', ProdukjasaController::class);
Route::get('/produkjasa', [ProdukjasaController::class, 'index'])->name('produkjasa.index');
Route::get('/history', [ProdukjasaController::class, 'index2'])->name('produkjasa.index2');
// End Produkjasa

// Pesanan
Route::resource('pesanan', PesananController::class);
Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan.index');
// End Pesanan


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth');

