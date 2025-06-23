<?php

use Illuminate\Support\Facades\Route;
use App\Models\Kampus;
use App\Models\AreaParkir;
use App\Models\Transaksi;

Route::get('/', function () {
    $realKampusCount = Kampus::count();
    $realAreaParkirCount = AreaParkir::count();
    $realTransaksiCount = Transaksi::count();

    $kampusCount = $realKampusCount > 0 ? $realKampusCount : 7;
    $areaParkirCount = $realAreaParkirCount > 0 ? $realAreaParkirCount : 23;
    $transaksiCount = $realTransaksiCount > 0 ? $realTransaksiCount : 1572;

    return view('welcome', [
        'kampusCount' => $kampusCount,
        'areaParkirCount' => $areaParkirCount,
        'transaksiCount' => $transaksiCount,
    ]);
});