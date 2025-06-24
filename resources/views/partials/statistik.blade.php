<section id="statistik">
    <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-3xl md:text-5xl font-bold text-slate-900 dark:text-white">
            Terbukti <span class="text-orange-500">Terpercaya</span>
        </h2>
        <p class="mt-4 max-w-2xl mx-auto text-slate-600 dark:text-gray-400 text-lg">
            Angka-angka kami berbicara tentang skala dan dampak dari sistem yang telah kami implementasikan.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8" style="perspective: 1200px;">
        
        <div data-aos="fade-up" data-aos-delay="100"
             class="tilt-card group relative bg-white/50 dark:bg-white/5 backdrop-blur-2xl p-8 rounded-3xl border border-gray-300 dark:border-white/10 text-center flex flex-col items-center shadow-lg transition-all duration-300 hover:border-orange-500/50 hover:-translate-y-2"
             style="transform-style: preserve-3d;">
            
            <div class="relative z-10 flex flex-col items-center" style="transform: translateZ(30px);">
                <div class="mb-4 transition-transform duration-300 group-hover:-translate-y-2">
                    <div class="bg-orange-500/10 text-orange-500 rounded-lg size-12 inline-flex items-center justify-center">
                        <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" /></svg>
                    </div>
                </div>
                <div class="transition-transform duration-300 group-hover:-translate-y-1">
                    <div class="counter text-5xl font-bold text-slate-900 dark:text-white">{{ $kampusCount }}</div>
                    <p class="mt-2 text-lg font-semibold text-slate-600 dark:text-white/70">Kampus Terhubung</p>
                </div>
            </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="200"
             class="tilt-card group relative bg-white/50 dark:bg-white/5 backdrop-blur-2xl p-8 rounded-3xl border border-gray-300 dark:border-white/10 text-center flex flex-col items-center shadow-lg transition-all duration-300 hover:border-orange-500/50 hover:-translate-y-2"
             style="transform-style: preserve-3d;">
            
            <div class="relative z-10 flex flex-col items-center" style="transform: translateZ(30px);">
                <div class="mb-4 transition-transform duration-300 group-hover:-translate-y-2">
                    <div class="bg-orange-500/10 text-orange-500 rounded-lg size-12 inline-flex items-center justify-center">
                         <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.125-.504 1.125-1.125V14.25m-17.25 4.5v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5A1.125 1.125 0 0 1 3.375 9H5.25l1.125-1.125h1.5v12.75" /></svg>
                    </div>
                </div>
                <div class="transition-transform duration-300 group-hover:-translate-y-1">
                    <div class="counter text-5xl font-bold text-slate-900 dark:text-white">{{ $areaParkirCount }}</div>
                    <p class="mt-2 text-lg font-semibold text-slate-600 dark:text-white/70">Total Area Parkir</p>
                </div>
            </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="300"
             class="tilt-card group relative bg-white/50 dark:bg-white/5 backdrop-blur-2xl p-8 rounded-3xl border border-gray-300 dark:border-white/10 text-center flex flex-col items-center shadow-lg transition-all duration-300 hover:border-orange-500/50 hover:-translate-y-2"
             style="transform-style: preserve-3d;">
            
            <div class="relative z-10 flex flex-col items-center" style="transform: translateZ(30px);">
                 <div class="mb-4 transition-transform duration-300 group-hover:-translate-y-2">
                    <div class="bg-orange-500/10 text-orange-500 rounded-lg size-12 inline-flex items-center justify-center">
                        <svg class="w-12 h-12 p-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>
                    </div>
                </div>
                <div class="transition-transform duration-300 group-hover:-translate-y-1">
                    <div class="counter text-5xl font-bold text-slate-900 dark:text-white">{{ number_format($transaksiCount, 0, ',', '.') }}</div>
                    <p class="mt-2 text-lg font-semibold text-slate-600 dark:text-white/70">Transaksi Tercatat</p>
                </div>
            </div>
        </div>
    </div>
</section>