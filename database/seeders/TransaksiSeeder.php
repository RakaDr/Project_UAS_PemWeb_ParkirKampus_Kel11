<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- Import yang diperlukan
use Carbon\Carbon;                   // <-- Import yang diperlukan untuk tanggal

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaksi')->insert([
            [
                'tanggal' => Carbon::today(), 'mulai' => '08:00:00', 'akhir' => '17:00:00', 'keterangan' => 'Parkir harian', 'biaya' => 10000, 'kendaraan_id' => 1, 'area_parkir_id' => 1
            ],
            [
                'tanggal' => Carbon::today(), 'mulai' => '09:15:00', 'akhir' => null, 'keterangan' => 'Mahasiswa', 'biaya' => null, 'kendaraan_id' => 4, 'area_parkir_id' => 2
            ],
            [
                'tanggal' => Carbon::yesterday(), 'mulai' => '10:00:00', 'akhir' => '12:00:00', 'keterangan' => 'Kunjungan singkat', 'biaya' => 4000, 'kendaraan_id' => 3, 'area_parkir_id' => 3
            ],
            [
                'tanggal' => Carbon::today(), 'mulai' => '07:30:00', 'akhir' => null, 'keterangan' => 'Dosen', 'biaya' => null, 'kendaraan_id' => 2, 'area_parkir_id' => 1
            ],
            [
                'tanggal' => Carbon::today()->subDays(2), 'mulai' => '13:00:00', 'akhir' => '18:30:00', 'keterangan' => 'Parkir sore', 'biaya' => 8000, 'kendaraan_id' => 5, 'area_parkir_id' => 3
            ],
        ]);
    }
}