<?php

use App\Http\Controllers\DataUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanUtama;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UkuranController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PakaianController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\TypePakaianController;
use App\Http\Controllers\LacakPemesananController;
use App\Http\Controllers\ProfilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[App\Http\Controllers\HalamanUtama::class, 'index']);
Route::get('pesan/{id}',[App\Http\Controllers\HalamanUtama::class, 'pesan'])->middleware('auth');

Route::resource('lacak-pemesanan',LacakPemesananController::class);
Route::resource('data-pemesanan',PemesananController::class);
Route::resource('data-user',DataUser::class);
Route::resource('data-pelanggan',PelangganController::class);
Route::resource('data-status',StatusController::class);
Route::resource('data-pakaian',PakaianController::class);
Route::resource('type-pakaian',TypePakaianController::class);
Route::resource('ukuran',UkuranController::class);
Route::resource('daftar',DaftarController::class);
Route::resource('profil',ProfilController::class);
Route::resource('laporan-pemesanan',LaporanController::class);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/add-ukuran-pakaian', [App\Http\Controllers\PakaianController::class, 'add_ukuran_pakaian']);
Route::post('/add-pemesanan', [App\Http\Controllers\PemesananController::class, 'add_pemesanan']);
Route::post('/add-pembayaran', [App\Http\Controllers\PemesananController::class, 'add_pembayaran']);
Route::get('/form-pembayaran/{id}', [App\Http\Controllers\PemesananController::class, 'form_pembayaran']);
Route::get('/pemesanan-saya', [App\Http\Controllers\PemesananController::class, 'pemesanan_saya']);
Route::get('/detail-pemesanan/{id}', [App\Http\Controllers\PemesananController::class, 'detail_pemesanan']);
Route::get('/akun-saya', [App\Http\Controllers\HalamanUtama::class, 'akun_saya']);
Route::post('/cari', [App\Http\Controllers\LacakPemesananController::class, 'cari']);
Route::post('/cetak-laporan', [App\Http\Controllers\LaporanController::class, 'cetak_laporan']);
