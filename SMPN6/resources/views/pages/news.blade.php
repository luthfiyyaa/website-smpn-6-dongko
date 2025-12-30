@extends('layouts.app')

@section('title', 'School News - Harmony Academy')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-block bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full mb-6">
            <span class="flex items-center gap-2">
                <i data-lucide="newspaper" class="w-5 h-5"></i>
                Latest Updates
            </span>
        </div>
        <h1 class="text-white mb-6">School News</h1>
        <p class="text-xl text-white/90 max-w-3xl mx-auto">
            Stay informed with the latest news, events, and announcements from Harmony Academy
        </p>
    </div>
</section>

<!-- News Grid -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($newsItems->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @foreach($newsItems as $news)
                    <article class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow group">
                        <!-- News Image -->
                        <div class="relative h-56 overflow-hidden bg-[var(--color-neutral-200)]">
                            @if($news->image)
                                <img src="{{ asset('storage/' . $news->image) }}" 
                                     alt="{{ $news->title }}" 
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-[var(--color-primary)]/20 to-[var(--color-secondary)]/20">
                                    <i data-lucide="image" class="w-16 h-16 text-[var(--color-neutral-400)]"></i>
                                </div>
                            @endif
                            
                            <!-- Category Badge -->
                            <div class="absolute top-4 left-4">
                                <span class="bg-white/95 backdrop-blur-sm px-4 py-2 rounded-full text-sm text-[var(--color-primary)]">
                                    {{ $news->category }}
                                </span>
                            </div>
                        </div>

                        <!-- News Content -->
                        <div class="p-6">
                            <div class="flex items-center gap-4 text-sm text-[var(--color-neutral-700)] mb-4">
                                <span class="flex items-center gap-2">
                                    <i data-lucide="calendar" class="w-4 h-4"></i>
                                    {{ $news->published_at ? $news->published_at->format('M d, Y') : $news->created_at->format('M d, Y') }}
                                </span>
                                @if($news->author)
                                    <span class="flex items-center gap-2">
                                        <i data-lucide="user" class="w-4 h-4"></i>
                                        {{ $news->author->name }}
                                    </span>
                                @endif
                            </div>

                            <h3 class="mb-3 line-clamp-2 group-hover:text-[var(--color-primary)] transition-colors">
                                {{ $news->title }}
                            </h3>

                            <p class="text-[var(--color-neutral-700)] mb-6 line-clamp-3">
                                {{ $news->excerpt }}
                            </p>

                            <a href="{{ route('news.detail', $news->id) }}" 
                               class="inline-flex items-center gap-2 text-[var(--color-primary)] hover:gap-3 transition-all">
                                <span>Read More</span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="flex justify-center">
                {{ $newsItems->links('pagination::tailwind') }}
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="bg-[var(--color-neutral-100)] w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="newspaper" class="w-12 h-12 text-[var(--color-neutral-400)]"></i>
                </div>
                <h3 class="mb-4 text-[var(--color-neutral-900)]">No News Available</h3>
                <p class="text-[var(--color-neutral-700)] mb-8">
                    Check back soon for the latest updates and announcements.
                </p>
                <a href="{{ route('home') }}" 
                   class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-8 py-4 rounded-xl hover:bg-[var(--color-primary-dark)] transition-colors">
                    <i data-lucide="arrow-left" class="w-5 h-5"></i>
                    <span>Back to Home</span>
                </a>
            </div>
        @endif
    </div>
</section>

<!-- Newsletter Subscription -->
<section class="py-16 bg-[var(--color-neutral-50)]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="bg-white rounded-2xl shadow-lg p-10">
            <div class="bg-[var(--color-primary)]/10 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                <i data-lucide="bell" class="w-10 h-10 text-[var(--color-primary)]"></i>
            </div>
            <h2 class="mb-4">Stay Updated</h2>
            <p class="text-xl text-[var(--color-neutral-700)] mb-8">
                Subscribe to receive the latest news and announcements directly to your inbox
            </p>
            <form class="flex flex-col sm:flex-row gap-4 max-w-xl mx-auto">
                <input 
                    type="email" 
                    placeholder="Enter your email address"
                    class="flex-1 px-6 py-4 border border-[var(--color-neutral-300)] rounded-xl focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                    required>
                <button 
                    type="submit"
                    class="bg-[var(--color-primary)] text-white px-10 py-4 rounded-xl hover:bg-[var(--color-primary-dark)] transition-colors whitespace-nowrap">
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush
