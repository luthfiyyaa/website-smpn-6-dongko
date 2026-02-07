@extends('layouts.app')

@section('title', 'Kesiswaan - SMPN 6 Dongko')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-block bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full mb-6">
            <span class="flex items-center gap-2 text-white">
                <i class="fas fa-users"></i>
                Kehidupan Siswa
            </span>
        </div>
        <h1 class="text-white mb-6 text-4xl md:text-5xl font-bold">Kesiswaan</h1>
        <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
            Memberdayakan siswa melalui prestasi, aktivitas, dan pengembangan karakter yang holistik
        </p>
    </div>
</section>

<!-- Prestasi Siswa -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-block bg-blue-100 px-6 py-3 rounded-full mb-6">
                <span class="text-blue-700 flex items-center gap-2 font-semibold">
                    <i class="fas fa-trophy"></i>
                    Penghargaan
                </span>
            </div>
            <h2 class="text-3xl md:text-3xl font-bold mb-6">Prestasi Siswa</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                SMP Negeri 6 Dongko Satu Atap secara konsisten menunjukkan komitmen dalam meningkatkan mutu pendidikan dan pengembangan potensi peserta didik
            </p>
        </div>

        @if($achievements->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($achievements as $index => $achievement)
                    @php
                        $style = $achievement->getColorAndIcon($index);
                    @endphp
                    <div class="bg-gradient-to-br {{ $style['gradient'] }} rounded-2xl p-8 shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 {{ $style['border'] }}">
                        <div class="{{ $style['icon_bg'] }} w-16 h-16 rounded-xl flex items-center justify-center mb-6 mx-auto">
                            <i class="fas fa-{{ $style['icon'] }} text-3xl {{ $style['icon_text'] }}"></i>
                        </div>
                        <div class="{{ $style['badge_bg'] }} text-white text-center py-2 rounded-lg mb-4">
                            <span class="font-bold">{{ $achievement->achievement }}</span>
                        </div>
                        <h4 class="font-bold text-center mb-2 text-gray-800">{{ $achievement->title }}</h4>
                        <p class="text-sm text-center text-gray-600">
                            {{ $achievement->level }}
                        </p>
                        <p class="text-xs text-center text-gray-500 mt-2">Tahun {{ $achievement->year }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

<!-- Kegiatan OSIS -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-block bg-green-100 px-6 py-3 rounded-full mb-6">
                <span class="text-green-700 flex items-center gap-2 font-semibold">
                    <i class="fas fa-users-cog"></i>
                    Organisasi
                </span>
            </div>
            <h2 class="text-3xl md:text-3xl font-bold mb-6">Kegiatan OSIS</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                OSIS SMP merupakan wadah organisasi resmi siswa yang berperan penting dalam pengembangan minat, bakat, kepemimpinan, serta kedisiplinan siswa
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Lomba dan Festival -->
            <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition-all duration-300">
                <div class="flex items-start gap-4 mb-4">
                    <div class="bg-yellow-100 p-4 rounded-xl flex-shrink-0">
                        <i class="fas fa-trophy text-2xl text-yellow-600"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Lomba dan Festival</h3>
                    </div>
                </div>
                <p class="text-gray-700 leading-relaxed">
                    Mengadakan berbagai perlombaan internal dan eksternal seperti lomba kebersihan kelas, lomba cerdas cermat, lomba seni, hingga lomba olahraga antar kelas atau antar sekolah.
                </p>
            </div>

            <!-- Peringatan Hari Besar -->
            <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition-all duration-300">
                <div class="flex items-start gap-4 mb-4">
                    <div class="bg-red-100 p-4 rounded-xl flex-shrink-0">
                        <i class="fas fa-flag text-2xl text-red-600"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Peringatan Hari Besar</h3>
                    </div>
                </div>
                <p class="text-gray-700 leading-relaxed">
                    Melaksanakan kegiatan untuk memperingati hari-hari besar nasional dan keagamaan dengan upacara, pawai budaya, atau kegiatan sosial.
                </p>
            </div>

            <!-- LDK -->
            <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition-all duration-300">
                <div class="flex items-start gap-4 mb-4">
                    <div class="bg-blue-100 p-4 rounded-xl flex-shrink-0">
                        <i class="fas fa-user-graduate text-2xl text-blue-600"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Latihan Dasar Kepemimpinan</h3>
                    </div>
                </div>
                <p class="text-gray-700 leading-relaxed">
                    Kegiatan pelatihan untuk membentuk karakter pemimpin yang bertanggung jawab dan disiplin, biasanya ditujukan untuk pengurus OSIS baru.
                </p>
            </div>

            <!-- Bakti Sosial -->
            <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition-all duration-300">
                <div class="flex items-start gap-4 mb-4">
                    <div class="bg-green-100 p-4 rounded-xl flex-shrink-0">
                        <i class="fas fa-hands-helping text-2xl text-green-600"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Bakti Sosial</h3>
                    </div>
                </div>
                <p class="text-gray-700 leading-relaxed">
                    Kegiatan sosial yang bertujuan menumbuhkan rasa kepedulian siswa terhadap masyarakat, seperti penggalangan dana, kunjungan ke panti asuhan, atau pembagian sembako.
                </p>
            </div>

            <!-- Pelatihan dan Workshop -->
            <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition-all duration-300">
                <div class="flex items-start gap-4 mb-4">
                    <div class="bg-purple-100 p-4 rounded-xl flex-shrink-0">
                        <i class="fas fa-chalkboard-teacher text-2xl text-purple-600"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Pelatihan dan Workshop</h3>
                    </div>
                </div>
                <p class="text-gray-700 leading-relaxed">
                    Mengadakan seminar atau pelatihan tentang kepemimpinan, etika, keterampilan komunikasi, anti bullying bersama polsek setempat dan topik lain yang bermanfaat.
                </p>
            </div>

            <!-- Majalah Dinding -->
            <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition-all duration-300">
                <div class="flex items-start gap-4 mb-4">
                    <div class="bg-indigo-100 p-4 rounded-xl flex-shrink-0">
                        <i class="fas fa-newspaper text-2xl text-indigo-600"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Majalah Dinding Sekolah</h3>
                    </div>
                </div>
                <p class="text-gray-700 leading-relaxed">
                    Menerbitkan karya tulis siswa seperti puisi, artikel, dan informasi seputar kegiatan sekolah dalam bentuk mading atau buletin.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Lomba yang Pernah Diikuti -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-block bg-purple-100 px-6 py-3 rounded-full mb-6">
                <span class="text-purple-700 flex items-center gap-2 font-semibold">
                    <i class="fas fa-medal"></i>
                    Kompetisi
                </span>
            </div>
            <h2 class="text-3xl md:text-3xl font-bold mb-6">Lomba-Lomba yang Pernah Diikuti</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Mendorong siswa untuk mengikuti berbagai lomba sebagai sarana mengembangkan potensi dan menumbuhkan semangat berprestasi
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Lomba Akademik -->
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-8 shadow-lg">
                <div class="flex items-center gap-4 mb-6">
                    <div class="bg-blue-600 p-4 rounded-xl">
                        <i class="fas fa-brain text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Lomba Akademik</h3>
                </div>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                        <span class="text-gray-700">Olimpiade Sains Nasional (OSN)/KSN</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                        <span class="text-gray-700">Bidang Matematika, IPA, dan IPS</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                        <span class="text-gray-700">Tingkat Kecamatan hingga Kabupaten</span>
                    </li>
                </ul>
            </div>

            <!-- Lomba Seni dan Budaya -->
            <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-8 shadow-lg">
                <div class="flex items-center gap-4 mb-6">
                    <div class="bg-purple-600 p-4 rounded-xl">
                        <i class="fas fa-palette text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Lomba Seni dan Budaya</h3>
                </div>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-purple-600 mt-1"></i>
                        <span class="text-gray-700">FLS3N (Festival Lomba Seni dan Sastra Siswa Nasional)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-purple-600 mt-1"></i>
                        <span class="text-gray-700">Menyanyi Solo, Desain Grafis, Baca Puisi</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-purple-600 mt-1"></i>
                        <span class="text-gray-700">Tingkat Kabupaten</span>
                    </li>
                </ul>
            </div>

            <!-- Lomba Kepramukaan -->
            <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-8 shadow-lg">
                <div class="flex items-center gap-4 mb-6">
                    <div class="bg-green-600 p-4 rounded-xl">
                        <i class="fas fa-campground text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Lomba Kepramukaan</h3>
                </div>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-green-600 mt-1"></i>
                        <span class="text-gray-700">Jambore Cabang tingkat Kabupaten</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-green-600 mt-1"></i>
                        <span class="text-gray-700">Regu Pramuka Penggalang</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-green-600 mt-1"></i>
                        <span class="text-gray-700">Pramuka Penggalang Garuda setiap tahun</span>
                    </li>
                </ul>
            </div>

            <!-- Lomba Literasi -->
            <div class="bg-gradient-to-br from-orange-50 to-white rounded-2xl p-8 shadow-lg">
                <div class="flex items-center gap-4 mb-6">
                    <div class="bg-orange-600 p-4 rounded-xl">
                        <i class="fas fa-book-open text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Lomba Literasi dan Bahasa</h3>
                </div>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-orange-600 mt-1"></i>
                        <span class="text-gray-700">Festival Lomba Seni dan Sastra Siswa Nasional</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-orange-600 mt-1"></i>
                        <span class="text-gray-700">Lomba Baca Puisi</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-orange-600 mt-1"></i>
                        <span class="text-gray-700">Tingkat Kabupaten</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Organisasi Siswa -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-block bg-indigo-100 px-6 py-3 rounded-full mb-6">
                <span class="text-indigo-700 flex items-center gap-2 font-semibold">
                    <i class="fas fa-sitemap"></i>
                    Struktur Organisasi
                </span>
            </div>
            <h2 class="text-3xl md:text-3xl font-bold mb-6">Organisasi Siswa</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Wadah pengembangan potensi, karakter, dan kepemimpinan siswa
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- OSIS -->
            <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="bg-gradient-to-br from-blue-500 to-blue-700 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i class="fas fa-users-cog text-4xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-center mb-3">OSIS</h3>
                <p class="text-center text-gray-700 text-sm leading-relaxed">
                    Organisasi Siswa Intra Sekolah yang mengelola berbagai kegiatan kesiswaan
                </p>
            </div>

            <!-- Pramuka -->
            <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="bg-gradient-to-br from-green-500 to-green-700 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i class="fas fa-campground text-4xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-center mb-3">Pramuka</h3>
                <p class="text-center text-gray-700 text-sm leading-relaxed">
                    Membentuk karakter disiplin, tanggung jawab, dan kepemimpinan siswa
                </p>
            </div>

            <!-- PMR -->
            <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="bg-gradient-to-br from-red-500 to-red-700 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i class="fas fa-medkit text-4xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-center mb-3">PMR</h3>
                <p class="text-center text-gray-700 text-sm leading-relaxed">
                    Palang Merah Remaja untuk kesehatan dan kegiatan sosial kemanusiaan
                </p>
            </div>

            <!-- Organisasi Keagamaan -->
            <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="bg-gradient-to-br from-purple-500 to-purple-700 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i class="fas fa-mosque text-4xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-center mb-3">SKI</h3>
                <p class="text-center text-gray-700 text-sm leading-relaxed">
                    Seksi Kerohanian Islam membina nilai-nilai spiritual dan moral siswa
                </p>
            </div>
        </div>
    </section>

@endsection