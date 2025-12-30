@extends('layouts.admin')

@section('title', 'Upload Photo')

@section('content')
<div class="mb-8">
    <div class="flex items-center gap-3 mb-4">
        <a href="{{ route('admin.gallery.index') }}" 
           class="text-[var(--color-neutral-700)] hover:text-[var(--color-primary)] transition-colors">
            <i data-lucide="arrow-left" class="w-5 h-5"></i>
        </a>
        <h1>Upload Photo</h1>
    </div>
    <p class="text-[var(--color-neutral-700)]">Add a new photo to the gallery</p>
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

<form method="POST" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data">
    @csrf
    
    <div class="grid lg:grid-cols-3 gap-6">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Image Upload -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <label for="image" class="block text-sm mb-2 text-[var(--color-neutral-900)]">
                    Upload Image <span class="text-red-500">*</span>
                </label>
                <input 
                    type="file" 
                    name="image" 
                    id="image"
                    accept="image/*"
                    required
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    onchange="previewImage(event)">
                <p class="text-sm text-[var(--color-neutral-700)] mt-2">Recommended: 1200x800px, JPG or PNG, max 5MB</p>
                
                <!-- Image Preview -->
                <div id="imagePreview" class="mt-6 hidden">
                    <p class="text-sm text-[var(--color-neutral-900)] mb-3">Preview:</p>
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
                    value="{{ old('title') }}"
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
                    placeholder="Brief description of the photo...">{{ old('description') }}</textarea>
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
                    <option value="Campus" {{ old('category') == 'Campus' ? 'selected' : '' }}>Campus</option>
                    <option value="Facilities" {{ old('category') == 'Facilities' ? 'selected' : '' }}>Facilities</option>
                    <option value="Events" {{ old('category') == 'Events' ? 'selected' : '' }}>Events</option>
                    <option value="Activities" {{ old('category') == 'Activities' ? 'selected' : '' }}>Activities</option>
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
                            {{ old('is_active', true) ? 'checked' : '' }}
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
                        value="{{ old('order', 0) }}"
                        min="0"
                        class="w-full px-4 py-2 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)]">
                    <p class="text-sm text-[var(--color-neutral-700)] mt-1">Lower numbers appear first (0 = default)</p>
                </div>
            </div>

            <!-- Tips -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                <div class="flex items-start gap-3 mb-3">
                    <i data-lucide="lightbulb" class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                    <h4 class="text-blue-900">Photo Tips</h4>
                </div>
                <ul class="space-y-2 text-sm text-blue-800">
                    <li class="flex items-start gap-2">
                        <span>•</span>
                        <span>Use high-quality images for best results</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span>•</span>
                        <span>Maintain consistent aspect ratios</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span>•</span>
                        <span>Use descriptive titles for SEO</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span>•</span>
                        <span>Organize with proper categories</span>
                    </li>
                </ul>
            </div>

            <!-- Action Buttons -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <button 
                    type="submit"
                    class="w-full bg-[var(--color-primary)] text-white py-3 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors flex items-center justify-center gap-2 mb-3">
                    <i data-lucide="upload" class="w-5 h-5"></i>
                    <span>Upload Photo</span>
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
</script>
@endpush
