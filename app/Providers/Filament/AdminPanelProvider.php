<?php

namespace App\Providers\Filament;

// PENTING: Import Dashboard dari folder App, bukan dari Filament
use App\Filament\Pages\Dashboard;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\PanelProvider;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\View\View;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->registration()
            ->brandLogo(asset('images/logolight.png'))
            ->darkModeBrandLogo(asset('images/logodark.png'))
            ->brandLogoHeight('70px')
            ->colors([
                'primary' => '#FF6500',
                'gray' => '#0B192C',
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            
            // --- PERBAIKAN 1: Mendaftarkan halaman Dashboard kustom kita ---
            ->pages([
                Dashboard::class, // Ini sekarang menunjuk ke App\Filament\Pages\Dashboard
            ])

            // --- PERBAIKAN 2: Mengosongkan widget global ---
            ->widgets([
                // DIBIARKAN KOSONG agar semua diatur oleh Dashboard.php
            ])
            
            ->plugins([
                FilamentShieldPlugin::make()
            ])
            ->renderHook(
                'panels::auth.login.form.after',
                fn (): View => view('filament.custom.back-home-btn')
            )
            ->renderHook(
                'panels::auth.register.form.after',
                fn (): View => view('filament.custom.back-home-btn')
            )
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}