@extends('layouts.app')

@section('title', 'School Facilities - Harmony Academy')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-block bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full mb-6">
            <span class="flex items-center gap-2">
                <i data-lucide="building-2" class="w-5 h-5"></i>
                Campus Tour
            </span>
        </div>
        <h1 class="text-white mb-6">School Facilities</h1>
        <p class="text-xl text-white/90 max-w-3xl mx-auto">
            Explore our state-of-the-art campus designed to inspire learning and innovation
        </p>
    </div>
</section>

<!-- Facilities Overview -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 text-center shadow-md">
                <div class="bg-blue-100 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="book-open" class="w-8 h-8 text-blue-600"></i>
                </div>
                <h3 class="mb-2">Smart Classrooms</h3>
                <p class="text-3xl text-[var(--color-primary)] mb-2">45+</p>
                <p class="text-sm text-[var(--color-neutral-700)]">Digital learning spaces</p>
            </div>

            <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 text-center shadow-md">
                <div class="bg-green-100 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="flask-conical" class="w-8 h-8 text-green-600"></i>
                </div>
                <h3 class="mb-2">Science Labs</h3>
                <p class="text-3xl text-[var(--color-secondary)] mb-2">8</p>
                <p class="text-sm text-[var(--color-neutral-700)]">Advanced laboratories</p>
            </div>

            <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-6 text-center shadow-md">
                <div class="bg-purple-100 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="dumbbell" class="w-8 h-8 text-purple-600"></i>
                </div>
                <h3 class="mb-2">Sports Facilities</h3>
                <p class="text-3xl text-purple-600 mb-2">12</p>
                <p class="text-sm text-[var(--color-neutral-700)]">Athletic venues</p>
            </div>

            <div class="bg-gradient-to-br from-orange-50 to-white rounded-2xl p-6 text-center shadow-md">
                <div class="bg-orange-100 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="trees" class="w-8 h-8 text-orange-600"></i>
                </div>
                <h3 class="mb-2">Campus Area</h3>
                <p class="text-3xl text-orange-600 mb-2">5</p>
                <p class="text-sm text-[var(--color-neutral-700)]">Hectares of green space</p>
            </div>
        </div>
    </div>
</section>

