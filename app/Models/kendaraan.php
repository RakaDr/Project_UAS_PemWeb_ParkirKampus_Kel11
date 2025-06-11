<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kendaraan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'kendaraan';

    protected $fillable = [
        'merk',
        'pemilik',
        'nopol',
        'thn_beli',
        'deskripsi',
        'jenis_kendaraan_id',
    ];

    /**
     * Relasi many-to-one: Satu Kendaraan dimiliki oleh satu Jenis.
     */
    public function jenis(): BelongsTo
    {
        // Tentukan foreign key kustom di sini juga
        return $this->belongsTo(Jenis::class, 'jenis_kendaraan_id');
    }

    /**
     * Relasi one-to-many: Satu Kendaraan bisa memiliki banyak Transaksi.
     */
    public function transaksis(): HasMany
    {
        return $this->hasMany(Transaksi::class);
    }
}