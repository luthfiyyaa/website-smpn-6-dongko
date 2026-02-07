@extends('layouts.app')

@section('title', 'School Facilities - Harmony Academy')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-block bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full mb-6">
            <span class="flex items-center gap-2">
                <i class="fa-solid fa-building text-sm"></i>
                Keliling Sekolah
            </span>
        </div>
        <h1 class="text-white mb-6 text-4xl md:text-5xl font-bold">Fasilitas</h1>
        <p class="text-xl text-white/90 max-w-3xl mx-auto">
            Eksplor fasilitas sekolah kami
        </p>
    </div>
</section>

<!-- Main Facilities -->
<section class="py-16 bg-[var(--color-neutral-50)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="mb-6">Fasilitas SMP Negeri 6 Dongko</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            @forelse($facilities as $facility)
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                    <div class="h-80 md:h-96 overflow-hidden">
                        <img src="{{ asset('storage/' . $facility->image) }}" 
                             alt="{{ $facility->name }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col justify-center items-center">
                        <h3 class="text-2xl font-semibold text-center">{{ $facility->name }}</h3>
                        @if($facility->description)
                            <p class="text-center text-[var(--color-neutral-700)] mt-2">
                                {{ $facility->description }}
                            </p>
                        @endif
                    </div>
                </div>
            @empty
                <!-- Fallback jika belum ada data -->
                <div class="col-span-2 text-center py-12">
                    <div class="bg-[var(--color-neutral-100)] w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-building text-4xl text-[var(--color-neutral-400)]"></i>
                    </div>
                    <p class="text-[var(--color-neutral-600)]">Belum ada fasilitas yang ditampilkan</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Photo Gallery -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-block bg-[var(--color-primary)]/10 px-6 py-3 rounded-full mb-6">
                <span class="text-[var(--color-primary)] flex items-center gap-2">
                    <i class="fa-regular fa-images text-sm"></i>
                    Galeri Foto Sekolah
                </span>
            </div>
            <p class="text-xl text-[var(--color-neutral-700)] max-w-3xl mx-auto">
                Mari melihat galeri foto sekolah kami
            </p>
        </div>

        @if($galleries->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($galleries as $gallery)
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer aspect-[4/3]">
                        <img src="{{ asset('storage/' . $gallery->image) }}" 
                             alt="{{ $gallery->title }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-6 text-white w-full">
                                <h4 class="mb-2 text-white">{{ $gallery->title }}</h4>
                                @if($gallery->description)
                                    <p class="text-sm text-white/90">{{ $gallery->description }}</p>
                                @endif
                                @if($gallery->category)
                                    <span class="inline-block mt-3 bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-xs">
                                        {{ $gallery->category }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="bg-[var(--color-neutral-100)] w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fa-regular fa-images text-3xl text-[var(--color-neutral-400)]"></i>
                </div>
                <h3 class="mb-4 text-[var(--color-neutral-900)]">Gallery Coming Soon</h3>
                <p class="text-[var(--color-neutral-700)]">
                    Campus photos will be available soon. Check back later!
                </p>
            </div>
        @endif
    </div>
</section>


@endsection