<!-- Main Facilities -->
<section class="py-16 bg-[var(--color-neutral-50)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-block bg-[var(--color-primary)]/10 px-6 py-3 rounded-full mb-6">
                <span class="text-[var(--color-primary)] flex items-center gap-2">
                    <i data-lucide="building" class="w-5 h-5"></i>
                    Our Campus
                </span>
            </div>
            <h2 class="mb-6">World-Class Facilities</h2>
            <p class="text-xl text-[var(--color-neutral-700)] max-w-3xl mx-auto">
                Every corner of our campus is designed to support student growth and achievement
            </p>
        </div>

        <div class="space-y-12">
            <!-- Academic Buildings -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="grid md:grid-cols-2">
                    <div class="h-80 bg-gradient-to-br from-blue-100 to-blue-50 flex items-center justify-center">
                        <i data-lucide="school" class="w-32 h-32 text-blue-600/30"></i>
                    </div>
                    <div class="p-10 flex flex-col justify-center">
                        <div class="bg-blue-100 w-14 h-14 rounded-xl flex items-center justify-center mb-6">
                            <i data-lucide="school" class="w-7 h-7 text-blue-600"></i>
                        </div>
                        <h3 class="mb-4">Academic Buildings</h3>
                        <p class="text-[var(--color-neutral-700)] mb-6 leading-relaxed">
                            Our modern academic buildings feature smart classrooms equipped with interactive whiteboards, 
                            projectors, and high-speed internet. Climate-controlled environments ensure optimal learning 
                            conditions year-round.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-[var(--color-neutral-700)]">Interactive smart boards in every classroom</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-[var(--color-neutral-700)]">Ergonomic furniture for student comfort</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-[var(--color-neutral-700)]">Natural lighting and ventilation systems</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Science & Technology -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="grid md:grid-cols-2">
                    <div class="p-10 flex flex-col justify-center order-2 md:order-1">
                        <div class="bg-green-100 w-14 h-14 rounded-xl flex items-center justify-center mb-6">
                            <i data-lucide="microscope" class="w-7 h-7 text-green-600"></i>
                        </div>
                        <h3 class="mb-4">Science & Technology Labs</h3>
                        <p class="text-[var(--color-neutral-700)] mb-6 leading-relaxed">
                            State-of-the-art laboratories for Physics, Chemistry, Biology, and Computer Science provide 
                            hands-on learning experiences. Students engage in experiments and research projects with 
                            cutting-edge equipment.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-[var(--color-neutral-700)]">Advanced scientific equipment and tools</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-[var(--color-neutral-700)]">Computer labs with latest software</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-[var(--color-neutral-700)]">Safety equipment and protocols</span>
                            </li>
                        </ul>
                    </div>
                    <div class="h-80 bg-gradient-to-br from-green-100 to-green-50 flex items-center justify-center order-1 md:order-2">
                        <i data-lucide="microscope" class="w-32 h-32 text-green-600/30"></i>
                    </div>
                </div>
            </div>

            <!-- Library & Media Center -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="grid md:grid-cols-2">
                    <div class="h-80 bg-gradient-to-br from-purple-100 to-purple-50 flex items-center justify-center">
                        <i data-lucide="library" class="w-32 h-32 text-purple-600/30"></i>
                    </div>
                    <div class="p-10 flex flex-col justify-center">
                        <div class="bg-purple-100 w-14 h-14 rounded-xl flex items-center justify-center mb-6">
                            <i data-lucide="library" class="w-7 h-7 text-purple-600"></i>
                        </div>
                        <h3 class="mb-4">Library & Media Center</h3>
                        <p class="text-[var(--color-neutral-700)] mb-6 leading-relaxed">
                            Our comprehensive library houses over 50,000 books, digital resources, and multimedia materials. 
                            Quiet study areas, group discussion rooms, and a media center support diverse learning needs.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-[var(--color-neutral-700)]">50,000+ books and digital resources</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-[var(--color-neutral-700)]">Online database subscriptions</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-[var(--color-neutral-700)]">Individual and group study spaces</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sports Complex -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="grid md:grid-cols-2">
                    <div class="p-10 flex flex-col justify-center order-2 md:order-1">
                        <div class="bg-orange-100 w-14 h-14 rounded-xl flex items-center justify-center mb-6">
                            <i data-lucide="trophy" class="w-7 h-7 text-orange-600"></i>
                        </div>
                        <h3 class="mb-4">Sports Complex</h3>
                        <p class="text-[var(--color-neutral-700)] mb-6 leading-relaxed">
                            World-class athletic facilities including indoor and outdoor courts, swimming pools, and 
                            fitness centers. Professional coaches train students in various sports disciplines.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-[var(--color-neutral-700)]">Olympic-size swimming pool</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-[var(--color-neutral-700)]">Multi-purpose indoor sports hall</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-[var(--color-neutral-700)]">Outdoor fields and running track</span>
                            </li>
                        </ul>
                    </div>
                    <div class="h-80 bg-gradient-to-br from-orange-100 to-orange-50 flex items-center justify-center order-1 md:order-2">
                        <i data-lucide="trophy" class="w-32 h-32 text-orange-600/30"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Photo Gallery -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-block bg-[var(--color-primary)]/10 px-6 py-3 rounded-full mb-6">
                <span class="text-[var(--color-primary)] flex items-center gap-2">
                    <i data-lucide="images" class="w-5 h-5"></i>
                    Photo Gallery
                </span>
            </div>
            <h2 class="mb-6">Campus Photos</h2>
            <p class="text-xl text-[var(--color-neutral-700)] max-w-3xl mx-auto">
                Take a virtual tour of our beautiful campus facilities
            </p>
        </div>

        @if($galleries->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($galleries as $gallery)
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer aspect-[4/3]">
                        <img src="{{ asset('storage/' . $gallery->image) }}" 
                             alt="{{ $gallery->title }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-6 text-white w-full">
                                <h4 class="mb-2 text-white">{{ $gallery->title }}</h4>
                                @if($gallery->description)
                                    <p class="text-sm text-white/90">{{ $gallery->description }}</p>
                                @endif
                                @if($gallery->category)
                                    <span class="inline-block mt-3 bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-xs">
                                        {{ $gallery->category }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="bg-[var(--color-neutral-100)] w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="images" class="w-12 h-12 text-[var(--color-neutral-400)]"></i>
                </div>
                <h3 class="mb-4 text-[var(--color-neutral-900)]">Gallery Coming Soon</h3>
                <p class="text-[var(--color-neutral-700)]">
                    Campus photos will be available soon. Check back later!
                </p>
            </div>
        @endif
    </div>
</section>

<!-- Additional Facilities -->
<section class="py-16 bg-[var(--color-neutral-50)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="mb-6">More Campus Features</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-md">
                <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                    <i data-lucide="utensils" class="w-6 h-6 text-blue-600"></i>
                </div>
                <h3 class="mb-3">Cafeteria</h3>
                <p class="text-[var(--color-neutral-700)]">
                    Spacious dining hall serving nutritious meals with varied menu options
                </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-md">
                <div class="bg-green-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                    <i data-lucide="stethoscope" class="w-6 h-6 text-green-600"></i>
                </div>
                <h3 class="mb-3">Health Center</h3>
                <p class="text-[var(--color-neutral-700)]">
                    On-campus medical facility with qualified nurses and visiting doctors
                </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-md">
                <div class="bg-purple-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                    <i data-lucide="bus" class="w-6 h-6 text-purple-600"></i>
                </div>
                <h3 class="mb-3">Transportation</h3>
                <p class="text-[var(--color-neutral-700)]">
                    Safe and comfortable bus service covering major areas of the city
                </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-md">
                <div class="bg-red-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                    <i data-lucide="shield-check" class="w-6 h-6 text-red-600"></i>
                </div>
                <h3 class="mb-3">Security</h3>
                <p class="text-[var(--color-neutral-700)]">
                    24/7 security with CCTV surveillance throughout campus
                </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-md">
                <div class="bg-yellow-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                    <i data-lucide="wifi" class="w-6 h-6 text-yellow-600"></i>
                </div>
                <h3 class="mb-3">WiFi Campus</h3>
                <p class="text-[var(--color-neutral-700)]">
                    High-speed internet access available across the entire campus
                </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-md">
                <div class="bg-indigo-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                    <i data-lucide="music" class="w-6 h-6 text-indigo-600"></i>
                </div>
                <h3 class="mb-3">Arts Studios</h3>
                <p class="text-[var(--color-neutral-700)]">
                    Dedicated spaces for music, drama, and visual arts activities
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-white mb-6">Schedule a Campus Tour</h2>
        <p class="text-xl text-white/90 mb-10">
            Experience our facilities firsthand. Book a personalized campus tour today!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('ppdb') }}" class="bg-white text-[var(--color-primary)] px-10 py-4 rounded-xl hover:bg-gray-50 transition-colors inline-flex items-center justify-center gap-3">
                <span>Apply Now</span>
                <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </a>
            <a href="{{ route('home') }}#contact" class="bg-white/10 backdrop-blur-sm text-white border-2 border-white px-10 py-4 rounded-xl hover:bg-white/20 transition-colors inline-flex items-center justify-center gap-3">
                <span>Contact Us</span>
            </a>
        </div>
    </div>
</section>
@endsection
