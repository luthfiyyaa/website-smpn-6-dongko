@extends('layouts.admin')

@section('title', 'Kelola Fasilitas')

@section('content')
<div class="mb-8">
    <div class="flex items-center justify-between mb-4">
        <div>
            <h1 class="mb-2">Kelola Fasilitas</h1>
            <p class="text-[var(--color-neutral-700)]">Tambah, edit, atau hapus fasilitas sekolah</p>
        </div>
        <a href="{{ route('admin.facilities.create') }}" 
           class="bg-[var(--color-primary)] text-white px-6 py-3 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors flex items-center gap-2">
            <i class="fa-solid fa-plus"></i>
            <span>Tambah Fasilitas</span>
        </a>
    </div>
</div>

@if(session('success'))
    <div class="bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-lg mb-6">
        <div class="flex items-center gap-3">
            <i class="fa-solid fa-circle-check"></i>
            <span>{{ session('success') }}</span>
        </div>
    </div>
@endif

@if($facilities->count() > 0)
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($facilities as $facility)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                <!-- Image -->
                <div class="relative h-48 overflow-hidden bg-[var(--color-neutral-200)]">
                    <img src="{{ asset('storage/' . $facility->image) }}" 
                         alt="{{ $facility->name }}" 
                         class="w-full h-full object-cover">
                    
                    <!-- Status Badge -->
                    <div class="absolute top-3 left-3">
                        @if($facility->is_active)
                            <span class="bg-green-500 text-white text-xs px-3 py-1 rounded-full flex items-center gap-1">
                                <i class="fa-solid fa-check"></i>
                                Aktif
                            </span>
                        @else
                            <span class="bg-gray-500 text-white text-xs px-3 py-1 rounded-full flex items-center gap-1">
                                <i class="fa-solid fa-x"></i>
                                Tidak Aktif
                            </span>
                        @endif
                    </div>

                    <!-- Order Badge -->
                    <div class="absolute top-3 right-3">
                        <span class="bg-black/50 text-white text-xs px-3 py-1 rounded-full">
                            #{{ $facility->order }}
                        </span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-5">
                    <h3 class="text-lg font-semibold text-[var(--color-neutral-900)] mb-2">
                        {{ $facility->name }}
                    </h3>
                    
                    @if($facility->description)
                        <p class="text-sm text-[var(--color-neutral-700)] mb-4 line-clamp-2">
                            {{ $facility->description }}
                        </p>
                    @else
                        <p class="text-sm text-[var(--color-neutral-500)] italic mb-4">
                            Tidak ada deskripsi
                        </p>
                    @endif

                    <!-- Actions -->
                    <div class="flex gap-2 pt-4 border-t border-[var(--color-neutral-200)]">
                        <a href="{{ route('admin.facilities.edit', $facility) }}" 
                           class="flex-1 bg-yellow-500 text-white py-2 rounded-lg hover:bg-yellow-600 transition-colors flex items-center justify-center gap-2">
                            <i class="fa-solid fa-pencil"></i>
                            <span class="text-sm">Edit</span>
                        </a>
                        <form action="{{ route('admin.facilities.destroy', $facility) }}" 
                              method="POST" 
                              onsubmit="return confirm('Yakin ingin menghapus fasilitas {{ $facility->name }}?');"
                              class="flex-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition-colors flex items-center justify-center gap-2">
                                <i class="fa-solid fa-trash"></i>
                                <span class="text-sm">Hapus</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <!-- Empty State -->
    <div class="bg-white rounded-lg shadow-md p-12 text-center">
        <div class="bg-[var(--color-neutral-100)] w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fa-solid fa-building text-[var(--color-neutral-400)]"></i>
        </div>
        <h3 class="text-xl font-semibold text-[var(--color-neutral-900)] mb-2">
            Belum Ada Fasilitas
        </h3>
        <p class="text-[var(--color-neutral-700)] mb-6">
            Mulai tambahkan fasilitas sekolah untuk ditampilkan di website
        </p>
        <a href="{{ route('admin.facilities.create') }}" 
           class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-6 py-3 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors">
            <i class="fa-solid fa-plus"></i>
            <span>Tambah Fasilitas Pertama</span>
        </a>
    </div>
@endif
@endsection