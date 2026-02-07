@extends('layouts.admin')

@section('title', 'Pengaturan Sekolah')

@section('content')
<div class="mb-8">
    <div class="flex items-center gap-3 mb-4">
        <a href="{{ route('admin.dashboard') }}" 
           class="text-[var(--color-neutral-700)] hover:text-[var(--color-primary)] transition-colors">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h1>Pengaturan Sekolah</h1>
    </div>
    <p class="text-[var(--color-neutral-700)]">Kelola informasi sekolah, kepala sekolah, dan jadwal PPDB</p>
</div>

@if(session('success'))
    <div class="bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-lg mb-6">
        <div class="flex items-center gap-3">
            <i class="fa-solid fa-circle-check"></i>
            <span>{{ session('success') }}</span>
        </div>
    </div>
@endif

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

<form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="grid lg:grid-cols-3 gap-6">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            
            <!-- Informasi Kepala Sekolah -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-[var(--color-neutral-200)]">
                    <div class="bg-blue-100 p-2 rounded-lg">
                        <i class="fa-solid fa-circle-user text-blue-600"></i>
                    </div>
                    <h2>Informasi Kepala Sekolah</h2>
                </div>

                <!-- Foto Kepala Sekolah -->
                <div class="mb-6">
                    <label class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                        Foto Kepala Sekolah
                    </label>
                    
                    @if($settings->principal_photo)
                        <div class="mb-4">
                            <img src="{{ asset('storage/' . $settings->principal_photo) }}" 
                                 alt="Principal Photo" 
                                 id="currentPhoto"
                                 class="w-48 h-48 object-cover rounded-lg shadow-lg">
                        </div>
                    @endif

                    <input 
                        type="file" 
                        name="principal_photo" 
                        id="principal_photo"
                        accept="image/*"
                        onchange="previewPrincipalPhoto(event)"
                        class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent">
                    <p class="text-sm text-[var(--color-neutral-700)] mt-2">Format: JPG, JPEG, PNG (Max 2MB)</p>
                    
                    <!-- Preview -->
                    <div id="photoPreview" class="mt-4 hidden">
                        <p class="text-sm text-[var(--color-neutral-900)] mb-2">Preview:</p>
                        <img id="preview" class="w-48 h-48 object-cover rounded-lg shadow-lg" alt="Preview">
                    </div>
                </div>

                <!-- Nama Kepala Sekolah -->
                <div class="mb-6">
                    <label for="principal_name" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                        Nama Kepala Sekolah
                    </label>
                    <input 
                        type="text" 
                        name="principal_name" 
                        id="principal_name"
                        value="{{ old('principal_name', $settings->principal_name) }}"
                        placeholder="Contoh: Wardoyo, S.Kom"
                        class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent">
                </div>

                <!-- Jabatan -->
                <div class="mb-6">
                    <label for="principal_title" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                        Jabatan
                    </label>
                    <input 
                        type="text" 
                        name="principal_title" 
                        id="principal_title"
                        value="{{ old('principal_title', $settings->principal_title) }}"
                        placeholder="Contoh: Kepala Sekolah SMP Negeri 6 Dongko"
                        class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent">
                </div>

                <!-- Sambutan -->
                <div>
                    <label for="principal_message" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                        Sambutan Kepala Sekolah
                    </label>
                    <textarea 
                        name="principal_message" 
                        id="principal_message"
                        rows="12"
                        placeholder="Masukkan sambutan kepala sekolah..."
                        class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent">{{ old('principal_message', $settings->principal_message) }}</textarea>
                    <p class="text-sm text-[var(--color-neutral-700)] mt-2">Sambutan akan ditampilkan di halaman beranda</p>
                </div>
            </div>

            <!-- Jadwal PPDB -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-[var(--color-neutral-200)]">
                    <div class="bg-green-100 p-2 rounded-lg">
                        <i class="fa-solid fa-calendar text-green-600"></i>
                    </div>
                    <h2>Jadwal PPDB SMP Negeri 6 Dongko</h2>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Periode Pendaftaran -->
                    <div>
                        <label for="ppdb_start_date" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                            Tanggal Mulai Pendaftaran
                        </label>
                        <input 
                            type="date" 
                            name="ppdb_start_date" 
                            id="ppdb_start_date"
                            value="{{ old('ppdb_start_date', $settings->ppdb_start_date?->format('Y-m-d')) }}"
                            class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent">
                    </div>

                    <div>
                        <label for="ppdb_end_date" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                            Tanggal Akhir Pendaftaran
                        </label>
                        <input 
                            type="date" 
                            name="ppdb_end_date" 
                            id="ppdb_end_date"
                            value="{{ old('ppdb_end_date', $settings->ppdb_end_date?->format('Y-m-d')) }}"
                            class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent">
                    </div>

                    <!-- Tes Masuk -->
                    <div>
                        <label for="test_start_date" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                            Tanggal Mulai Tes Masuk
                        </label>
                        <input 
                            type="date" 
                            name="test_start_date" 
                            id="test_start_date"
                            value="{{ old('test_start_date', $settings->test_start_date?->format('Y-m-d')) }}"
                            class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent">
                    </div>

                    <div>
                        <label for="test_end_date" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                            Tanggal Akhir Tes Masuk
                        </label>
                        <input 
                            type="date" 
                            name="test_end_date" 
                            id="test_end_date"
                            value="{{ old('test_end_date', $settings->test_end_date?->format('Y-m-d')) }}"
                            class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent">
                    </div>

                    <!-- Pengumuman -->
                    <div>
                        <label for="announcement_date" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                            Tanggal Pengumuman Hasil
                        </label>
                        <input 
                            type="date" 
                            name="announcement_date" 
                            id="announcement_date"
                            value="{{ old('announcement_date', $settings->announcement_date?->format('Y-m-d')) }}"
                            class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent">
                    </div>

                    <!-- Daftar Ulang -->
                    <div>
                        <label for="reregistration_start_date" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                            Tanggal Mulai Daftar Ulang
                        </label>
                        <input 
                            type="date" 
                            name="reregistration_start_date" 
                            id="reregistration_start_date"
                            value="{{ old('reregistration_start_date', $settings->reregistration_start_date?->format('Y-m-d')) }}"
                            class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent">
                    </div>

                    <div>
                        <label for="reregistration_end_date" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                            Tanggal Akhir Daftar Ulang
                        </label>
                        <input 
                            type="date" 
                            name="reregistration_end_date" 
                            id="reregistration_end_date"
                            value="{{ old('reregistration_end_date', $settings->reregistration_end_date?->format('Y-m-d')) }}"
                            class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent">
                    </div>

                    <!-- Tahun Ajaran Mulai -->
                    <div>
                        <label for="academic_year_start" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                            Tahun Ajaran Dimulai
                        </label>
                        <input 
                            type="date" 
                            name="academic_year_start" 
                            id="academic_year_start"
                            value="{{ old('academic_year_start', $settings->academic_year_start?->format('Y-m-d')) }}"
                            class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent">
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Info Tips -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                <div class="flex items-start gap-3 mb-3">
                    <i class="fa-solid fa-lightbulb text-blue-600 flex-shrink-0 mt-0.5"></i>
                    <h4 class="text-blue-900">Informasi</h4>
                </div>
                <ul class="space-y-2 text-sm text-blue-800">
                    <li class="flex items-start gap-2">
                        <span>•</span>
                        <span>Foto kepala sekolah akan ditampilkan di halaman beranda</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span>•</span>
                        <span>Sambutan akan muncul di bawah foto kepala sekolah</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span>•</span>
                        <span>Jadwal PPDB akan muncul di halaman pendaftaran</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span>•</span>
                        <span>Pastikan tanggal yang diinput sudah benar</span>
                    </li>
                </ul>
            </div>

            <!-- Action Buttons -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <button 
                    type="submit"
                    class="w-full bg-[var(--color-primary)] text-white py-3 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors flex items-center justify-center gap-2 mb-3">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Simpan Pengaturan</span>
                </button>
                <a 
                    href="{{ route('admin.dashboard') }}"
                    class="w-full bg-[var(--color-neutral-200)] text-[var(--color-neutral-700)] py-3 rounded-lg hover:bg-[var(--color-neutral-300)] transition-colors flex items-center justify-center gap-2">
                    <i class="fa-solid fa-x"></i>
                    <span>Cancel</span>
                </a>
            </div>

            <!-- Preview Status -->
            @if($settings->ppdb_start_date && $settings->ppdb_end_date)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h4 class="mb-4">Status PPDB</h4>
                    <div class="space-y-3">
                        @if($settings->is_ppdb_open)
                            <div class="flex items-center gap-3 text-green-700 bg-green-50 px-4 py-3 rounded-lg">
                                <i class="fa-solid fa-circle-check"></i>
                                <span class="text-sm">PPDB Sedang Dibuka</span>
                            </div>
                        @else
                            <div class="flex items-center gap-3 text-orange-700 bg-orange-50 px-4 py-3 rounded-lg">
                                <i class="fa-solid fa-clock"></i>
                                <span class="text-sm">PPDB Belum/Sudah Ditutup</span>
                            </div>
                        @endif
                        
                        <div class="pt-3 border-t border-[var(--color-neutral-200)] text-sm text-[var(--color-neutral-700)]">
                            <p class="mb-1">Periode PPDB:</p>
                            <p class="text-[var(--color-neutral-900)]">
                                {{ $settings->formatted_ppdb_period }}
                            </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</form>
@endsection

@push('scripts')
<script>
function previewPrincipalPhoto(event) {
    const file = event.target.files[0];
    if (file) {
        // Check file size (2MB max)
        if (file.size > 2 * 1024 * 1024) {
            alert('Ukuran file harus kurang dari 2MB');
            event.target.value = '';
            return;
        }
        
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('preview');
            const previewContainer = document.getElementById('photoPreview');
            const currentPhoto = document.getElementById('currentPhoto');
            
            preview.src = e.target.result;
            previewContainer.classList.remove('hidden');
            
            if (currentPhoto) {
                currentPhoto.classList.add('hidden');
            }
        }
        reader.readAsDataURL(file);
    }
}
</script>
@endpush