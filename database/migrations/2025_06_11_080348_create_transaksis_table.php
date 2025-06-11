<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->time('mulai');
            $table->time('akhir')->nullable(); // Bisa jadi null jika kendaraan masih parkir
            $table->string('keterangan', 100)->nullable();
            $table->double('biaya')->nullable(); // Bisa jadi null jika belum bayar

            // Foreign key ke tabel 'kendaraan'
            $table->foreignId('kendaraan_id')
                  ->constrained('kendaraan')
                  ->onUpdate('cascade')
                  ->onDelete('cascade'); // Jika kendaraan dihapus, transaksinya ikut hilang

            // Foreign key ke tabel 'area_parkir'
            $table->foreignId('area_parkir_id')
                  ->constrained('area_parkir')
                  ->onUpdate('cascade')
                  ->onDelete('restrict'); // Tidak bisa hapus area parkir jika ada transaksi
            
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
