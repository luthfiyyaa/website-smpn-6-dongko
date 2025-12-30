@extends('layouts.admin')

@section('title', 'Edit News')

@section('content')
<div class="mb-8">
    <div class="flex items-center gap-3 mb-4">
        <a href="{{ route('admin.news.index') }}" 
           class="text-[var(--color-neutral-700)] hover:text-[var(--color-primary)] transition-colors">
            <i data-lucide="arrow-left" class="w-5 h-5"></i>
        </a>
        <h1>Edit News Article</h1>
    </div>
    <p class="text-[var(--color-neutral-700)]">Update the article details</p>
</div>

@if ($errors->any())
    <div class="bg-red-50 border border-red-200 text-red-700 px-6 py-4 rounded-lg mb-6">
        <div class="flex items-center gap-3 mb-2">
            <i data-lucide="alert-circle" class="w-5 h-5"></i>
            <span>Please correct the following errors:</span>
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
                    Article Title <span class="text-red-500">*</span>
                </label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    value="{{ old('title', $news->title) }}"
                    required
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    placeholder="Enter article title">
            </div>

            <!-- Excerpt -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label for="excerpt" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Excerpt <span class="text-red-500">*</span>
                </label>
                <textarea 
                    name="excerpt" 
                    id="excerpt" 
                    rows="3"
                    required
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    placeholder="Brief summary of the article (shown in previews)">{{ old('excerpt', $news->excerpt) }}</textarea>
                <p class="text-sm text-[var(--color-neutral-700)] mt-2">Keep it short and engaging (150-200 characters)</p>
            </div>

            <!-- Content -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label for="content" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Full Content <span class="text-red-500">*</span>
                </label>
                <textarea 
                    name="content" 
                    id="content" 
                    rows="15"
                    required
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    placeholder="Write the full article content here...">{{ old('content', $news->content) }}</textarea>
                <p class="text-sm text-[var(--color-neutral-700)] mt-2">Write the complete article content</p>
            </div>

            <!-- Featured Image -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label for="image" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Featured Image
                </label>
                
                @if($news->image)
                    <div class="mb-4">
                        <p class="text-sm text-[var(--color-neutral-700)] mb-2">Current Image:</p>
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
                            <span>Remove current image</span>
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
                    {{ $news->image ? 'Upload a new image to replace the current one' : 'Recommended: 1200x630px, JPG or PNG, max 2MB' }}
                </p>
                
                <!-- Image Preview -->
                <div id="imagePreview" class="mt-4 hidden">
                    <p class="text-sm text-[var(--color-neutral-700)] mb-2">New Preview:</p>
                    <img id="preview" class="w-full max-w-md rounded-lg shadow-md" alt="Preview">
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Publishing Options -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="mb-4">Publishing Options</h3>
                
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
                        Publish Date
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
                <h3 class="mb-4">Category</h3>
                <label for="category" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Select Category <span class="text-red-500">*</span>
                </label>
                <select 
                    name="category" 
                    id="category"
                    required
                    class="w-full px-4 py-2 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)]">
                    <option value="">Choose a category</option>
                    <option value="Academic" {{ old('category', $news->category) == 'Academic' ? 'selected' : '' }}>Academic</option>
                    <option value="Event" {{ old('category', $news->category) == 'Event' ? 'selected' : '' }}>Event</option>
                    <option value="Achievement" {{ old('category', $news->category) == 'Achievement' ? 'selected' : '' }}>Achievement</option>
                    <option value="Announcement" {{ old('category', $news->category) == 'Announcement' ? 'selected' : '' }}>Announcement</option>
                </select>
            </div>

            <!-- Meta Information -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="mb-4">Information</h3>
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span class="text-[var(--color-neutral-700)]">Created:</span>
                        <span class="text-[var(--color-neutral-900)]">{{ $news->created_at->format('M d, Y H:i') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-[var(--color-neutral-700)]">Updated:</span>
                        <span class="text-[var(--color-neutral-900)]">{{ $news->updated_at->format('M d, Y H:i') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-[var(--color-neutral-700)]">Author:</span>
                        <span class="text-[var(--color-neutral-900)]">{{ $news->author ? $news->author->name : 'N/A' }}</span>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <button 
                    type="submit"
                    class="w-full bg-[var(--color-primary)] text-white py-3 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors flex items-center justify-center gap-2 mb-3">
                    <i data-lucide="save" class="w-5 h-5"></i>
                    <span>Update Article</span>
                </button>
                <a 
                    href="{{ route('admin.news.index') }}"
                    class="w-full bg-[var(--color-neutral-200)] text-[var(--color-neutral-700)] py-3 rounded-lg hover:bg-[var(--color-neutral-300)] transition-colors flex items-center justify-center gap-2 mb-3">
                    <i data-lucide="x" class="w-5 h-5"></i>
                    <span>Cancel</span>
                </a>
                <a 
                    href="{{ route('news.detail', $news->id) }}"
                    target="_blank"
                    class="w-full bg-blue-100 text-blue-700 py-3 rounded-lg hover:bg-blue-200 transition-colors flex items-center justify-center gap-2">
                    <i data-lucide="external-link" class="w-5 h-5"></i>
                    <span>View Public Page</span>
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
