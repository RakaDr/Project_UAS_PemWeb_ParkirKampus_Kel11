<?php

use Illuminate\Support\Facades\Route;
use App\Models\Kampus; // Import modelnya
use App\Models\Kendaraan; // Import modelnya

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
});

// Route::get('/admin', function () {
//     return view('admin');
// });

Route::get('/tes-relasi', function() {
    // Ambil Kampus dengan ID 1, dan sertakan data relasi 'areaParkirs'-nya
    $kampus = Kampus::with('areaParkirs')->find(1);

    // Sekarang Anda bisa mengakses data area parkir seperti ini:
    foreach ($kampus->areaParkirs as $parkiran) {
        echo 'Area Parkir: ' . $parkiran->nama . '<br>';
    }

    echo "<hr>";

    // Contoh sebaliknya: ambil data kendaraan dan tampilkan jenisnya
    $kendaraan = Kendaraan::with('jenis')->find(4); // Ambil Yamaha NMAX
    echo "Kendaraan: " . $kendaraan->merk . "<br>";
    echo "Jenisnya: " . $kendaraan->jenis->nama; // Mengakses relasi 'jenis'
});
