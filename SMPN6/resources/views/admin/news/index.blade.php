@extends('layouts.admin')

@section('title', 'Manage News')

@section('content')
<div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
    <div>
        <h1 class="mb-2">News Management</h1>
        <p class="text-[var(--color-neutral-700)]">Create and manage school news articles</p>
    </div>
    <a href="{{ route('admin.news.create') }}" 
       class="bg-[var(--color-primary)] text-white px-6 py-3 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors inline-flex items-center justify-center gap-2">
        <i data-lucide="plus" class="w-5 h-5"></i>
        <span>Create News</span>
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
    <form method="GET" action="{{ route('admin.news.index') }}" class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
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
                <option value="Academic" {{ request('category') == 'Academic' ? 'selected' : '' }}>Academic</option>
                <option value="Event" {{ request('category') == 'Event' ? 'selected' : '' }}>Event</option>
                <option value="Achievement" {{ request('category') == 'Achievement' ? 'selected' : '' }}>Achievement</option>
                <option value="Announcement" {{ request('category') == 'Announcement' ? 'selected' : '' }}>Announcement</option>
            </select>
        </div>
        <div>
            <label class="block text-sm mb-2 text-[var(--color-neutral-700)]">Status</label>
            <select 
                name="is_published"
                class="w-full px-4 py-2 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)]">
                <option value="">All Status</option>
                <option value="1" {{ request('is_published') == '1' ? 'selected' : '' }}>Published</option>
                <option value="0" {{ request('is_published') == '0' ? 'selected' : '' }}>Draft</option>
            </select>
        </div>
        <div class="flex items-end gap-2">
            <button 
                type="submit"
                class="flex-1 bg-[var(--color-primary)] text-white px-6 py-2 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors">
                Filter
            </button>
            <a 
                href="{{ route('admin.news.index') }}"
                class="bg-[var(--color-neutral-200)] text-[var(--color-neutral-700)] px-4 py-2 rounded-lg hover:bg-[var(--color-neutral-300)] transition-colors">
                Reset
            </a>
        </div>
    </form>
</div>

<!-- News Table -->
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    @if($news->count() > 0)
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-[var(--color-neutral-50)] border-b border-[var(--color-neutral-200)]">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm text-[var(--color-neutral-700)]">Image</th>
                        <th class="px-6 py-4 text-left text-sm text-[var(--color-neutral-700)]">Title</th>
                        <th class="px-6 py-4 text-left text-sm text-[var(--color-neutral-700)]">Category</th>
                        <th class="px-6 py-4 text-left text-sm text-[var(--color-neutral-700)]">Author</th>
                        <th class="px-6 py-4 text-left text-sm text-[var(--color-neutral-700)]">Status</th>
                        <th class="px-6 py-4 text-left text-sm text-[var(--color-neutral-700)]">Date</th>
                        <th class="px-6 py-4 text-center text-sm text-[var(--color-neutral-700)]">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[var(--color-neutral-200)]">
                    @foreach($news as $item)
                        <tr class="hover:bg-[var(--color-neutral-50)] transition-colors">
                            <td class="px-6 py-4">
                                @if($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" 
                                         alt="{{ $item->title }}"
                                         class="w-20 h-14 object-cover rounded-lg">
                                @else
                                    <div class="w-20 h-14 bg-[var(--color-neutral-200)] rounded-lg flex items-center justify-center">
                                        <i data-lucide="image" class="w-6 h-6 text-[var(--color-neutral-400)]"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="max-w-xs">
                                    <div class="text-[var(--color-neutral-900)] mb-1">{{ Str::limit($item->title, 50) }}</div>
                                    <div class="text-sm text-[var(--color-neutral-700)]">{{ Str::limit($item->excerpt, 60) }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-blue-100 text-blue-700">
                                    {{ $item->category }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-[var(--color-neutral-700)]">
                                {{ $item->author ? $item->author->name : 'N/A' }}
                            </td>
                            <td class="px-6 py-4">
                                @if($item->is_published)
                                    <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-sm bg-green-100 text-green-700">
                                        <i data-lucide="check-circle" class="w-3 h-3"></i>
                                        Published
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-sm bg-yellow-100 text-yellow-700">
                                        <i data-lucide="clock" class="w-3 h-3"></i>
                                        Draft
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm text-[var(--color-neutral-700)]">
                                {{ $item->published_at ? $item->published_at->format('M d, Y') : $item->created_at->format('M d, Y') }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('news.detail', $item->id) }}" 
                                       target="_blank"
                                       class="text-blue-600 hover:text-blue-700 p-2 hover:bg-blue-50 rounded-lg transition-colors"
                                       title="View">
                                        <i data-lucide="eye" class="w-4 h-4"></i>
                                    </a>
                                    <a href="{{ route('admin.news.edit', $item->id) }}" 
                                       class="text-green-600 hover:text-green-700 p-2 hover:bg-green-50 rounded-lg transition-colors"
                                       title="Edit">
                                        <i data-lucide="pencil" class="w-4 h-4"></i>
                                    </a>
                                    <form method="POST" 
                                          action="{{ route('admin.news.destroy', $item->id) }}" 
                                          class="inline"
                                          onsubmit="return confirm('Are you sure you want to delete this news article?');">
                                        @csrf
                                        @method('DELETE')
                                        <button 
                                            type="submit"
                                            class="text-red-600 hover:text-red-700 p-2 hover:bg-red-50 rounded-lg transition-colors"
                                            title="Delete">
                                            <i data-lucide="trash-2" class="w-4 h-4"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-[var(--color-neutral-200)]">
            {{ $news->links('pagination::tailwind') }}
        </div>
    @else
        <!-- Empty State -->
        <div class="text-center py-16">
            <div class="bg-[var(--color-neutral-100)] w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                <i data-lucide="newspaper" class="w-10 h-10 text-[var(--color-neutral-400)]"></i>
            </div>
            <h3 class="mb-2 text-[var(--color-neutral-900)]">No News Articles</h3>
            <p class="text-[var(--color-neutral-700)] mb-6">
                Get started by creating your first news article
            </p>
            <a href="{{ route('admin.news.create') }}" 
               class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-6 py-3 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors">
                <i data-lucide="plus" class="w-5 h-5"></i>
                <span>Create News</span>
            </a>
        </div>
    @endif
</div>
@endsection
