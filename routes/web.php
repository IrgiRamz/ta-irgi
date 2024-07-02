<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('admin.dashboard.index');
});

Route::get('/akunuser', function () {
    return view('admin.user.index');
});

Route::get('/chatbot', function () {
    return view('admin.chatbot.index');
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