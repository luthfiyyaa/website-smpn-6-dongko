@php
    use Illuminate\Support\Str;
@endphp


@extends('layouts.app')

@section('title', 'Home - Harmony Academy')
@section('description', 'Welcome to Harmony Academy - Nurturing minds, inspiring futures through quality education')

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
                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </a>
                <a href="{{ route('profile') }}" class="border-2 border-white text-white px-10 py-4 rounded-lg hover:bg-white/10 transition-colors">
                    Pelajari Selengkapnya
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 relative z-10 mb-32">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl shadow-lg p-8 text-center">
            <i data-lucide="users" class="w-12 h-12 text-[var(--color-primary)] mx-auto mb-4"></i>
            <div class="text-4xl text-[var(--color-neutral-900)] mb-2">1,200+</div>
            <div class="text-[var(--color-neutral-700)]">Students</div>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-8 text-center">
            <i data-lucide="user-check" class="w-12 h-12 text-[var(--color-primary)] mx-auto mb-4"></i>
            <div class="text-4xl text-[var(--color-neutral-900)] mb-2">120+</div>
            <div class="text-[var(--color-neutral-700)]">Teachers</div>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-8 text-center">
            <i data-lucide="award" class="w-12 h-12 text-[var(--color-primary)] mx-auto mb-4"></i>
            <div class="text-4xl text-[var(--color-neutral-900)] mb-2">30+</div>
            <div class="text-[var(--color-neutral-700)]">Years</div>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-8 text-center">
            <i data-lucide="trophy" class="w-12 h-12 text-[var(--color-primary)] mx-auto mb-4"></i>
            <div class="text-4xl text-[var(--color-neutral-900)] mb-2">500+</div>
            <div class="text-[var(--color-neutral-700)]">Awards</div>
        </div>
    </div>
</section>

