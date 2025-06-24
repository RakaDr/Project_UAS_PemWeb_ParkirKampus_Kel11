<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder dengan urutan yang benar
        // Tabel tanpa foreign key dipanggil lebih dulu
        $this->call([
            JenisSeeder::class,
            KampusSeeder::class,
            AreaParkirSeeder::class,
            KendaraanSeeder::class,
            TransaksiSeeder::class,
            RolePermissionSeeder::class,
            SuperAdminSeeder::class,
        ]);
    }
}
