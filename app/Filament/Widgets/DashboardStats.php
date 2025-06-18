<?php

namespace App\Filament\Widgets;

use Filament\Facades\Filament;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Cache;

class DashboardStats extends BaseWidget
{
    protected static ?int $sort = -2; // Tempatkan widget ini di paling atas
    protected static ?int $columns = 3; // Tampilkan 3 kartu per baris

    protected function getStats(): array
    {
        return Cache::remember('widget_resource_stats', 60, function () {
            $stats = [];
            $resources = Filament::getResources();

            foreach ($resources as $resource) {
                $modelClass = $resource::getModel();
                $label = $resource::getPluralModelLabel();
                $icon = $resource::getNavigationIcon();

                // Buat kartu statistik menjadi lebih menarik
                $stats[] = Stat::make($label, $modelClass::count())
                    ->icon($icon)
                    ->description('Total data yang tercatat')
                    ->color('success'); // Beri warna hijau pada semua kartu
            }

            return $stats;
        });
    }
}