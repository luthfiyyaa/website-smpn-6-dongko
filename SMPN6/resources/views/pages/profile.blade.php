@extends('layouts.app')

@section('title', 'Profil - SMPN 6 Dongko')
@section('description', 'Learn about Harmony Academy history, mission, vision, and organizational structure')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Page Header -->
    <div class="text-center mb-14">
        <h1 class="mb-6">Profil Sekolah</h1>
        <p class="text-xl text-[var(--color-neutral-700)] max-w-3xl mx-auto leading-relaxed">
            Pelajari tentang sejarah kami yang kaya, misi, visi, dan tim berdedikasi.
        </p>
    </div>

    <!-- Vision and Mission -->
    <section class="mb-24">
        <div class="grid md:grid-cols-2 gap-10">
            <!-- Visi -->
            <div class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-primary-dark)] rounded-2xl p-10 text-white">
                <div class="bg-white/20 w-16 h-16 rounded-xl flex items-center justify-center mb-8">
                    <i data-lucide="eye" class="w-8 h-8"></i>
                </div>
                <h2 class="text-white mb-6">Visi Sekolah</h2>
                <p class="text-white/90 leading-relaxed text-justify">
                    TERWUJUDNYA SEKOLAH YANG BERBUDAYA LINGKUNGAN SEBAGAI PUSAT PENDIDIKAN
                    ILMU PENGETAHUAN DAN TEKNOLOGI, AKHLAK MULIA, DAN KARAKTER BANGSA
                </p>
            </div>

            <!-- Misi -->
            <div class="bg-gradient-to-br from-[var(--color-secondary)] to-[var(--color-secondary-dark)] rounded-2xl p-10 text-white">
                <div class="bg-white/20 w-16 h-16 rounded-xl flex items-center justify-center mb-8">
                    <i data-lucide="target" class="w-8 h-8"></i>
                </div>
                <h2 class="text-white mb-6">Misi Sekolah</h2>
                <p class="text-white/90 mb-6">
                    Adapun misi SMP Negeri 6 Dongko Satu Atap adalah:
                </p>
                <ul class="space-y-3 text-white/90 list-disc list-inside">
                    <li>Mengembangkan kurikulum yang komprehensif dan adaptif.</li>
                    <li>Menumbuhkembangkan penghayatan dan pengamalan ajaran agama.</li>
                    <li>Mengembangkan bidang akademis dan non-akademis secara seimbang.</li>
                    <li>Menyelenggarakan pembelajaran yang efektif dan menyenangkan.</li>
                    <li>Membiasakan sikap dan perilaku terpuji.</li>
                    <li>Menumbuhkan budaya cinta lingkungan hidup.</li>
                    <li>Menyediakan fasilitas pembelajaran yang berkualitas.</li>
                    <li>Menjalin kerja sama dengan berbagai pihak.</li>
                </ul>
            </div>
        </div>
    </section>


    {{-- <!-- Core Values -->
    <section class="mb-32">
        <h2 class="text-center mb-16">Our Core Values</h2>
        <div class="grid md:grid-cols-4 gap-8">
            <div class="bg-white rounded-xl shadow-md p-8 text-center hover:shadow-xl transition-shadow">
                <div class="bg-[var(--color-primary)]/10 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="award" class="w-8 h-8 text-[var(--color-primary)]"></i>
                </div>
                <h4 class="mb-3">Excellence</h4>
                <p class="text-sm text-[var(--color-neutral-700)] leading-relaxed">Striving for the highest standards in all endeavors</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-8 text-center hover:shadow-xl transition-shadow">
                <div class="bg-[var(--color-primary)]/10 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="users" class="w-8 h-8 text-[var(--color-primary)]"></i>
                </div>
                <h4 class="mb-3">Community</h4>
                <p class="text-sm text-[var(--color-neutral-700)] leading-relaxed">Building strong relationships and collaboration</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-8 text-center hover:shadow-xl transition-shadow">
                <div class="bg-[var(--color-primary)]/10 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="trending-up" class="w-8 h-8 text-[var(--color-primary)]"></i>
                </div>
                <h4 class="mb-3">Growth</h4>
                <p class="text-sm text-[var(--color-neutral-700)] leading-relaxed">Continuous learning and personal development</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-8 text-center hover:shadow-xl transition-shadow">
                <div class="bg-[var(--color-primary)]/10 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="target" class="w-8 h-8 text-[var(--color-primary)]"></i>
                </div>
                <h4 class="mb-3">Integrity</h4>
                <p class="text-sm text-[var(--color-neutral-700)] leading-relaxed">Upholding honesty, respect, and responsibility</p>
            </div>
        </div>
    </section> --}}

    <!-- School History Timeline -->
    <section class="mb-24 max-w-4xl mx-auto">
        <h2 class="text-center mb-12">Sejarah Sekolah</h2>
        <div class="bg-white rounded-2xl shadow-md p-8 leading-relaxed text-justify text-[var(--color-neutral-700)]">
            <p>
                <!-- ISI SENDIRI NANTI -->
                SMP Negeri 6 Dongko Satu Atap berdiri Tahun 2008. Yang beralamatkan di Dusun Dawung RT 024 RW 006 Desa Pringapus Kecamatan Dongko Kabupaten Trenggalek Provinsi Jawa Timur.
                Pada awalnya SMP Negeri 6 Dongko Satu Atap adalah rintisan dari SMP Terbuka. SMP terbuka berdiri dari tahun 1994 -2008. SMP Terbuka merupakan salah satu satuan Pendidikan alternatif yang berfungsi memperluas akses tamatan sekolah Dasar (SD) atau setara yang mengalami berbagai kendala untuk melanjutkan ke sekolah regular. Kendala tersebut antara lain daerah terpencil, letak geografis, sosial ekonomi yang lemah atau terbatas waktu karena harus membantu orangtua bekerja atau bekerja sendiri mencari nafkah untuk mencukupi keperluan hidupnya.
            </p>

            <p class="mt-4">
                SMP Terbuka ini pembelajaran berbasis modul dan metode pembelajarannya adalah belajar mandiri. SMP Terbuka hanya membutuhkan dua Tempat Kelompok Belajar (TKB). TKB pertama di SD Negeri 2 Pringapus Kecamatan Dongko dengan didampingi oleh dua guru pamong yaitu Bapak Mujayat, S.Pd dan Ibu Suparmi, S.Pd sekaligus sebagai pendiri sekolah terbuka. TKB Kedua di SMP Negeri 1 Dongko dengan didampingi guru bina seperti Bapak Abdullah Sitap, S.Pd, Bapak Catur Winarno, S.Pd, Bapak Miswan, S.Pd, Bapak Siswoyo, S.Pd, Bapak Narimo, S.Pd dan lainnya. Sehingga sistem pembelajarannya adalah seminggu sekali peserta didik SMP Terbuka mendapatkan materi dari guru bina dan bergabung pembelajarannya dengan peserta didik reguler SMP Negeri 1 Dongko.
            </p>

            <p class="mt-4">
                Setelah di Kecamatan Dongko  berdiri SMP Negeri Satu Atap, Bapak Mujayat, S.Pd dan Ibu Suparmi, S.Pd selaku pendiri SMP Terbuka berkoordinasi dengan kepala SD Negeri 1 Pringapus mencoba mengajukan pendirian SD-SMP Negeri Satu Atap di Desa Pringapus. Yang melatarbelakangi pendirian sekolah adalah menimbang pentingnya kualitas Pendidikan dan membuka lowongan pekerjaan. Berkat jerih payah dan usaha dari Bapak Mujayat, S,Pd dan Ibu Suparmi, S,Pd ajuan disetujui. Sehingga pada tanggal 14 Juli 2008 berdirilah satuan Pendidikan SD-SMP Negeri Satu Atap 3 Dongko  yang berstatus negeri dibawah naungan Dinas Pendidikan dan kebudayaan Kabupaten Trenggalek.
            </p>

            <p class="mt-4">
                SD-SMP Negeri Satu Atap 3 Dongko merupakan dua gabungan sekolah yaitu SD Negeri 1 Pringapus dan SMP Terbuka. Sekolah ini dipimpin  oleh satu kepala sekolah. Kepala sekolah pertama adalah Bapak Jayus, S.Pd yang saat itu menjabat kepala sekolah mulai tahun 2008-2012.
                Pada tahun 2012 terjadi pergantian kepala sekolah dari bapak Jayus, S.Pd kepada Bapak Mujayat, S,Pd. Di tahun ini juga nama sekolah berganti nama menjadi SD Negeri Satu Atap 3 Dongko dan SMP Negeri Satu Atap 3 Dongko dan dipimpin oleh satu kepala sekolah. 
            </p>

            <p class="mt-4">
                Pada tahun 2022, SD Negeri Satu Atap 3 Dongko dan SMP Negeri Satu Atap 3 Dongko berganti nama sesuai dengan Keputusan Bupati Trenggalek Nomor 188.45/531/406.001.3/2022 tanggal 14 September 2022  menjadi SD Negeri 1 Pringapus dan SMP Negeri 6 Dongko Satu Atap. Dengan berubahnya nama sekolah maka nomenklatur sekolah juga berubah menjadi 406.009.04.206.  SMP Negeri 6 Dongko Satu Atap masih dipimpin oleh satu kepala sekolah yaitu Bapak Mujayat, S.Pd yang menjabat tahun 2012-2023.
                Pada tahun 2023 terjadi pergantian kepala sekolah dari Bapak  Mujayat, S.Pd kepada Bapak Abdulah Sitap, S.Pd. pada saat itu beliau juga menjadi Kepala SMP Negeri 2 Durenan. Bapak Abdulah Sitap, S,Pd menjabat hanya sebentar dari januari s.d April 2023 karena beliau dipindah tugaskan menjadi Kepala SMP Negeri 2 Tugu. 
            </p>

            <p class="mt-4">
                Sehingga tangga 13 Mei 2023 terjadi pergantian Kepala sekolah dari Bapak Abdulah Sitap, S.Pd kepada Bapak Wardoyo, S.Kom sampai sekarang. Tetapi pada bulan Maret 2025 Bapak Wardoyo, S,Kom diangkat Plt. SMP Negeri 2 Dongko. 
                Seiring dengan berjalannya waktu, SMP Negeri 6 Dongko Satu Atap mengalami perkembangan pesat. Mulai ruang kelas, ruang kepala sekolah, ruang guru, ruang tata usah, ruang bimbingan konseling, laboratorium komputer, ruang perpustakaan dan keterampilan sudah memadai.
                Banyak sudah kejuaraan tertoreh seperti pada tahun 2023 lomba macapat juara 3 tingkat kecamatan, tahun 2024 lomba mewarnai batik mendapat juara Harapan 2 tingkat Kabupaten Trenggalek, lomba kaligrafi juara 1 tingkat kecamatan Dongko, dan tahun 2025 lomba senam sehat juara 6 se- Jawa Timur.
            </p>
        </div>
    </section>


    <!-- Organizational Structure -->
    <section class="mb-24 text-center">
        <h2 class="mb-12">Struktur Organisasi</h2>

        <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-md p-6">
            <img 
                src="{{ asset('storage/assets/foto-struktur.jpg') }}" 
                alt="Struktur Organisasi SMPN 6 Dongko"
                class="w-full rounded-xl object-contain">
        </div>

        {{-- <p class="text-sm text-[var(--color-neutral-600)] mt-4">
            Struktur organisasi sekolah SMP Negeri 6 Dongko
        </p> --}}
    </section>


    <!-- Accreditation -->
    <section>
        <div class="bg-gradient-to-r from-[var(--color-secondary)]/10 to-[var(--color-primary)]/10 rounded-2xl p-10 text-center">
            <i data-lucide="award" class="w-16 h-16 text-[var(--color-primary)] mx-auto mb-6"></i>
            <h2 class="mb-4">Akreditasi Sekolah</h2>
            <p class="mb-6 text-[var(--color-neutral-700)]">
                Akreditasi Terakhir: B (Baik) <br>
                Tahun Akreditasi: 2021 <br>
                SMP Negeri 6 Dongko telah terakreditasi oleh Badan Akreditasi Nasional Sekolah/Madrasah.
            </p>

            <a 
                href="{{ asset('storage/assets/foto-akreditasi.jpg') }}" 
                target="_blank"
                class="inline-flex items-center gap-2 px-6 py-3 bg-[var(--color-primary)] text-white rounded-lg hover:bg-[var(--color-primary-dark)] transition">
                <i data-lucide="image" class="w-5 h-5"></i>
                Lihat Sertifikat Akreditasi
            </a>
        </div>
    </section>

    {{-- Logo Sekolah --}}
    <section class="mb-12 max-w-5xl mx-auto">
        <h2 class="text-center mb-12">Makna Logo Sekolah</h2>

        <div class="grid md:grid-cols-2 gap-10 items-center">
            <img 
                src="{{ asset('storage/assets/foto-makna-logo.png') }}" 
                alt="Logo SMPN 6 Dongko"
                class="w-100 mx-auto">

            <div class="text-[var(--color-neutral-700)] leading-relaxed text-justify">
                <p>
                    SUDUT LIMA PERISAI: mengingatkan kita pada kelima unsur-unsur yang tercantum pada Pancasila <br>
                    WARNA BIRU: adalah warna yang melambangkan ketentraman dan kenyamanan <br>
                    BERBINGKAI WARNA PUTIH: menggambarkan iman dan kemurnian 
                </p>

                <p class="mt-4">
                    BINTANG EMAS: Perwujudan dari sila pertama Pancasila
                </p>

                <p class="mt-4">
                    OBOR MERAH MENYALA DENGAN TANGKAI BERBENTUK PENA EMAS DIHIASI SAYAP BERWARNA PUTIH : Menggambarkan semangat belajar meraih cita-cita menuju generasi emas
                </p>

                <p class="mt-4">
                    BUKU: sumber pengetahuan kunci meraih cita-cita
                </p>

                <p class="mt-4">
                    PITA BERWARNA HIJAU BERTULISKAN KAB TRENGGALEK BERWARNA HITAM: melambangkan Kabupaten Trenggalek adalah daerah yang subur dan makmur
                </p>
            </div>
        </div>
    </section>
</div>
@endsection
