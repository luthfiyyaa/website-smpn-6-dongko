<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="{{ asset('storage\assets\logo.png') }}" type="image/x-icon">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - SMPN 6 Dongko</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        
        :root {
            --color-primary: #3b82f6;
            --color-primary-dark: #2563eb;
            --color-secondary: #10b981;
            --color-neutral-50: #f9fafb;
            --color-neutral-100: #f3f4f6;
            --color-neutral-200: #e5e7eb;
            --color-neutral-700: #374151;
            --color-neutral-800: #1f2937;
            --color-neutral-900: #111827;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-neutral-50);
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    
    @stack('styles')
</head>
<body>
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-[var(--color-neutral-900)] text-white flex-shrink-0">
            <div class="p-6">
                <a href="{{ route('home') }}" class="flex items-center gap-3 mb-10">
                    <div class="bg-[var(--color-primary)] p-2 rounded-lg">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div>
                        <div class="font-semibold">SMPN 6 Dongko</div>
                        <div class="text-xs text-gray-400">Admin Panel</div>
                    </div>
                </a>

                <nav class="space-y-2">
                    <a href="{{ route('admin.dashboard') }}" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ Request::routeIs('admin.dashboard') ? 'bg-[var(--color-primary)]' : 'hover:bg-[var(--color-neutral-800)]' }}">
                        <i class="fa-solid fa-gauge"></i>
                        <span>Dashboard</span>
                    </a>
                    
                    <a href="{{ route('admin.news.index') }}" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ Request::routeIs('admin.news.*') ? 'bg-[var(--color-primary)]' : 'hover:bg-[var(--color-neutral-800)]' }}">
                        <i class="fa-solid fa-newspaper"></i>
                        <span>Berita</span>
                    </a>
                    
                    <a href="{{ route('admin.gallery.index') }}" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ Request::routeIs('admin.gallery.*') ? 'bg-[var(--color-primary)]' : 'hover:bg-[var(--color-neutral-800)]' }}">
                        <i class="fa-solid fa-images"></i>
                        <span>Galeri</span>
                    </a>

                    <a href="{{ route('admin.facilities.index') }}" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ Request::routeIs('admin.facilities.*') ? 'bg-[var(--color-primary)]' : 'hover:bg-[var(--color-neutral-800)]' }}">
                        <i class="fa-solid fa-building"></i>
                        <span>Fasilitas</span>
                    </a>

                    <a href="{{ route('admin.achievement.index') }}" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ Request::routeIs('admin.achievement.*') ? 'bg-[var(--color-primary)]' : 'hover:bg-[var(--color-neutral-800)]' }}">
                        <i class="fa-solid fa-trophy"></i>
                        <span>Prestasi Siswa</span>
                    </a>

                    <a href="{{ route('admin.settings.index') }}" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ Request::routeIs('admin.settings.*') ? 'bg-[var(--color-primary)]' : 'hover:bg-[var(--color-neutral-800)]' }}">
                        <i class="fa-solid fa-gear"></i>
                        <span>Pengaturan</span>
                    </a>

                    <div class="pt-6 mt-6 border-t border-[var(--color-neutral-800)]">
                        <a href="{{ route('home') }}" 
                           class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[var(--color-neutral-800)] transition-colors">
                            <i class="fa-solid fa-arrow-left"></i>
                            <span>Kembali ke Website</span>
                        </a>
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[var(--color-neutral-800)] transition-colors">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <span>Logout</span>
                            </button>
                        </form>
                    </div>
                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 overflow-x-hidden">
            <!-- Top Bar -->
            <header class="bg-white shadow-sm border-b border-[var(--color-neutral-200)]">
                <div class="px-8 py-6 flex justify-between items-center">
                    <h1 class="text-2xl font-bold text-[var(--color-neutral-900)]">@yield('page-title', 'Dashboard')</h1>
                    <div class="flex items-center gap-4">
                        <span class="text-sm text-[var(--color-neutral-700)]">Welcome, {{ auth()->user()->name }}</span>
                        <div class="w-10 h-10 bg-[var(--color-primary)] rounded-full flex items-center justify-center text-white font-semibold">
                            {{ substr(auth()->user()->name, 0, 1) }}
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-8">
                @if(session('success'))
                    <div class="bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-lg mb-6 flex items-center gap-3">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-50 border border-red-200 text-red-700 px-6 py-4 rounded-lg mb-6 flex items-center gap-3">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <span>{{ session('error') }}</span>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
    
    @stack('scripts')
</body>
</html>
