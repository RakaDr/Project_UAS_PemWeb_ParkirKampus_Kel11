<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'tanggal',
        'mulai',
        'akhir',
        'keterangan',
        'biaya',
        'kendaraan_id',
        'area_parkir_id',
    ];

    /**
     * Relasi many-to-one: Satu Transaksi dimiliki oleh satu Kendaraan.
     */
    public function kendaraan(): BelongsTo
    {
        return $this->belongsTo(Kendaraan::class);
    }

    /**
     * Relasi many-to-one: Satu Transaksi terjadi di satu AreaParkir.
     */
    public function areaParkir(): BelongsTo
    {
        return $this->belongsTo(AreaParkir::class);
    }
}