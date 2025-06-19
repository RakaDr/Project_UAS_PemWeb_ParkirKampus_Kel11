<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kampus extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'kampus';

    protected $fillable = [
        'nama',
        'alamat',
        'latitude',
        'longitude',
        'foto', // Tambahkan kolom foto
    ];

    /**
     * Relasi one-to-many: Satu Kampus memiliki banyak AreaParkir.
     */
    public function areaParkirs(): HasMany
    {
        return $this->hasMany(AreaParkir::class);
    }
}