<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\JadwalKerjaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\RekamMedisController;
use App\Http\Controllers\TenagaMedisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.dashboard', [
        'title' => 'Dashboard',
    ]);
});
Route::resource('pasien', PasienController::class);
Route::resource('rekam-medis', RekamMedisController::class);
Route::resource('inventory', InventoryController::class);
Route::resource('akun', AkunController::class);
Route::resource('tenaga-medis', TenagaMedisController::class);
Route::resource('jadwal-kerja', JadwalKerjaController::class);
Route::resource('pembayaran', PembayaranController::class);
Route::resource('laporan', LaporanController::class);
Route::get('/pasien/{id}/show-modal-detail', 'PasienController@showModal')->name('pasien.show-modal');


