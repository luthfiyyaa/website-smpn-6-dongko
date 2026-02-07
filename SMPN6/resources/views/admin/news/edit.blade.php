@extends('layouts.admin')

@section('title', 'Edit Berita')

@section('content')
<div class="mb-8">
    <div class="flex items-center gap-3 mb-4">
        <a href="{{ route('admin.news.index') }}" 
           class="text-[var(--color-neutral-700)] hover:text-[var(--color-primary)] transition-colors">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h1>Edit Berita</h1>
    </div>
    <p class="text-[var(--color-neutral-700)]">Update detail berita</p>
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

<form method="POST" action="{{ route('admin.news.update', $news->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
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
                    value="{{ old('title', $news->title) }}"
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
                    placeholder="Berikan kesimpulan singkat berita (Tampil di layar depan)">{{ old('excerpt', $news->excerpt) }}</textarea>
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
                    placeholder="Tulis berita di sini">{{ old('content', $news->content) }}</textarea>
            </div>

            <!-- Featured Image -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label for="image" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Gambar
                </label>
                
                @if($news->image)
                    <div class="mb-4">
                        <p class="text-sm text-[var(--color-neutral-700)] mb-2">Gambar saat ini:</p>
                        <img src="{{ asset('storage/' . $news->image) }}" 
                             alt="{{ $news->title }}"
                             class="w-full max-w-md rounded-lg shadow-md mb-2"
                             id="currentImage">
                        <label class="flex items-center gap-2 text-sm text-red-600 cursor-pointer">
                            <input 
                                type="checkbox" 
                                name="remove_image" 
                                value="1"
                                class="w-4 h-4 text-red-600 border-[var(--color-neutral-300)] rounded focus:ring-2 focus:ring-red-500"
                                onchange="toggleImageRemoval(this)">
                            <span>Hapus gambar</span>
                        </label>
                    </div>
                @endif

                <input 
                    type="file" 
                    name="image" 
                    id="image"
                    accept="image/*"
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    onchange="previewImage(event)">
                <p class="text-sm text-[var(--color-neutral-700)] mt-2">
                    {{ $news->image ? 'Upload gambar baru' : 'Recommended: 1200x630px, JPG or PNG, max 2MB' }}
                </p>
                
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
                            {{ old('is_published', $news->is_published) ? 'checked' : '' }}
                            class="w-5 h-5 text-[var(--color-primary)] border-[var(--color-neutral-300)] rounded focus:ring-2 focus:ring-[var(--color-primary)]">
                        <span class="text-[var(--color-neutral-900)]">Published</span>
                    </label>
                    <p class="text-sm text-[var(--color-neutral-700)] ml-8 mt-1">Uncheck to save as draft</p>
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
                        value="{{ old('published_at', $news->published_at ? $news->published_at->format('Y-m-d\TH:i') : '') }}"
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
                    <option value="">Choose a category</option>
                    <option value="Akademik" {{ old('category', $news->category) == 'Akademik' ? 'selected' : '' }}>Akademik</option>
                    <option value="Acara" {{ old('category', $news->category) == 'Acara' ? 'selected' : '' }}>Acara</option>
                    <option value="Penghargaan" {{ old('category', $news->category) == 'Penghargaan' ? 'selected' : '' }}>Penghargaan</option>
                    <option value="Pengumuman" {{ old('category', $news->category) == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                </select>
            </div>

            <!-- Meta Information -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="mb-4">Informasi</h3>
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span class="text-[var(--color-neutral-700)]">Dibuat:</span>
                        <span class="text-[var(--color-neutral-900)]">{{ $news->created_at->format('M d, Y H:i') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-[var(--color-neutral-700)]">Diperbarui:</span>
                        <span class="text-[var(--color-neutral-900)]">{{ $news->updated_at->format('M d, Y H:i') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-[var(--color-neutral-700)]">Penulis:</span>
                        <span class="text-[var(--color-neutral-900)]">{{ $news->author ? $news->author->name : 'N/A' }}</span>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <button 
                    type="submit"
                    class="w-full bg-[var(--color-primary)] text-white py-3 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors flex items-center justify-center gap-2 mb-3">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Update Berita</span>
                </button>
                <a 
                    href="{{ route('admin.news.index') }}"
                    class="w-full bg-[var(--color-neutral-200)] text-[var(--color-neutral-700)] py-3 rounded-lg hover:bg-[var(--color-neutral-300)] transition-colors flex items-center justify-center gap-2 mb-3">
                    <i class="fa-solid fa-x"></i>
                    <span>Cancel</span>
                </a>
                <a 
                    href="{{ route('news.detail', $news->id) }}"
                    target="_blank"
                    class="w-full bg-blue-100 text-blue-700 py-3 rounded-lg hover:bg-blue-200 transition-colors flex items-center justify-center gap-2">
                    <i class="fa-solid fa-link"></i>
                    <span>Lihat Halaman</span>
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

function toggleImageRemoval(checkbox) {
    const currentImage = document.getElementById('currentImage');
    if (checkbox.checked) {
        currentImage.style.opacity = '0.3';
    } else {
        currentImage.style.opacity = '1';
    }
}
</script>
@endpush
