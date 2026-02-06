@extends('layouts.app')

@section('title', $news->title . ' - SMPN 6 Dongko')

@section('content')

<!-- Breadcrumb -->
<section class="bg-[var(--color-neutral-50)] py-6">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center gap-2 text-sm text-[var(--color-neutral-700)]">
            <a href="{{ route('home') }}" class="hover:text-[var(--color-primary)]">Beranda</a>
            <i class="fa-solid fa-chevron-right text-xs"></i>
            <a href="{{ route('news') }}" class="hover:text-[var(--color-primary)]">Berita</a>
            <i class="fa-solid fa-chevron-right text-xs"></i>
            <span class="text-[var(--color-neutral-900)]">Artikel</span>
        </nav>
    </div>
</section>

<!-- Article Header -->
<section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Category -->
        <span class="inline-block bg-[var(--color-primary)]/10 text-[var(--color-primary)] px-5 py-2 rounded-full text-sm mb-6">
            {{ $news->category }}
        </span>

        <!-- Title -->
        <h1 class="mb-6">{{ $news->title }}</h1>

        <!-- Meta -->
        <div class="flex flex-wrap items-center gap-6 text-sm text-[var(--color-neutral-700)] pb-8 border-b">
            <span class="flex items-center gap-2">
                <i class="fa-regular fa-calendar"></i>
                {{ $news->published_at ? $news->published_at->format('F d, Y') : $news->created_at->format('F d, Y') }}
            </span>

            @if($news->author)
            <span class="flex items-center gap-2">
                <i class="fa-regular fa-user"></i>
                {{ $news->author->name }}
            </span>
            @endif

            <span class="flex items-center gap-2">
                <i class="fa-regular fa-clock"></i>
                {{ ceil(str_word_count(strip_tags($news->content)) / 200) }} menit baca
            </span>
        </div>
    </div>
</section>

<!-- Featured Image -->
@if($news->image)
<section class="bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <img src="{{ asset('storage/' . $news->image) }}"
             alt="{{ $news->title }}"
             class="rounded-2xl shadow-xl w-full">
    </div>
</section>
@endif

<!-- Content -->
<section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Excerpt -->
        <div class="bg-[var(--color-neutral-50)] border-l-4 border-[var(--color-primary)] p-6 rounded-r-xl mb-10">
            <p class="text-xl leading-relaxed text-[var(--color-neutral-800)]">
                {{ $news->excerpt }}
            </p>
        </div>

        <!-- Article Body -->
        <article class="prose prose-lg max-w-none text-[var(--color-neutral-800)]">
            {!! nl2br(e($news->content)) !!}
        </article>

        <!-- Share -->
        <div class="mt-12 pt-8 border-t">
            <p class="text-sm text-[var(--color-neutral-700)] mb-4">Bagikan artikel:</p>
            <div class="flex gap-3">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('news.detail', $news->id)) }}"
                   target="_blank"
                   class="w-9 h-9 flex items-center justify-center rounded-full bg-blue-600 text-white hover:scale-110 transition">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>

                <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('news.detail', $news->id)) }}&text={{ urlencode($news->title) }}"
                   target="_blank"
                   class="w-9 h-9 flex items-center justify-center rounded-full bg-black text-white hover:scale-110 transition">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>

                <a href="https://wa.me/?text={{ urlencode($news->title . ' - ' . route('news.detail', $news->id)) }}"
                   target="_blank"
                   class="w-9 h-9 flex items-center justify-center rounded-full bg-green-500 text-white hover:scale-110 transition">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>

                <button onclick="copyToClipboard('{{ route('news.detail', $news->id) }}')"
                        class="w-9 h-9 flex items-center justify-center rounded-full bg-gray-500 text-white hover:scale-110 transition">
                    <i class="fa-solid fa-link"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Back Button -->
<section class="py-12 bg-white text-center">
    <a href="{{ route('news') }}"
       class="inline-flex items-center gap-2 bg-[var(--color-primary)] text-white px-10 py-4 rounded-xl hover:bg-[var(--color-primary-dark)] transition">
        <i class="fa-solid fa-arrow-left"></i>
        Kembali ke Berita
    </a>
</section>

@endsection

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
