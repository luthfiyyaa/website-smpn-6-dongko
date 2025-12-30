@extends('layouts.app')

@section('title', 'Student Affairs - Harmony Academy')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-block bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full mb-6">
            <span class="flex items-center gap-2">
                <i data-lucide="trophy" class="w-5 h-5"></i>
                Student Life
            </span>
        </div>
        <h1 class="text-white mb-6">Student Affairs</h1>
        <p class="text-xl text-white/90 max-w-3xl mx-auto">
            Empowering students through achievements, activities, and holistic development
        </p>
    </div>
</section>

<!-- Student Achievements -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-block bg-[var(--color-primary)]/10 px-6 py-3 rounded-full mb-6">
                <span class="text-[var(--color-primary)] flex items-center gap-2">
                    <i data-lucide="award" class="w-5 h-5"></i>
                    Achievements
                </span>
            </div>
            <h2 class="mb-6">Student Achievements</h2>
            <p class="text-xl text-[var(--color-neutral-700)] max-w-3xl mx-auto">
                Celebrating excellence and success across academics, sports, and arts
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Academic Excellence -->
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-8 shadow-md hover:shadow-xl transition-shadow">
                <div class="bg-blue-100 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                    <i data-lucide="book-open" class="w-8 h-8 text-blue-600"></i>
                </div>
                <h3 class="mb-4">Academic Excellence</h3>
                <p class="text-[var(--color-neutral-700)] mb-6">
                    95% of students scored above national average in standardized tests
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-sm text-[var(--color-neutral-700)]">National Science Fair - 1st Place</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-sm text-[var(--color-neutral-700)]">Mathematics Olympiad - Gold Medal</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-sm text-[var(--color-neutral-700)]">Essay Competition - Top 3 Winners</span>
                    </li>
                </ul>
            </div>

            <!-- Sports Achievements -->
            <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-8 shadow-md hover:shadow-xl transition-shadow">
                <div class="bg-green-100 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                    <i data-lucide="trophy" class="w-8 h-8 text-green-600"></i>
                </div>
                <h3 class="mb-4">Sports Champions</h3>
                <p class="text-[var(--color-neutral-700)] mb-6">
                    Multiple championship titles in regional and national tournaments
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-sm text-[var(--color-neutral-700)]">Basketball Championship Winners</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-sm text-[var(--color-neutral-700)]">Swimming Team - Regional Champions</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-sm text-[var(--color-neutral-700)]">Track & Field - Multiple Medals</span>
                    </li>
                </ul>
            </div>

            <!-- Arts & Culture -->
            <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-8 shadow-md hover:shadow-xl transition-shadow">
                <div class="bg-purple-100 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                    <i data-lucide="palette" class="w-8 h-8 text-purple-600"></i>
                </div>
                <h3 class="mb-4">Arts & Culture</h3>
                <p class="text-[var(--color-neutral-700)] mb-6">
                    Creative excellence in music, drama, and visual arts competitions
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-sm text-[var(--color-neutral-700)]">National Music Festival - Best Performance</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-sm text-[var(--color-neutral-700)]">Art Exhibition - Featured Artists</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-sm text-[var(--color-neutral-700)]">Drama Competition - Best Production</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Student Activities & Clubs -->
<section class="py-16 bg-[var(--color-neutral-50)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-block bg-[var(--color-primary)]/10 px-6 py-3 rounded-full mb-6">
                <span class="text-[var(--color-primary)] flex items-center gap-2">
                    <i data-lucide="users" class="w-5 h-5"></i>
                    Activities
                </span>
            </div>
            <h2 class="mb-6">Student Clubs & Activities</h2>
            <p class="text-xl text-[var(--color-neutral-700)] max-w-3xl mx-auto">
                Diverse opportunities for personal growth and skill development
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            <!-- Science Club -->
            <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-lg transition-shadow">
                <div class="flex items-start gap-6">
                    <div class="bg-blue-100 p-4 rounded-xl flex-shrink-0">
                        <i data-lucide="flask-conical" class="w-8 h-8 text-blue-600"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="mb-3">Science & Robotics Club</h3>
                        <p class="text-[var(--color-neutral-700)] mb-4">
                            Hands-on experiments, robotics competitions, and STEM projects
                        </p>
                        <div class="flex items-center gap-4 text-sm text-[var(--color-neutral-700)]">
                            <span class="flex items-center gap-2">
                                <i data-lucide="users-2" class="w-4 h-4"></i>
                                65 Members
                            </span>
                            <span class="flex items-center gap-2">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                                Weekly
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Music & Drama -->
            <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-lg transition-shadow">
                <div class="flex items-start gap-6">
                    <div class="bg-purple-100 p-4 rounded-xl flex-shrink-0">
                        <i data-lucide="music" class="w-8 h-8 text-purple-600"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="mb-3">Music & Drama Society</h3>
                        <p class="text-[var(--color-neutral-700)] mb-4">
                            Theater productions, musical performances, and creative expression
                        </p>
                        <div class="flex items-center gap-4 text-sm text-[var(--color-neutral-700)]">
                            <span class="flex items-center gap-2">
                                <i data-lucide="users-2" class="w-4 h-4"></i>
                                45 Members
                            </span>
                            <span class="flex items-center gap-2">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                                Bi-weekly
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sports Teams -->
            <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-lg transition-shadow">
                <div class="flex items-start gap-6">
                    <div class="bg-green-100 p-4 rounded-xl flex-shrink-0">
                        <i data-lucide="bike" class="w-8 h-8 text-green-600"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="mb-3">Athletic Teams</h3>
                        <p class="text-[var(--color-neutral-700)] mb-4">
                            Basketball, soccer, swimming, track & field, and more
                        </p>
                        <div class="flex items-center gap-4 text-sm text-[var(--color-neutral-700)]">
                            <span class="flex items-center gap-2">
                                <i data-lucide="users-2" class="w-4 h-4"></i>
                                120+ Athletes
                            </span>
                            <span class="flex items-center gap-2">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                                Daily Practice
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Community Service -->
            <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-lg transition-shadow">
                <div class="flex items-start gap-6">
                    <div class="bg-orange-100 p-4 rounded-xl flex-shrink-0">
                        <i data-lucide="heart-handshake" class="w-8 h-8 text-orange-600"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="mb-3">Community Service</h3>
                        <p class="text-[var(--color-neutral-700)] mb-4">
                            Volunteer programs, social initiatives, and environmental projects
                        </p>
                        <div class="flex items-center gap-4 text-sm text-[var(--color-neutral-700)]">
                            <span class="flex items-center gap-2">
                                <i data-lucide="users-2" class="w-4 h-4"></i>
                                80 Volunteers
                            </span>
                            <span class="flex items-center gap-2">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                                Monthly
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Debate Club -->
            <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-lg transition-shadow">
                <div class="flex items-start gap-6">
                    <div class="bg-red-100 p-4 rounded-xl flex-shrink-0">
                        <i data-lucide="message-circle" class="w-8 h-8 text-red-600"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="mb-3">Debate & Public Speaking</h3>
                        <p class="text-[var(--color-neutral-700)] mb-4">
                            Critical thinking, argumentation, and communication skills
                        </p>
                        <div class="flex items-center gap-4 text-sm text-[var(--color-neutral-700)]">
                            <span class="flex items-center gap-2">
                                <i data-lucide="users-2" class="w-4 h-4"></i>
                                35 Members
                            </span>
                            <span class="flex items-center gap-2">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                                Weekly
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technology Club -->
            <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-lg transition-shadow">
                <div class="flex items-start gap-6">
                    <div class="bg-indigo-100 p-4 rounded-xl flex-shrink-0">
                        <i data-lucide="laptop" class="w-8 h-8 text-indigo-600"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="mb-3">Technology & Coding</h3>
                        <p class="text-[var(--color-neutral-700)] mb-4">
                            Programming, app development, and digital innovation
                        </p>
                        <div class="flex items-center gap-4 text-sm text-[var(--color-neutral-700)]">
                            <span class="flex items-center gap-2">
                                <i data-lucide="users-2" class="w-4 h-4"></i>
                                55 Coders
                            </span>
                            <span class="flex items-center gap-2">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                                Bi-weekly
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Student Leadership -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-block bg-[var(--color-primary)]/10 px-6 py-3 rounded-full mb-6">
                <span class="text-[var(--color-primary)] flex items-center gap-2">
                    <i data-lucide="shield" class="w-5 h-5"></i>
                    Leadership
                </span>
            </div>
            <h2 class="mb-6">Student Government</h2>
            <p class="text-xl text-[var(--color-neutral-700)] max-w-3xl mx-auto">
                Developing future leaders through democratic participation
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i data-lucide="crown" class="w-10 h-10 text-white"></i>
                </div>
                <h3 class="mb-3">Student Council</h3>
                <p class="text-[var(--color-neutral-700)]">
                    Elected representatives advocating for student interests and organizing events
                </p>
            </div>

            <div class="text-center">
                <div class="bg-gradient-to-br from-green-500 to-green-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i data-lucide="megaphone" class="w-10 h-10 text-white"></i>
                </div>
                <h3 class="mb-3">Class Representatives</h3>
                <p class="text-[var(--color-neutral-700)]">
                    Liaison between students and teachers, ensuring effective communication
                </p>
            </div>

            <div class="text-center">
                <div class="bg-gradient-to-br from-purple-500 to-purple-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i data-lucide="users-round" class="w-10 h-10 text-white"></i>
                </div>
                <h3 class="mb-3">Peer Mentors</h3>
                <p class="text-[var(--color-neutral-700)]">
                    Senior students guiding and supporting younger peers in their academic journey
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-white mb-6">Join Our Community</h2>
        <p class="text-xl text-white/90 mb-10">
            Discover your passion, develop your talents, and make lifelong friendships
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
