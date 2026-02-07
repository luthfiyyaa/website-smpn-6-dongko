@extends('layouts.app')

@section('title', 'PPDB - SMPN 6 Dongko')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-block bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full mb-6">
            <span class="flex items-center gap-2">
                <i class="fa-solid fa-graduation-cap"></i>
                PPDB 2026/2027
            </span>
        </div>
        <h1 class="text-white mb-6">Pendaftaran Siswa</h1>
        <p class="text-xl text-white/90 max-w-3xl mx-auto">
            Mari bergabung dengan SMPN 6 Dongko dan mulailah perjalanan pendidikan yang luar biasa.
        </p>
    </div>
</section>

<!-- Highlight PPDB -->
<section class="py-16 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8">

            <!-- Gratis Pendaftaran -->
            <div class="bg-gradient-to-br from-green-500 to-green-600 text-white rounded-2xl p-10 text-center shadow-lg">
                <i class="fa-solid fa-circle-check text-5xl mb-4"></i>
                <h2 class="mb-3">BEBAS BIAYA PENDAFTARAN</h2>
                <p class="text-lg text-white/90">
                    Tidak dipungut biaya apapun selama proses PPDB
                </p>
            </div>

            <!-- Gratis Seragam -->
            <div class="bg-gradient-to-br from-yellow-400 to-orange-500 text-white rounded-2xl p-10 text-center shadow-lg">
                <i class="fa-solid fa-shirt text-5xl mb-4"></i>
                <h2 class="mb-3">GRATIS 3 STEL SERAGAM</h2>
                <p class="text-lg text-white/90">
                    Untuk <strong>25 pendaftar pertama</strong><br>
                    (Putih Biru, Olahraga, dan Adat)
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Requirements -->
<section class="py-16 bg-[var(--color-neutral-50)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-block bg-[var(--color-primary)]/10 px-6 py-3 rounded-full mb-6">
                <span class="text-[var(--color-primary)] flex items-center gap-2">
                    <i class="fa-solid fa-file"></i>
                    Persyaratan
                </span>
            </div>
            <h2 class="mb-6">Persyaratan Pendaftaran</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Documents Required -->
            <div class="bg-white rounded-2xl p-8 shadow-md">
                <div class="flex items-center gap-4 mb-6">
                    <div class="bg-blue-100 w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i class="fa-regular fa-folder text-blue-600"></i>
                    </div>
                    <h3>Dokumen yang Diperlukan</h3>
                </div>
                <ul class="grid md:grid-cols-2 gap-6">

                <li class="flex gap-4">
                    <i class="fa-solid fa-circle-check text-green-600 mt-1"></i>
                    <span>Lulus SD / MI sederajat</span>
                </li>

                <li class="flex gap-4">
                    <i class="fa-solid fa-circle-check text-green-600 mt-1"></i>
                    <span>Mengisi formulir pendaftaran</span>
                </li>

                <li class="flex gap-4">
                    <i class="fa-solid fa-circle-check text-green-600 mt-1"></i>
                    <span>Pendaftaran online / offline</span>
                </li>

                <li class="flex gap-4">
                    <i class="fa-solid fa-circle-check text-green-600 mt-1"></i>
                    <span>Fotokopi Akta Kelahiran</span>
                </li>

                <li class="flex gap-4">
                    <i class="fa-solid fa-circle-check text-green-600 mt-1"></i>
                    <span>Fotokopi Kartu Keluarga (KK) dan KTP orang tua / wali</span>
                </li>

                <li class="flex gap-4">
                    <i class="fa-solid fa-circle-check text-green-600 mt-1"></i>
                    <span>Pas Foto 3×4 (2 lembar)</span>
                </li>

                <li class="flex gap-4 md:col-span-2">
                    <i class="fa-solid fa-circle-check text-green-600 mt-1"></i>
                    <span>Fotokopi KIP / KPKH / KPS / KKS (jika ada)</span>
                </li>

            </ul>
            </div>

            <!-- Important Information -->
            <div class="bg-white rounded-2xl p-8 shadow-md">
                <div class="flex items-center gap-4 mb-6">
                    <div class="bg-green-100 w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i class="fa-solid fa-info text-green-600"></i>
                    </div>
                    <h3>Jadwal Penting</h3>
                </div>
                
                <ul class="space-y-4">
                    <!-- Periode Pendaftaran -->
                    <li class="flex items-start gap-3">
                        <i class="fa-regular fa-calendar w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                        <div>
                            <div class="text-[var(--color-neutral-900)] mb-1">Periode Pendaftaran</div>
                            <div class="text-sm text-[var(--color-neutral-700)]">
                                {{ $settings && $settings->ppdb_start_date && $settings->ppdb_end_date 
                                    ? $settings->ppdb_start_date->format('d F Y') . ' - ' . $settings->ppdb_end_date->format('d F Y')
                                    : '15 Januari - 31 Maret 2026' }}
                            </div>
                        </div>
                    </li>

                    <!-- Tes Masuk -->
                    <li class="flex items-start gap-3">
                        <i class="fa-regular fa-calendar w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                        <div>
                            <div class="text-[var(--color-neutral-900)] mb-1">Tes Masuk</div>
                            <div class="text-sm text-[var(--color-neutral-700)]">
                                {{ $settings && $settings->test_start_date && $settings->test_end_date 
                                    ? $settings->test_start_date->format('d F Y') . ' - ' . $settings->test_end_date->format('d F Y')
                                    : '10-20 April 2026' }}
                            </div>
                        </div>
                    </li>

                    <!-- Pengumuman Hasil -->
                    <li class="flex items-start gap-3">
                        <i class="fa-regular fa-calendar w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                        <div>
                            <div class="text-[var(--color-neutral-900)] mb-1">Pengumuman Hasil</div>
                            <div class="text-sm text-[var(--color-neutral-700)]">
                                {{ $settings && $settings->announcement_date 
                                    ? $settings->announcement_date->format('d F Y')
                                    : '1 Mei 2026' }}
                            </div>
                        </div>
                    </li>

                    <!-- Daftar Ulang -->
                    <li class="flex items-start gap-3">
                        <i class="fa-regular fa-calendar w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                        <div>
                            <div class="text-[var(--color-neutral-900)] mb-1">Daftar Ulang</div>
                            <div class="text-sm text-[var(--color-neutral-700)]">
                                {{ $settings && $settings->reregistration_start_date && $settings->reregistration_end_date 
                                    ? $settings->reregistration_start_date->format('d F Y') . ' - ' . $settings->reregistration_end_date->format('d F Y')
                                    : '5-15 Mei 2026' }}
                            </div>
                        </div>
                    </li>

                    <!-- Tahun Ajaran Dimulai -->
                    <li class="flex items-start gap-3">
                        <i class="fa-regular fa-calendar w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                        <div>
                            <div class="text-[var(--color-neutral-900)] mb-1">Tahun Ajaran Dimulai</div>
                            <div class="text-sm text-[var(--color-neutral-700)]">
                                {{ $settings && $settings->academic_year_start 
                                    ? $settings->academic_year_start->format('d F Y')
                                    : '15 Juli 2026' }}
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Google Form Section -->
<section class="py-16 bg-white" id="registration-form">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="inline-block bg-[var(--color-primary)]/10 px-6 py-3 rounded-full mb-6">
                <span class="text-[var(--color-primary)] flex items-center gap-2">
                    <i class="fa-solid fa-file"></i>
                    Pendaftaran Online
                </span>
            </div>
            <h2 class="mb-6">Formulir Pendaftaran</h2>
            <p class="text-xl text-[var(--color-neutral-700)]">
                Isi formulir di bawah ini untuk memulai proses pendaftaran
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl border-2 border-[var(--color-neutral-200)] overflow-hidden">
            <!-- Google Form Embed -->
            <div class="relative" style="padding-bottom: 100%; height: 0; overflow: hidden;">
                <iframe 
                    src="https://docs.google.com/forms/d/e/1FAIpQLSc9305pfZNnj2VhUqCC4RdsBghCB6RanaANcpnvHBICalkoMw/viewform?embedded=true" 
                    frameborder="0" 
                    marginheight="0" 
                    marginwidth="0"
                    class="absolute top-0 left-0 w-full h-full"
                    style="min-height: 800px;">
                    Loading…
                </iframe>
            </div>
        </div>

        <!-- Alternative: Open in New Tab Button -->
        <div class="text-center mt-8">
            <p class="text-[var(--color-neutral-700)] mb-4">
                Atau buka formulir di tab baru untuk pengalaman yang lebih baik
            </p>
            <a 
                href="https://docs.google.com/forms/d/e/1FAIpQLSc9305pfZNnj2VhUqCC4RdsBghCB6RanaANcpnvHBICalkoMw/viewform?embedded=true" 
                target="_blank"
                class="inline-flex items-center gap-3 bg-[var(--color-primary)] text-white px-8 py-4 rounded-xl hover:bg-[var(--color-primary-dark)] transition-colors">
                <span>Buka Formulir di Tab Baru</span>
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </a>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-16 bg-[var(--color-neutral-50)]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] text-white rounded-2xl p-10">

            <div class="text-center mb-10">
                <h2 class="text-white mb-3">Informasi Lebih Lanjut</h2>
                <p class="text-white/90 text-lg">
                    Hubungi kami melalui kontak berikut
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 text-center">
                <div>
                    <div class="bg-white/20 backdrop-blur-sm w-14 h-14 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fa-brands fa-whatsapp text-2xl"></i>
                    </div>
                    <div class="text-sm text-white/80 mb-1">Candra S</div>
                    <a href="https://wa.me/6282334945603" class="text-lg font-semibold">
                        0823 3494 5603
                    </a>
                </div>
                <div>
                    <div class="bg-white/20 backdrop-blur-sm w-14 h-14 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fa-brands fa-whatsapp text-2xl"></i>
                    </div>
                    <div class="text-sm text-white/80 mb-1">Sunartun</div>
                    <a href="https://wa.me/6282228298868" class="text-lg font-semibold">
                        0822 2829 8868
                    </a>
                </div>
                <div>
                    <div class="bg-white/20 backdrop-blur-sm w-14 h-14 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fa-solid fa-envelope text-2xl"></i>
                    </div>
                    <div class="text-sm text-white/80 mb-1">Email</div>
                    <div class="text-lg font-semibold break-all">
                        smpnsatapdongko@gmail.com
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection