<?php

namespace App\Filament\Widgets;

use App\Models\AreaParkir;
use App\Models\User; // <-- 1. PASTIKAN MODEL USER DI-IMPORT
use Filament\Facades\Filament;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DashboardStats extends BaseWidget
{
    protected static ?int $sort = -2;
    protected static ?int $columns = 3;

    protected function getStats(): array
    {
        /** @var User $user */
        $user = auth()->user(); // <-- 2. KITA TANGKAP USER-NYA DI SINI, DI LUAR CACHE

        // Menggunakan cache dengan durasi singkat (10 detik)
        return Cache::remember('widget_resource_stats_final_v6', 10, function () use ($user) { // <-- 3. OPER VARIABEL $user KE DALAM FUNGSI
            $stats = [];
            $resources = Filament::getResources();
            $colors = ['success', 'info', 'warning', 'primary', 'danger'];
            $colorIndex = 0;

            foreach ($resources as $resource) {
                
                $modelClass = $resource::getModel();
                
                // Gunakan variabel $user yang sudah kita oper, bukan auth()->user() lagi
                if ($user->can('viewAny', $modelClass)) {
                    
                    $modelInstance = new $modelClass();
                    $label = $resource::getPluralModelLabel();
                    $icon = $resource::getNavigationIcon();
                    $url = $resource::getUrl('index');
                    
                    $description = "Total {$label} tercatat";
                    $descriptionIcon = null;
                    $chartData = [];
                    $color = 'gray';

                    $isAreaParkir = ($modelClass === AreaParkir::class);

                    if (Schema::hasColumn($modelInstance->getTable(), 'created_at') && !$isAreaParkir) {
                        
                        $trendData = $modelClass::query()
                            ->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
                            ->where('created_at', '>=', now()->subDays(6))
                            ->groupBy('date')->orderBy('date', 'asc')->pluck('count', 'date');

                        $newDataToday = $trendData->get(now()->format('Y-m-d'), 0);

                        if ($newDataToday > 0) {
                            $description = "{$newDataToday} Data baru hari ini";
                            $descriptionIcon = 'heroicon-m-arrow-trending-up';
                            $color = $colors[$colorIndex % count($colors)];
                            $colorIndex++;
                        }

                        for ($i = 6; $i >= 0; $i--) {
                            $date = now()->subDays($i)->format('Y-m-d');
                            $chartData[] = $trendData->get($date, 0);
                        }
                    }

                    $stats[] = Stat::make($label, $modelClass::count())
                        ->icon($icon)
                        ->description($description)
                        ->descriptionIcon($descriptionIcon)
                        ->chart($chartData)
                        ->color($color)
                        ->url($url);
                }
            }
            return $stats;
        });
    }
}