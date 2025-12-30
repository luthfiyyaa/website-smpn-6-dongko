@extends('layouts.admin')

@section('title', 'Manage Gallery')

@section('content')
<div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
    <div>
        <h1 class="mb-2">Gallery Management</h1>
        <p class="text-[var(--color-neutral-700)]">Upload and manage campus photos</p>
    </div>
    <a href="{{ route('admin.gallery.create') }}" 
       class="bg-[var(--color-primary)] text-white px-6 py-3 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors inline-flex items-center justify-center gap-2">
        <i data-lucide="upload" class="w-5 h-5"></i>
        <span>Upload Photo</span>
    </a>
</div>

@if(session('success'))
    <div class="bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-lg mb-6 flex items-center gap-3">
        <i data-lucide="check-circle" class="w-5 h-5"></i>
        <span>{{ session('success') }}</span>
    </div>
@endif

@if(session('error'))
    <div class="bg-red-50 border border-red-200 text-red-700 px-6 py-4 rounded-lg mb-6 flex items-center gap-3">
        <i data-lucide="alert-circle" class="w-5 h-5"></i>
        <span>{{ session('error') }}</span>
    </div>
@endif

<!-- Filters -->
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <form method="GET" action="{{ route('admin.gallery.index') }}" class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div>
            <label class="block text-sm mb-2 text-[var(--color-neutral-700)]">Search</label>
            <input 
                type="text" 
                name="search" 
                value="{{ request('search') }}"
                placeholder="Search by title..."
                class="w-full px-4 py-2 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)]">
        </div>
        <div>
            <label class="block text-sm mb-2 text-[var(--color-neutral-700)]">Category</label>
            <select 
                name="category"
                class="w-full px-4 py-2 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)]">
                <option value="">All Categories</option>
                <option value="Campus" {{ request('category') == 'Campus' ? 'selected' : '' }}>Campus</option>
                <option value="Facilities" {{ request('category') == 'Facilities' ? 'selected' : '' }}>Facilities</option>
                <option value="Events" {{ request('category') == 'Events' ? 'selected' : '' }}>Events</option>
                <option value="Activities" {{ request('category') == 'Activities' ? 'selected' : '' }}>Activities</option>
            </select>
        </div>
        <div>
            <label class="block text-sm mb-2 text-[var(--color-neutral-700)]">Status</label>
            <select 
                name="is_active"
                class="w-full px-4 py-2 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)]">
                <option value="">All Status</option>
                <option value="1" {{ request('is_active') == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ request('is_active') == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <div class="flex items-end gap-2">
            <button 
                type="submit"
                class="flex-1 bg-[var(--color-primary)] text-white px-6 py-2 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors">
                Filter
            </button>
            <a 
                href="{{ route('admin.gallery.index') }}"
                class="bg-[var(--color-neutral-200)] text-[var(--color-neutral-700)] px-4 py-2 rounded-lg hover:bg-[var(--color-neutral-300)] transition-colors">
                Reset
            </a>
        </div>
    </form>
</div>

<!-- Gallery Grid -->
<div class="bg-white rounded-lg shadow-md p-6">
    @if($galleries->count() > 0)
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-6">
            @foreach($galleries as $item)
                <div class="group relative bg-white border border-[var(--color-neutral-200)] rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <!-- Image -->
                    <div class="relative aspect-[4/3] overflow-hidden bg-[var(--color-neutral-100)]">
                        <img src="{{ asset('storage/' . $item->image) }}" 
                             alt="{{ $item->title }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        
                        <!-- Status Badge -->
                        <div class="absolute top-2 left-2">
                            @if($item->is_active)
                                <span class="bg-green-500/90 backdrop-blur-sm text-white px-2 py-1 rounded text-xs">
                                    Active
                                </span>
                            @else
                                <span class="bg-gray-500/90 backdrop-blur-sm text-white px-2 py-1 rounded text-xs">
                                    Inactive
                                </span>
                            @endif
                        </div>

                        <!-- Order Badge -->
                        <div class="absolute top-2 right-2">
                            <span class="bg-black/70 backdrop-blur-sm text-white px-2 py-1 rounded text-xs">
                                #{{ $item->order }}
                            </span>
                        </div>

                        <!-- Actions Overlay -->
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-2">
                            <a href="{{ route('admin.gallery.edit', $item->id) }}" 
                               class="bg-white text-[var(--color-neutral-900)] p-3 rounded-lg hover:bg-gray-100 transition-colors"
                               title="Edit">
                                <i data-lucide="pencil" class="w-5 h-5"></i>
                            </a>
                            <form method="POST" 
                                  action="{{ route('admin.gallery.destroy', $item->id) }}" 
                                  class="inline"
                                  onsubmit="return confirm('Are you sure you want to delete this photo?');">
                                @csrf
                                @method('DELETE')
                                <button 
                                    type="submit"
                                    class="bg-red-600 text-white p-3 rounded-lg hover:bg-red-700 transition-colors"
                                    title="Delete">
                                    <i data-lucide="trash-2" class="w-5 h-5"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Details -->
                    <div class="p-4">
                        <h3 class="mb-2 text-[var(--color-neutral-900)] line-clamp-1">{{ $item->title }}</h3>
                        @if($item->description)
                            <p class="text-sm text-[var(--color-neutral-700)] mb-3 line-clamp-2">{{ $item->description }}</p>
                        @endif
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-[var(--color-primary)] bg-[var(--color-primary)]/10 px-2 py-1 rounded">
                                {{ $item->category }}
                            </span>
                            <span class="text-[var(--color-neutral-700)]">
                                {{ $item->created_at->format('M d, Y') }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="pt-4 border-t border-[var(--color-neutral-200)]">
            {{ $galleries->links('pagination::tailwind') }}
        </div>
    @else
        <!-- Empty State -->
        <div class="text-center py-16">
            <div class="bg-[var(--color-neutral-100)] w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                <i data-lucide="images" class="w-10 h-10 text-[var(--color-neutral-400)]"></i>
            </div>
            <h3 class="mb-2 text-[var(--color-neutral-900)]">No Photos in Gallery</h3>
            <p class="text-[var(--color-neutral-700)] mb-6">
                Start building your gallery by uploading the first photo
            </p>
            <a href="{{ route('admin.gallery.create') }}" 
               class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-6 py-3 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors">
                <i data-lucide="upload" class="w-5 h-5"></i>
                <span>Upload Photo</span>
            </a>
        </div>
    @endif
</div>
@endsection

@push('styles')
<style>
    .line-clamp-1 {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush
