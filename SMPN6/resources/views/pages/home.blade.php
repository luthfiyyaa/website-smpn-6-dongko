@extends('layouts.app')

@section('title', 'Home - Harmony Academy')
@section('description', 'Welcome to Harmony Academy - Nurturing minds, inspiring futures through quality education')

@section('content')
<!-- Hero Section -->
<section class="relative h-[600px] bg-gradient-to-r from-[var(--color-primary)] to-[var(--color-primary-dark)] overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1647667436195-6954ef8b27e0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxzY2hvb2wlMjBidWlsZGluZyUyMGV4dGVyaW9yfGVufDF8fHx8MTc2NjMwMzU2OHww&ixlib=rb-4.1.0&q=80&w=1080" 
             alt="School Building" 
             class="w-full h-full object-cover">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
        <div class="max-w-2xl">
            <h1 class="text-white mb-6">Welcome to Harmony Academy</h1>
            <p class="text-xl text-white/90 mb-10 leading-relaxed">
                Nurturing minds, inspiring futures. Where excellence meets opportunity in education.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('ppdb') }}" class="bg-white text-[var(--color-primary)] px-10 py-4 rounded-lg hover:bg-[var(--color-neutral-100)] transition-colors flex items-center gap-2">
                    Apply Now
                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </a>
                <a href="{{ route('profile') }}" class="border-2 border-white text-white px-10 py-4 rounded-lg hover:bg-white/10 transition-colors">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 relative z-10 mb-32">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl shadow-lg p-8 text-center">
            <i data-lucide="users" class="w-12 h-12 text-[var(--color-primary)] mx-auto mb-4"></i>
            <div class="text-4xl text-[var(--color-neutral-900)] mb-2">1,200+</div>
            <div class="text-[var(--color-neutral-700)]">Students</div>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-8 text-center">
            <i data-lucide="user-check" class="w-12 h-12 text-[var(--color-primary)] mx-auto mb-4"></i>
            <div class="text-4xl text-[var(--color-neutral-900)] mb-2">120+</div>
            <div class="text-[var(--color-neutral-700)]">Teachers</div>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-8 text-center">
            <i data-lucide="award" class="w-12 h-12 text-[var(--color-primary)] mx-auto mb-4"></i>
            <div class="text-4xl text-[var(--color-neutral-900)] mb-2">30+</div>
            <div class="text-[var(--color-neutral-700)]">Years</div>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-8 text-center">
            <i data-lucide="trophy" class="w-12 h-12 text-[var(--color-primary)] mx-auto mb-4"></i>
            <div class="text-4xl text-[var(--color-neutral-900)] mb-2">500+</div>
            <div class="text-[var(--color-neutral-700)]">Awards</div>
        </div>
    </div>
</section>

