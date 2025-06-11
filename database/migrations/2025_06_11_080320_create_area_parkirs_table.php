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
        Schema::create('area_parkir', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 30);
            $table->integer('kapasitas');
            $table->string('keterangan', 45)->nullable();
            
            // Membuat foreign key ke tabel 'kampus'
            $table->foreignId('kampus_id')
                  ->constrained('kampus')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('area_parkirs');
    }
};
