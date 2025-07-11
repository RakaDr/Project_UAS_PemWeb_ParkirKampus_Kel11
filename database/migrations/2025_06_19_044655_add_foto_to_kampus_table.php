<?php

// database/migrations/xxxx_xx_xx_xxxxxx_add_foto_to_kampus_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('kampus', function (Blueprint $table) {
            // Tambahkan baris ini
            $table->string('foto')->nullable()->after('longitude');
        });
    }

    public function down(): void
    {
        Schema::table('kampus', function (Blueprint $table) {
            // Tambahkan baris ini untuk rollback
            $table->dropColumn('foto');
        });
    }
};
