<?php

namespace App\Filament\Resources\AreaParkirResource\Pages;

use App\Filament\Resources\AreaParkirResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;


class ListAreaParkirs extends ListRecords
{
    protected static string $resource = AreaParkirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Area Parkir')
                ->icon('heroicon-o-plus-circle') // Mengganti ikon
                ->color('success'), // Mengganti warna tombol menjadi hijau
        ];
    }
}
