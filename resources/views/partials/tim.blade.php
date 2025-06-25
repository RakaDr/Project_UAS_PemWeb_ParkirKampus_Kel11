<section id="tim" class="py-16 md:py-24">
    <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-3xl md:text-5xl font-bold text-slate-900 dark:text-white">Dibuat oleh <span
                class="text-orange-500">Developer Terbaik</span></h2>
        <p class="mt-4 max-w-2xl mx-auto text-slate-600 dark:text-gray-400 text-lg">
            Sebuah kolaborasi dari kelompok 11 untuk menghadirkan solusi inovatif.
        </p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-8" style="perspective: 2000px;">

        @php

            $team = [
                [
                    'name' => 'Raka Dwi Randika',
                    'nim' => '0110224109',
                    'photo' => 'rakawi.jpg',
                    'role' => 'Project Manager & Backend Developer',
                    'quote' => 'Membangun fondasi yang kuat untuk sistem yang andal.',
                    'linkedin' => 'https://www.linkedin.com/in/raka-dwi-randika-a856b433a/',
                    'github' => 'https://github.com/RakaDr'

                ],
                [
                    'name' => 'Rois Azzam Shiddiq',
                    'nim' => '0110224156',
                    'photo' => 'rois.jpg',
                    'role' => 'Frontend Developer & UI/UX Designer',
                    'quote' => 'Fokus pada detail kecil yang menciptakan pengalaman pengguna luar biasa.',
                    'linkedin' => 'https://www.linkedin.com/in/rois-azzam-shiddiq-73a81735a/',
                    'github' => 'https://github.com/Roisazzshid'
                ],
                [
                    'name' => 'Anwar Maulana',
                    'nim' => '0110224020',
                    'photo' => 'anwar.jpg',
                    'role' => 'Full-Stack Developer',
                    'quote' => 'Menghubungkan logika backend dengan antarmuka yang fungsional.'
                ],
                [
                    'name' => 'Rama Aditia',
                    'nim' => '0110224160',
                    'photo' => 'rama.jpg',
                    'role' => 'Database & System Analyst',
                    'quote' => 'Data adalah aset. Merancangnya dengan benar adalah kunci.'
                ],
                [
                    'name' => 'M. Rizqi Nurrohmat',
                    'nim' => '0110224001',
                    'photo' => 'rohmat.jpg',
                    'role' => 'QA & System Tester',
                    'quote' => 'Memastikan setiap fitur berjalan sempurna sebelum sampai ke pengguna.'
                ],
            ];

        @endphp

        @foreach ($team as $index => $member)
            <button @click="selectedMember = {{ json_encode($member) }}; openModal = true" data-aos="zoom-in-up"
                data-aos-delay="{{ $index * 100 }}" class="tilt-card group relative aspect-[2/3] w-full rounded-3xl overflow-hidden text-left
                   border border-gray-300 dark:border-white/10
                   shadow-xl shadow-black/10 dark:shadow-black/50
                   hover:shadow-2xl hover:shadow-orange-500/30
                   transition-all duration-500 ease-in-out" style="transform-style: preserve-3d;">

                <img src="{{ asset('images/' . $member['photo']) }}" alt="Foto {{ $member['name'] }}"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                <div class="absolute inset-0 w-full h-full bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                </div>

                <div class="relative z-10 flex flex-col justify-end h-full p-4 transition-transform duration-300 ease-in-out group-hover:-translate-y-2"
                    style="transform: translateZ(20px);">
                    <div>
                        <h3 class="font-bold text-sm text-white leading-tight shadow-black/50 text-shadow">
                            {{ $member['name'] }}
                        </h3>
                        <p class="text-xs text-white/60 tracking-wider">{{ $member['nim'] }}</p>
                    </div>
                </div>
            </button>
        @endforeach
    </div>
</section>