<!-- Principal's Message -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-32">
    <div class="bg-white rounded-2xl shadow-md overflow-hidden">
        <div class="grid md:grid-cols-2 gap-0 items-center">
            <div class="h-full">
                <img src="https://images.unsplash.com/photo-1746513534315-caa52d3f462c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcmluY2lwYWwlMjB0ZWFjaGVyJTIwcG9ydHJhaXR8ZW58MXx8fHwxNzY2Mzc2MDk3fDA&ixlib=rb-4.1.0&q=80&w=1080" 
                     alt="Principal" 
                     class="w-full h-full object-cover min-h-[400px]">
            </div>
            <div class="p-10 lg:p-12">
                <h2 class="mb-6">Principal's Welcome</h2>
                <p class="mb-5 leading-relaxed">
                    Dear Students, Parents, and Visitors,
                </p>
                <p class="mb-5 leading-relaxed">
                    It is my great pleasure to welcome you to Harmony Academy. For over 30 years, we have been committed to providing an exceptional educational experience that nurtures academic excellence, character development, and creative thinking.
                </p>
                <p class="mb-5 leading-relaxed">
                    Our dedicated faculty and staff work tirelessly to create an environment where every student can thrive and reach their full potential. We believe in educating the whole child - academically, socially, and emotionally.
                </p>
                <div class="mt-8 pt-6 border-t border-[var(--color-neutral-200)]">
                    <p class="text-[var(--color-neutral-900)]">Dr. Sarah Johnson</p>
                    <p class="text-[var(--color-neutral-700)] mt-1">Principal</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Highlights Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-32">
    <div class="flex justify-between items-end mb-12">
        <div>
            <h2 class="mb-3">Latest Highlights</h2>
            <p class="text-[var(--color-neutral-700)]">Stay updated with our recent news, events, and achievements</p>
        </div>
        <a href="{{ route('news') }}" class="hidden sm:flex items-center gap-2 text-[var(--color-primary)] hover:text-[var(--color-primary-dark)]">
            View All
            <i data-lucide="arrow-right" class="w-5 h-5"></i>
        </a>
    </div>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow cursor-pointer">
            <img src="https://images.unsplash.com/photo-1567168544450-75e8b62f1977?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080" 
                 alt="Science Fair" 
                 class="w-full h-48 object-cover">
            <div class="p-8">
                <div class="flex items-center gap-3 mb-4">
                    <span class="bg-[var(--color-primary)]/10 text-[var(--color-primary)] px-4 py-1.5 rounded-full text-sm">
                        Achievement
                    </span>
                    <span class="text-sm text-[var(--color-neutral-700)] flex items-center gap-1">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                        Dec 15, 2024
                    </span>
                </div>
                <h3 class="mb-2">Students Win National Science Fair</h3>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow cursor-pointer">
            <img src="https://images.unsplash.com/photo-1581093588401-fbb5a9fa9558?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080" 
                 alt="STEM Lab" 
                 class="w-full h-48 object-cover">
            <div class="p-8">
                <div class="flex items-center gap-3 mb-4">
                    <span class="bg-[var(--color-primary)]/10 text-[var(--color-primary)] px-4 py-1.5 rounded-full text-sm">
                        Facilities
                    </span>
                    <span class="text-sm text-[var(--color-neutral-700)] flex items-center gap-1">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                        Dec 10, 2024
                    </span>
                </div>
                <h3 class="mb-2">New STEM Lab Opens</h3>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow cursor-pointer">
            <img src="https://images.unsplash.com/photo-1460518451285-97b6aa326961?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080" 
                 alt="Arts Festival" 
                 class="w-full h-48 object-cover">
            <div class="p-8">
                <div class="flex items-center gap-3 mb-4">
                    <span class="bg-[var(--color-primary)]/10 text-[var(--color-primary)] px-4 py-1.5 rounded-full text-sm">
                        Events
                    </span>
                    <span class="text-sm text-[var(--color-neutral-700)] flex items-center gap-1">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                        Dec 5, 2024
                    </span>
                </div>
                <h3 class="mb-2">Annual Arts Festival Success</h3>
            </div>
        </div>
    </div>
</section>

<!-- Photo Gallery -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-32">
    <h2 class="mb-12 text-center">Our Campus Life</h2>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="aspect-square rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
            <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400" 
                 alt="Gallery 1" 
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
        </div>
        <div class="aspect-square rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400" 
                 alt="Gallery 2" 
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
        </div>
        <div class="aspect-square rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400" 
                 alt="Gallery 3" 
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
        </div>
        <div class="aspect-square rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400" 
                 alt="Gallery 4" 
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
        </div>
    </div>
    <div class="text-center mt-10">
        <a href="{{ route('facilities') }}" class="text-[var(--color-primary)] hover:text-[var(--color-primary-dark)] inline-flex items-center gap-2">
            Explore Our Facilities
            <i data-lucide="arrow-right" class="w-5 h-5"></i>
        </a>
    </div>
</section>

<!-- CTA Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-gradient-to-r from-[var(--color-primary)] to-[var(--color-secondary)] rounded-2xl p-12 lg:p-16 text-center text-white">
        <h2 class="text-white mb-6">Ready to Join Our Community?</h2>
        <p class="text-xl mb-10 text-white/90 max-w-2xl mx-auto leading-relaxed">
            Discover how Harmony Academy can help your child reach their full potential. Start your admission journey today.
        </p>
        <a href="{{ route('ppdb') }}" class="bg-white text-[var(--color-primary)] px-10 py-4 rounded-lg hover:bg-[var(--color-neutral-100)] transition-colors inline-flex items-center gap-2">
            Start Application
            <i data-lucide="arrow-right" class="w-5 h-5"></i>
        </a>
    </div>
</section>
@endsection
