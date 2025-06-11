<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- Import yang diperlukan

class AreaParkirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('area_parkir')->insert([
            ['nama' => 'Parkir Rektorat UI', 'kapasitas' => 100, 'keterangan' => 'Khusus Mobil', 'kampus_id' => 1],
            ['nama' => 'Parkir Fasilkom UI', 'kapasitas' => 300, 'keterangan' => 'Motor & Mobil', 'kampus_id' => 1],
            ['nama' => 'Parkir Labtek ITB', 'kapasitas' => 500, 'keterangan' => 'Parkir Motor Utama', 'kampus_id' => 2],
            ['nama' => 'Parkir Grha Sabha UGM', 'kapasitas' => 250, 'keterangan' => 'Parkir Mobil Acara', 'kampus_id' => 3],
            ['nama' => 'Parkir Gymnasium IPB', 'kapasitas' => 400, 'keterangan' => 'Umum', 'kampus_id' => 4],
        ]);
    }
}