@extends('layouts.admin')

@section('title', 'Tambah Fasilitas')

@section('content')
<div class="mb-8">
    <div class="flex items-center gap-3 mb-4">
        <a href="{{ route('admin.facilities.index') }}" 
           class="text-[var(--color-neutral-700)] hover:text-[var(--color-primary)] transition-colors">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h1>Tambah Fasilitas Baru</h1>
    </div>
    <p class="text-[var(--color-neutral-700)]">Tambahkan fasilitas baru ke dalam galeri sekolah</p>
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

<form action="{{ route('admin.facilities.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="grid lg:grid-cols-3 gap-6">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Gambar Fasilitas -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label for="image" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Gambar Fasilitas <span class="text-red-500">*</span>
                </label>
                <input 
                    type="file" 
                    name="image" 
                    id="image"
                    accept="image/*"
                    required
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    onchange="previewImage(event)">
                <p class="text-sm text-[var(--color-neutral-700)] mt-2">Rekomendasi: 1200x800px, JPG atau PNG, max 2MB</p>
                
                <!-- Image Preview -->
                <div id="imagePreview" class="mt-6 hidden">
                    <p class="text-sm text-[var(--color-neutral-900)] mb-3">Preview:</p>
                    <img id="preview" class="w-full rounded-lg shadow-lg" alt="Preview">
                </div>
            </div>

            <!-- Nama Fasilitas -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label for="name" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Nama Fasilitas <span class="text-red-500">*</span>
                </label>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    value="{{ old('name') }}"
                    required
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    placeholder="Contoh: Ruang Kelas">
                <p class="text-sm text-[var(--color-neutral-700)] mt-2">Masukkan nama fasilitas yang jelas dan deskriptif</p>
            </div>

            <!-- Deskripsi -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label for="description" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Deskripsi (Opsional)
                </label>
                <textarea 
                    name="description" 
                    id="description" 
                    rows="4"
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    placeholder="Masukkan deskripsi singkat tentang fasilitas...">{{ old('description') }}</textarea>
                <p class="text-sm text-[var(--color-neutral-700)] mt-2">Berikan informasi tambahan tentang fasilitas ini</p>
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
                    <p class="text-sm text-[var(--color-neutral-700)] ml-8 mt-1">Tampilkan fasilitas ini di website</p>
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

            <!-- Tips -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                <div class="flex items-start gap-3 mb-3">
                    <i class="fa-solid fa-lightbulb text-blue-600 flex-shrink-0 mt-0.5"></i>
                    <h4 class="text-blue-900">Tips Fasilitas</h4>
                </div>
                <ul class="space-y-2 text-sm text-blue-800">
                    <li class="flex items-start gap-2">
                        <span>•</span>
                        <span>Gunakan gambar berkualitas tinggi</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span>•</span>
                        <span>Pastikan pencahayaan gambar baik</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span>•</span>
                        <span>Nama fasilitas harus jelas dan singkat</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span>•</span>
                        <span>Deskripsi membantu pengunjung memahami fasilitas</span>
                    </li>
                </ul>
            </div>

            <!-- Action Buttons -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <button 
                    type="submit"
                    class="w-full bg-[var(--color-primary)] text-white py-3 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors flex items-center justify-center gap-2 mb-3">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Simpan Fasilitas</span>
                </button>
                <a 
                    href="{{ route('admin.facilities.index') }}"
                    class="w-full bg-[var(--color-neutral-200)] text-[var(--color-neutral-700)] py-3 rounded-lg hover:bg-[var(--color-neutral-300)] transition-colors flex items-center justify-center gap-2">
                    <i class="fa-solid fa-x"></i>
                    <span>Cancel</span>
                </a>
            </div>
        </div>
    </div>
</form>
@endsection

@push('scripts')
<script>
function previewImage(event) {
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
            const previewContainer = document.getElementById('imagePreview');
            preview.src = e.target.result;
            previewContainer.classList.remove('hidden');
        }
        reader.readAsDataURL(file);
    }
}
</script>
@endpush