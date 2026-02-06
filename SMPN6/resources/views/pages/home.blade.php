@php
    use Illuminate\Support\Str;
@endphp


@extends('layouts.app')

@section('title', 'Beranda - SMPN 6 Dongko')
@section('description', 'Selamat datang di Website SMP Negeri 6 Dongko')

@section('content')
<!-- Hero Section -->
<section class="relative h-[600px] bg-gradient-to-r from-[var(--color-primary)] to-[var(--color-primary-dark)] overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="{{ asset('storage/assets/foto-landing.jpeg') }}" 
             alt="School Building" 
             class="w-full h-full object-cover">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
        <div class="max-w-2xl">
            <h1 class="text-white mb-6">Selamat Datang di Website SMP Negeri 6 Dongko</h1>
            <p class="text-xl text-white/90 mb-10 leading-relaxed">
                Membina pikiran, menginspirasi masa depan. Di mana keunggulan bertemu peluang dalam pendidikan.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('ppdb') }}" class="bg-white text-[var(--color-primary)] px-10 py-4 rounded-lg hover:bg-[var(--color-neutral-100)] transition-colors flex items-center gap-2">
                    Daftar Sekarang
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="{{ route('profile') }}" class="border-2 border-white text-white px-10 py-4 rounded-lg hover:bg-white/10 transition-colors">
                    Pelajari Selengkapnya
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Program Unggulan (Stats Style) -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 relative z-10 mb-16">
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-xl transition">
            <i class="fa-solid fa-mosque text-4xl text-[var(--color-primary)] mb-4"></i>
            <div class="text-xl font-semibold mb-1">Taman Shurga</div>
            <div class="text-[var(--color-neutral-700)] text-sm">
                Sholat Dhuhur Berjamaah
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-xl transition">
            <i class="fa-solid fa-book-quran text-4xl text-[var(--color-primary)] mb-4"></i>
            <div class="text-xl font-semibold mb-1">Jumanji</div>
            <div class="text-[var(--color-neutral-700)] text-sm">
                Jumat Mengaji
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-xl transition">
            <i class="fa-solid fa-apple-whole text-4xl text-[var(--color-primary)] mb-4"></i>
            <div class="text-xl font-semibold mb-1">Sensazi</div>
            <div class="text-[var(--color-neutral-700)] text-sm">
                Sarapan Sehat Bergizi
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-xl transition">
            <i class="fa-solid fa-person-running text-4xl text-[var(--color-primary)] mb-4"></i>
            <div class="text-xl font-semibold mb-1">Saber</div>
            <div class="text-[var(--color-neutral-700)] text-sm">
                Senam Bersama
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-xl transition">
            <i class="fa-solid fa-book-open-reader text-4xl text-[var(--color-primary)] mb-4"></i>
            <div class="text-xl font-semibold mb-1">Bali Mesem</div>
            <div class="text-[var(--color-neutral-700)] text-sm">
                Baca 15 Menit
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-xl transition">
            <i class="fa-solid fa-drum text-4xl text-[var(--color-primary)] mb-4"></i>
            <div class="text-xl font-semibold mb-1">Miska</div>
            <div class="text-[var(--color-neutral-700)] text-sm">
                Kamis Karawitan
            </div>
        </div>

    </div>
</section>


<!-- Principal's Message -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="grid md:grid-cols-2 gap-0 items-center">
                <!-- Image -->
                <div class="h-full">
                    <img 
                        src="{{ asset('storage/assets/foto-kepsek.jpeg') }}" 
                        alt="Principal"
                        class="w-full h-full object-cover min-h-[500px]">
                </div>
                
                <!-- Content -->
                <div class="p-10 lg:p-12">
                    <h2 class="mb-6 text-4xl md:text-3xl font-bold">Sambutan Kepala Sekolah</h2>
                    
                    <div class="space-y-5 text-[var(--color-neutral-700)] leading-relaxed">
                        <p>Assalamu'alaikum warahmatullahi wabarakatuh</p>
                        
                        <p>
                            Puji syukur kita panjatkan ke hadirat Tuhan Yang Maha Esa atas rahmat dan karunia-Nya, 
                            sehingga sekolah kami dapat menghadirkan situs resmi dengan domain sch.id sebagai bagian 
                            dari transformasi digital di bidang pendidikan. Kehadiran website ini merupakan bentuk 
                            komitmen kami dalam memberikan layanan informasi yang cepat, akurat, dan transparan kepada 
                            seluruh warga sekolah, orang tua, alumni, dan masyarakat umum. Website ini juga menjadi 
                            jendela utama untuk memperkenalkan profil sekolah, visi misi, program unggulan, serta 
                            capaian prestasi siswa dan guru kepada publik.
                        </p>
                        
                        <p>
                            Melalui website ini, kami menyediakan berbagai fasilitas yang dapat dimanfaatkan secara 
                            maksimal, antara lain informasi akademik, agenda kegiatan sekolah, pengumuman penting, 
                            galeri foto dan video, hingga layanan administrasi digital seperti SPMB (Sistem Penerimaan 
                            Murid Baru) secara online. Selain itu, guru dan siswa juga dapat mengakses bahan terbuka 
                            dan media pembelajaran interaktif yang terintegrasi dengan platform digital sekolah. Kami 
                            berharap, kehadiran website ini dapat memperkuat sinergi antara sekolah dan masyarakat, 
                            serta menjadi sarana komunikasi dan kolaborasi yang produktif demi terwujudnya pendidikan 
                            yang unggul, adaptif, dan berdaya saing.
                        </p>
                        
                        <p>Wassalamu'alaikum warahmatullahi wabarakatuh</p>
                    </div>
                    
                    <div class="mt-8 pt-6 border-t border-[var(--color-neutral-200)]">
                        <p class="text-[var(--color-neutral-900)] font-semibold">Wardoyo, S.Kom</p>
                        <p class="text-[var(--color-neutral-700)] mt-1">Kepala Sekolah SMP Negeri 6 Dongko</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest News -->
