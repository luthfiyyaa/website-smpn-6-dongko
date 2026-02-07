@extends('layouts.admin')

@section('title', 'Kelola Prestasi Siswa')

@section('content')
<div class="mb-8">
    <div class="flex items-center justify-between mb-4">
        <div>
            <h1 class="mb-2">Kelola Prestasi Siswa</h1>
            <p class="text-[var(--color-neutral-700)]">Tambah, edit, atau hapus prestasi siswa</p>
        </div>
        <a href="{{ route('admin.achievement.create') }}" 
           class="bg-[var(--color-primary)] text-white px-6 py-3 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors flex items-center gap-2">
            <i class="fa-solid fa-plus"></i>
            <span>Tambah Prestasi</span>
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

@if($achievements->count() > 0)
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($achievements as $index => $achievement)
            @php
                $style = $achievement->getColorAndIcon($index);
            @endphp
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                <!-- Header with Color -->
                <div class="bg-gradient-to-br {{ $style['gradient'] }} p-6 border-t-4 {{ $style['border'] }}">
                    <div class="{{ $style['icon_bg'] }} w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-{{ $style['icon'] }} text-3xl {{ $style['icon_text'] }}"></i>
                    </div>
                    <div class="{{ $style['badge_bg'] }} text-white text-center py-2 rounded-lg">
                        <span class="font-bold">{{ $achievement->achievement }}</span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-5">
                    <h3 class="text-lg font-bold text-center mb-2 text-[var(--color-neutral-900)]">
                        {{ $achievement->title }}
                    </h3>
                    <p class="text-sm text-center text-[var(--color-neutral-700)] mb-2">
                        {{ $achievement->level }}
                    </p>
                    <p class="text-xs text-center text-[var(--color-neutral-500)] mb-4">
                        Tahun {{ $achievement->year }}
                    </p>

                    <!-- Status & Order -->
                    <div class="flex gap-2 mb-4">
                        @if($achievement->is_active)
                            <span class="flex-1 bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full text-center">
                                Aktif
                            </span>
                        @else
                            <span class="flex-1 bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full text-center">
                                Tidak Aktif
                            </span>
                        @endif
                        <span class="bg-[var(--color-neutral-200)] text-[var(--color-neutral-700)] text-xs px-3 py-1 rounded-full">
                            #{{ $achievement->order }}
                        </span>
                    </div>

                    <!-- Actions -->
                    <div class="flex gap-2 pt-4 border-t border-[var(--color-neutral-200)]">
                        <a href="{{ route('admin.achievement.edit', $achievement) }}" 
                           class="flex-1 bg-yellow-500 text-white py-2 rounded-lg hover:bg-yellow-600 transition-colors flex items-center justify-center gap-2">
                            <i class="fa-solid fa-pencil"></i>
                            <span class="text-sm">Edit</span>
                        </a>
                        <form action="{{ route('admin.achievement.destroy', $achievement) }}" 
                              method="POST" 
                              onsubmit="return confirm('Yakin ingin menghapus prestasi {{ $achievement->title }}?');"
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
            <i class="fa-solid fa-trophy text-[var(--color-neutral-400)]"></i>
        </div>
        <h3 class="text-xl font-semibold text-[var(--color-neutral-900)] mb-2">
            Belum Ada Prestasi
        </h3>
        <p class="text-[var(--color-neutral-700)] mb-6">
            Mulai tambahkan prestasi siswa untuk ditampilkan di website
        </p>
        <a href="{{ route('admin.achievement.create') }}" 
           class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-6 py-3 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors">
            <i class="fa-solid fa-plus"></i>
            <span>Tambah Prestasi Pertama</span>
        </a>
    </div>
@endif
@endsection