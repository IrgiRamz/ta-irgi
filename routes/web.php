<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SetchatbotController;
use App\Http\Controllers\MetodebayarController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukjasaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PesananuserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\ProfileController;

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
    return view('landingpage.home.index');
});

Route::get('/fklinik', function () {
    return view('landingpage.fitur.fklinik');
});

Route::get('/fcantik', function () {
    return view('landingpage.fitur.fcantik');
});

Route::get('/fgigi', function () {
    return view('landingpage.fitur.fgigi');
});

Route::get('/kontak', function () {
    return view('landingpage.kontak.index');
});

Route::get('/hcantik', function () {
    return view('landingpage.harga.hcantik');
});

Route::get('/hklinik', function () {
    return view('landingpage.harga.hklinik');
});

Route::get('/hgigi', function () {
    return view('landingpage.harga.hgigi');
});

/*Route::get('/index', function () {
    return view('admin.dashboard.index');
});*/

Route::get('/access-denied', function () {
    return view('admin.access_denied2');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('home', HomeController::class);

Route::middleware(['auth', 'checkrole:admin,support'])->group(function () {
    // Chatbot
    Route::resource('setchatbot', SetchatbotController::class);
    Route::get('/setchatbot', [SetchatbotController::class, 'index'])->name('setchatbot.index');
    // End Chatbot
});


Route::middleware(['auth', 'checkrole:admin'])->group(function () {
    // Users
    Route::resource('kelolausers', UserController::class);
    Route::get('/kelolausers', [UserController::class, 'index'])->name('kelolausers.index');
    Route::post('/kelolausers/store', [UserController::class, 'store'])->name('kelolausers.store');
    // End Users

    // Metodebayar
    Route::resource('metodebayar', MetodebayarController::class);
    Route::get('/metodebayar', [MetodebayarController::class, 'index'])->name('metodebayar.index');
    // End Metodebayar

    // Produkjasa
    Route::resource('produkjasa', ProdukjasaController::class);
    Route::get('/produkjasa', [ProdukjasaController::class, 'index'])->name('produkjasa.index');
    // End Produkjasa
});

Route::middleware(['auth', 'checkrole:admin,finance'])->group(function () {
    // Pesanan
    Route::resource('pesanan', PesananController::class);
    Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan.index');
    Route::get('/history', [PesananController::class, 'index2'])->name('pesanan.index2');
    // End Pesanan
});



/*Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth');*/

// Dashboard
Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// End Dashboard

// Profile
    Route::resource('profile', ProfileController::class);
    Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
});
// End Profile

// Pesanan User
Route::resource('order', PesananuserController::class);
Route::get('/order', [PesananuserController::class, 'create'])->name('order.create');
Route::get('/pesanans/{id}/konfirmasi', [PesananuserController::class, 'confirmPayment'])->name('pesanan.konfirmasi');
Route::post('/pesanans/{id}/konfirmasi', [PesananuserController::class, 'updatePayment']);

Route::get('/cekpembayaran', [PesananuserController::class, 'index'])->name('cek.pembayaran');
Route::post('/pesanans/cekpemesanan', [PesananuserController::class, 'cekpemesanan'])->name('cek.pemesanan');


// End Pesanan User


Route::post('/chatbot/response', [ChatbotController::class, 'getResponse'])->name('chatbot.response');
