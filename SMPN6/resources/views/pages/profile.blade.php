@extends('layouts.app')

@section('title', 'Profil - SMPN 6 Dongko')
@section('description', 'Pelajari tentang sejarah, visi, misi, dan struktur organisasi SMP Negeri 6 Dongko Satu Atap')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-block bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full mb-6">
            <span class="flex items-center gap-2 text-white">
                <i class="fas fa-school"></i>
                Profil Sekolah
            </span>
        </div>
        <h1 class="text-white mb-6 text-4xl md:text-5xl font-bold">Profil</h1>
        <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
            Pelajari tentang sejarah kami yang kaya, misi, visi, dan tim berdedikasi.
        </p>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <!-- Vision and Mission -->
    <section class="mb-24">
        <div class="text-center mb-12">
            <div class="inline-block bg-blue-100 px-6 py-3 rounded-full mb-6">
                <span class="text-blue-700 flex items-center gap-2 font-semibold">
                    <i class="fas fa-bullseye"></i>
                    Visi & Misi
                </span>
            </div>
            <h2 class="text-3xl md:text-3xl font-bold mb-4">Visi dan Misi Sekolah</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Fondasi yang memandu setiap langkah kami dalam membentuk generasi unggul
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Visi -->
            <div class="bg-gradient-to-br from-blue-600 to-blue-800 rounded-2xl p-10 text-white shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="bg-white/20 backdrop-blur-sm w-20 h-20 rounded-2xl flex items-center justify-center mb-8 mx-auto">
                    <i class="fas fa-eye text-4xl"></i>
                </div>
                <h3 class="text-white text-2xl font-bold mb-6 text-center">Visi Sekolah</h3>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6">
                    <p class="text-white/95 leading-relaxed text-center text-lg">
                        TERWUJUDNYA SEKOLAH YANG BERBUDAYA LINGKUNGAN SEBAGAI PUSAT PENDIDIKAN
                        ILMU PENGETAHUAN DAN TEKNOLOGI, AKHLAK MULIA, DAN KARAKTER BANGSA
                    </p>
                </div>
            </div>

            <!-- Misi -->
            <div class="bg-gradient-to-br from-green-600 to-green-800 rounded-2xl p-10 text-white shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="bg-white/20 backdrop-blur-sm w-20 h-20 rounded-2xl flex items-center justify-center mb-8 mx-auto">
                    <i class="fas fa-bullseye text-4xl"></i>
                </div>
                <h3 class="text-white text-2xl font-bold mb-6 text-center">Misi Sekolah</h3>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6">
                    <p class="text-white/95 mb-4">
                        Adapun misi SMP Negeri 6 Dongko Satu Atap adalah:
                    </p>
                    <ul class="space-y-2 text-white/95">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle mt-1 flex-shrink-0"></i>
                            <span>Mengembangkan kurikulum yang komprehensif dan adaptif.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle mt-1 flex-shrink-0"></i>
                            <span>Menumbuhkembangkan penghayatan dan pengamalan ajaran agama.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle mt-1 flex-shrink-0"></i>
                            <span>Mengembangkan bidang akademis dan non-akademis secara seimbang.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle mt-1 flex-shrink-0"></i>
                            <span>Menyelenggarakan pembelajaran yang efektif dan menyenangkan.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle mt-1 flex-shrink-0"></i>
                            <span>Membiasakan sikap dan perilaku terpuji.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle mt-1 flex-shrink-0"></i>
                            <span>Menumbuhkan budaya cinta lingkungan hidup.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle mt-1 flex-shrink-0"></i>
                            <span>Menyediakan fasilitas pembelajaran yang berkualitas.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle mt-1 flex-shrink-0"></i>
                            <span>Menjalin kerja sama dengan berbagai pihak.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- School History Timeline -->
    <section class="mb-24">
        <div class="text-center mb-12">
            <div class="inline-block bg-purple-100 px-6 py-3 rounded-full mb-6">
                <span class="text-purple-700 flex items-center gap-2 font-semibold">
                    <i class="fas fa-history"></i>
                    Sejarah
                </span>
            </div>
            <h2 class="text-3xl md:text-3xl font-bold mb-4">Sejarah Sekolah</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Perjalanan panjang SMP Negeri 6 Dongko Satu Atap dari tahun 2008 hingga sekarang
            </p>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12 border-l-4 border-blue-600">
                <div class="space-y-6 text-gray-700 leading-relaxed text-justify">
                    <p>
                        SMP Negeri 6 Dongko Satu Atap berdiri Tahun 2008. Yang beralamatkan di Dusun Dawung RT 024 RW 006 Desa Pringapus Kecamatan Dongko Kabupaten Trenggalek Provinsi Jawa Timur.
                        Pada awalnya SMP Negeri 6 Dongko Satu Atap adalah rintisan dari SMP Terbuka. SMP terbuka berdiri dari tahun 1994 -2008. SMP Terbuka merupakan salah satu satuan Pendidikan alternatif yang berfungsi memperluas akses tamatan sekolah Dasar (SD) atau setara yang mengalami berbagai kendala untuk melanjutkan ke sekolah regular. Kendala tersebut antara lain daerah terpencil, letak geografis, sosial ekonomi yang lemah atau terbatas waktu karena harus membantu orangtua bekerja atau bekerja sendiri mencari nafkah untuk mencukupi keperluan hidupnya.
                    </p>

                    <div class="border-l-4 border-blue-300 pl-6 my-6">
                        <p class="italic text-blue-900">
                            SMP Terbuka ini pembelajaran berbasis modul dan metode pembelajarannya adalah belajar mandiri. SMP Terbuka hanya membutuhkan dua Tempat Kelompok Belajar (TKB). TKB pertama di SD Negeri 2 Pringapus Kecamatan Dongko dengan didampingi oleh dua guru pamong yaitu Bapak Mujayat, S.Pd dan Ibu Suparmi, S.Pd sekaligus sebagai pendiri sekolah terbuka. TKB Kedua di SMP Negeri 1 Dongko dengan didampingi guru bina seperti Bapak Abdullah Sitap, S.Pd, Bapak Catur Winarno, S.Pd, Bapak Miswan, S.Pd, Bapak Siswoyo, S.Pd, Bapak Narimo, S.Pd dan lainnya. Sehingga sistem pembelajarannya adalah seminggu sekali peserta didik SMP Terbuka mendapatkan materi dari guru bina dan bergabung pembelajarannya dengan peserta didik reguler SMP Negeri 1 Dongko.
                        </p>
                    </div>

                    <p>
                        Setelah di Kecamatan Dongko  berdiri SMP Negeri Satu Atap, Bapak Mujayat, S.Pd dan Ibu Suparmi, S.Pd selaku pendiri SMP Terbuka berkoordinasi dengan kepala SD Negeri 1 Pringapus mencoba mengajukan pendirian SD-SMP Negeri Satu Atap di Desa Pringapus. Yang melatarbelakangi pendirian sekolah adalah menimbang pentingnya kualitas Pendidikan dan membuka lowongan pekerjaan. Berkat jerih payah dan usaha dari Bapak Mujayat, S,Pd dan Ibu Suparmi, S,Pd ajuan disetujui. Sehingga pada tanggal 14 Juli 2008 berdirilah satuan Pendidikan SD-SMP Negeri Satu Atap 3 Dongko  yang berstatus negeri dibawah naungan Dinas Pendidikan dan kebudayaan Kabupaten Trenggalek.
                    </p>

                    <p>
                        SD-SMP Negeri Satu Atap 3 Dongko merupakan dua gabungan sekolah yaitu SD Negeri 1 Pringapus dan SMP Terbuka. Sekolah ini dipimpin  oleh satu kepala sekolah. Kepala sekolah pertama adalah Bapak Jayus, S.Pd yang saat itu menjabat kepala sekolah mulai tahun 2008-2012.
                        Pada tahun 2012 terjadi pergantian kepala sekolah dari bapak Jayus, S.Pd kepada Bapak Mujayat, S,Pd. Di tahun ini juga nama sekolah berganti nama menjadi SD Negeri Satu Atap 3 Dongko dan SMP Negeri Satu Atap 3 Dongko dan dipimpin oleh satu kepala sekolah. 
                    </p>

                    <div class="bg-blue-50 rounded-xl p-6 my-6">
                        <p>
                            Pada tahun 2022, SD Negeri Satu Atap 3 Dongko dan SMP Negeri Satu Atap 3 Dongko berganti nama sesuai dengan Keputusan Bupati Trenggalek Nomor 188.45/531/406.001.3/2022 tanggal 14 September 2022  menjadi SD Negeri 1 Pringapus dan SMP Negeri 6 Dongko Satu Atap. Dengan berubahnya nama sekolah maka nomenklatur sekolah juga berubah menjadi 406.009.04.206.  SMP Negeri 6 Dongko Satu Atap masih dipimpin oleh satu kepala sekolah yaitu Bapak Mujayat, S.Pd yang menjabat tahun 2012-2023.
                        </p>
                    </div>

                    <p>
                        Pada tahun 2023 terjadi pergantian kepala sekolah dari Bapak  Mujayat, S.Pd kepada Bapak Abdulah Sitap, S.Pd. pada saat itu beliau juga menjadi Kepala SMP Negeri 2 Durenan. Bapak Abdulah Sitap, S,Pd menjabat hanya sebentar dari januari s.d April 2023 karena beliau dipindah tugaskan menjadi Kepala SMP Negeri 2 Tugu. 
                    </p>

                    <p>
                        Sehingga tangga 13 Mei 2023 terjadi pergantian Kepala sekolah dari Bapak Abdulah Sitap, S.Pd kepada Bapak Wardoyo, S.Kom sampai sekarang. Tetapi pada bulan Maret 2025 Bapak Wardoyo, S,Kom diangkat Plt. SMP Negeri 2 Dongko. 
                        Seiring dengan berjalannya waktu, SMP Negeri 6 Dongko Satu Atap mengalami perkembangan pesat. Mulai ruang kelas, ruang kepala sekolah, ruang guru, ruang tata usah, ruang bimbingan konseling, laboratorium komputer, ruang perpustakaan dan keterampilan sudah memadai.
                    </p>

                    <div class="bg-green-50 rounded-xl p-6 my-6 border-l-4 border-green-500">
                        <h4 class="font-bold text-green-900 mb-3 flex items-center gap-2">
                            <i class="fas fa-trophy"></i>
                            Prestasi yang Ditorehkan
                        </h4>
                        <p>
                            Banyak sudah kejuaraan tertoreh seperti pada tahun 2023 lomba macapat juara 3 tingkat kecamatan, tahun 2024 lomba mewarnai batik mendapat juara Harapan 2 tingkat Kabupaten Trenggalek, lomba kaligrafi juara 1 tingkat kecamatan Dongko, dan tahun 2025 lomba senam sehat juara 6 se- Jawa Timur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Organizational Structure -->
    <section class="mb-24">
        <div class="text-center mb-12">
            <div class="inline-block bg-orange-100 px-6 py-3 rounded-full mb-6">
                <span class="text-orange-700 flex items-center gap-2 font-semibold">
                    <i class="fas fa-sitemap"></i>
                    Struktur
                </span>
            </div>
            <h2 class="text-3xl md:text-3xl font-bold mb-4">Struktur Organisasi</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Struktur organisasi sekolah SMP Negeri 6 Dongko Satu Atap
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8">
                <img 
                    src="{{ asset('storage/assets/foto-struktur.jpg') }}" 
                    alt="Struktur Organisasi SMPN 6 Dongko"
                    class="w-full rounded-xl object-contain shadow-md">
            </div>
        </div>
    </section>

    <!-- Accreditation -->
    <section class="mb-24">
        <div class="max-w-4xl mx-auto">
            <div class="bg-gradient-to-r from-yellow-50 via-orange-50 to-yellow-50 rounded-2xl p-10 md:p-12 text-center shadow-lg border-t-4 border-yellow-500">
                <div class="bg-yellow-100 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-award text-4xl text-yellow-600"></i>
                </div>
                <h2 class="text-3xl font-bold mb-6">Akreditasi Sekolah</h2>
                <div class="bg-white rounded-xl p-6 mb-6 inline-block">
                    <div class="flex items-center gap-6">
                        <div class="text-center">
                            <div class="text-5xl font-bold text-yellow-600 mb-2">B</div>
                            <p class="text-sm text-gray-600">Akreditasi</p>
                        </div>
                        <div class="h-16 w-px bg-gray-300"></div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-gray-800 mb-2">2021</div>
                            <p class="text-sm text-gray-600">Tahun</p>
                        </div>
                    </div>
                </div>
                <p class="mb-8 text-gray-700 leading-relaxed">
                    SMP Negeri 6 Dongko telah terakreditasi <strong>B (Baik)</strong> oleh Badan Akreditasi Nasional Sekolah/Madrasah pada tahun 2021
                </p>

                <a 
                    href="{{ asset('storage/assets/foto-akreditasi.jpg') }}" 
                    target="_blank"
                    class="inline-flex items-center gap-2 px-8 py-4 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition-colors shadow-lg font-semibold">
                    <i class="fas fa-certificate"></i>
                    Lihat Sertifikat Akreditasi
                </a>
            </div>
        </div>
    </section>

    <!-- Logo Sekolah -->
    <section class="mb-16">
        <div class="text-center mb-12">
            <div class="inline-block bg-indigo-100 px-6 py-3 rounded-full mb-6">
                <span class="text-indigo-700 flex items-center gap-2 font-semibold">
                    <i class="fas fa-shield-alt"></i>
                    Logo
                </span>
            </div>
            <h2 class="text-3xl md:text-3xl font-bold mb-4">Makna Logo Sekolah</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Setiap elemen logo mencerminkan nilai dan filosofi pendidikan kami
            </p>
        </div>

        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center bg-white rounded-2xl shadow-lg p-8 md:p-12">
                <div class="flex justify-center">
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-8 rounded-2xl">
                        <img 
                            src="{{ asset('storage/assets/foto-makna-logo.png') }}" 
                            alt="Logo SMPN 6 Dongko"
                            class="w-full max-w-sm mx-auto">
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="bg-blue-100 p-3 rounded-lg flex-shrink-0">
                            <i class="fas fa-shield-alt text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 mb-2">Sudut Lima Perisai</h4>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                Mengingatkan kita pada kelima unsur-unsur yang tercantum pada Pancasila
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-blue-100 p-3 rounded-lg flex-shrink-0">
                            <i class="fas fa-square text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 mb-2">Warna Biru</h4>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                Adalah warna yang melambangkan ketentraman dan kenyamanan
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-white border-2 border-gray-300 p-3 rounded-lg flex-shrink-0">
                            <i class="fas fa-border-style text-gray-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 mb-2">Berbingkai Warna Putih</h4>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                Menggambarkan iman dan kemurnian
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-yellow-100 p-3 rounded-lg flex-shrink-0">
                            <i class="fas fa-star text-yellow-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 mb-2">Bintang Emas</h4>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                Perwujudan dari sila pertama Pancasila
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-red-100 p-3 rounded-lg flex-shrink-0">
                            <i class="fas fa-fire text-red-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 mb-2">Obor Merah Menyala</h4>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                Dengan tangkai berbentuk pena emas dihiasi sayap berwarna putih menggambarkan semangat belajar meraih cita-cita menuju generasi emas
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-indigo-100 p-3 rounded-lg flex-shrink-0">
                            <i class="fas fa-book text-indigo-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 mb-2">Buku</h4>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                Sumber pengetahuan kunci meraih cita-cita
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-green-100 p-3 rounded-lg flex-shrink-0">
                            <i class="fas fa-ribbon text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 mb-2">Pita Hijau Bertuliskan Kab Trenggalek</h4>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                Melambangkan Kabupaten Trenggalek adalah daerah yang subur dan makmur
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection