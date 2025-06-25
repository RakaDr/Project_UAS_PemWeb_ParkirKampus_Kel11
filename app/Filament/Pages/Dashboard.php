<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\DashboardStats;
use App\Filament\Widgets\WelcomeWidget;
use Illuminate\Support\Facades\Auth;

class Dashboard extends BaseDashboard
{
    /**
     * Method ini sekarang menjadi satu-satunya sumber
     * untuk widget yang tampil di halaman dashboard.
     */
    public function getWidgets(): array
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        // Menggunakan sintaks PHP if-else yang benar
        if ($user->hasRole(['Super_Admin', 'Admin', 'Petugas_Parkir'])) {
            // Jika user adalah super_admin atau Admin, hanya tampilkan widget statistik.
            return [
                DashboardStats::class,
            ];
        } else {
            // Jika user adalah peran lain, hanya tampilkan widget selamat datang.
            return [
                WelcomeWidget::class,
            ];
        }
    }
}