<section class="py-16 bg-[var(--color-neutral-50)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-12 gap-4">
            <div>
                <h2 class="mb-3">Berita Terbaru</h2>
                <p class="text-[var(--color-neutral-700)]">
                    Tetap ikuti perkembangan berita, acara, dan pencapaian terbaru kami
                </p>
            </div>
            <a href="{{ route('news') }}" 
               class="inline-flex items-center gap-2 text-[var(--color-primary)] hover:text-[var(--color-primary-dark)] transition-colors">
                Lihat Semua
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <!-- News Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($latestNews as $news)
                <a href="{{ route('news.detail', $news->id) }}"
                   class="group bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300">
                    <!-- Image -->
                    <div class="relative h-48 overflow-hidden">
                        @if($news->image)
                            <img src="{{ asset('storage/' . $news->image) }}" 
                                 alt="{{ $news->title }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-[var(--color-primary)]/20 to-[var(--color-secondary)]/20">
                                <i class="fa-solid fa-image text-5xl text-[var(--color-neutral-400)]"></i>
                            </div>
                        @endif

                        <!-- Category Badge -->
                        <span class="absolute top-4 left-4 bg-white/90 text-[var(--color-primary)] text-xs font-medium px-3 py-1 rounded-full shadow">
                            {{ $news->category ?? 'Academic' }}
                        </span>
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-sm text-[var(--color-neutral-600)] mb-3">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>{{ $news->created_at->format('M d, Y') }}</span>
                        </div>

                        <h3 class="text-lg font-semibold text-[var(--color-neutral-900)] mb-2 line-clamp-2 group-hover:text-[var(--color-primary)] transition-colors">
                            {{ $news->title }}
                        </h3>

                        <p class="text-sm text-[var(--color-neutral-700)] line-clamp-2">
                            {{ Str::limit(strip_tags($news->content), 90) }}
                        </p>
                    </div>
                </a>
            @empty
                <div class="col-span-full text-center py-12">
                    <div class="bg-[var(--color-neutral-100)] w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-newspaper text-4xl text-[var(--color-neutral-400)]"></i>
                    </div>
                    <p class="text-[var(--color-neutral-600)]">Belum ada berita tersedia</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Photo Gallery -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="mb-4">Galeri Sekolah</h2>
            <p class="text-xl text-[var(--color-neutral-700)] max-w-3xl mx-auto">
                Lihat momen-momen berharga dan kegiatan di SMP Negeri 6 Dongko
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse ($galleries as $gallery)
                <div class="group relative aspect-square rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300">
                    <img 
                        src="{{ asset('storage/' . $gallery->image) }}" 
                        alt="{{ $gallery->title }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    
                    <!-- Overlay on Hover -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-4 text-white w-full">
                            <p class="text-sm font-medium">{{ $gallery->title }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <div class="bg-[var(--color-neutral-100)] w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-regular fa-images text-4xl text-[var(--color-neutral-400)]"></i>
                    </div>
                    <p class="text-[var(--color-neutral-600)]">Belum ada galeri yang ditampilkan</p>
                </div>
            @endforelse
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('facilities') }}" 
               class="inline-flex items-center gap-2 text-[var(--color-primary)] hover:text-[var(--color-primary-dark)] transition-colors">
                Lihat Semua Fasilitas
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center text-white">
            <h2 class="text-white mb-6">Siap Bergabung Bersama Kami?</h2>
            <p class="text-xl text-white/90 mb-10 max-w-2xl mx-auto leading-relaxed">
                Mari bergabung dengan kami dan meningkatkan kualitas pendidikan. Segera mendaftar sekarang.
            </p>
            <a href="{{ route('ppdb') }}" 
               class="inline-flex items-center gap-3 bg-white text-[var(--color-primary)] px-10 py-4 rounded-lg hover:bg-[var(--color-neutral-100)] transition-colors">
                <span>Mulai Mendaftar</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
@endsection
