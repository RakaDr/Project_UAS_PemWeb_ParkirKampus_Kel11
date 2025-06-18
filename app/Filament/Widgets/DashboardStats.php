<?php

namespace App\Filament\Widgets;

use Filament\Facades\Filament;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Cache;

class DashboardStats extends BaseWidget
{
    protected function getStats(): array
    {
        // Gunakan cache untuk performa, data di-refresh setiap 1 menit (60 detik)
        return Cache::remember('widget_resource_stats', 60, function () {
            $stats = [];
            
            // Ambil semua Resource yang terdaftar di panel Filament saat ini
            $resources = Filament::getResources();

            foreach ($resources as $resource) {
                // Dapatkan nama Model dari class Resource
                $modelClass = $resource::getModel();

                // Dapatkan label navigasi yang sudah Anda definisikan di Resource
                $label = $resource::getPluralModelLabel();

                // Dapatkan ikon navigasi yang sudah Anda definisikan di Resource
                $icon = $resource::getNavigationIcon();

                // Buat kartu statistik
                $stats[] = Stat::make($label, $modelClass::count())
                    ->icon($icon);
            }

            return $stats;
        });
    }
}