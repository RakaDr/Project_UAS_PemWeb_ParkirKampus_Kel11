<section id="faq" class="w-full max-w-4xl mx-auto py-16 md:py-24">
    <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-3xl md:text-5xl font-bold text-slate-900 dark:text-white">
            Pertanyaan yang Sering <span class="text-orange-500">Diajukan</span>
        </h2>
        <p class="mt-4 max-w-2xl mx-auto text-slate-600 dark:text-gray-400 text-lg">
            Tidak menemukan jawaban Anda? Hubungi kami untuk informasi lebih lanjut.
        </p>
    </div>

    <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
        
        <div x-data="{ open: false }" class="bg-white/50 backdrop-blur-2xl rounded-3xl border border-white/30 dark:bg-white/5 dark:border-white/10 shadow-lg overflow-hidden transition-all duration-300 hover:dark:border-white/20">
            <button @click="open = !open" class="w-full flex justify-between items-center p-6 text-left text-xl font-semibold focus:outline-none">
                <span class="text-slate-900 dark:text-slate-100">Apakah sistem ini aman?</span>
                <svg class="w-6 h-6 text-orange-500 shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <div x-show="open" x-collapse class="px-6 pb-6 text-slate-700 dark:text-slate-400">
                <div class="pt-4 border-t border-black/10 dark:border-white/10">
                    <p>Tentu saja. Semua data transaksi dan kendaraan dienkripsi dan disimpan di server yang aman. Sistem kami juga mencatat setiap aktivitas untuk keperluan audit, memastikan tidak ada penyalahgunaan data.</p>
                </div>
            </div>
        </div>

        <div x-data="{ open: false }" class="bg-white/50 backdrop-blur-2xl rounded-3xl border border-white/30 dark:bg-white/5 dark:border-white/10 shadow-lg overflow-hidden transition-all duration-300 hover:dark:border-white/20">
            <button @click="open = !open" class="w-full flex justify-between items-center p-6 text-left text-xl font-semibold focus:outline-none">
                <span class="text-slate-900 dark:text-slate-100">Bagaimana proses implementasinya di kampus kami?</span>
                <svg class="w-6 h-6 text-orange-500 shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <div x-show="open" x-collapse class="px-6 pb-6 text-slate-700 dark:text-slate-400">
                <div class="pt-4 border-t border-black/10 dark:border-white/10">
                    <p>Tim kami akan bekerja sama dengan Anda. Prosesnya meliputi survei area, setup hardware (jika diperlukan), instalasi software, hingga pelatihan untuk admin dan petugas parkir Anda. Kami akan mendampingi Anda dari awal hingga sistem berjalan lancar.</p>
                </div>
            </div>
        </div>
        
        <div x-data="{ open: false }" class="bg-white/50 backdrop-blur-2xl rounded-3xl border border-white/30 dark:bg-white/5 dark:border-white/10 shadow-lg overflow-hidden transition-all duration-300 hover:dark:border-white/20">
            <button @click="open = !open" class="w-full flex justify-between items-center p-6 text-left text-xl font-semibold focus:outline-none">
                <span class="text-slate-900 dark:text-slate-100">Apakah bisa diintegrasikan dengan sistem kampus yang sudah ada?</span>
                <svg class="w-6 h-6 text-orange-500 shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <div x-show="open" x-collapse class="px-6 pb-6 text-slate-700 dark:text-slate-400">
                <div class="pt-4 border-t border-black/10 dark:border-white/10">
                    <p>Sangat bisa. Sistem kami dibangun dengan API yang fleksibel yang memungkinkan integrasi dengan sistem informasi akademik (SIAKAD) atau sistem gerbang otomatis yang mungkin sudah dimiliki oleh kampus Anda.</p>
                </div>
            </div>
        </div>

    </div>
</section>