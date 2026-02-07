@extends('layouts.admin')

@section('title', 'Tulis Berita')

@section('content')
<div class="mb-8">
    <div class="flex items-center gap-3 mb-4">
        <a href="{{ route('admin.news.index') }}" 
           class="text-[var(--color-neutral-700)] hover:text-[var(--color-primary)] transition-colors">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h1>Buat Berita Baru</h1>
    </div>
    <p class="text-[var(--color-neutral-700)]">Isi di dalam detail untuk membuat berita baru</p>
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

<form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
    @csrf
    
    <div class="grid lg:grid-cols-3 gap-6">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Title -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label for="title" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Judul Berita <span class="text-red-500">*</span>
                </label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    value="{{ old('title') }}"
                    required
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    placeholder="Masukkan judul">
            </div>

            <!-- Excerpt -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label for="excerpt" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Kutipan <span class="text-red-500">*</span>
                </label>
                <textarea 
                    name="excerpt" 
                    id="excerpt" 
                    rows="3"
                    required
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    placeholder="Berikan kesimpulan singkat berita (Tampil di layar depan)">{{ old('excerpt') }}</textarea>
                <p class="text-sm text-[var(--color-neutral-700)] mt-2">Buat singkat dan menarik</p>
            </div>

            <!-- Content -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label for="content" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Isi Berita <span class="text-red-500">*</span>
                </label>
                <textarea 
                    name="content" 
                    id="content" 
                    rows="15"
                    required
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    placeholder="Tulis berita di sini">{{ old('content') }}</textarea>
            </div>

            <!-- Featured Image -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label for="image" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Gambar
                </label>
                <input 
                    type="file" 
                    name="image" 
                    id="image"
                    accept="image/*"
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    onchange="previewImage(event)">
                <p class="text-sm text-[var(--color-neutral-700)] mt-2">Recommended: 1200x630px, JPG or PNG, max 2MB</p>
                
                <!-- Image Preview -->
                <div id="imagePreview" class="mt-4 hidden">
                    <p class="text-sm text-[var(--color-neutral-700)] mb-2">Preview:</p>
                    <img id="preview" class="w-full max-w-md rounded-lg shadow-md" alt="Preview">
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Publishing Options -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="mb-4">Publish Options</h3>
                
                <!-- Status -->
                <div class="mb-4">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input 
                            type="checkbox" 
                            name="is_published" 
                            value="1"
                            {{ old('is_published') ? 'checked' : '' }}
                            class="w-5 h-5 text-[var(--color-primary)] border-[var(--color-neutral-300)] rounded focus:ring-2 focus:ring-[var(--color-primary)]">
                        <span class="text-[var(--color-neutral-900)]">Publish sekarang</span>
                    </label>
                    <p class="text-sm text-[var(--color-neutral-700)] ml-8 mt-1">Jangan pilih untuk menyimpan sebagai draft</p>
                </div>

                <!-- Publish Date -->
                <div>
                    <label for="published_at" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                        Tanggal Publish
                    </label>
                    <input 
                        type="datetime-local" 
                        name="published_at" 
                        id="published_at"
                        value="{{ old('published_at', now()->format('Y-m-d\TH:i')) }}"
                        class="w-full px-4 py-2 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)]">
                    <p class="text-sm text-[var(--color-neutral-700)] mt-1">Leave blank for current time</p>
                </div>
            </div>

            <!-- Category -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="mb-4">Kategori</h3>
                <label for="category" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Pilih Kategori <span class="text-red-500">*</span>
                </label>
                <select 
                    name="category" 
                    id="category"
                    required
                    class="w-full px-4 py-2 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)]">
                    <option value="">Pilih Kategori</option>
                    <option value="Akademik" {{ old('category') == 'Akademik' ? 'selected' : '' }}>Akademik</option>
                    <option value="Acara" {{ old('category') == 'Acara' ? 'selected' : '' }}>Acara</option>
                    <option value="Penghargaan" {{ old('category') == 'Penghargaan' ? 'selected' : '' }}>Penghargaan</option>
                    <option value="Pengumuman" {{ old('category') == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                </select>
            </div>

            <!-- Action Buttons -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <button 
                    type="submit"
                    class="w-full bg-[var(--color-primary)] text-white py-3 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors flex items-center justify-center gap-2 mb-3">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Buat Berita</span>
                </button>
                <a 
                    href="{{ route('admin.news.index') }}"
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
