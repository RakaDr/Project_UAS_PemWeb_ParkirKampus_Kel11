<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parkir Kampus - Sistem Manajemen Parkir Modern</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600,700&display=swap" rel="stylesheet" />
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans bg-gray-900 text-gray-300">
    
    <div class="relative">
        <div class="absolute inset-0 -z-10 bg-gradient-to-b from-gray-900 via-gray-900 to-black"></div>

        <div class="container mx-auto px-6 md:px-12">
            
            <header class="py-6" data-aos="fade-down">
                <nav class="flex justify-between items-center">
                    <a href="/"><img src="{{ asset('images/logodark.png') }}" alt="Logo Parkir Kampus" class="h-30"></a>
                    <div class="hidden md:flex items-center space-x-8 font-semibold">
                        <a href="#layanan" class="hover:text-orange-500 transition-colors">Layanan</a>
                        <a href="#keunggulan" class="hover:text-orange-500 transition-colors">Keunggulan</a>
                        <a href="#statistik" class="hover:text-orange-500 transition-colors">Statistik</a>
                        <a href="#tim" class="hover:text-orange-500 transition-colors">Tim</a>
                        <a href="#faq" class="hover:text-orange-500 transition-colors">FAQ</a>
                    </div>
                    <div class="hidden md:flex items-center gap-4">
                        @auth
                            <a href="{{ url('/admin') }}" class="px-5 py-2 text-sm font-semibold text-white bg-orange-600 rounded-lg hover:bg-orange-700 transition-colors">Dashboard</a>
                        @else
                            <a href="{{ url('/admin/login') }}" class="px-5 py-2 text-sm font-semibold text-white hover:bg-white/10 rounded-lg transition-colors">Log In</a>
                        @endauth
                    </div>
                </nav>
            </header>

            <main class="flex flex-col gap-24 py-20 md:gap-32 md:py-24">
                
                <section id="home" class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center text-center lg:text-left">
                    <div data-aos="fade-right">
                        <h1 class="text-5xl lg:text-7xl font-bold text-white leading-tight">Sistem Parkir Generasi <span class="text-orange-500">Berikutnya</span></h1>
                        <p class="mt-6 text-lg text-gray-400 max-w-lg mx-auto lg:mx-0">Manajemen parkir terintegrasi yang menghadirkan efisiensi, keamanan, dan kemudahan akses bagi seluruh warga kampus.</p>
                        <div class="mt-10">
                            <a href="{{ url('/admin/register') }}" class="inline-block bg-orange-600 text-white py-4 px-8 rounded-lg font-semibold text-lg hover:bg-orange-700 transition-transform hover:scale-105">Daftar Sekarang</a>
                        </div>
                    </div>
                    <div class="flex items-center justify-center" data-aos="fade-left" data-aos-delay="200">
                        <img src="{{ asset('images/bg.jpg') }}" alt="Area Parkir Kampus" class="w-full rounded-2xl shadow-2xl border-4 border-gray-800 aspect-video object-cover">
                    </div>
                </section>

                <section id="layanan" class="text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-12" data-aos="fade-up">Fitur Utama Sistem Parkir</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="bg-gray-800/50 p-8 rounded-xl border border-gray-700" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-xl font-semibold text-orange-500">Manajemen Terpusat</h3>
                            <p class="mt-2 text-gray-400">Kelola beberapa area parkir di berbagai lokasi kampus dari satu dashboard yang intuitif.</p>
                        </div>
                        <div class="bg-gray-800/50 p-8 rounded-xl border border-gray-700" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="text-xl font-semibold text-orange-500">Keamanan & Pelacakan</h3>
                            <p class="mt-2 text-gray-400">Setiap transaksi dan data kendaraan tercatat dengan aman untuk meningkatkan keamanan.</p>
                        </div>
                        <div class="bg-gray-800/50 p-8 rounded-xl border border-gray-700" data-aos="fade-up" data-aos-delay="300">
                            <h3 class="text-xl font-semibold text-orange-500">Laporan Analitik</h3>
                            <p class="mt-2 text-gray-400">Dapatkan wawasan berharga dari data parkir untuk membantu Anda membuat keputusan.</p>
                        </div>
                    </div>
                </section>
                
                <section id="keunggulan" class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="text-center md:text-left" data-aos="fade-right">
                         <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Keunggulan Kompetitif</h2>
                         <ul class="space-y-4 text-lg text-gray-300">
                            <li class="flex items-start"><span class="text-orange-500 mr-3 mt-1">✓</span><span>Sistem berbasis web yang dapat diakses di mana saja.</span></li>
                            <li class="flex items-start"><span class="text-orange-500 mr-3 mt-1">✓</span><span>Manajemen peran pengguna yang fleksibel (Admin, Petugas, dll).</span></li>
                            <li class="flex items-start"><span class="text-orange-500 mr-3 mt-1">✓</span><span>Integrasi QR Code untuk proses check-in/out yang cepat.</span></li>
                            <li class="flex items-start"><span class="text-orange-500 mr-3 mt-1">✓</span><span>Dashboard analitik untuk memantau performa parkir.</span></li>
                         </ul>
                    </div>
                    <div class="flex items-center justify-center" data-aos="fade-left" data-aos-delay="200">
                         <img src="{{ asset('images/dasadmin.png') }}" alt="Tampilan Dashboard" class="w-full max-w-md rounded-xl shadow-lg border-2 border-gray-800">
                    </div>
                </section>

                <section id="statistik" class="w-full max-w-5xl mx-auto">
                     <div class="grid grid-cols-1 md:grid-cols-3 gap-8 bg-gray-800/50 py-12 px-8 rounded-2xl border border-gray-700">
                         <div class="text-center" data-aos="zoom-in">
                             <div class="text-5xl font-bold text-orange-500">{{ $kampusCount }}</div>
                             <p class="mt-2 text-lg text-white/70">Kampus Terhubung</p>
                         </div>
                         <div class="text-center" data-aos="zoom-in" data-aos-delay="100">
                             <div class="text-5xl font-bold text-orange-500">{{ $areaParkirCount }}</div>
                             <p class="mt-2 text-lg text-white/70">Total Area Parkir</p>
                         </div>
                         <div class="text-center" data-aos="zoom-in" data-aos-delay="200">
                             <div class="text-5xl font-bold text-orange-500">{{ number_format($transaksiCount, 0, ',', '.') }}</div>
                             <p class="mt-2 text-lg text-white/70">Transaksi Tercatat</p>
                         </div>
                     </div>
                </section>
                
                <section id="testimoni" class="text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-12" data-aos="fade-up">Apa Kata Mereka</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-4xl mx-auto">
                        <blockquote class="bg-gray-800/50 p-8 rounded-xl border border-gray-700" data-aos="fade-up" data-aos-delay="100">
                            <p class="text-lg">"Sistem ini mengubah total cara kami mengelola parkiran. Semuanya otomatis dan sangat efisien."</p>
                            <footer class="mt-4 text-sm text-gray-400 font-semibold">– Budi Santoso, Manajer Fasilitas</footer>
                        </blockquote>
                        <blockquote class="bg-gray-800/50 p-8 rounded-xl border border-gray-700" data-aos="fade-up" data-aos-delay="200">
                            <p class="text-lg">"Pekerjaan saya jadi jauh lebih cepat. Tidak perlu lagi tiket manual, semua tercatat di sistem. Sangat membantu di jam sibuk."</p>
                            <footer class="mt-4 text-sm text-gray-400 font-semibold">– Siti Aminah, Petugas Parkir</footer>
                        </blockquote>
                    </div>
                </section>

                
                <section id="faq" class="w-full max-w-4xl mx-auto py-16 md:py-24">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-3xl md:text-5xl font-bold text-white">
                            Pertanyaan yang Sering <span class="text-[#F65500]">Diajukan</span>
                        </h2>
                        <p class="mt-4 max-w-2xl mx-auto text-gray-300 dark:text-gray-400 text-lg">
                            Tidak menemukan jawaban Anda? Hubungi kami untuk informasi lebih lanjut.
                        </p>
                    </div>
                
                    <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
                        <div x-data="{ open: false }" class="bg-gray-800/50 p-8 rounded-xl border border-gray-700 shadow-sm overflow-hidden transition-all duration-300">
                            <button @click="open = !open" class="w-full flex justify-between items-center p-6 text-left text-xl font-semibold focus:outline-none hover:bg-black/5 dark:hover:bg-white/5">
                                <span class=" dark:text-white">Apakah sistem ini aman?</span>
                                <svg class="w-6 h-6 text-orange-500 shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 pb-6 text-gray-300 dark:text-gray-400">
                                <p>Tentu saja. Semua data transaksi dan kendaraan dienkripsi dan disimpan di server yang aman. Sistem kami juga mencatat setiap aktivitas untuk keperluan audit, memastikan tidak ada penyalahgunaan data.</p>
                            </div>
                        </div>
                
                        <div x-data="{ open: false }" class="bg-gray-800/50 p-8 rounded-xl border border-gray-700 shadow-sm overflow-hidden transition-all duration-300">
                            <button @click="open = !open" class="w-full flex justify-between items-center p-6 text-left text-xl font-semibold focus:outline-none hover:bg-black/5 dark:hover:bg-white/5">
                                <span class=" dark:text-white">Bagaimana proses implementasinya di kampus kami?</span>
                                <svg class="w-6 h-6 text-orange-500 shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 pb-6 text-gray-300 dark:text-gray-400">
                                <p>Tim kami akan bekerja sama dengan Anda. Prosesnya meliputi survei area, setup hardware (jika diperlukan), instalasi software, hingga pelatihan untuk admin dan petugas parkir Anda. Kami akan mendampingi Anda dari awal hingga sistem berjalan lancar.</p>
                            </div>
                        </div>
                
                        <div x-data="{ open: false }" class="bg-gray-800/50 p-8 rounded-xl border border-gray-700 shadow-sm overflow-hidden transition-all duration-300">
                            <button @click="open = !open" class="w-full flex justify-between items-center p-6 text-left text-xl font-semibold focus:outline-none hover:bg-black/5 dark:hover:bg-white/5">
                                <span class=" dark:text-white">Apakah bisa diintegrasikan dengan sistem kampus yang sudah ada?</span>
                                <svg class="w-6 h-6 text-orange-500 shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 pb-6 text-gray-300 dark:text-gray-400">
                                <p>Sangat bisa. Sistem kami dibangun dengan API yang fleksibel yang memungkinkan integrasi dengan sistem informasi akademik (SIAKAD) atau sistem gerbang otomatis yang mungkin sudah dimiliki oleh kampus Anda.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="tim" class="py-16 text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-12" data-aos="fade-up">Tim <span class="text-[#F65500]">Pengembang</span></h2>
                    <div class="flex flex-wrap justify-center gap-x-8 gap-y-12">
                        @php
                            $team = [
                                ['name' => 'Raka Dwi Randika', 'nim' => '0110224109', 'photo' => 'rakawi.png'],
                                ['name' => 'Rois Azzam Shiddiq', 'nim' => '0110224156', 'photo' => 'rois.jpg'],
                                ['name' => 'Anwar Maulana', 'nim' => '0110224020', 'photo' => 'anwar.jpg'],
                                ['name' => 'Rama Aditia', 'nim' => '0110224160', 'photo' => 'rama.jpg'],
                                ['name' => 'M. Rizqi Nurrohmat', 'nim' => '0110224001', 'photo' => 'rohmat.jpg'],
                            ];
                        @endphp
                        @foreach ($team as $index => $member)
                        <div class="text-center w-40" data-aos="zoom-in-up" data-aos-delay="{{ $index * 100 }}">
                            <img src="{{ asset('images/' . $member['photo']) }}" alt="Foto {{ $member['name'] }}" class="w-32 h-32 rounded-full object-cover mx-auto mb-4 border-4 border-gray-700">
                            <h3 class="font-semibold text-white">{{ $member['name'] }}</h3>
                            <p class="text-sm text-gray-500">{{ $member['nim'] }}</p>
                        </div>
                        @endforeach
                    </div>
               </section>
                
                
            </main>
        </div>

        <footer class="w-full border-t border-gray-800 mt-16"><div class="container mx-auto text-center py-6"><p class="text-sm text-gray-500">&copy; {{ date('Y') }} Parkir Kampus. Dibuat oleh Kelompok 3.</p></div></footer>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
                <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        // 3. Inisialisasi AOS
        AOS.init({
            duration: 800, // Durasi animasi dalam milidetik
            once: true,    // Animasi hanya berjalan sekali saat scroll
            offset: 100,   // Memicu animasi 100px sebelum elemen terlihat
        });
    </script>
</body>
</html>