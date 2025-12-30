@extends('layouts.app')

@section('title', $news->title . ' - Harmony Academy')

@section('content')
<!-- Breadcrumb -->
<section class="bg-[var(--color-neutral-50)] py-6">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center gap-2 text-sm text-[var(--color-neutral-700)]">
            <a href="{{ route('home') }}" class="hover:text-[var(--color-primary)] transition-colors">Home</a>
            <i data-lucide="chevron-right" class="w-4 h-4"></i>
            <a href="{{ route('news') }}" class="hover:text-[var(--color-primary)] transition-colors">News</a>
            <i data-lucide="chevron-right" class="w-4 h-4"></i>
            <span class="text-[var(--color-neutral-900)]">Article</span>
        </nav>
    </div>
</section>

<!-- Article Header -->
<section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Category Badge -->
        <div class="mb-6">
            <span class="inline-block bg-[var(--color-primary)]/10 text-[var(--color-primary)] px-5 py-2 rounded-full text-sm">
                {{ $news->category }}
            </span>
        </div>

        <!-- Title -->
        <h1 class="mb-6">{{ $news->title }}</h1>

        <!-- Meta Information -->
        <div class="flex flex-wrap items-center gap-6 text-[var(--color-neutral-700)] pb-8 border-b border-[var(--color-neutral-200)]">
            <div class="flex items-center gap-2">
                <i data-lucide="calendar" class="w-5 h-5"></i>
                <span>{{ $news->published_at ? $news->published_at->format('F d, Y') : $news->created_at->format('F d, Y') }}</span>
            </div>
            @if($news->author)
                <div class="flex items-center gap-2">
                    <i data-lucide="user" class="w-5 h-5"></i>
                    <span>By {{ $news->author->name }}</span>
                </div>
            @endif
            <div class="flex items-center gap-2">
                <i data-lucide="clock" class="w-5 h-5"></i>
                <span>{{ ceil(str_word_count(strip_tags($news->content)) / 200) }} min read</span>
            </div>
        </div>
    </div>
</section>

<!-- Featured Image -->
@if($news->image)
    <section class="bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-2xl overflow-hidden shadow-xl">
                <img src="{{ asset('storage/' . $news->image) }}" 
                     alt="{{ $news->title }}" 
                     class="w-full h-auto">
            </div>
        </div>
    </section>
@endif

<!-- Article Content -->
<section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Excerpt -->
        <div class="bg-[var(--color-neutral-50)] border-l-4 border-[var(--color-primary)] p-6 rounded-r-xl mb-10">
            <p class="text-xl text-[var(--color-neutral-800)] leading-relaxed">
                {{ $news->excerpt }}
            </p>
        </div>

        <!-- Main Content -->
        <div class="prose prose-lg max-w-none">
            <div class="text-[var(--color-neutral-800)] leading-relaxed space-y-6">
                {!! nl2br(e($news->content)) !!}
            </div>
        </div>

        <!-- Share Buttons -->
        <div class="mt-12 pt-8 border-t border-[var(--color-neutral-200)]">
            <p class="text-sm text-[var(--color-neutral-700)] mb-4">Share this article:</p>
            <div class="flex gap-3">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('news.detail', $news->id)) }}" 
                   target="_blank"
                   class="bg-[#1877f2] text-white w-12 h-12 rounded-full flex items-center justify-center hover:opacity-90 transition-opacity">
                    <i data-lucide="facebook" class="w-5 h-5"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('news.detail', $news->id)) }}&text={{ urlencode($news->title) }}" 
                   target="_blank"
                   class="bg-[#1da1f2] text-white w-12 h-12 rounded-full flex items-center justify-center hover:opacity-90 transition-opacity">
                    <i data-lucide="twitter" class="w-5 h-5"></i>
                </a>
                <a href="https://wa.me/?text={{ urlencode($news->title . ' - ' . route('news.detail', $news->id)) }}" 
                   target="_blank"
                   class="bg-[#25d366] text-white w-12 h-12 rounded-full flex items-center justify-center hover:opacity-90 transition-opacity">
                    <i data-lucide="message-circle" class="w-5 h-5"></i>
                </a>
                <button 
                    onclick="copyToClipboard('{{ route('news.detail', $news->id) }}')"
                    class="bg-[var(--color-neutral-700)] text-white w-12 h-12 rounded-full flex items-center justify-center hover:opacity-90 transition-opacity">
                    <i data-lucide="link" class="w-5 h-5"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Related News -->
@if($relatedNews->count() > 0)
    <section class="py-16 bg-[var(--color-neutral-50)]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="mb-10">Related Articles</h2>
            
            <div class="grid md:grid-cols-2 gap-8">
                @foreach($relatedNews as $related)
                    <article class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow group">
                        <!-- Related News Image -->
                        <div class="relative h-48 overflow-hidden bg-[var(--color-neutral-200)]">
                            @if($related->image)
                                <img src="{{ asset('storage/' . $related->image) }}" 
                                     alt="{{ $related->title }}" 
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-[var(--color-primary)]/20 to-[var(--color-secondary)]/20">
                                    <i data-lucide="image" class="w-12 h-12 text-[var(--color-neutral-400)]"></i>
                                </div>
                            @endif
                            
                            <!-- Category Badge -->
                            <div class="absolute top-4 left-4">
                                <span class="bg-white/95 backdrop-blur-sm px-4 py-2 rounded-full text-sm text-[var(--color-primary)]">
                                    {{ $related->category }}
                                </span>
                            </div>
                        </div>

                        <!-- Related News Content -->
                        <div class="p-6">
                            <div class="flex items-center gap-4 text-sm text-[var(--color-neutral-700)] mb-4">
                                <span class="flex items-center gap-2">
                                    <i data-lucide="calendar" class="w-4 h-4"></i>
                                    {{ $related->published_at ? $related->published_at->format('M d, Y') : $related->created_at->format('M d, Y') }}
                                </span>
                            </div>

                            <h3 class="mb-3 line-clamp-2 group-hover:text-[var(--color-primary)] transition-colors">
                                {{ $related->title }}
                            </h3>

                            <p class="text-[var(--color-neutral-700)] mb-6 line-clamp-2">
                                {{ $related->excerpt }}
                            </p>

                            <a href="{{ route('news.detail', $related->id) }}" 
                               class="inline-flex items-center gap-2 text-[var(--color-primary)] hover:gap-3 transition-all">
                                <span>Read More</span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endif

<!-- Back to News -->
<section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <a href="{{ route('news') }}" 
           class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-10 py-4 rounded-xl hover:bg-[var(--color-primary-dark)] transition-colors">
            <i data-lucide="arrow-left" class="w-5 h-5"></i>
            <span>Back to All News</span>
        </a>
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

    .prose {
        color: var(--color-neutral-800);
    }

    .prose p {
        margin-bottom: 1.5rem;
        line-height: 1.8;
    }

    .prose h2 {
        margin-top: 2rem;
        margin-bottom: 1rem;
    }

    .prose h3 {
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
    }

    .prose ul, .prose ol {
        margin-bottom: 1.5rem;
        padding-left: 1.5rem;
    }

    .prose li {
        margin-bottom: 0.5rem;
    }

    .prose blockquote {
        border-left: 4px solid var(--color-primary);
        padding-left: 1.5rem;
        margin: 2rem 0;
        font-style: italic;
        color: var(--color-neutral-700);
    }
</style>
@endpush

@push('scripts')
<script>
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(function() {
            alert('Link copied to clipboard!');
        }, function(err) {
            console.error('Could not copy text: ', err);
        });
    }
</script>
@endpush
