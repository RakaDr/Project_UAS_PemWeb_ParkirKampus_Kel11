<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- TAMBAHKAN BARIS INI

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis')->insert([
            ['nama' => 'Mobil Sedan'],
            ['nama' => 'Mobil SUV'],
            ['nama' => 'Motor Bebek'],
            ['nama' => 'Motor Matic'],
            ['nama' => 'Motor Sport'],
        ]);
    }
}