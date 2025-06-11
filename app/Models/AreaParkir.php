<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AreaParkir extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'area_parkir';

    protected $fillable = [
        'nama',
        'kapasitas',
        'keterangan',
        'kampus_id',
    ];

    /**
     * Relasi many-to-one: Satu AreaParkir dimiliki oleh satu Kampus.
     */
    public function kampus(): BelongsTo
    {
        return $this->belongsTo(Kampus::class);
    }

    /**
     * Relasi one-to-many: Satu AreaParkir memiliki banyak Transaksi.
     */
    public function transaksis(): HasMany
    {
        return $this->hasMany(Transaksi::class);
    }
}