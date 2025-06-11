<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jenis extends Model
{
    use HasFactory;
    public $timestamps = false;
    /**
     * Karena tabel kita tidak menggunakan timestamps (created_at, updated_at),
     * kita set properti ini menjadi false.
     * UPDATE: Migrasi terakhir sudah menyertakan timestamps, jadi baris ini tidak diperlukan.
     * Jika Anda yakin tidak ada timestamps, aktifkan baris di bawah ini.
     * public $timestamps = false;
     */
    
    // Tentukan tabel jika namanya tidak mengikuti konvensi (opsional)
    protected $table = 'jenis';

    /**
     * Kolom yang bisa diisi secara massal.
     */
    protected $fillable = [
        'nama',
    ];

    /**
     * Relasi one-to-many: Satu Jenis memiliki banyak Kendaraan.
     */
    public function kendaraans(): HasMany
    {
        // Parameter kedua ('jenis_kendaraan_id') diperlukan jika nama foreign key
        // tidak mengikuti konvensi Laravel (yaitu 'jenis_id')
        return $this->hasMany(Kendaraan::class, 'jenis_kendaraan_id');
    }
}