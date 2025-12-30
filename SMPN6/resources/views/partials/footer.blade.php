<footer class="bg-[var(--color-neutral-900)] text-white mt-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- About Section -->
            <div>
                <h3 class="text-white mb-6">Harmony Academy</h3>
                <p class="text-[var(--color-neutral-300)] mb-6 leading-relaxed">
                    Empowering students to achieve excellence through quality education and holistic development.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white mb-6">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('profile') }}" class="text-[var(--color-neutral-300)] hover:text-white transition-colors">About Us</a></li>
                    <li><a href="{{ route('academics') }}" class="text-[var(--color-neutral-300)] hover:text-white transition-colors">Academics</a></li>
                    <li><a href="{{ route('ppdb') }}" class="text-[var(--color-neutral-300)] hover:text-white transition-colors">Admissions</a></li>
                    <li><a href="#contact" class="text-[var(--color-neutral-300)] hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-white mb-6">Contact Us</h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-[var(--color-primary-light)] flex-shrink-0 mt-1"></i>
                        <span class="text-[var(--color-neutral-300)] leading-relaxed">123 Education Street, City, State 12345</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="phone" class="w-5 h-5 text-[var(--color-primary-light)]"></i>
                        <span class="text-[var(--color-neutral-300)]">+1 (555) 123-4567</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="mail" class="w-5 h-5 text-[var(--color-primary-light)]"></i>
                        <span class="text-[var(--color-neutral-300)]">info@harmonyacademy.edu</span>
                    </li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h4 class="text-white mb-6">Follow Us</h4>
                <div class="flex gap-4">
                    <a href="#" class="bg-[var(--color-neutral-800)] p-3 rounded-lg hover:bg-[var(--color-primary)] transition-colors">
                        <i data-lucide="facebook" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="bg-[var(--color-neutral-800)] p-3 rounded-lg hover:bg-[var(--color-primary)] transition-colors">
                        <i data-lucide="twitter" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="bg-[var(--color-neutral-800)] p-3 rounded-lg hover:bg-[var(--color-primary)] transition-colors">
                        <i data-lucide="instagram" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="bg-[var(--color-neutral-800)] p-3 rounded-lg hover:bg-[var(--color-primary)] transition-colors">
                        <i data-lucide="youtube" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-[var(--color-neutral-800)] mt-12 pt-10 text-center">
            <p class="text-[var(--color-neutral-300)]">
                © {{ date('Y') }} Harmony Academy. All rights reserved.
            </p>
        </div>
    </div>
</footer>
