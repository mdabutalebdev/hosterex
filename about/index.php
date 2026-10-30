<?php 
require_once __DIR__ . '/../config.php';
include __DIR__ . '/../includes/header.php'; 
?>

<!-- Hero Section -->
<section class="relative py-6 md:py-10 bg-[#F8FAFC] overflow-hidden">
    <div class="container mx-auto px-6 md:px-10">
        <div class="flex flex-col lg:flex-row items-center gap-6 md:gap-12">
            <div class="lg:w-1/2">
                <span class="text-primary font-bold tracking-[0.2em] text-[10px] uppercase mb-3 md:mb-4 block">About Hosterex</span>
                <h1 class="text-3xl md:text-5xl font-black text-[#111A4C] mb-4 md:mb-6 leading-tight">
                    Building the Future of <br>
                    <span class="text-primary">Digital Infrastructure.</span>
                </h1>
                <p class="text-sm md:text-base text-gray-500 mb-6 md:mb-8 leading-relaxed max-w-lg">
                    Hosterex delivers premium hosting and domain solutions designed for speed, security, and scalability. We empower businesses to establish a powerful online presence with ease.
                </p>
                <div class="flex items-center gap-4 md:gap-8">
                    <div class="text-center lg:text-left">
                        <div class="text-2xl font-black text-[#111A4C]">2026</div>
                        <div class="text-[10px] text-gray-400 uppercase font-bold tracking-widest mt-1">Founded</div>
                    </div>
                    <div class="w-px h-10 bg-gray-200"></div>
                    <div class="text-center lg:text-left">
                        <div class="text-2xl font-black text-[#111A4C]">800+</div>
                        <div class="text-[10px] text-gray-400 uppercase font-bold tracking-widest mt-1">TLD Options</div>
                    </div>
                    <div class="w-px h-10 bg-gray-200"></div>
                    <div class="text-center lg:text-left">
                        <div class="text-2xl font-black text-[#111A4C]">24/7</div>
                        <div class="text-[10px] text-gray-400 uppercase font-bold tracking-widest mt-1">Support</div>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2">
                <div class="rounded-3xl overflow-hidden shadow-2xl shadow-blue-500/5 border-4 border-white">
                    <img src="https://images.pexels.com/photos/3183183/pexels-photo-3183183.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Hosterex Team" class="w-full h-[400px] object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision (Redesigned) -->
<section class="py-6 md:py-10 bg-white">
    <div class="container mx-auto px-6 md:px-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">
            <!-- Mission Card -->
            <div class="relative p-6 md:p-10 rounded-3xl bg-gradient-to-br from-white to-blue-50/30 border border-blue-100 overflow-hidden group">
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-100/50 rounded-full blur-3xl -mr-16 -mt-16 transition-all group-hover:bg-blue-200/50"></div>
                <div class="relative z-10">
                    <div class="w-12 h-12 bg-primary text-white rounded-2xl flex items-center justify-center mb-4 md:mb-6 shadow-lg shadow-blue-600/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-black text-[#111A4C] mb-4">Our Mission</h3>
                    <p class="text-gray-500 leading-relaxed text-sm">
                        To simplify web hosting by providing high-performance, automated infrastructure that allows businesses to scale effortlessly without worrying about technical complexities.
                    </p>
                </div>
            </div>
            <!-- Vision Card -->
            <div class="relative p-6 md:p-10 rounded-3xl bg-gradient-to-br from-white to-blue-50/30 border border-blue-100 overflow-hidden group">
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-100/50 rounded-full blur-3xl -mr-16 -mt-16 transition-all group-hover:bg-blue-200/50"></div>
                <div class="relative z-10">
                    <div class="w-12 h-12 bg-primary text-white rounded-2xl flex items-center justify-center mb-4 md:mb-6 shadow-lg shadow-blue-600/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-black text-[#111A4C] mb-4">Our Vision</h3>
                    <p class="text-gray-500 leading-relaxed text-sm">
                        To be the global leader in cloud infrastructure, recognized for our commitment to innovation, customer-centric support, and sustainable digital growth.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Principles (Gradient Background) -->
<section class="py-6 md:py-10">
    <div class="container mx-auto px-6 md:px-10">
        <div class="bg-gradient-to-r from-[#111A4C] to-primary rounded-3xl md:rounded-[3rem] p-8 md:p-16 relative overflow-hidden text-center text-white shadow-2xl shadow-blue-900/20">
            <!-- Decorative Accents -->
            <div class="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -ml-32 -mt-32"></div>
            <div class="absolute bottom-0 right-0 w-64 h-64 bg-blue-400/10 rounded-full blur-3xl -mr-32 -mb-32"></div>
            
            <div class="relative z-10 max-w-4xl mx-auto">
                <span class="text-blue-400 font-bold uppercase tracking-[0.3em] text-[10px] mb-3 md:mb-4 block">Core Values</span>
                <h2 class="text-2xl md:text-4xl font-black mb-8 md:mb-12">The Principles That Guide Us.</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
                    <div class="space-y-4">
                        <div class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center mx-auto mb-4 border border-white/20">
                            <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h4 class="text-lg font-bold">Unwavering Trust</h4>
                        <p class="text-xs text-blue-100/70 leading-relaxed">Transparency is at our core. We build lasting relationships through honesty and reliable service.</p>
                    </div>
                    <div class="space-y-4">
                        <div class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center mx-auto mb-4 border border-white/20">
                            <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h4 class="text-lg font-bold">Relentless Speed</h4>
                        <p class="text-xs text-blue-100/70 leading-relaxed">We never compromise on performance. Our hardware is always cutting-edge for ultimate speed.</p>
                    </div>
                    <div class="space-y-4">
                        <div class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center mx-auto mb-4 border border-white/20">
                            <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <h4 class="text-lg font-bold">Human Support</h4>
                        <p class="text-xs text-blue-100/70 leading-relaxed">Real experts, not robots. We're here to help you solve challenges 24/7 with genuine care.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section (Compact) -->
<section class="py-6 md:py-10 bg-white">
    <div class="container mx-auto px-6 md:px-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 py-6 md:py-8 border-y border-gray-100">
            <div class="text-center">
                <div class="text-3xl font-black text-[#111A4C]">99.9%</div>
                <p class="text-[10px] text-gray-400 uppercase tracking-widest font-bold mt-1">Uptime SLA</p>
            </div>
            <div class="text-center">
                <div class="text-3xl font-black text-[#111A4C]">20ms</div>
                <p class="text-[10px] text-gray-400 uppercase tracking-widest font-bold mt-1">Local Latency</p>
            </div>
            <div class="text-center">
                <div class="text-3xl font-black text-[#111A4C]">24/7</div>
                <p class="text-[10px] text-gray-400 uppercase tracking-widest font-bold mt-1">Human Help</p>
            </div>
            <div class="text-center">
                <div class="text-3xl font-black text-[#111A4C]">800+</div>
                <p class="text-[10px] text-gray-400 uppercase tracking-widest font-bold mt-1">TLD Options</p>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../components/faq.php'; ?>

<?php 
include __DIR__ . '/../includes/footer.php'; 
?>
