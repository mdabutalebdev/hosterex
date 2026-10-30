<div class="component-wrapper">
    <!-- Features Section Skeleton -->
    <div class="skeleton-container py-10 md:py-20 bg-white">
        <div class="container mx-auto px-10 grid grid-cols-1 md:grid-cols-3 gap-12">
            <?php for($i=0; $i<6; $i++): ?>
            <div class="text-center space-y-6">
                <div class="w-16 h-16 skeleton rounded-2xl mx-auto opacity-30"></div>
                <div class="w-40 h-6 skeleton rounded-full mx-auto opacity-50"></div>
                <div class="w-full h-12 skeleton rounded-xl mx-auto opacity-20"></div>
            </div>
            <?php endfor; ?>
        </div>
    </div>

    <!-- Features Grid Section Real Content -->
    <section class="real-content py-5 md:py-10 bg-white">
        <div class="container mx-auto px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8">
                <!-- Feature 1: High-Speed SSD -->
                <div class="p-6 md:p-10 rounded-3xl border border-gray-100 hover:border-primary/30 transition-all duration-300 group hover:shadow-xl hover:shadow-blue-500/5 bg-white">
                    <div class="w-16 h-16 bg-[#111A4C] text-white rounded-2xl flex items-center justify-center mb-6 md:mb-8 shadow-lg shadow-blue-900/10 transition-transform group-hover:rotate-6 duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-dark mb-4 group-hover:text-primary transition-colors">High-Speed SSD Servers</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Optimized infrastructure ensures faster load times and smooth performance for all types of websites.
                    </p>
                </div>

                <!-- Feature 2: Security -->
                <div class="p-6 md:p-10 rounded-3xl border border-gray-100 hover:border-primary/30 transition-all duration-300 group hover:shadow-xl hover:shadow-blue-500/5 bg-white">
                    <div class="w-16 h-16 bg-[#111A4C] text-white rounded-2xl flex items-center justify-center mb-6 md:mb-8 shadow-lg shadow-blue-900/10 transition-transform group-hover:rotate-6 duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-dark mb-4 group-hover:text-primary transition-colors">Built-in Security</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Free SSL, firewall protection, and proactive monitoring keep your data and visitors safe.
                    </p>
                </div>

                <!-- Feature 3: Backups -->
                <div class="p-6 md:p-10 rounded-3xl border border-gray-100 hover:border-primary/30 transition-all duration-300 group hover:shadow-xl hover:shadow-blue-500/5 bg-white">
                    <div class="w-16 h-16 bg-[#111A4C] text-white rounded-2xl flex items-center justify-center mb-6 md:mb-8 shadow-lg shadow-blue-900/10 transition-transform group-hover:rotate-6 duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-dark mb-4 group-hover:text-primary transition-colors">Automatic Daily Backups</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Your website is backed up regularly, making recovery quick and stress-free.
                    </p>
                </div>

                <!-- Feature 4: WordPress -->
                <div class="p-6 md:p-10 rounded-3xl border border-gray-100 hover:border-primary/30 transition-all duration-300 group hover:shadow-xl hover:shadow-blue-500/5 bg-white">
                    <div class="w-16 h-16 bg-[#111A4C] text-white rounded-2xl flex items-center justify-center mb-6 md:mb-8 shadow-lg shadow-blue-900/10 transition-transform group-hover:rotate-6 duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 011 1v1z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-dark mb-4 group-hover:text-primary transition-colors">WordPress Hosting</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        One-click installation, automatic updates, and optimized environments for WordPress.
                    </p>
                </div>

                <!-- Feature 5: Scalable -->
                <div class="p-6 md:p-10 rounded-3xl border border-gray-100 hover:border-primary/30 transition-all duration-300 group hover:shadow-xl hover:shadow-blue-500/5 bg-white">
                    <div class="w-16 h-16 bg-[#111A4C] text-white rounded-2xl flex items-center justify-center mb-6 md:mb-8 shadow-lg shadow-blue-900/10 transition-transform group-hover:rotate-6 duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-dark mb-4 group-hover:text-primary transition-colors">Scalable Hosting</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Easily upgrade resources as your traffic and business grow—no downtime required.
                    </p>
                </div>

                <!-- Feature 6: Support -->
                <div class="p-6 md:p-10 rounded-3xl border border-gray-100 hover:border-primary/30 transition-all duration-300 group hover:shadow-xl hover:shadow-blue-500/5 bg-white">
                    <div class="w-16 h-16 bg-[#111A4C] text-white rounded-2xl flex items-center justify-center mb-6 md:mb-8 shadow-lg shadow-blue-900/10 transition-transform group-hover:rotate-6 duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-dark mb-4 group-hover:text-primary transition-colors">Reliable 24/7 Support</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Friendly, expert support available whenever you need help, via live chat and email.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
