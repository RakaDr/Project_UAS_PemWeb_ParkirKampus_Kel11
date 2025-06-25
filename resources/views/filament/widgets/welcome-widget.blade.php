<x-filament-widgets::widget>
    <x-filament::card class="relative bg-white/60 dark:bg-black/20 backdrop-blur-xl border border-gray-300 dark:border-white/10 rounded-2xl shadow-lg">
        
        <div class="absolute -top-16 -right-16 w-32 h-32 bg-orange-500/10 rounded-full blur-3xl -z-10"></div>

        <div class="relative z-10 space-y-4">
            <h2 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">
                Selamat Datang, {{ auth()->user()->name }}!
            </h2>

            <p class="text-base text-slate-600 dark:text-gray-400">
                Saat ini Anda login sebagai pengguna standar. Anda belum memiliki hak akses untuk mengelola data atau melihat statistik.
            </p>

            <p class="text-sm text-slate-500 dark:text-gray-500 pt-4">
                Jika Anda merasa memerlukan hak akses lebih, silakan hubungi <span class="font-semibold text-orange-500">Super Admin</span> sistem.
            </p>
        </div>
    </x-filament::card>
</x-filament-widgets::widget>