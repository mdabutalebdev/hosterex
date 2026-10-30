<div class="component-wrapper overflow-hidden">
    <!-- Why Hosterex Section Skeleton -->
    <div class="skeleton-container py-10 md:py-20 bg-white">
        <div class="container mx-auto px-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">
                <div class="space-y-6">
                    <div class="w-48 h-8 skeleton rounded-full opacity-30"></div>
                    <div class="w-full h-16 skeleton rounded-2xl opacity-50"></div>
                    <div class="w-3/4 h-12 skeleton rounded-2xl opacity-20"></div>
                    <div class="w-full h-24 skeleton rounded-2xl opacity-10"></div>
                </div>
                <div class="hidden lg:block">
                    <div class="w-full h-[400px] skeleton rounded-[40px] opacity-10"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Hosterex Section Real Content -->
    <section class="real-content py-10 bg-white overflow-hidden">
        <div class="container mx-auto px-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">
                <!-- Left Content -->
                <div class="max-w-xl">
                    <!-- Badge -->
                    <div class="inline-flex items-center space-x-2 bg-blue-50 px-4 py-2 rounded-full mb-6 border border-blue-100">
                        <div class="w-5 h-5 bg-primary rounded-full flex items-center justify-center text-white">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                        </div>
                        <span class="text-primary font-bold text-xs">Why Hosterex?</span>
                    </div>

                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-brand-dark mb-8 leading-[1.1] tracking-tight">
                        Website hosting built for your <span class="text-primary">growth</span>
                    </h2>

                    <p class="text-gray-500 text-base md:text-lg mb-6 leading-relaxed">
                        Whether you’re launching a personal website, running an SME, managing an online store, or supporting an NGO, Hosterex delivers reliable hosting that scales with your goals.
                    </p>

                    <p class="text-gray-500 text-base md:text-lg mb-8 leading-relaxed">
                        More businesses trust Hosterex for fast performance, strong security, and support that understands real-world needs — all at transparent, competitive pricing.
                    </p>

                    <div>
                        <?php echo render_button("Learn More", "/about.php", "black"); ?>
                    </div>
                </div>

                <!-- Right Annotated Image -->
                <div class="relative py-3   px-4 lg:px-10 flex items-center justify-center">
                    <!-- Main Server Image -->`
                    <div class="relative z-10 rounded-lg overflow-hidden w-full lg:max-w-[85%]">
                        <img src="<?php echo BASE_URL; ?>images/server.jpg" alt="Hosterex Dedicated Server" class="w-full h-auto object-cover">
                    </div>

                    <!-- Annotation 1: Uptime (Top Left) -->
                    <div class="absolute top-16 left-0 z-20 flex items-center group">
                        <div class="bg-white/90 backdrop-blur-md px-3 py-2 rounded-xl shadow-md border border-gray-100 transition-all group-hover:-translate-y-1">
                            <p class="text-[9px] font-bold text-primary uppercase tracking-widest mb-0">Reliability</p>
                            <p class="text-xs font-extrabold text-brand-dark">99.9% Uptime</p>
                        </div>
                        <svg class="w-10 h-8 -ml-px text-primary/30" viewBox="0 0 40 30" fill="none">
                            <path d="M0 15 H20 L40 30" stroke="#0069FF" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                            <circle cx="40" cy="30" r="2.5" fill="#0069FF"/>
                        </svg>
                    </div>

                    <!-- Annotation 2: NVMe Speed (Middle Left) -->
                    <div class="absolute top-1/2 -translate-y-1/2 -left-4 z-20 flex items-center group">
                        <div class="bg-white/90 backdrop-blur-md px-3 py-2 rounded-xl shadow-md border border-gray-100 transition-all group-hover:-translate-y-1">
                            <p class="text-[9px] font-bold text-primary uppercase tracking-widest mb-0">Performance</p>
                            <p class="text-xs font-extrabold text-brand-dark whitespace-nowrap">NVMe SSD Storage</p>
                        </div>
                        <svg class="w-12 h-6 -ml-px text-primary/30" viewBox="0 0 50 20" fill="none">
                            <path d="M0 10 H30 L50 15" stroke="#0069FF" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                            <circle cx="50" cy="15" r="2.5" fill="#0069FF"/>
                        </svg>
                    </div>

                    <!-- Annotation 3: Support (Top Right) -->
                    <div class="absolute top-20 right-0 z-20 flex items-center flex-row-reverse group">
                        <div class="bg-white/90 backdrop-blur-md px-3 py-2 rounded-xl shadow-md border border-gray-100 transition-all group-hover:-translate-y-1">
                            <p class="text-[9px] font-bold text-primary uppercase tracking-widest mb-0">Assistance</p>
                            <p class="text-xs font-extrabold text-brand-dark">24/7 Live Support</p>
                        </div>
                        <svg class="w-10 h-8 -mr-px text-primary/30" viewBox="0 0 40 30" fill="none">
                            <path d="M40 15 H20 L0 30" stroke="#0069FF" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                            <circle cx="0" cy="30" r="2.5" fill="#0069FF"/>
                        </svg>
                    </div>

                    <!-- Annotation 4: Security (Bottom Right) -->
                    <div class="absolute bottom-24 -right-4 z-20 flex items-center flex-row-reverse group">
                        <div class="bg-white/90 backdrop-blur-md px-3 py-2 rounded-xl shadow-md border border-gray-100 transition-all group-hover:-translate-y-1">
                            <p class="text-[9px] font-bold text-primary uppercase tracking-widest mb-0">Protection</p>
                            <p class="text-xs font-extrabold text-brand-dark">DDoS Protection</p>
                        </div>
                        <svg class="w-12 h-10 -mr-px text-primary/30" viewBox="0 0 50 40" fill="none">
                            <path d="M50 20 H25 L0 5" stroke="#0069FF" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                            <circle cx="0" cy="5" r="2.5" fill="#0069FF"/>
                        </svg>
                    </div>

                    <!-- Decorative Background -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-blue-50/20 rounded-full blur-3xl -z-10"></div>
                </div>
            </div>
        </div>
    </section>
</div>
