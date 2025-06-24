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

    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>

<body class="w-full antialiased font-sans text-slate-800 dark:text-gray-300"
    x-data="{ openModal: false, selectedMember: null }">

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="fixed inset-0 bg-white dark:bg-black z-40 p-6 hidden md:hidden transition-all">
        <button id="mobile-menu-close" class="absolute top-4 right-4 text-orange-500 focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="flex flex-col items-center justify-center h-full space-y-6 text-lg font-semibold">
            <a href="#layanan"
                class="text-slate-800 dark:text-white hover:text-orange-500 transition-colors">Layanan</a>
            <a href="#keunggulan"
                class="text-slate-800 dark:text-white hover:text-orange-500 transition-colors">Keunggulan</a>
            <a href="#testimoni"
                class="text-slate-800 dark:text-white hover:text-orange-500 transition-colors">Testimoni</a>
            <a href="#faq" class="text-slate-800 dark:text-white hover:text-orange-500 transition-colors">FAQ</a>
            <a href="#tim" class="text-slate-800 dark:text-white hover:text-orange-500 transition-colors">Tim</a>

            @auth
                <a href="{{ url('/admin') }}"
                    class="px-5 py-2 text-sm font-semibold rounded-lg bg-gray-200 text-slate-900 hover:bg-gray-300 dark:bg-white/10 dark:text-white dark:hover:bg-white/20 transition-colors">
                    Dashboard
                </a>
            @else
                <a href="{{ url('/admin/login') }}"
                    class="px-5 py-2 text-sm font-bold rounded-lg bg-orange-500 hover:bg-orange-600 text-white dark:hover:bg-white/10 transition-colors">
                    Log In
                </a>
            @endauth
        </div>
    </div>


    <div class="fixed inset-0 -z-20">

        <div class="absolute inset-0 bg-gradient-to-b from-white via-orange-50 to-orange-100 dark:hidden"></div>

        <div class="absolute inset-0 hidden dark:block bg-gradient-to-b from-gray-900 via-zinc-900 to-[#F65500]/20">
        </div>

    </div>

    <div class="relative z-10">
    </div>

    <header class="w-full transition-all px-4 py-4 sticky top-0 z-50" data-aos="fade-down">
        <nav
            class="container mx-auto flex justify-between items-center bg-white/70 backdrop-blur-xl p-4 rounded-3xl border border-gray-200 shadow-lg dark:bg-black/30 dark:border-white/10">
            <a href="/">
                <img src="{{ asset('images/logolight.png') }}" alt="Logo Parkir Kampus"
                    class="h-18 w-auto block dark:hidden">

                <img src="{{ asset('images/logodark.png') }}" alt="Logo Parkir Kampus"
                    class="h-18 w-auto hidden dark:block">
            </a>
            <div class="hidden md:flex items-center space-x-8 font-semibold text-slate-800 dark:text-white">
                <a href="#layanan" class="hover:text-[#F65500] transition-colors">Layanan</a>
                <a href="#keunggulan" class="hover:text-[#F65500] transition-colors">Keunggulan</a>
                <a href="#testimoni" class="hover:text-[#F65500] transition-colors">Testimoni</a>
                <a href="#faq" class="hover:text-[#F65500] transition-colors">FAQ</a>
                <a href="#tim" class="hover:text-[#F65500] transition-colors">Tim</a>
            </div>

            <div class="flex items-center gap-3">
                <!-- Theme Toggle Button -->
                {{-- <button id="theme-toggle-button"
                    class="flex items-center justify-center w-10 h-10 rounded-lg bg-gray-200 dark:bg-white/10 hover:bg-gray-300 dark:hover:bg-white/20 transition-colors">
                    <!-- Sun Icon (Light Mode) -->
                    <svg id="theme-toggle-sun" class="h-5 w-5 text-slate-800 dark:hidden" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 3.25a.75.75 0 0 1 .75.75v1a.75.75 0 0 1-1.5 0v-1A.75.75 0 0 1 10 3.25Zm4.95 1.8a.75.75 0 0 1 1.05 1.05l-.7.7a.75.75 0 0 1-1.05-1.05l.7-.7ZM16.75 10a.75.75 0 0 1-.75.75h-1a.75.75 0 0 1 0-1.5h1a.75.75 0 0 1 .75.75Zm-2.55 5.2a.75.75 0 0 1-1.05 1.05l-.7-.7a.75.75 0 1 1 1.05-1.05l.7.7ZM10 15.75a.75.75 0 0 1 .75.75v1a.75.75 0 0 1-1.5 0v-1a.75.75 0 0 1 .75-.75ZM5.05 14.8l.7.7a.75.75 0 0 1-1.05 1.05l-.7-.7a.75.75 0 0 1 1.05-1.05ZM4.25 10a.75.75 0 0 1 .75-.75h1a.75.75 0 0 1 0 1.5h-1a.75.75 0 0 1-.75-.75ZM5.05 5.05a.75.75 0 0 1 1.05 0l.7.7A.75.75 0 0 1 5.75 6.8l-.7-.7a.75.75 0 0 1 0-1.05ZM10 6.25a3.75 3.75 0 1 1 0 7.5a3.75 3.75 0 0 1 0-7.5Z" />
                    </svg>

                    <!-- Moon Icon (Dark Mode) -->
                    <svg id="theme-toggle-moon" class="h-5 w-5 text-white hidden dark:block" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M17.293 13.293a8 8 0 0 1-10.586-10.586A8 8 0 1 0 17.293 13.293Z" />
                    </svg>
                </button> --}}

                <div class="hidden sm:flex items-center gap-2 mr-3">
                    @auth
                        <a href="{{ url('/admin') }}"
                            class="px-5 py-2 text-sm font-semibold rounded-lg bg-gray-200 text-slate-900 hover:bg-gray-300 dark:bg-white/10 dark:text-white dark:hover:bg-white/20 transition-colors">Dashboard</a>
                    @else
                        <a href="{{ url('/admin/login') }}"
                            class="px-5 py-2 text-sm font-bold rounded-lg bg-orange-500 hover:bg-orange-600 text-white dark:hover:bg-white/10 transition-colors">Log
                            In</a>
                    @endauth
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-button"
                        class="focus:outline-none w-10 h-10 flex items-center justify-center">
                        <svg class="h-6 w-6 text-slate-800 dark:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

            </div>
        </nav>
    </header>
    <!-- Mobile Slide Menu -->
    <div id="mobile-menu"
        class="fixed top-0 right-0 h-full w-64 bg-white dark:bg-black shadow-lg z-40 transform translate-x-full transition-transform duration-300 md:hidden">

        <button id="mobile-menu-close" class="absolute top-4 right-4 text-orange-500 focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="flex flex-col items-start p-6 pt-16 space-y-6 text-lg font-semibold">
            <a href="#layanan"
                class="text-slate-800 dark:text-white hover:text-orange-500 transition-colors">Layanan</a>
            <a href="#keunggulan"
                class="text-slate-800 dark:text-white hover:text-orange-500 transition-colors">Keunggulan</a>
            <a href="#testimoni"
                class="text-slate-800 dark:text-white hover:text-orange-500 transition-colors">Testimoni</a>
            <a href="#faq" class="text-slate-800 dark:text-white hover:text-orange-500 transition-colors">FAQ</a>
            <a href="#tim" class="text-slate-800 dark:text-white hover:text-orange-500 transition-colors">Tim</a>

            @auth
                <a href="{{ url('/admin') }}"
                    class="px-5 py-2 text-sm font-semibold rounded-lg bg-gray-200 text-slate-900 hover:bg-gray-300 dark:bg-white/10 dark:text-white dark:hover:bg-white/20 transition-colors">
                    Dashboard
                </a>
            @else
                <a href="{{ url('/admin/login') }}"
                    class="px-5 py-2 text-sm font-bold rounded-lg bg-orange-500 hover:bg-orange-600 text-white dark:hover:bg-white/10 transition-colors">
                    Log In
                </a>
            @endauth
        </div>
    </div>

    <main class="container mx-auto px-4 md:px-8 flex flex-col gap-24 pt-8 pb-24 md:gap-32 md:pt-12 md:pb-32">
        @include('partials.home')
        @include('partials.layanan')
        @include('partials.keunggulan')
        @include('partials.statistik')
        @include('partials.testimoni')
        @include('partials.faq')
        @include('partials.tim')
        @include('partials.cta')
    </main>
    <div x-show="openModal" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 flex items-center justify-center px-4 sm:px-6 lg:px-8 py-8 backdrop-blur"
        style="display: none;">

        <!-- Background Blur -->
        <div @click="openModal = false"
            class="absolute inset-0 bg-gradient-to-br from-black/60 via-zinc-900/70 to-zinc-800/60 backdrop-blur-sm">
        </div>

        <!-- Modal Content -->
        <div @click.away="openModal = false" x-show="openModal" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="relative w-full max-w-3xl bg-white/90 dark:bg-zinc-800/70 backdrop-blur-xl border border-white/20 dark:border-zinc-600 rounded-3xl shadow-2xl overflow-hidden">

            <!-- Header Decorative Bar -->
            <div
                class="h-28 bg-gradient-to-r from-orange-400 via-orange-500 to-orange-600 dark:from-orange-600 dark:to-orange-400 shadow-md">
            </div>

            <!-- Content Area -->
            <div class="p-8 relative z-10">
                <!-- Profile Section -->
                <div class="flex items-end gap-6 -mt-20">
                    <img :src="selectedMember ? '/images/' + selectedMember.photo : ''" alt="Foto Profil"
                        class="w-32 h-32 rounded-full border-4 border-white dark:border-zinc-700 shadow-lg object-cover ring-4 ring-orange-500/30">
                    <div>
                        <h3 x-text="selectedMember ? selectedMember.name : ''"
                            class="text-3xl font-bold text-slate-900 dark:text-white"></h3>
                        <p x-text="selectedMember ? selectedMember.role : ''"
                            class="text-orange-500 font-semibold text-base"></p>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6 items-start">
                    <!-- Quote -->
                    <blockquote
                        class="md:col-span-2 border-l-4 border-orange-500 pl-5 italic text-gray-700 dark:text-gray-300">
                        <p x-text="selectedMember ? '“' + selectedMember.quote + '”' : ''"></p>
                        <footer x-text="selectedMember ? selectedMember.nim : ''"
                            class="mt-3 text-sm text-gray-500 dark:text-gray-400"></footer>
                    </blockquote>

                    <!-- Social Links -->
                    <div class="flex md:justify-end items-center gap-4 mt-4 md:mt-0">
                        <!-- LinkedIn -->
                        <a :href="selectedMember ? selectedMember.linkedin : '#'" target="_blank"
                            class="text-gray-400 hover:text-orange-500 transition-all duration-300 hover:scale-110">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>

                        <!-- GitHub -->
                        <a :href="selectedMember ? selectedMember.github : ''" target="_blank"
                            class="text-gray-400 hover:text-orange-500 transition-all duration-300 hover:scale-110">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Close Button -->
            <button @click="openModal = false"
                class="absolute top-4 right-4 text-gray-400 hover:text-orange-500 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>


    <footer class="w-full border-t border-gray-200 dark:border-white/10 mt-16">
        <div class="container mx-auto text-center py-6">
            <p class="text-sm text-gray-500 dark:text-gray-400">&copy; {{ date('Y') }} Parkir Kampus. Dibuat oleh
                Kelompok 11.</p>
        </div>
    </footer>


    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.8.1/dist/vanilla-tilt.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></>
            <script src="https://cdn.jsdelivr.net/npm/countup.js@2.8.0/dist/countUp.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
                                                                  document.addEventListener('DOMContentLoaded', function () {
                                                                      // ... (kode untuk Dark Mode, AOS, Menu Mobile, CountUp) ...

                                                                      // --- TAMBAHKAN BLOK INI ---
                                                                      // Inisialisasi Efek 3D Tilt pada Kartu
                                                                      VanillaTilt.init(document.querySelectorAll(".tilt-card"), {
                                                                          max: 15,     // Kemiringan maksimal (derajat)
                                                                          speed: 400,  // Kecepatan transisi
                                                                          glare: true, // Tambahkan efek kilau cahaya
                                                                          "max-glare": 0.5, // Intensitas kilau
                                                                      });
            // --- AKHIR BLOK 3D TILT ---
        });
    </script>
    <script>
                                                                  document.addEventListener('DOMContentLoaded', function () {

            // --- LOGIKA DARK MODE YANG DIPERBAIKI ---
            const themeToggleButton = document.getElementById('theme-toggle-button'); // <-- ID yang benar
                                                                  const sunIcon = document.getElementById('theme-toggle-sun');
                                                                  const moonIcon = document.getElementById('theme-toggle-moon');

            const updateIcons = (isDark) => {
                if (sunIcon && moonIcon) {
                                                                      sunIcon.style.display = isDark ? 'none' : 'block';
                                                                  moonIcon.style.display = isDark ? 'block' : 'none';
                }
            };

            // Panggil saat load untuk sinkronisasi ikon dengan tema awal dari <head>
                                                                      updateIcons(document.documentElement.classList.contains('dark'));

                                                                      // Tambahkan fungsi klik pada tombol
                                                                      if (themeToggleButton) {
                                                                          themeToggleButton.addEventListener('click', () => {
                                                                              const isDark = document.documentElement.classList.toggle('dark');
                                                                              localStorage.setItem('theme', isDark ? 'dark' : 'light');
                                                                              updateIcons(isDark);
                                                                          });
            }
                                                                      // --- AKHIR LOGIKA DARK MODE ---


                                                                      // --- LOGIKA LAINNYA (TIDAK BERUBAH) ---

                                                                      // Inisialisasi AOS (Animasi on Scroll)
                                                                      AOS.init({
                                                                          duration: 800,
                                                                      once: true,
                                                                      offset: 50,
            });

                                                                      // Toggle Menu Mobile
                                                                      const mobileMenuButton = document.getElementById('mobile-menu-button');
                                                                      const mobileMenu = document.getElementById('mobile-menu');
                                                                      if (mobileMenuButton && mobileMenu) {
                                                                          mobileMenuButton.addEventListener('click', () => {
                                                                              mobileMenu.classList.toggle('hidden');
                                                                          });
            }

                                                                      // Animasi Angka Statistik
                                                                      const counters = document.querySelectorAll('.counter');
            const observer = new IntersectionObserver((entries, observer) => {
                                                                          entries.forEach(entry => {
                                                                              if (entry.isIntersecting) {
                                                                                  const el = entry.target;
                                                                                  const target = el.getAttribute('data-target').replace(/\./g, '');
                                                                                  const countUp = new CountUp(el, target, {
                                                                                      duration: 2.5,
                                                                                      separator: '.',
                                                                                  });
                                                                                  if (!countUp.error) {
                                                                                      countUp.start();
                                                                                  } else {
                                                                                      console.error(countUp.error);
                                                                                      el.textContent = el.getAttribute('data-target');
                                                                                  }
                                                                                  observer.unobserve(el);
                                                                              }
                                                                          });
            }, {
                                                                          threshold: 0.1
            });
            counters.forEach(counter => {
                                                                          observer.observe(counter);
            });
        });
    </script>
    <script>
                                                                      const menu = document.getElementById('mobile-menu');
                                                                      const openBtn = document.getElementById('mobile-menu-button');
                                                                      const closeBtn = document.getElementById('mobile-menu-close');

        openBtn?.addEventListener('click', () => {
                                                                          menu.classList.remove('translate-x-full');
                                                                      menu.classList.add('translate-x-0');
        });

        closeBtn?.addEventListener('click', () => {
                                                                          menu.classList.remove('translate-x-0');
                                                                      menu.classList.add('translate-x-full');
        });
    </script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>
