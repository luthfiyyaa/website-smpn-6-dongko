<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - Harmony Academy</title>
    
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
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    @stack('styles')
</head>
<body>
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-[var(--color-neutral-900)] text-white flex-shrink-0">
            <div class="p-6">
                <a href="{{ route('home') }}" class="flex items-center gap-3 mb-10">
                    <div class="bg-[var(--color-primary)] p-2 rounded-lg">
                        <i data-lucide="graduation-cap" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <div class="font-semibold">Harmony Academy</div>
                        <div class="text-xs text-gray-400">Admin Panel</div>
                    </div>
                </a>

                <nav class="space-y-2">
                    <a href="{{ route('admin.dashboard') }}" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ Request::routeIs('admin.dashboard') ? 'bg-[var(--color-primary)]' : 'hover:bg-[var(--color-neutral-800)]' }}">
                        <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                        <span>Dashboard</span>
                    </a>
                    
                    <a href="{{ route('admin.news.index') }}" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ Request::routeIs('admin.news.*') ? 'bg-[var(--color-primary)]' : 'hover:bg-[var(--color-neutral-800)]' }}">
                        <i data-lucide="newspaper" class="w-5 h-5"></i>
                        <span>News</span>
                    </a>
                    
                    <a href="{{ route('admin.gallery.index') }}" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ Request::routeIs('admin.gallery.*') ? 'bg-[var(--color-primary)]' : 'hover:bg-[var(--color-neutral-800)]' }}">
                        <i data-lucide="images" class="w-5 h-5"></i>
                        <span>Gallery</span>
                    </a>
                    
                    <a href="{{ route('admin.registrations.index') }}" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ Request::routeIs('admin.registrations.*') ? 'bg-[var(--color-primary)]' : 'hover:bg-[var(--color-neutral-800)]' }}">
                        <i data-lucide="users" class="w-5 h-5"></i>
                        <span>Registrations</span>
                    </a>

                    <div class="pt-6 mt-6 border-t border-[var(--color-neutral-800)]">
                        <a href="{{ route('home') }}" 
                           class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[var(--color-neutral-800)] transition-colors">
                            <i data-lucide="arrow-left" class="w-5 h-5"></i>
                            <span>Back to Website</span>
                        </a>
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[var(--color-neutral-800)] transition-colors">
                                <i data-lucide="log-out" class="w-5 h-5"></i>
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

                @yield('content')
            </main>
        </div>
    </div>
    
    <script>
        lucide.createIcons();
    </script>
    
    @stack('scripts')
</body>
</html>
