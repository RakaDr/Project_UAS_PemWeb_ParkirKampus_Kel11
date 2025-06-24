<section id="home" class="py-16 md:py-0" data-aos="zoom-in-up">

    <div
        class="group relative bg-white/60 dark:bg-black/20 backdrop-blur-2xl p-8 sm:p-12 md:p-16 rounded-3xl border border-gray-300 dark:border-white/10 shadow-xl
                transition-all duration-500 ease-in-out hover:shadow-2xl hover:border-orange-500/50 hover:-translate-y-2">

        <div
            class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-white/20 to-transparent opacity-50 dark:from-white/5 dark:to-transparent">
        </div>

        <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div class="text-center lg:text-left">
                <h1 class="text-5xl lg:text-6xl xl:text-7xl font-bold text-slate-900 dark:text-white leading-tight">
                    Sistem Parkir Generasi <span class="text-orange-500">Berikutnya</span>
                </h1>
                <p class="mt-6 text-lg text-slate-600 dark:text-gray-300 max-w-lg mx-auto lg:mx-0">
                    Manajemen parkir terintegrasi yang menghadirkan efisiensi, keamanan, dan kemudahan akses bagi
                    seluruh warga kampus.
                </p>
                <div class="mt-10">
                    <a href="{{ url('/admin/register') }}" class="inline-flex items-center justify-center gap-3 bg-orange-500 text-white py-4 px-8 rounded-full font-semibold text-lg
          hover:bg-orange-600 transition-transform hover:scale-105 shadow-lg hover:shadow-orange-500/40">
                        <span>Daftar Sekarang</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="flex items-center justify-center overflow-hidden rounded-2xl">
                <img src="{{ asset('images/bg.jpg') }}" alt="Area Parkir Kampus"
                    class="w-full h-full object-cover transition-transform duration-500 ease-in-out group-hover:scale-105">
            </div>
        </div>
    </div>
</section>
