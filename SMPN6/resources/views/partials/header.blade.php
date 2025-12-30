<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-6">
            <!-- Logo and School Name -->
            <a href="{{ route('home') }}" class="flex items-center gap-4">
                <div class="bg-[var(--color-primary)] p-3 rounded-lg">
                    <i data-lucide="graduation-cap" class="w-8 h-8 text-white"></i>
                </div>
                <div>
                    <h1 class="text-[var(--color-neutral-900)]">Harmony Academy</h1>
                    <p class="text-sm text-[var(--color-neutral-700)] mt-1">Excellence in Education</p>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-10">
                <a href="{{ route('home') }}" 
                   class="transition-colors duration-200 py-2 {{ Request::routeIs('home') ? 'text-[var(--color-primary)]' : 'text-[var(--color-neutral-700)] hover:text-[var(--color-primary)]' }}">
                    Home
                </a>
                <a href="{{ route('profile') }}" 
                   class="transition-colors duration-200 py-2 {{ Request::routeIs('profile') ? 'text-[var(--color-primary)]' : 'text-[var(--color-neutral-700)] hover:text-[var(--color-primary)]' }}">
                    School Profile
                </a>
                <a href="{{ route('academics') }}" 
                   class="transition-colors duration-200 py-2 {{ Request::routeIs('academics') ? 'text-[var(--color-primary)]' : 'text-[var(--color-neutral-700)] hover:text-[var(--color-primary)]' }}">
                    Academics
                </a>
                <a href="{{ route('student-affairs') }}" 
                   class="transition-colors duration-200 py-2 {{ Request::routeIs('student-affairs') ? 'text-[var(--color-primary)]' : 'text-[var(--color-neutral-700)] hover:text-[var(--color-primary)]' }}">
                    Student Affairs
                </a>
                <a href="{{ route('news') }}" 
                   class="transition-colors duration-200 py-2 {{ Request::routeIs('news*') ? 'text-[var(--color-primary)]' : 'text-[var(--color-neutral-700)] hover:text-[var(--color-primary)]' }}">
                    News
                </a>
                <a href="{{ route('facilities') }}" 
                   class="transition-colors duration-200 py-2 {{ Request::routeIs('facilities') ? 'text-[var(--color-primary)]' : 'text-[var(--color-neutral-700)] hover:text-[var(--color-primary)]' }}">
                    Facilities
                </a>
                <a href="{{ route('ppdb') }}" 
                   class="transition-colors duration-200 py-2 {{ Request::routeIs('ppdb') ? 'text-[var(--color-primary)]' : 'text-[var(--color-neutral-700)] hover:text-[var(--color-primary)]' }}">
                    Admissions
                </a>

                <!-- Auth Buttons -->
                @auth
                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('admin.dashboard') }}" 
                           class="bg-[var(--color-primary)] text-white px-5 py-2 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors flex items-center gap-2">
                            <i data-lucide="layout-dashboard" class="w-4 h-4"></i>
                            Dashboard
                        </a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-[var(--color-neutral-700)] hover:text-[var(--color-primary)] transition-colors flex items-center gap-2">
                            <i data-lucide="log-out" class="w-4 h-4"></i>
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-[var(--color-neutral-700)] hover:text-[var(--color-primary)] transition-colors">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="bg-[var(--color-primary)] text-white px-5 py-2 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors">
                        Register
                    </a>
                @endauth
            </nav>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="lg:hidden p-2 text-[var(--color-neutral-700)]">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <nav id="mobile-menu" class="hidden lg:hidden pb-6 space-y-2">
            <a href="{{ route('home') }}" 
               class="block w-full text-left px-5 py-3 rounded-lg transition-colors {{ Request::routeIs('home') ? 'bg-[var(--color-primary)] text-white' : 'text-[var(--color-neutral-700)] hover:bg-[var(--color-neutral-100)]' }}">
                Home
            </a>
            <a href="{{ route('profile') }}" 
               class="block w-full text-left px-5 py-3 rounded-lg transition-colors {{ Request::routeIs('profile') ? 'bg-[var(--color-primary)] text-white' : 'text-[var(--color-neutral-700)] hover:bg-[var(--color-neutral-100)]' }}">
                School Profile
            </a>
            <a href="{{ route('academics') }}" 
               class="block w-full text-left px-5 py-3 rounded-lg transition-colors {{ Request::routeIs('academics') ? 'bg-[var(--color-primary)] text-white' : 'text-[var(--color-neutral-700)] hover:bg-[var(--color-neutral-100)]' }}">
                Academics
            </a>
            <a href="{{ route('student-affairs') }}" 
               class="block w-full text-left px-5 py-3 rounded-lg transition-colors {{ Request::routeIs('student-affairs') ? 'bg-[var(--color-primary)] text-white' : 'text-[var(--color-neutral-700)] hover:bg-[var(--color-neutral-100)]' }}">
                Student Affairs
            </a>
            <a href="{{ route('news') }}" 
               class="block w-full text-left px-5 py-3 rounded-lg transition-colors {{ Request::routeIs('news*') ? 'bg-[var(--color-primary)] text-white' : 'text-[var(--color-neutral-700)] hover:bg-[var(--color-neutral-100)]' }}">
                News
            </a>
            <a href="{{ route('facilities') }}" 
               class="block w-full text-left px-5 py-3 rounded-lg transition-colors {{ Request::routeIs('facilities') ? 'bg-[var(--color-primary)] text-white' : 'text-[var(--color-neutral-700)] hover:bg-[var(--color-neutral-100)]' }}">
                Facilities
            </a>
            <a href="{{ route('ppdb') }}" 
               class="block w-full text-left px-5 py-3 rounded-lg transition-colors {{ Request::routeIs('ppdb') ? 'bg-[var(--color-primary)] text-white' : 'text-[var(--color-neutral-700)] hover:bg-[var(--color-neutral-100)]' }}">
                Admissions
            </a>

            <!-- Mobile Auth Buttons -->
            @auth
                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('admin.dashboard') }}" 
                       class="block w-full text-left px-5 py-3 rounded-lg bg-[var(--color-primary)] text-white">
                        Dashboard
                    </a>
                @endif
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full text-left px-5 py-3 rounded-lg text-[var(--color-neutral-700)] hover:bg-[var(--color-neutral-100)]">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="block w-full text-left px-5 py-3 rounded-lg text-[var(--color-neutral-700)] hover:bg-[var(--color-neutral-100)]">
                    Login
                </a>
                <a href="{{ route('register') }}" class="block w-full text-left px-5 py-3 rounded-lg bg-[var(--color-primary)] text-white">
                    Register
                </a>
            @endauth
        </nav>
    </div>
</header>