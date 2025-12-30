@extends('layouts.admin')

@section('title', 'Edit Photo')

@section('content')
<div class="mb-8">
    <div class="flex items-center gap-3 mb-4">
        <a href="{{ route('admin.gallery.index') }}" 
           class="text-[var(--color-neutral-700)] hover:text-[var(--color-primary)] transition-colors">
            <i data-lucide="arrow-left" class="w-5 h-5"></i>
        </a>
        <h1>Edit Photo</h1>
    </div>
    <p class="text-[var(--color-neutral-700)]">Update photo details</p>
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

<form method="POST" action="{{ route('admin.gallery.update', $gallery->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="grid lg:grid-cols-3 gap-6">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Current Image -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label class="block text-sm mb-3 text-[var(--color-neutral-900)]">
                    Current Photo
                </label>
                <img src="{{ asset('storage/' . $gallery->image) }}" 
                     alt="{{ $gallery->title }}"
                     class="w-full rounded-lg shadow-lg mb-4"
                     id="currentImage">
                
                <label class="flex items-center gap-2 text-sm text-red-600 cursor-pointer">
                    <input 
                        type="checkbox" 
                        name="remove_image" 
                        value="1"
                        class="w-4 h-4 text-red-600 border-[var(--color-neutral-300)] rounded focus:ring-2 focus:ring-red-500"
                        onchange="toggleImageRemoval(this)">
                    <span>Remove current photo</span>
                </label>
            </div>

            <!-- Replace Image -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label for="image" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Replace Photo
                </label>
                <input 
                    type="file" 
                    name="image" 
                    id="image"
                    accept="image/*"
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    onchange="previewImage(event)">
                <p class="text-sm text-[var(--color-neutral-700)] mt-2">Upload a new photo to replace the current one</p>
                
                <!-- Image Preview -->
                <div id="imagePreview" class="mt-6 hidden">
                    <p class="text-sm text-[var(--color-neutral-900)] mb-3">New Preview:</p>
                    <img id="preview" class="w-full rounded-lg shadow-lg" alt="Preview">
                </div>
            </div>

            <!-- Title -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label for="title" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Photo Title <span class="text-red-500">*</span>
                </label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    value="{{ old('title', $gallery->title) }}"
                    required
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    placeholder="Enter photo title">
                <p class="text-sm text-[var(--color-neutral-700)] mt-2">Give your photo a descriptive title</p>
            </div>

            <!-- Description -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label for="description" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Description (Optional)
                </label>
                <textarea 
                    name="description" 
                    id="description" 
                    rows="4"
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    placeholder="Brief description of the photo...">{{ old('description', $gallery->description) }}</textarea>
                <p class="text-sm text-[var(--color-neutral-700)] mt-2">Provide additional context about the photo</p>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
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
                    <option value="Campus" {{ old('category', $gallery->category) == 'Campus' ? 'selected' : '' }}>Campus</option>
                    <option value="Facilities" {{ old('category', $gallery->category) == 'Facilities' ? 'selected' : '' }}>Facilities</option>
                    <option value="Events" {{ old('category', $gallery->category) == 'Events' ? 'selected' : '' }}>Events</option>
                    <option value="Activities" {{ old('category', $gallery->category) == 'Activities' ? 'selected' : '' }}>Activities</option>
                </select>
            </div>

            <!-- Display Options -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="mb-4">Display Options</h3>
                
                <!-- Active Status -->
                <div class="mb-4">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input 
                            type="checkbox" 
                            name="is_active" 
                            value="1"
                            {{ old('is_active', $gallery->is_active) ? 'checked' : '' }}
                            class="w-5 h-5 text-[var(--color-primary)] border-[var(--color-neutral-300)] rounded focus:ring-2 focus:ring-[var(--color-primary)]">
                        <span class="text-[var(--color-neutral-900)]">Active</span>
                    </label>
                    <p class="text-sm text-[var(--color-neutral-700)] ml-8 mt-1">Show this photo in the gallery</p>
                </div>

                <!-- Display Order -->
                <div>
                    <label for="order" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                        Display Order
                    </label>
                    <input 
                        type="number" 
                        name="order" 
                        id="order"
                        value="{{ old('order', $gallery->order) }}"
                        min="0"
                        class="w-full px-4 py-2 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)]">
                    <p class="text-sm text-[var(--color-neutral-700)] mt-1">Lower numbers appear first</p>
                </div>
            </div>

            <!-- Meta Information -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="mb-4">Information</h3>
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span class="text-[var(--color-neutral-700)]">Created:</span>
                        <span class="text-[var(--color-neutral-900)]">{{ $gallery->created_at->format('M d, Y') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-[var(--color-neutral-700)]">Updated:</span>
                        <span class="text-[var(--color-neutral-900)]">{{ $gallery->updated_at->format('M d, Y') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-[var(--color-neutral-700)]">Status:</span>
                        <span class="text-[var(--color-neutral-900)]">
                            @if($gallery->is_active)
                                <span class="text-green-600">Active</span>
                            @else
                                <span class="text-gray-600">Inactive</span>
                            @endif
                        </span>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <button 
                    type="submit"
                    class="w-full bg-[var(--color-primary)] text-white py-3 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors flex items-center justify-center gap-2 mb-3">
                    <i data-lucide="save" class="w-5 h-5"></i>
                    <span>Update Photo</span>
                </button>
                <a 
                    href="{{ route('admin.gallery.index') }}"
                    class="w-full bg-[var(--color-neutral-200)] text-[var(--color-neutral-700)] py-3 rounded-lg hover:bg-[var(--color-neutral-300)] transition-colors flex items-center justify-center gap-2">
                    <i data-lucide="x" class="w-5 h-5"></i>
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
        // Check file size (5MB max)
        if (file.size > 5 * 1024 * 1024) {
            alert('File size must be less than 5MB');
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

function toggleImageRemoval(checkbox) {
    const currentImage = document.getElementById('currentImage');
    if (checkbox.checked) {
        currentImage.style.opacity = '0.3';
        currentImage.style.filter = 'grayscale(100%)';
    } else {
        currentImage.style.opacity = '1';
        currentImage.style.filter = 'none';
    }
}
</script>
@endpush
