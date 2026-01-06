<footer class="bg-[var(--color-neutral-900)] text-white mt-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- About Section -->
            <div>
                <h3 class="text-white mb-6">SMP Negeri 6 Dongko</h3>
                <p class="text-[var(--color-neutral-300)] mb-6 leading-relaxed">
                    Memberdayakan siswa untuk mencapai keunggulan melalui pendidikan berkualitas dan pengembangan teknologi.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white mb-6">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('profile') }}" class="text-[var(--color-neutral-300)] hover:text-white transition-colors">Tentang Kami</a></li>
                    <li><a href="{{ route('academics') }}" class="text-[var(--color-neutral-300)] hover:text-white transition-colors">Akademik</a></li>
                    <li><a href="{{ route('ppdb') }}" class="text-[var(--color-neutral-300)] hover:text-white transition-colors">PPDB</a></li>
                    <li><a href="#contact" class="text-[var(--color-neutral-300)] hover:text-white transition-colors">Kontak</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-white mb-6">Kontak Kami</h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-[var(--color-primary-light)] flex-shrink-0 mt-1"></i>
                        <span class="text-[var(--color-neutral-300)] leading-relaxed">Dsn. Dawung RT.24 RW.06 DS.Pringapus Kec. Dongko, Kode Pos 66363 </span>
                    </li>
                    {{-- <li class="flex items-center gap-3">
                        <i data-lucide="phone" class="w-5 h-5 text-[var(--color-primary-light)]"></i>
                        <span class="text-[var(--color-neutral-300)]">https://maps.app.goo.gl/57o4Yz9nZvFaW4FM7?g_st=aw</span>
                    </li> --}}
                    <li class="flex items-center gap-3">
                        <i data-lucide="mail" class="w-5 h-5 text-[var(--color-primary-light)]"></i>
                        <span class="text-[var(--color-neutral-300)]">smpnsatap3dongko@gmail.com</span>
                    </li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h4 class="text-white mb-6">Follow Us</h4>
                <div class="flex gap-4">
                    <a href="https://www.tiktok.com/@smpn.6.dongko.sat?_r=1&_t=ZS-92pjanX08hR" class="bg-[var(--color-neutral-800)] p-3 rounded-lg hover:bg-[var(--color-primary)] transition-colors">
                        {{-- belum --}}
                        <i data-lucide="tik-tok" class="w-5 h-5"></i> 
                    </a>
                    <a href="https://www.instagram.com/smpn6_dongko?igsh=NGU1c2FiYWR6djg4" class="bg-[var(--color-neutral-800)] p-3 rounded-lg hover:bg-[var(--color-primary)] transition-colors">
                        <i data-lucide="instagram" class="w-5 h-5"></i>
                    </a>
                    <a href="https://youtube.com/@smpnsatap3dongko538?si=2Fp-eqyS-xqLJ6Jw" class="bg-[var(--color-neutral-800)] p-3 rounded-lg hover:bg-[var(--color-primary)] transition-colors">
                        <i data-lucide="youtube" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-[var(--color-neutral-800)] mt-12 pt-10 text-center">
            <p class="text-[var(--color-neutral-300)]">
                © {{ date('Y') }} SMP Negeri 6 Dongko. All rights reserved.
            </p>
        </div>
    </div>
</footer>
