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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('merk', 30);
            $table->string('pemilik', 40);
            $table->string('nopol', 20)->unique(); // nopol harus unik
            $table->integer('thn_beli')->nullable();
            $table->string('deskripsi', 200)->nullable();

            // Membuat foreign key ke tabel 'jenis'
            $table->foreignId('jenis_kendaraan_id')
                  ->constrained('jenis')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
