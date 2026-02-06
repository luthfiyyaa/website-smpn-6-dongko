@extends('layouts.app')

@section('title', 'PPDB - SMPN 6 Dongko')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-block bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full mb-6">
            <span class="flex items-center gap-2">
                <i data-lucide="graduation-cap" class="w-5 h-5"></i>
                PPDB 2026/2027
            </span>
        </div>
        <h1 class="text-white mb-6">Pendaftaran Siswa</h1>
        <p class="text-xl text-white/90 max-w-3xl mx-auto">
            Mari bergabung dengan SMPN 6 Dongko dan mulailah perjalanan pendidikan yang luar biasa.
        </p>
    </div>
</section>

<!-- Admission Steps -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-block bg-[var(--color-primary)]/10 px-6 py-3 rounded-full mb-6">
                <span class="text-[var(--color-primary)] flex items-center gap-2">
                    <i data-lucide="list-checks" class="w-5 h-5"></i>
                    Tata Cara Pendaftaran
                </span>
            </div>
            <p class="text-xl text-[var(--color-neutral-700)] max-w-3xl mx-auto">
                Ikuti langkah berikut untuk melengkapi pendaftaran
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="relative">
                <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-8 shadow-md text-center h-full">
                    <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl">
                        1
                    </div>
                    <h3 class="mb-4">Isi Formulir</h3>
                    <p class="text-[var(--color-neutral-700)]">
                        Lengkapi formulir pendaftaran online dengan informasi yang akurat
                    </p>
                </div>
                <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2">
                    <i data-lucide="chevron-right" class="w-8 h-8 text-[var(--color-primary)]/30"></i>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative">
                <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-8 shadow-md text-center h-full">
                    <div class="bg-green-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl">
                        2
                    </div>
                    <h3 class="mb-4">Kirim Dokumen</h3>
                    <p class="text-[var(--color-neutral-700)]">
                        Upload dokumen yang diperlukan dan rekam akademik
                    </p>
                </div>
                <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2">
                    <i data-lucide="chevron-right" class="w-8 h-8 text-[var(--color-primary)]/30"></i>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative">
                <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-8 shadow-md text-center h-full">
                    <div class="bg-purple-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl">
                        3
                    </div>
                    <h3 class="mb-4">Tes & Wawancara</h3>
                    <p class="text-[var(--color-neutral-700)]">
                        Ikuti tes masuk dan sesi wawancara
                    </p>
                </div>
                <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2">
                    <i data-lucide="chevron-right" class="w-8 h-8 text-[var(--color-primary)]/30"></i>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="bg-gradient-to-br from-orange-50 to-white rounded-2xl p-8 shadow-md text-center h-full">
                <div class="bg-orange-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl">
                    4
                </div>
                <h3 class="mb-4">Daftar Ulang</h3>
                <p class="text-[var(--color-neutral-700)]">
                    Terima surat penerimaan dan lengkapi daftar ulang
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
                    <i data-lucide="file-text" class="w-5 h-5"></i>
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
                        <i data-lucide="folder" class="w-7 h-7 text-blue-600"></i>
                    </div>
                    <h3>Dokumen yang Diperlukan</h3>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-[var(--color-neutral-700)]">Akta kelahiran (asli dan fotokopi)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-[var(--color-neutral-700)]">Rapor sekolah sebelumnya (2 tahun terakhir)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-[var(--color-neutral-700)]">Fotokopi Kartu Keluarga (KK)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-[var(--color-neutral-700)]">Fotokopi KTP orang tua</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-[var(--color-neutral-700)]">Pas foto terbaru ukuran 3x4 cm (4 lembar)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-[var(--color-neutral-700)]">Surat keterangan sehat dari dokter</span>
                    </li>
                </ul>
            </div>

            <!-- Important Information -->
            <div class="bg-white rounded-2xl p-8 shadow-md">
                <div class="flex items-center gap-4 mb-6">
                    <div class="bg-green-100 w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i data-lucide="info" class="w-7 h-7 text-green-600"></i>
                    </div>
                    <h3>Jadwal Penting</h3>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i data-lucide="calendar" class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                        <div>
                            <div class="text-[var(--color-neutral-900)] mb-1">Periode Pendaftaran</div>
                            <div class="text-sm text-[var(--color-neutral-700)]">15 Januari - 31 Maret 2026</div>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="calendar" class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                        <div>
                            <div class="text-[var(--color-neutral-900)] mb-1">Tes Masuk</div>
                            <div class="text-sm text-[var(--color-neutral-700)]">10-20 April 2026</div>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="calendar" class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                        <div>
                            <div class="text-[var(--color-neutral-900)] mb-1">Pengumuman Hasil</div>
                            <div class="text-sm text-[var(--color-neutral-700)]">1 Mei 2026</div>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="calendar" class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                        <div>
                            <div class="text-[var(--color-neutral-900)] mb-1">Daftar Ulang</div>
                            <div class="text-sm text-[var(--color-neutral-700)]">5-15 Mei 2026</div>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="calendar" class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                        <div>
                            <div class="text-[var(--color-neutral-900)] mb-1">Tahun Ajaran Dimulai</div>
                            <div class="text-sm text-[var(--color-neutral-700)]">15 Juli 2026</div>
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
                    <i data-lucide="file-edit" class="w-5 h-5"></i>
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
                href="https://docs.google.com/forms/d/e/YOUR_GOOGLE_FORM_ID/viewform" 
                target="_blank"
                class="inline-flex items-center gap-3 bg-[var(--color-primary)] text-white px-8 py-4 rounded-xl hover:bg-[var(--color-primary-dark)] transition-colors">
                <span>Buka Formulir di Tab Baru</span>
                <i data-lucide="external-link" class="w-5 h-5"></i>
            </a>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-16 bg-[var(--color-neutral-50)]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] text-white rounded-2xl p-10">
            <div class="text-center mb-8">
                <h2 class="text-white mb-4">Butuh Bantuan?</h2>
                <p class="text-white/90 text-lg">
                    Tim penerimaan siswa baru kami siap membantu Anda dengan pertanyaan apapun
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center">
                    <div class="bg-white/20 backdrop-blur-sm w-14 h-14 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="phone" class="w-7 h-7"></i>
                    </div>
                    <div class="text-sm text-white/80 mb-2">Telepon</div>
                    <div class="text-white">+62 21 1234 5678</div>
                </div>
                <div class="text-center">
                    <div class="bg-white/20 backdrop-blur-sm w-14 h-14 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="mail" class="w-7 h-7"></i>
                    </div>
                    <div class="text-sm text-white/80 mb-2">Email</div>
                    <div class="text-white">ppdb@smpn6dongko.sch.id</div>
                </div>
                <div class="text-center">
                    <div class="bg-white/20 backdrop-blur-sm w-14 h-14 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="clock" class="w-7 h-7"></i>
                    </div>
                    <div class="text-sm text-white/80 mb-2">Jam Kerja</div>
                    <div class="text-white">Senin-Jumat: 08:00 - 16:00</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection