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
        Schema::table('kampus', function (Blueprint $table) {
            // Cukup tambahkan baris ini untuk membuat kolom created_at dan updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kampus', function (Blueprint $table) {
            // Ini akan menghapus kolom created_at dan updated_at jika migrasi di-rollback
            $table->dropTimestamps();
        });
    }
};