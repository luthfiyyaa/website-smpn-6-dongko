@extends('layouts.admin')

@section('title', 'Tambah Prestasi')

@section('content')
<div class="mb-8">
    <div class="flex items-center gap-3 mb-4">
        <a href="{{ route('admin.achievement.index') }}" 
           class="text-[var(--color-neutral-700)] hover:text-[var(--color-primary)] transition-colors">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h1>Tambah Prestasi Baru</h1>
    </div>
    <p class="text-[var(--color-neutral-700)]">Tambahkan prestasi siswa baru</p>
</div>

@if ($errors->any())
    <div class="bg-red-50 border border-red-200 text-red-700 px-6 py-4 rounded-lg mb-6">
        <div class="flex items-center gap-3 mb-2">
            <i class="fa-solid fa-circle-exclamation"></i>
            <span>Mohon perbaiki kesalahan berikut:</span>
        </div>
        <ul class="list-disc list-inside space-y-1 ml-8">
            @foreach ($errors->all() as $error)
                <li class="text-sm">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.achievement.store') }}" method="POST">
    @csrf
    
    <div class="grid lg:grid-cols-3 gap-6">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Nama Lomba -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label for="title" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Nama Lomba <span class="text-red-500">*</span>
                </label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    value="{{ old('title') }}"
                    required
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    placeholder="Contoh: Lomba Kaligrafi">
                <p class="text-sm text-[var(--color-neutral-700)] mt-2">Masukkan nama lomba atau kompetisi</p>
            </div>

            <!-- Prestasi & Tingkat -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Prestasi -->
                    <div>
                        <label for="achievement" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                            Prestasi yang Diraih <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            name="achievement" 
                            id="achievement" 
                            value="{{ old('achievement') }}"
                            required
                            class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                            placeholder="Contoh: Juara 1">
                        <p class="text-sm text-[var(--color-neutral-700)] mt-2">Juara 1, Juara 2, Juara Harapan, dll</p>
                    </div>

                    <!-- Tingkat -->
                    <div>
                        <label for="level" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                            Tingkat Lomba <span class="text-red-500">*</span>
                        </label>
                        <select 
                            name="level" 
                            id="level"
                            required
                            class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent">
                            <option value="">Pilih Tingkat</option>
                            <option value="Tingkat Kecamatan Dongko" {{ old('level') == 'Tingkat Kecamatan Dongko' ? 'selected' : '' }}>Tingkat Kecamatan Dongko</option>
                            <option value="Tingkat Kabupaten Trenggalek" {{ old('level') == 'Tingkat Kabupaten Trenggalek' ? 'selected' : '' }}>Tingkat Kabupaten Trenggalek</option>
                            <option value="Tingkat Provinsi Jawa Timur" {{ old('level') == 'Tingkat Provinsi Jawa Timur' ? 'selected' : '' }}>Tingkat Provinsi Jawa Timur</option>
                            <option value="Tingkat Nasional" {{ old('level') == 'Tingkat Nasional' ? 'selected' : '' }}>Tingkat Nasional</option>
                            <option value="Tingkat Internasional" {{ old('level') == 'Tingkat Internasional' ? 'selected' : '' }}>Tingkat Internasional</option>
                        </select>
                        <p class="text-sm text-[var(--color-neutral-700)] mt-2">Pilih tingkat kompetisi</p>
                    </div>
                </div>
            </div>

            <!-- Tahun -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label for="year" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Tahun Prestasi <span class="text-red-500">*</span>
                </label>
                <input 
                    type="number" 
                    name="year" 
                    id="year" 
                    value="{{ old('year', date('Y')) }}"
                    min="2000"
                    max="{{ date('Y') + 1 }}"
                    required
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    placeholder="{{ date('Y') }}">
                <p class="text-sm text-[var(--color-neutral-700)] mt-2">Tahun prestasi diraih</p>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Display Options -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="mb-4">Opsi Tampilan</h3>
                
                <!-- Active Status -->
                <div class="mb-4">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input 
                            type="checkbox" 
                            name="is_active" 
                            value="1"
                            {{ old('is_active', true) ? 'checked' : '' }}
                            class="w-5 h-5 text-[var(--color-primary)] border-[var(--color-neutral-300)] rounded focus:ring-2 focus:ring-[var(--color-primary)]">
                        <span class="text-[var(--color-neutral-900)]">Aktif</span>
                    </label>
                    <p class="text-sm text-[var(--color-neutral-700)] ml-8 mt-1">Tampilkan prestasi ini di website</p>
                </div>

                <!-- Display Order -->
                <div>
                    <label for="order" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                        Urutan Tampilan
                    </label>
                    <input 
                        type="number" 
                        name="order" 
                        id="order"
                        value="{{ old('order', 0) }}"
                        min="0"
                        class="w-full px-4 py-2 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)]">
                    <p class="text-sm text-[var(--color-neutral-700)] mt-1">Angka lebih kecil muncul lebih dulu (0 = otomatis)</p>
                </div>
            </div>

            <!-- Info -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                <div class="flex items-start gap-3 mb-3">
                    <i class="fa-solid fa-lightbulb text-blue-600 flex-shrink-0 mt-0.5"></i>
                    <h4 class="text-blue-900">Informasi</h4>
                </div>
                <ul class="space-y-2 text-sm text-blue-800">
                    <li class="flex items-start gap-2">
                        <span>•</span>
                        <span>Warna dan icon akan ditentukan otomatis berdasarkan urutan</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span>•</span>
                        <span>Maksimal 4-8 prestasi di halaman utama</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span>•</span>
                        <span>Gunakan nama lomba yang jelas dan ringkas</span>
                    </li>
                </ul>
            </div>

            <!-- Action Buttons -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <button 
                    type="submit"
                    class="w-full bg-[var(--color-primary)] text-white py-3 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors flex items-center justify-center gap-2 mb-3">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Simpan Prestasi</span>
                </button>
                <a 
                    href="{{ route('admin.achievement.index') }}"
                    class="w-full bg-[var(--color-neutral-200)] text-[var(--color-neutral-700)] py-3 rounded-lg hover:bg-[var(--color-neutral-300)] transition-colors flex items-center justify-center gap-2">
                    <i class="fa-solid fa-x"></i>
                    <span>Cancel</span>
                </a>
            </div>
        </div>
    </div>
</form>
@endsection