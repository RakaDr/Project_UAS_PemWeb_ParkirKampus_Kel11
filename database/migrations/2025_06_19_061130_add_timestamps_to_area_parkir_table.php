<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('area_parkir', function (Blueprint $table) {
            $table->timestamps(); // <-- TAMBAHKAN BARIS INI
        });
    }

    public function down(): void
    {
        Schema::table('area_parkir', function (Blueprint $table) {
            $table->dropTimestamps(); // <-- Tambahkan ini untuk rollback
        });
    }
};