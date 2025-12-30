<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Harmony Academy - Excellence in Education')</title>
    <meta name="description" content="@yield('description', 'Harmony Academy - Empowering students to achieve excellence through quality education')">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        
        :root {
            --color-primary: #3b82f6;
            --color-primary-dark: #2563eb;
            --color-primary-light: #60a5fa;
            --color-secondary: #10b981;
            --color-secondary-dark: #059669;
            --color-secondary-light: #34d399;
            --color-accent: #8b5cf6;
            --color-neutral-50: #f9fafb;
            --color-neutral-100: #f3f4f6;
            --color-neutral-200: #e5e7eb;
            --color-neutral-300: #d1d5db;
            --color-neutral-700: #374151;
            --color-neutral-800: #1f2937;
            --color-neutral-900: #111827;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif;
            color: var(--color-neutral-800);
            background-color: var(--color-neutral-50);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.2;
            color: var(--color-neutral-900);
        }

        h2 {
            font-size: 2rem;
            font-weight: 700;
            line-height: 1.3;
            color: var(--color-neutral-900);
        }

        h3 {
            font-size: 1.5rem;
            font-weight: 600;
            line-height: 1.4;
            color: var(--color-neutral-800);
        }

        h4 {
            font-size: 1.25rem;
            font-weight: 600;
            line-height: 1.4;
            color: var(--color-neutral-800);
        }

        h5 {
            font-size: 1.125rem;
            font-weight: 600;
            line-height: 1.5;
            color: var(--color-neutral-800);
        }

        p {
            font-size: 1rem;
            line-height: 1.6;
            color: var(--color-neutral-700);
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            font-family: inherit;
        }

        @media (max-width: 768px) {
            h1 { font-size: 2rem; }
            h2 { font-size: 1.75rem; }
            h3 { font-size: 1.25rem; }
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .leading-relaxed {
            line-height: 1.75;
        }
    </style>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    @stack('styles')
</head>
<body>
    @include('partials.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')
    
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    </script>
    
    @stack('scripts')
</body>
</html>
