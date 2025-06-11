<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- Import yang diperlukan

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kendaraan')->insert([
            ['merk' => 'Honda Civic', 'pemilik' => 'Budi Santoso', 'nopol' => 'B 1234 ABC', 'thn_beli' => 2022, 'deskripsi' => 'Warna Hitam', 'jenis_kendaraan_id' => 1],
            ['merk' => 'Toyota Fortuner', 'pemilik' => 'Citra Lestari', 'nopol' => 'D 5678 DEF', 'thn_beli' => 2023, 'deskripsi' => 'Warna Putih', 'jenis_kendaraan_id' => 2],
            ['merk' => 'Honda Supra X', 'pemilik' => 'Asep Sunandar', 'nopol' => 'F 9012 GHI', 'thn_beli' => 2020, 'deskripsi' => 'Ada stiker', 'jenis_kendaraan_id' => 3],
            ['merk' => 'Yamaha NMAX', 'pemilik' => 'Dewi Anggraini', 'nopol' => 'B 3456 JKL', 'thn_beli' => 2024, 'deskripsi' => 'Warna Abu-abu', 'jenis_kendaraan_id' => 4],
            ['merk' => 'Kawasaki Ninja', 'pemilik' => 'Rian Ardianto', 'nopol' => 'AD 7890 MNO', 'thn_beli' => 2021, 'deskripsi' => 'Knalpot racing', 'jenis_kendaraan_id' => 5],
        ]);
    }
}