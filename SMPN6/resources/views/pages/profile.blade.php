@extends('layouts.app')

@section('title', 'School Profile - Harmony Academy')
@section('description', 'Learn about Harmony Academy history, mission, vision, and organizational structure')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <!-- Page Header -->
    <div class="text-center mb-20">
        <h1 class="mb-6">School Profile</h1>
        <p class="text-xl text-[var(--color-neutral-700)] max-w-3xl mx-auto leading-relaxed">
            Learn about our rich history, mission, vision, and the dedicated team that makes Harmony Academy a center of excellence.
        </p>
    </div>

    <!-- Vision and Mission -->
    <section class="mb-32">
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-primary-dark)] rounded-2xl p-10 text-white">
                <div class="bg-white/20 w-16 h-16 rounded-xl flex items-center justify-center mb-8">
                    <i data-lucide="eye" class="w-8 h-8"></i>
                </div>
                <h2 class="text-white mb-6">Our Vision</h2>
                <p class="text-white/90 leading-relaxed">
                    To be a leading educational institution that nurtures innovative, compassionate, and globally-minded individuals who contribute positively to society.
                </p>
            </div>

            <div class="bg-gradient-to-br from-[var(--color-secondary)] to-[var(--color-secondary-dark)] rounded-2xl p-10 text-white">
                <div class="bg-white/20 w-16 h-16 rounded-xl flex items-center justify-center mb-8">
                    <i data-lucide="target" class="w-8 h-8"></i>
                </div>
                <h2 class="text-white mb-6">Our Mission</h2>
                <p class="text-white/90 mb-6 leading-relaxed">
                    To provide exceptional education that:
                </p>
                <ul class="space-y-3 text-white/90">
                    <li>• Develops critical thinking and problem-solving skills</li>
                    <li>• Fosters creativity and innovation</li>
                    <li>• Builds character and social responsibility</li>
                    <li>• Prepares students for global citizenship</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="mb-32">
        <h2 class="text-center mb-16">Our Core Values</h2>
        <div class="grid md:grid-cols-4 gap-8">
            <div class="bg-white rounded-xl shadow-md p-8 text-center hover:shadow-xl transition-shadow">
                <div class="bg-[var(--color-primary)]/10 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="award" class="w-8 h-8 text-[var(--color-primary)]"></i>
                </div>
                <h4 class="mb-3">Excellence</h4>
                <p class="text-sm text-[var(--color-neutral-700)] leading-relaxed">Striving for the highest standards in all endeavors</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-8 text-center hover:shadow-xl transition-shadow">
                <div class="bg-[var(--color-primary)]/10 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="users" class="w-8 h-8 text-[var(--color-primary)]"></i>
                </div>
                <h4 class="mb-3">Community</h4>
                <p class="text-sm text-[var(--color-neutral-700)] leading-relaxed">Building strong relationships and collaboration</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-8 text-center hover:shadow-xl transition-shadow">
                <div class="bg-[var(--color-primary)]/10 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="trending-up" class="w-8 h-8 text-[var(--color-primary)]"></i>
                </div>
                <h4 class="mb-3">Growth</h4>
                <p class="text-sm text-[var(--color-neutral-700)] leading-relaxed">Continuous learning and personal development</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-8 text-center hover:shadow-xl transition-shadow">
                <div class="bg-[var(--color-primary)]/10 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="target" class="w-8 h-8 text-[var(--color-primary)]"></i>
                </div>
                <h4 class="mb-3">Integrity</h4>
                <p class="text-sm text-[var(--color-neutral-700)] leading-relaxed">Upholding honesty, respect, and responsibility</p>
            </div>
        </div>
    </section>

    <!-- School History Timeline -->
    <section class="mb-32">
        <h2 class="text-center mb-16">Our History</h2>
        
        <!-- Desktop Timeline -->
        <div class="hidden md:block relative">
            <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-[var(--color-primary)]/20"></div>
            
            <div class="space-y-12">
                @foreach([
                    ['year' => '1994', 'event' => 'Harmony Academy was founded with just 100 students and a vision for excellence in education.'],
                    ['year' => '2000', 'event' => 'Expanded campus facilities including new science laboratories and library.'],
                    ['year' => '2010', 'event' => 'Achieved National Accreditation Grade A and introduced International Baccalaureate program.'],
                    ['year' => '2015', 'event' => 'Celebrated 1,000th graduate and established alumni scholarship fund.'],
                    ['year' => '2020', 'event' => 'Launched innovative online learning platform and hybrid education model.'],
                    ['year' => '2024', 'event' => 'Opened state-of-the-art STEM center and reached 1,200+ student enrollment.']
                ] as $index => $item)
                    <div class="flex items-center gap-8 {{ $index % 2 === 0 ? '' : 'flex-row-reverse' }}">
                        <div class="flex-1 {{ $index % 2 === 0 ? 'text-right' : 'text-left' }}">
                            <div class="bg-white rounded-xl shadow-md p-8">
                                <div class="inline-block bg-[var(--color-primary)] text-white px-5 py-2 rounded-full mb-4">
                                    {{ $item['year'] }}
                                </div>
                                <p class="leading-relaxed">{{ $item['event'] }}</p>
                            </div>
                        </div>
                        <div class="w-4 h-4 bg-[var(--color-primary)] rounded-full border-4 border-white shadow-md z-10"></div>
                        <div class="flex-1"></div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Mobile Timeline -->
        <div class="md:hidden space-y-8">
            @foreach([
                ['year' => '1994', 'event' => 'Harmony Academy was founded with just 100 students and a vision for excellence in education.'],
                ['year' => '2000', 'event' => 'Expanded campus facilities including new science laboratories and library.'],
                ['year' => '2010', 'event' => 'Achieved National Accreditation Grade A and introduced International Baccalaureate program.'],
                ['year' => '2015', 'event' => 'Celebrated 1,000th graduate and established alumni scholarship fund.'],
                ['year' => '2020', 'event' => 'Launched innovative online learning platform and hybrid education model.'],
                ['year' => '2024', 'event' => 'Opened state-of-the-art STEM center and reached 1,200+ student enrollment.']
            ] as $index => $item)
                <div class="flex gap-4">
                    <div class="flex flex-col items-center">
                        <div class="w-3 h-3 bg-[var(--color-primary)] rounded-full"></div>
                        @if($index < 5)
                            <div class="w-0.5 flex-1 bg-[var(--color-primary)]/20 my-1"></div>
                        @endif
                    </div>
                    <div class="flex-1 pb-8">
                        <div class="bg-white rounded-xl shadow-md p-6">
                            <div class="inline-block bg-[var(--color-primary)] text-white px-4 py-1.5 rounded-full text-sm mb-3">
                                {{ $item['year'] }}
                            </div>
                            <p class="text-sm leading-relaxed">{{ $item['event'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Organizational Structure -->
    <section class="mb-32">
        <h2 class="text-center mb-16">Organizational Structure</h2>
        <div class="max-w-4xl mx-auto">
            <div class="space-y-6">
                @foreach([
                    ['title' => 'School Board', 'members' => ['Board Chairman', 'Board Members (5)']],
                    ['title' => 'Principal', 'members' => ['Dr. Sarah Johnson']],
                    ['title' => 'Vice Principals', 'members' => ['Academic Affairs', 'Student Affairs', 'Administration']],
                    ['title' => 'Department Heads', 'members' => ['Sciences', 'Mathematics', 'Languages', 'Arts', 'Sports']],
                    ['title' => 'Teaching Staff', 'members' => ['120+ Professional Educators']]
                ] as $index => $level)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <div class="bg-gradient-to-r from-[var(--color-primary)] to-[var(--color-primary-dark)] p-6">
                            <h4 class="text-white text-center">{{ $level['title'] }}</h4>
                        </div>
                        <div class="p-8">
                            <div class="flex flex-wrap justify-center gap-4">
                                @foreach($level['members'] as $member)
                                    <div class="bg-[var(--color-neutral-100)] px-5 py-3 rounded-lg">
                                        <p class="text-sm text-[var(--color-neutral-800)]">{{ $member }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @if($index < 4)
                            <div class="flex justify-center pb-4">
                                <div class="w-0.5 h-8 bg-[var(--color-primary)]/30"></div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Accreditation -->
    <section>
        <div class="bg-gradient-to-r from-[var(--color-secondary)]/10 to-[var(--color-primary)]/10 rounded-2xl p-12 md:p-16">
            <div class="text-center max-w-3xl mx-auto">
                <i data-lucide="award" class="w-16 h-16 text-[var(--color-primary)] mx-auto mb-8"></i>
                <h2 class="mb-6">Accreditation & Recognition</h2>
                <p class="mb-10 leading-relaxed">
                    Harmony Academy is proud to be accredited by national and international educational bodies, ensuring the highest standards of educational excellence.
                </p>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-lg p-6">
                        <p class="mb-2">National Accreditation Board</p>
                        <p class="text-[var(--color-primary)]">Grade A+</p>
                    </div>
                    <div class="bg-white rounded-lg p-6">
                        <p class="mb-2">International Baccalaureate</p>
                        <p class="text-[var(--color-primary)]">Authorized School</p>
                    </div>
                    <div class="bg-white rounded-lg p-6">
                        <p class="mb-2">Quality Education Award</p>
                        <p class="text-[var(--color-primary)]">2024</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
