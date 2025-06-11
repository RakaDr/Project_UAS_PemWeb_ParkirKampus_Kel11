<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- Import yang diperlukan

class KampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kampus')->insert([
            ['nama' => 'UI Depok', 'alamat' => 'Jl. Margonda Raya, Depok', 'latitude' => -6.3622, 'longitude' => 106.8294],
            ['nama' => 'ITB Ganesha', 'alamat' => 'Jl. Ganesha No. 10, Bandung', 'latitude' => -6.8915, 'longitude' => 107.6106],
            ['nama' => 'UGM Bulaksumur', 'alamat' => 'Bulaksumur, Yogyakarta', 'latitude' => -7.7712, 'longitude' => 110.3777],
            ['nama' => 'IPB Dramaga', 'alamat' => 'Jl. Raya Dramaga, Bogor', 'latitude' => -6.5599, 'longitude' => 106.7262],
            ['nama' => 'ITS Sukolilo', 'alamat' => 'Jl. Teknik Kimia, Surabaya', 'latitude' => -7.2823, 'longitude' => 112.7947],
        ]);
    }
}