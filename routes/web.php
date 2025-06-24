<?php

use Illuminate\Support\Facades\Route;
// Pastikan semua model ini sudah di-import di bagian atas
use App\Models\Kampus;
use App\Models\AreaParkir;
use App\Models\Transaksi;

Route::get('/', function () {
    // Ambil jumlah data asli dari database
    $realKampusCount = Kampus::count();
    $realAreaParkirCount = AreaParkir::count();
    $realTransaksiCount = Transaksi::count();

    // Jika jumlah asli adalah 0, gunakan angka dummy. Jika tidak, gunakan angka asli.
    $kampusCount = $realKampusCount > 0 ? $realKampusCount : 7;
    $areaParkirCount = $realAreaParkirCount > 0 ? $realAreaParkirCount : 23;
    $transaksiCount = $realTransaksiCount > 0 ? $realTransaksiCount : 1572;

    // Kirim data yang sudah diproses ke view
    return view('welcome', [
        'kampusCount' => $kampusCount,
        'areaParkirCount' => $areaParkirCount,
        'transaksiCount' => $transaksiCount,
    ]);
});