<!-- Principal's Message -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-32">
    <div class="bg-white rounded-2xl shadow-md overflow-hidden">
        <div class="grid md:grid-cols-2 gap-0 items-center">
            <div class="h-full">
                <img 
                    src="{{ asset('storage/assets/foto-kepsek.jpeg') }}" 
                    alt="Principal"
                    class="w-full h-full object-cover min-h-[400px]">
            </div>
            <div class="p-10 lg:p-12">
                <h2 class="mb-6">Sambutan Kepala Sekolah</h2>
                <p class="mb-5 leading-relaxed">
                    Assalamu'alaikum warahmatullahi wabarakatuh
                </p>
                <p class="mb-5 leading-relaxed">
                    Puji syukur kita panjatkan ke hadirat Tuhan Yang Maha Esa atas rahmat dan karunia-Nya, sehingga sekolah kami dapat menghadirkan situs resmi dengan domain sch.id sebagai bagian dari transformasi digital di bidang pendidikan. Kehadiran website ini merupakan bentuk komitmen kami dalam memberikan layanan informasi yang cepat, akurat, dan transparan kepada seluruh warga sekolah, orang tua, alumni, dan masyarakat umum. Website ini juga menjadi jendela utama untuk memperkenalkan profil sekolah, visi misi, program unggulan, serta capaian prestasi siswa dan guru kepada publik.
                </p>
                <p class="mb-5 leading-relaxed">
                    Melalui website ini, kami menyediakan berbagai fasilitas yang dapat dimanfaatkan secara maksimal, antara lain informasi akademik, agenda kegiatan sekolah, pengumuman penting, galeri foto dan video, hingga layanan administrasi digital seperti SPMB (Sistem Penerimaan Murid Baru) secara online. Selain itu, guru dan siswa juga dapat mengakses bahan terbuka dan media pembelajaran interaktif yang terintegrasi dengan platform digital sekolah. Kami berharap, kehadiran website ini dapat memperkuat sinergi antara sekolah dan masyarakat, serta menjadi sarana komunikasi dan kolaborasi yang produktif demi terwujudnya pendidikan yang unggul, adaptif, dan berdaya saing.
                </p>
                <p class="mb-5 leading-relaxed">
                    Wassalamu'alaikum warahmatullahi wabarakatuh
                </p>
                <div class="mt-8 pt-6 border-t border-[var(--color-neutral-200)]">
                    <p class="text-[var(--color-neutral-900)]">Wardoyo, S.Kom</p>
                    <p class="text-[var(--color-neutral-700)] mt-1">Kepala Sekolah SMP Negeri 6 Dongko</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Highlights Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-32"> 
    <div class="flex justify-between items-end mb-12"> 
        <div> 
            <h2 class="mb-3">Berita Terbaru</h2> 
            <p class="text-[var(--color-neutral-700)]">Tetap ikuti perkembangan berita, acara, dan pencapaian terbaru kami.</p> 
        </div> 
        <a href="{{ route('news') }}" class="hidden sm:flex items-center gap-2 text-[var(--color-primary)] hover:text-[var(--color-primary-dark)]"> Lainnya 
            <i data-lucide="arrow-right" class="w-5 h-5"></i> 
        </a> 
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($latestNews as $news)
            <a
                href="{{ route('news.detail', $news->id) }}"
                class="group bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300"
            >
                <!-- Image -->
                <div class="relative h-48 overflow-hidden">
                    @if($news->image)
                        <img src="{{ asset('storage/' . $news->image) }}" 
                            alt="{{ $news->title }}" 
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-[var(--color-primary)]/20 to-[var(--color-secondary)]/20">
                                <i data-lucide="image" class="w-16 h-16 text-[var(--color-neutral-400)]"></i>
                            </div>
                        @endif

                    <!-- Badge kategori -->
                    <span class="absolute top-4 left-4 bg-white/90 text-[var(--color-primary)] text-xs font-medium px-3 py-1 rounded-full shadow">
                        {{ $news->category ?? 'Academic' }}
                    </span>
                </div>

                <!-- Content -->
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-[var(--color-neutral-600)] mb-3">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                        {{ $news->created_at->format('M d, Y') }}
                    </div>

                    <h3 class="text-lg font-semibold text-[var(--color-neutral-900)] mb-2 line-clamp-2">
                        {{ $news->title }}
                    </h3>

                    <p class="text-sm text-[var(--color-neutral-700)] line-clamp-2">
                        {{ Str::limit(strip_tags($news->content), 90) }}
                    </p>
                </div>
            </a>
        @empty
            <p class="col-span-3 text-center text-[var(--color-neutral-600)]">
                Tidak ada berita.
            </p>
        @endforelse
    </div>
</section>

<!-- Photo Gallery -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-32">
    <h2 class="mb-12 text-center">Highlights Galeri Sekolah</h2>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="aspect-square rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
            <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400" 
                 alt="Gallery 1" 
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
        </div>
        <div class="aspect-square rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400" 
                 alt="Gallery 2" 
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
        </div>
        <div class="aspect-square rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400" 
                 alt="Gallery 3" 
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
        </div>
        <div class="aspect-square rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400" 
                 alt="Gallery 4" 
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
        </div>
    </div>
    <div class="text-center mt-10">
        <a href="{{ route('facilities') }}" class="text-[var(--color-primary)] hover:text-[var(--color-primary-dark)] inline-flex items-center gap-2">
            Eksplor Fasilitas Kami
            <i data-lucide="arrow-right" class="w-5 h-5"></i>
        </a>
    </div>
</section>

<!-- CTA Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-gradient-to-r from-[var(--color-primary)] to-[var(--color-secondary)] rounded-2xl p-12 lg:p-16 text-center text-white">
        {{-- <h2 class="text-white mb-6">Ready to Join Our Community?</h2> --}}
        <p class="text-xl mb-10 text-white/90 max-w-2xl mx-auto leading-relaxed">
            Mari bergabung dengan kami dan meningkatkan kualitas pendidikan. Segera mendaftar sekarang.
        </p>
        <a href="{{ route('ppdb') }}" class="bg-white text-[var(--color-primary)] px-10 py-4 rounded-lg hover:bg-[var(--color-neutral-100)] transition-colors inline-flex items-center gap-2">
            Mulai Mendaftar
            <i data-lucide="arrow-right" class="w-5 h-5"></i>
        </a>
    </div>
</section>
@endsection
