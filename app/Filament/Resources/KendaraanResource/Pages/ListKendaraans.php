<?php

namespace App\Filament\Resources\KendaraanResource\Pages;

use App\Filament\Resources\KendaraanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKendaraans extends ListRecords
{
    protected static string $resource = KendaraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Kendaraan')
                ->icon('heroicon-o-plus-circle') // Mengganti ikon
                ->color('success'), // Mengganti warna tombol menjadi hijau
        ];
    }
}
