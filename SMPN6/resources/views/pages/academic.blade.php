@extends('layouts.app')

@section('title', 'Akademik - SMPN 6 Dongko')
@section('description', 'Jelajahi program akademik, kurikulum, dan kegiatan ekstrakurikuler kami yang komprehensif.')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <!-- Page Header -->
    <div class="text-center mb-20">
        <h1 class="mb-6">Akademik</h1>
        <p class="text-xl text-[var(--color-neutral-700)] max-w-3xl mx-auto leading-relaxed">
            Program akademik komprehensif kami dirancang untuk menantang, menginspirasi, dan mempersiapkan siswa untuk sukses di dunia yang berubah dengan cepat.
        </p>
    </div>

    <!-- Curriculum Section -->
    <section class="mb-32">
        <h2 class="text-center mb-16">Kurikulum yang Kami Gunakan</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-8 text-white">
                    <i data-lucide="book-open" class="w-12 h-12 mb-6"></i>
                    <h3 class="text-white">National Curriculum</h3>
                </div>
                <div class="p-8">
                    <p class="leading-relaxed">Comprehensive curriculum aligned with national education standards, focusing on core subjects and holistic development.</p>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                <div class="bg-gradient-to-r from-green-500 to-green-600 p-8 text-white">
                    <i data-lucide="globe" class="w-12 h-12 mb-6"></i>
                    <h3 class="text-white">International Baccalaureate (IB)</h3>
                </div>
                <div class="p-8">
                    <p class="leading-relaxed">Globally recognized program that develops inquiring, knowledgeable and caring young people.</p>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                <div class="bg-gradient-to-r from-purple-500 to-purple-600 p-8 text-white">
                    <i data-lucide="languages" class="w-12 h-12 mb-6"></i>
                    <h3 class="text-white">Cambridge International</h3>
                </div>
                <div class="p-8">
                    <p class="leading-relaxed">World-class curriculum and qualifications for students aged 5 to 19 years.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Programs -->
    <section class="mb-32">
        <h2 class="text-center mb-16">Featured Academic Programs</h2>
        <div class="grid md:grid-cols-2 gap-8">
            @foreach([
                [
                    'icon' => 'microscope',
                    'title' => 'STEM Excellence Program',
                    'description' => 'Advanced program focusing on Science, Technology, Engineering, and Mathematics with hands-on projects and competitions.',
                    'highlights' => ['Robotics Club', 'Science Olympiad', 'Innovation Lab Access']
                ],
                [
                    'icon' => 'palette',
                    'title' => 'Arts & Culture Program',
                    'description' => 'Comprehensive arts education including visual arts, performing arts, and cultural studies.',
                    'highlights' => ['Annual Art Exhibition', 'Theater Productions', 'Music Performances']
                ],
                [
                    'icon' => 'languages',
                    'title' => 'Language Immersion',
                    'description' => 'Multilingual program offering English, Mandarin, Spanish, and French with native speakers.',
                    'highlights' => ['Exchange Programs', 'Language Competitions', 'Cultural Events']
                ],
                [
                    'icon' => 'code',
                    'title' => 'Digital Innovation Track',
                    'description' => 'Cutting-edge technology education including coding, AI, and digital media production.',
                    'highlights' => ['Coding Bootcamps', 'App Development', 'Digital Portfolio']
                ]
            ] as $program)
                <div class="bg-white rounded-xl shadow-md p-10 hover:shadow-xl transition-shadow">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="bg-[var(--color-primary)]/10 p-4 rounded-xl">
                            <i data-lucide="{{ $program['icon'] }}" class="w-8 h-8 text-[var(--color-primary)]"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="mb-3">{{ $program['title'] }}</h3>
                            <p class="text-sm mb-4 leading-relaxed">{{ $program['description'] }}</p>
                        </div>
                    </div>
                    <div class="border-t border-[var(--color-neutral-200)] pt-6">
                        <p class="text-sm mb-3 text-[var(--color-neutral-700)]">Program Highlights:</p>
                        <div class="flex flex-wrap gap-3">
                            @foreach($program['highlights'] as $highlight)
                                <span class="bg-[var(--color-secondary)]/10 text-[var(--color-secondary-dark)] px-4 py-2 rounded-full text-sm">
                                    {{ $highlight }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Academic Calendar -->
    <section class="mb-32">
        <h2 class="text-center mb-16">Academic Calendar 2024-2025</h2>
        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach([
                ['month' => 'August', 'events' => ['New Academic Year', 'Orientation Week', 'Back to School Night']],
                ['month' => 'September', 'events' => ['Parent-Teacher Meetings', 'Science Fair Planning', 'Club Sign-ups']],
                ['month' => 'October', 'events' => ['Fall Break', 'Career Week', 'Sports Day']],
                ['month' => 'November', 'events' => ['Midterm Exams', 'Art Exhibition', 'Thanksgiving Break']],
                ['month' => 'December', 'events' => ['Winter Concert', 'Holiday Festival', 'Winter Break']],
                ['month' => 'January', 'events' => ['Spring Semester', 'New Course Selection', 'Debate Competition']],
                ['month' => 'February', 'events' => ['Science Fair', 'Language Week', 'Valentines Charity']],
                ['month' => 'March', 'events' => ['Spring Break', 'College Fair', 'Drama Performance']],
                ['month' => 'April', 'events' => ['Earth Day Events', 'Math Olympiad', 'Student Council Elections']],
                ['month' => 'May', 'events' => ['Final Exams', 'Awards Ceremony', 'Graduation Prep']],
                ['month' => 'June', 'events' => ['Graduation Day', 'Summer Programs', 'Year-End Celebration']],
                ['month' => 'July', 'events' => ['Summer Break', 'Summer School', 'New Student Registration']]
            ] as $item)
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
                    <div class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-primary-dark)] text-white text-center py-3 rounded-lg mb-5">
                        <h4 class="text-white">{{ $item['month'] }}</h4>
                    </div>
                    <ul class="space-y-3">
                        @foreach($item['events'] as $event)
                            <li class="text-sm text-[var(--color-neutral-700)] flex items-start gap-2">
                                <span class="text-[var(--color-primary)] mt-1">•</span>
                                <span>{{ $event }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Extracurricular Activities -->
    <section class="mb-16">
        <h2 class="text-center mb-6">Extracurricular Activities</h2>
        <p class="text-center text-[var(--color-neutral-700)] mb-12 max-w-2xl mx-auto leading-relaxed">
            Beyond the classroom, we offer a wide range of activities to help students discover their passions and develop new skills.
        </p>
        
        <!-- Categorized Activities -->
        <div class="space-y-12">
            @foreach([
                'Sports' => [
                    ['icon' => 'trophy', 'name' => 'Basketball'],
                    ['icon' => 'trophy', 'name' => 'Soccer'],
                    ['icon' => 'trophy', 'name' => 'Swimming'],
                    ['icon' => 'trophy', 'name' => 'Tennis'],
                    ['icon' => 'trophy', 'name' => 'Track & Field'],
                    ['icon' => 'trophy', 'name' => 'Volleyball']
                ],
                'Arts' => [
                    ['icon' => 'palette', 'name' => 'Painting'],
                    ['icon' => 'music', 'name' => 'Orchestra'],
                    ['icon' => 'music', 'name' => 'Choir'],
                    ['icon' => 'drama', 'name' => 'Theater'],
                    ['icon' => 'camera', 'name' => 'Photography'],
                    ['icon' => 'palette', 'name' => 'Sculpture']
                ],
                'STEM' => [
                    ['icon' => 'cpu', 'name' => 'Robotics'],
                    ['icon' => 'code', 'name' => 'Coding Club'],
                    ['icon' => 'flask-conical', 'name' => 'Science Club'],
                    ['icon' => 'calculator', 'name' => 'Math Team'],
                    ['icon' => 'rocket', 'name' => 'Space Club'],
                    ['icon' => 'lightbulb', 'name' => 'Innovation Lab']
                ],
                'Academic' => [
                    ['icon' => 'book', 'name' => 'Debate Team'],
                    ['icon' => 'newspaper', 'name' => 'School Paper'],
                    ['icon' => 'globe', 'name' => 'Model UN'],
                    ['icon' => 'book-open', 'name' => 'Book Club'],
                    ['icon' => 'languages', 'name' => 'Language Clubs'],
                    ['icon' => 'users', 'name' => 'Student Council']
                ]
            ] as $category => $activities)
                <div>
                    <h4 class="mb-6 text-[var(--color-primary)]">{{ $category }}</h4>
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                        @foreach($activities as $activity)
                            <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition-shadow cursor-pointer">
                                <i data-lucide="{{ $activity['icon'] }}" class="w-8 h-8 text-[var(--color-primary)] mx-auto mb-3"></i>
                                <p class="text-sm">{{ $activity['name'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="mt-16 bg-gradient-to-r from-[var(--color-primary)]/10 to-[var(--color-secondary)]/10 rounded-2xl p-10 text-center">
            <h3 class="mb-6">Want to Learn More About Our Programs?</h3>
            <p class="mb-8 text-[var(--color-neutral-700)] leading-relaxed">
                Contact our admissions office to schedule a campus tour and learn about our academic offerings.
            </p>
            <button class="bg-[var(--color-primary)] text-white px-10 py-4 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors">
                Schedule a Visit
            </button>
        </div>
    </section>
</div>
@endsection
