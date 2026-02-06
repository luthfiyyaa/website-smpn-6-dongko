@extends('layouts.app')

@section('title', 'Akademik - SMPN 6 Dongko')
@section('description', 'Jelajahi program akademik, kurikulum merdeka, dan kegiatan ekstrakurikuler kami yang komprehensif.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-block bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full mb-6">
            <span class="flex items-center gap-2">
                <i class="fa-solid fa-paperclip"></i>
                Informasi Akademik
            </span>
        </div>
        <h1 class="text-white mb-6 text-4xl md:text-5xl font-bold">Akademik</h1>
        <p class="text-xl text-white/90 max-w-3xl mx-auto">
            SMP Negeri 6 Dongko Satu Atap menerapkan Kurikulum Merdeka yang memberikan fleksibilitas dan berfokus pada materi esensial untuk mengembangkan kompetensi peserta didik.
        </p>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <!-- Kurikulum Merdeka Section -->
    <section class="mb-32">
        <h2 class="text-3xl font-bold text-center mb-4">Kurikulum Merdeka</h2>
        <p class="text-center text-gray-600 mb-16 max-w-3xl mx-auto">
            Kurikulum yang memberi fleksibilitas dan berfokus pada pengembangan karakter Pelajar Pancasila
        </p>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="bg-gradient-to-br from-blue-500 to-blue-700 p-8 text-white">
                    <i class="fas fa-book-open text-5xl mb-6"></i>
                    <h3 class="text-2xl font-bold text-white mb-3">Intrakurikuler</h3>
                </div>
                <div class="p-8">
                    <p class="leading-relaxed text-gray-700 mb-4">
                        Pembelajaran berbasis literasi dengan mengangkat nilai luhur budaya lokal dan mengacu pada Capaian Pembelajaran Fase D.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-blue-500 mt-1"></i>
                            <span>Kelas VII & VIII: 1116 JP/tahun</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-blue-500 mt-1"></i>
                            <span>Kelas IX: 992 JP/tahun</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="bg-gradient-to-br from-green-500 to-green-700 p-8 text-white">
                    <i class="fas fa-project-diagram text-5xl mb-6"></i>
                    <h3 class="text-2xl font-bold text-white mb-3">Kokurikuler (P5)</h3>
                </div>
                <div class="p-8">
                    <p class="leading-relaxed text-gray-700 mb-4">
                        Projek Penguatan Profil Pelajar Pancasila untuk mendalami dan menghayati materi pembelajaran.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Kelas VII & VIII: 360 JP/tahun</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Kelas IX: 320 JP/tahun</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="bg-gradient-to-br from-purple-500 to-purple-700 p-8 text-white">
                    <i class="fas fa-users text-5xl mb-6"></i>
                    <h3 class="text-2xl font-bold text-white mb-3">Pendidikan Inklusi</h3>
                </div>
                <div class="p-8">
                    <p class="leading-relaxed text-gray-700 mb-4">
                        Menyelenggarakan pendidikan inklusi untuk memberikan kesempatan yang sama bagi semua peserta didik.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-purple-500 mt-1"></i>
                            <span>Pembelajaran inklusif dan ramah</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Struktur Kurikulum -->
    <section class="mb-32">
        <h2 class="text-3xl font-bold text-center mb-16">Struktur Kurikulum Intrakurikuler</h2>
        
        <!-- Tabs untuk Kelas 7-8 dan Kelas 9 -->
        <div class="mb-8">
            <div class="flex justify-center gap-4 mb-8">
                <button class="tab-btn active px-8 py-3 rounded-lg font-semibold bg-blue-600 text-white hover:bg-blue-700 transition" onclick="showTab('kelas78')">
                    Kelas VII & VIII
                </button>
                <button class="tab-btn px-8 py-3 rounded-lg font-semibold bg-gray-200 text-gray-700 hover:bg-gray-300 transition" onclick="showTab('kelas9')">
                    Kelas IX
                </button>
            </div>
        </div>

        <!-- Tabel Kelas 7-8 -->
        <div id="kelas78" class="tab-content bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gradient-to-r from-blue-600 to-blue-700 text-white">
                        <tr>
                            <th class="px-6 py-4 text-left">No</th>
                            <th class="px-6 py-4 text-left">Mata Pelajaran</th>
                            <th class="px-6 py-4 text-center">Intrakurikuler/Tahun</th>
                            <th class="px-6 py-4 text-center">Alokasi P5</th>
                            <th class="px-6 py-4 text-center">Total JP/Tahun</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @php
                            $mapel78 = [
                                ['Pendidikan Agama dan Budi Pekerti', '72 (2)', '36', '108'],
                                ['Pendidikan Pancasila', '72 (2)', '36', '108'],
                                ['Bahasa Indonesia', '180 (5)', '36', '216'],
                                ['Matematika', '144 (4)', '36', '180'],
                                ['IPA', '144 (4)', '36', '180'],
                                ['IPS', '108 (3)', '36', '144'],
                                ['Bahasa Inggris', '108 (3)', '36', '144'],
                                ['PJOK', '72 (2)', '36', '108'],
                                ['Informatika', '72 (2)', '36', '108'],
                                ['Mapel Pilihan (Seni Tari)', '72 (2)', '36', '108'],
                                ['Mulok (Bahasa Jawa)', '72 (2)', '-', '108']
                            ];
                        @endphp
                        @foreach($mapel78 as $index => $mapel)
                            <tr class="hover:bg-blue-50 transition">
                                <td class="px-6 py-4 font-semibold">{{ $index + 1 }}</td>
                                <td class="px-6 py-4">{{ $mapel[0] }}</td>
                                <td class="px-6 py-4 text-center">{{ $mapel[1] }}</td>
                                <td class="px-6 py-4 text-center">{{ $mapel[2] }}</td>
                                <td class="px-6 py-4 text-center font-semibold">{{ $mapel[3] }}</td>
                            </tr>
                        @endforeach
                        <tr class="bg-blue-100 font-bold">
                            <td colspan="2" class="px-6 py-4">JUMLAH</td>
                            <td class="px-6 py-4 text-center">1116 (31)</td>
                            <td class="px-6 py-4 text-center">360</td>
                            <td class="px-6 py-4 text-center">1476</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bg-blue-50 p-6 text-sm text-gray-700">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                <strong>Keterangan:</strong> Angka dalam kurung menunjukkan alokasi per minggu. 36 minggu/tahun, 1 JP = 40 menit.
            </div>
        </div>

        <!-- Tabel Kelas 9 -->
        <div id="kelas9" class="tab-content hidden bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gradient-to-r from-green-600 to-green-700 text-white">
                        <tr>
                            <th class="px-6 py-4 text-left">No</th>
                            <th class="px-6 py-4 text-left">Mata Pelajaran</th>
                            <th class="px-6 py-4 text-center">Intrakurikuler/Tahun</th>
                            <th class="px-6 py-4 text-center">Alokasi P5</th>
                            <th class="px-6 py-4 text-center">Total JP/Tahun</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @php
                            $mapel9 = [
                                ['Pendidikan Agama dan Budi Pekerti', '64 (2)', '32', '96'],
                                ['Pendidikan Pancasila', '64 (2)', '32', '96'],
                                ['Bahasa Indonesia', '160 (5)', '32', '192'],
                                ['Matematika', '128 (4)', '32', '160'],
                                ['IPA', '128 (4)', '32', '160'],
                                ['IPS', '96 (3)', '32', '128'],
                                ['Bahasa Inggris', '96 (3)', '32', '128'],
                                ['PJOK', '64 (2)', '32', '96'],
                                ['Informatika', '64 (2)', '32', '96'],
                                ['Mapel Pilihan (Prakarya Pengolahan)', '64 (2)', '32', '96'],
                                ['Mulok (Bahasa Jawa)', '64 (2)', '-', '64']
                            ];
                        @endphp
                        @foreach($mapel9 as $index => $mapel)
                            <tr class="hover:bg-green-50 transition">
                                <td class="px-6 py-4 font-semibold">{{ $index + 1 }}</td>
                                <td class="px-6 py-4">{{ $mapel[0] }}</td>
                                <td class="px-6 py-4 text-center">{{ $mapel[1] }}</td>
                                <td class="px-6 py-4 text-center">{{ $mapel[2] }}</td>
                                <td class="px-6 py-4 text-center font-semibold">{{ $mapel[3] }}</td>
                            </tr>
                        @endforeach
                        <tr class="bg-green-100 font-bold">
                            <td colspan="2" class="px-6 py-4">JUMLAH</td>
                            <td class="px-6 py-4 text-center">992</td>
                            <td class="px-6 py-4 text-center">320</td>
                            <td class="px-6 py-4 text-center">1312</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bg-green-50 p-6 text-sm text-gray-700">
                <i class="fas fa-info-circle text-green-600 mr-2"></i>
                <strong>Keterangan:</strong> Angka dalam kurung menunjukkan alokasi per minggu. 32 minggu/tahun, 1 JP = 40 menit.
            </div>
        </div>
    </section>

    <!-- Tema P5 -->
    <section class="mb-32">
        <h2 class="text-3xl font-bold text-center mb-6">Tema Projek Penguatan Profil Pelajar Pancasila</h2>
        <p class="text-center text-gray-600 mb-12 max-w-3xl mx-auto">
            Dilaksanakan setiap hari Rabu, Kamis, Jumat, dan Sabtu. Peserta didik menyelesaikan 3 tema dalam 1 tahun.
        </p>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['icon' => 'leaf', 'title' => 'Gaya Hidup Berkelanjutan', 'color' => 'green'],
                ['icon' => 'landmark', 'title' => 'Kearifan Lokal', 'color' => 'amber'],
                ['icon' => 'globe', 'title' => 'Bhinneka Tunggal Ika', 'color' => 'red'],
                ['icon' => 'heartbeat', 'title' => 'Bangunlah Jiwa Raganya', 'color' => 'blue'],
                ['icon' => 'vote-yea', 'title' => 'Suara Demokrasi', 'color' => 'indigo'],
                ['icon' => 'briefcase', 'title' => 'Kewirausahaan', 'color' => 'purple'],
                ['icon' => 'cogs', 'title' => 'Rekayasa dan Teknologi', 'color' => 'gray']
            ] as $tema)
                <div class="bg-white rounded-xl shadow-md p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-{{ $tema['color'] }}-500">
                    <div class="bg-{{ $tema['color'] }}-100 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-{{ $tema['icon'] }} text-2xl text-{{ $tema['color'] }}-600"></i>
                    </div>
                    <h4 class="text-center font-semibold text-gray-800">{{ $tema['title'] }}</h4>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Program Unggulan -->
    <section class="mb-32">
        <h2 class="text-3xl font-bold text-center mb-6">Program Unggulan</h2>
        <p class="text-center text-gray-600 mb-12 max-w-3xl mx-auto">
            Program-program inovatif yang dirancang untuk meningkatkan mutu dan karakter peserta didik
        </p>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach([
                [
                    'icon' => 'mosque',
                    'title' => 'Taman Shurga',
                    'subtitle' => 'Sholat Dhuhur Berjamaah',
                    'description' => 'Kegiatan sholat dhuhur berjamaah bersama murid, guru, dan tenaga administrasi untuk meningkatkan ketakwaan.',
                    'schedule' => 'Senin - Sabtu',
                    'color' => 'blue',
                    'highlights' => ['Meningkatkan ketakwaan', 'Melatih kepercayaan diri', 'Tanggung jawab beragama']
                ],
                [
                    'icon' => 'book-quran',
                    'title' => 'Jumanji',
                    'subtitle' => 'Jumat Mengaji',
                    'description' => 'Membaca surah Yasin setiap Jumat pagi sebelum pembelajaran dimulai.',
                    'schedule' => 'Jumat Pagi',
                    'color' => 'green',
                    'highlights' => ['Meningkatkan ketakwaan', 'Melancarkan bacaan Yasin', 'Literasi Al-Quran']
                ],
                [
                    'icon' => 'apple-alt',
                    'title' => 'Sensazi',
                    'subtitle' => 'Sarapan Sehat Bergizi',
                    'description' => 'Kegiatan sarapan makanan sehat bergizi setiap Sabtu pagi setelah senam bersama.',
                    'schedule' => 'Sabtu Pagi',
                    'color' => 'red',
                    'highlights' => ['Membiasakan sarapan sehat', 'Berbagi dengan teman', 'Kesehatan jasmani']
                ],
                [
                    'icon' => 'running',
                    'title' => 'Saber',
                    'subtitle' => 'Senam Bersama',
                    'description' => 'Senam bersama setiap Sabtu pagi untuk meningkatkan kesehatan jasmani dan kolaborasi.',
                    'schedule' => 'Sabtu Pagi',
                    'color' => 'orange',
                    'highlights' => ['Kesehatan jasmani', 'Kolaborasi siswa', 'Kreativitas gerakan']
                ],
                [
                    'icon' => 'book-reader',
                    'title' => 'Bali Mesem',
                    'subtitle' => 'Baca 15 Menit Sebelum Masuk',
                    'description' => 'Membaca 15 menit sebelum kegiatan pembelajaran untuk meningkatkan literasi dan minat baca.',
                    'schedule' => 'Setiap Hari',
                    'color' => 'purple',
                    'highlights' => ['Meningkatkan minat baca', 'Menambah kosakata', 'Berpikir kritis']
                ],
                [
                    'icon' => 'drum',
                    'title' => 'Miska',
                    'subtitle' => 'Kamis Karawitan',
                    'description' => 'Kegiatan karawitan setiap Kamis untuk melestarikan kebudayaan tradisional.',
                    'schedule' => 'Kamis',
                    'color' => 'amber',
                    'highlights' => ['Melestarikan budaya', 'Bangga budaya sendiri', 'Kerjasama tim']
                ]
            ] as $program)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-br from-{{ $program['color'] }}-500 to-{{ $program['color'] }}-700 p-6 text-white">
                        <div class="flex items-center gap-4 mb-3">
                            <div class="bg-white/20 p-3 rounded-lg">
                                <i class="fas fa-{{ $program['icon'] }} text-3xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white">{{ $program['title'] }}</h3>
                                <p class="text-sm opacity-90">{{ $program['subtitle'] }}</p>
                            </div>
                        </div>
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg px-3 py-2 inline-block">
                            <i class="fas fa-clock mr-2"></i>
                            <span class="text-sm">{{ $program['schedule'] }}</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 mb-4 leading-relaxed">{{ $program['description'] }}</p>
                        <div class="border-t border-gray-200 pt-4">
                            <p class="text-sm font-semibold text-gray-800 mb-3">Manfaat:</p>
                            <ul class="space-y-2">
                                @foreach($program['highlights'] as $highlight)
                                    <li class="text-sm text-gray-600 flex items-start gap-2">
                                        <i class="fas fa-check-circle text-{{ $program['color'] }}-500 mt-1"></i>
                                        <span>{{ $highlight }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Profil Pelajar Pancasila -->
    <section class="mb-32">
        <div class="bg-gradient-to-r from-red-600 via-white to-red-600 rounded-3xl p-12 shadow-2xl">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-900">Profil Pelajar Pancasila</h2>
            <p class="text-center text-gray-700 mb-12 max-w-3xl mx-auto">
                Ciri-ciri peserta didik berkarakter yang dikembangkan melalui Projek Penguatan Profil Pelajar Pancasila
            </p>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach([
                    ['icon' => 'praying-hands', 'title' => 'Beriman & Bertakwa', 'color' => 'blue'],
                    ['icon' => 'hands-helping', 'title' => 'Bergotong Royong', 'color' => 'green'],
                    ['icon' => 'brain', 'title' => 'Bernalar Kritis', 'color' => 'purple'],
                    ['icon' => 'globe-asia', 'title' => 'Berkebinekaan Global', 'color' => 'red'],
                    ['icon' => 'user-graduate', 'title' => 'Mandiri', 'color' => 'orange'],
                    ['icon' => 'lightbulb', 'title' => 'Kreatif', 'color' => 'yellow']
                ] as $profil)
                    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <div class="bg-{{ $profil['color'] }}-100 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
                            <i class="fas fa-{{ $profil['icon'] }} text-2xl text-{{ $profil['color'] }}-600"></i>
                        </div>
                        <h4 class="text-center font-bold text-gray-800">{{ $profil['title'] }}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Ekstrakurikuler -->
    <section class="mb-0">
        <h2 class="text-3xl font-bold text-center mb-6">Kegiatan Ekstrakurikuler</h2>
        <p class="text-center text-gray-600 mb-12 max-w-3xl mx-auto leading-relaxed">
            Kegiatan ekstrakurikuler dikembangkan dan diselenggarakan sesuai bakat dan minat peserta didik. 
            Peserta didik bebas memilih kegiatan ekstrakurikuler yang disenangi untuk menggali potensi diri.
        </p>

        <!-- Ekstrakurikuler Cards -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            @foreach([
                [
                    'icon' => 'medkit',
                    'name' => 'PMR',
                    'fullname' => 'Palang Merah Remaja',
                    'pembimbing' => 'Fifie Linggamsari, S.Pd',
                    'color' => 'red',
                    'description' => 'Melatih kepedulian sosial dan keterampilan pertolongan pertama'
                ],
                [
                    'icon' => 'user-ninja',
                    'name' => 'Tari',
                    'fullname' => 'Seni Tari Tradisional',
                    'pembimbing' => 'Fifie Linggamsari, S.Pd',
                    'color' => 'pink',
                    'description' => 'Mengembangkan bakat seni tari dan melestarikan budaya'
                ],
                [
                    'icon' => 'palette',
                    'name' => 'Batik',
                    'fullname' => 'Seni Batik',
                    'pembimbing' => 'Mela Kusumawardhani, S.Pd',
                    'color' => 'amber',
                    'description' => 'Melestarikan warisan budaya batik Indonesia'
                ],
                [
                    'icon' => 'robot',
                    'name' => 'Robotik',
                    'fullname' => 'Robotika & Teknologi',
                    'pembimbing' => 'Janjang Tulus Pambudi, S.Pd',
                    'color' => 'blue',
                    'description' => 'Mengembangkan kreativitas di bidang teknologi dan robotika'
                ],
                [
                    'icon' => 'music',
                    'name' => 'Hadrah',
                    'fullname' => 'Seni Musik Hadrah',
                    'pembimbing' => 'Agus Budiono, S.Pd',
                    'color' => 'green',
                    'description' => 'Mempelajari seni musik islami tradisional'
                ],
                [
                    'icon' => 'drum',
                    'name' => 'Drumbband',
                    'fullname' => 'Marching Band',
                    'pembimbing' => 'Janjang Tulus Pambudi, S.Pd',
                    'color' => 'orange',
                    'description' => 'Melatih kekompakan dan keterampilan bermusik'
                ],
                [
                    'icon' => 'guitar',
                    'name' => 'Karawitan',
                    'fullname' => 'Gamelan Jawa',
                    'pembimbing' => 'Fifie Linggamsari, S.Pd',
                    'color' => 'yellow',
                    'description' => 'Melestarikan musik tradisional Jawa'
                ],
                [
                    'icon' => 'book-open',
                    'name' => 'SKI',
                    'fullname' => 'Sejarah Kebudayaan Islam',
                    'pembimbing' => 'Befika Noviandini, S.Pd',
                    'color' => 'teal',
                    'description' => 'Memperdalam pengetahuan sejarah dan kebudayaan Islam'
                ],
                [
                    'icon' => 'campground',
                    'name' => 'Pramuka',
                    'fullname' => 'Gerakan Pramuka',
                    'pembimbing' => 'Mela Kusumawardhani, S.Pd & Candra Setiawan, S.Pd',
                    'color' => 'green',
                    'description' => 'Membentuk karakter kepemimpinan dan kemandirian'
                ],
                [
                    'icon' => 'volleyball-ball',
                    'name' => 'Olahraga',
                    'fullname' => 'Olahraga & Kesehatan',
                    'pembimbing' => 'Candra Setiawan, S.Pd',
                    'color' => 'indigo',
                    'description' => 'Mengembangkan kebugaran jasmani dan prestasi olahraga'
                ]
            ] as $ekstra)
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-br from-{{ $ekstra['color'] }}-500 to-{{ $ekstra['color'] }}-700 p-6 text-white">
                        <div class="flex items-center gap-4">
                            <div class="bg-white/20 backdrop-blur-sm p-4 rounded-lg">
                                <i class="fas fa-{{ $ekstra['icon'] }} text-3xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-white mb-1">{{ $ekstra['name'] }}</h3>
                                <p class="text-sm opacity-90">{{ $ekstra['fullname'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 mb-4 leading-relaxed text-sm">{{ $ekstra['description'] }}</p>
                        <div class="border-t border-gray-200 pt-4">
                            <div class="flex items-center gap-3">
                                <div class="bg-{{ $ekstra['color'] }}-100 p-2 rounded-lg">
                                    <i class="fas fa-chalkboard-teacher text-{{ $ekstra['color'] }}-600"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-xs text-gray-500 mb-1">Pembimbing</p>
                                    <p class="text-sm font-semibold text-gray-800">{{ $ekstra['pembimbing'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Info Box -->
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8 border-l-4 border-blue-600">
            <div class="flex items-start gap-4">
                <div class="bg-blue-600 p-3 rounded-lg">
                    <i class="fas fa-info-circle text-2xl text-white"></i>
                </div>
                <div class="flex-1">
                    <h4 class="font-bold text-gray-900 mb-2">Informasi Kegiatan Ekstrakurikuler</h4>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                            <span>Alokasi waktu setara dengan 2 jam pelajaran</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                            <span>Dilaksanakan pada siang/sore hari</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                            <span>Peserta didik bebas memilih sesuai minat dan bakat</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                            <span>Kegiatan bersifat dinamis sesuai input dan bakat minat peserta didik</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

@push('scripts')
<script>
function showTab(tabId) {
    // Hide all tabs
    document.querySelectorAll('.tab-content').forEach(tab => {
        tab.classList.add('hidden');
    });
    
    // Remove active class from all buttons
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('bg-blue-600', 'text-white');
        btn.classList.add('bg-gray-200', 'text-gray-700');
    });
    
    // Show selected tab
    document.getElementById(tabId).classList.remove('hidden');
    
    // Add active class to clicked button
    event.target.classList.remove('bg-gray-200', 'text-gray-700');
    event.target.classList.add('bg-blue-600', 'text-white');
}
</script>
@endpush
@endsection