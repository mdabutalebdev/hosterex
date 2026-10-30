<?php 
require_once __DIR__ . '/../config.php';
include __DIR__ . '/../includes/header.php'; 
?>

<!-- Services Hero Section -->
<section class="relative pt-20 pb-12 md:pt-32 md:pb-20 overflow-hidden">
    <!-- Pexels Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&w=1920" alt="Background" class="w-full h-full object-cover">
    </div>
    <!-- Overlay Gradient from /domains/register/ -->
    <div class="absolute inset-0 bg-gradient-to-b from-[#0069FF]/50 via-[#0069FF]/40 to-black/90 z-10"></div>
    
    <div class="container mx-auto px-6 md:px-10 relative z-20 text-center">
        <div class="max-w-4xl mx-auto">
            <span class="text-white font-bold uppercase tracking-[0.3em] text-[10px] mb-3 md:mb-4 block">Premium Solutions</span>
            <h1 class="text-3xl md:text-6xl font-black text-white mb-6 md:mb-8 leading-[1.1]">
                Complete <span class="text-black-600">Digital Solutions</span> <br>
                For Your Business
            </h1>
            <p class="text-base md:text-lg text-gray-500 mb-8 md:mb-10 leading-relaxed text-white max-w-2xl mx-auto">
                Hosterex empowers your digital journey with high-performance hosting and custom development services built on top-tier infrastructure.
            </p>
            <div class="flex flex-wrap justify-center gap-3 md:gap-4">
                <a href="#services-grid" class="bg-blue-600 text-white font-bold py-3.5 md:py-4 px-8 md:px-10 rounded-2xl transition-all shadow-lg shadow-blue-600/20 text-sm md:text-base">
                    Explore Services
                </a>
                <a href="/contact/" class="bg-[#111A4C] text-white font-bold py-3.5 md:py-4 px-8 md:px-10 rounded-2xl transition-all shadow-lg shadow-navy-900/10 text-sm md:text-base">
                    Get a Free Quote
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Services Grid (Exact Homepage Style) -->
<section id="services-grid" class="py-6 md:py-10 bg-white">
    <div class="container mx-auto px-6 md:px-10">
        <!-- Section Header -->
        <div class="text-center mb-8 md:mb-16">
            <span class="text-blue-600 font-bold uppercase tracking-[0.2em] text-[10px] mb-2 md:mb-3 block">What We Offer</span>
            <h2 class="text-2xl md:text-4xl font-black text-[#111A4C] tracking-tight mb-3 md:mb-4">
                Our <span class="text-blue-600">Services</span>
            </h2>
            <div class="w-16 h-1 bg-blue-600 mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1: E-Commerce Solutions -->
            <div class="p-6 md:p-10 rounded-lg border border-gray-100 hover:border-blue-500/30 transition-all duration-300 group bg-white">
                <div class="w-14 h-14 bg-[#0069FF] text-white rounded-2xl flex items-center justify-center mb-6 md:mb-8 duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#111A4C] mb-4 group-hover:text-blue-600 transition-colors">E-Commerce Solutions</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Launch your online store with secure payments, inventory management, and a seamless shopping experience for your customers.
                </p>
            </div>

            <!-- Service 2: WordPress Website Development -->
            <div class="p-6 md:p-10 rounded-lg border border-gray-100 hover:border-blue-500/30 transition-all duration-300 group bg-white">
                <div class="w-14 h-14 bg-[#0069FF] text-white rounded-2xl flex items-center justify-center mb-6 md:mb-8 duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z"></path>
                        <path d="M3 9V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v4"></path>
                        <path d="M13 13h4"></path>
                        <path d="M13 17h4"></path>
                        <path d="M7 13h2v4H7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#111A4C] mb-4 group-hover:text-blue-600 transition-colors">WordPress Website Development</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Get a fast, SEO-optimized, and fully customizable WordPress site tailored specifically to your business goals.
                </p>
            </div>

            <!-- Service 3: Full-Stack Web Development -->
            <div class="p-6 md:p-10 rounded-lg border border-gray-100 hover:border-blue-500/30 transition-all duration-300 group bg-white">
                <div class="w-14 h-14 bg-[#0069FF] text-white rounded-2xl flex items-center justify-center mb-6 md:mb-8 duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                        <polyline points="2 17 12 22 22 17"></polyline>
                        <polyline points="2 12 12 17 22 12"></polyline>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#111A4C] mb-4 group-hover:text-blue-600 transition-colors">Full-Stack Web Development</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Scalable and high-performance web applications built from scratch using the latest modern technologies.
                </p>
            </div>

            <!-- Service 4: Custom Website Development -->
            <div class="p-6 md:p-10 rounded-lg border border-gray-100 hover:border-blue-500/30 transition-all duration-300 group bg-white">
                <div class="w-14 h-14 bg-[#0069FF] text-white rounded-2xl flex items-center justify-center mb-6 md:mb-8 duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#111A4C] mb-4 group-hover:text-blue-600 transition-colors">Custom Website Development</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Unique, hand-crafted websites designed to perfectly represent your brand identity and engage your audience.
                </p>
            </div>

            <!-- Service 5: Business Email Hosting -->
            <div class="p-6 md:p-10 rounded-lg border border-gray-100 hover:border-blue-500/30 transition-all duration-300 group bg-white">
                <div class="w-14 h-14 bg-[#0069FF] text-white rounded-2xl flex items-center justify-center mb-6 md:mb-8 duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#111A4C] mb-4 group-hover:text-blue-600 transition-colors">Business Email Hosting</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Build trust with professional, domain-based email addresses that enhance your brand's credibility and communication.
                </p>
            </div>

            <!-- Service 6: Website Email SMTP -->
            <div class="p-6 md:p-10 rounded-lg border border-gray-100 hover:border-blue-500/30 transition-all duration-300 group bg-white">
                <div class="w-14 h-14 bg-[#0069FF] text-white rounded-2xl flex items-center justify-center mb-6 md:mb-8 duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <line x1="22" y1="2" x2="11" y2="13"></line>
                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#111A4C] mb-4 group-hover:text-blue-600 transition-colors">Website Email SMTP</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Ensure your transactional and marketing emails reach the inbox every time with our high-deliverability SMTP service.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action (Lightened and Fixed) -->
<section class="py-6 md:py-10 bg-white relative overflow-hidden">
    <div class="container mx-auto px-6 md:px-10 relative z-10">
        <!-- Lightened CTA Box (using a lighter blue gradient/bg instead of dark navy) -->
        <div class="bg-gradient-to-r from-blue-600 to-blue-500 rounded-3xl md:rounded-[3rem] p-8 md:p-20 relative overflow-hidden text-center shadow-2xl shadow-blue-500/20">
            <!-- Decorative Pattern -->
            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <circle cx="0" cy="0" r="50" fill="white"></circle>
                    <circle cx="100" cy="100" r="30" fill="white"></circle>
                </svg>
            </div>
            
            <div class="relative z-10 max-w-4xl mx-auto">
                <h2 class="text-2xl md:text-5xl font-black text-white mb-6 md:mb-8 leading-tight">
                    Ready to Bring Your <span class="text-[#E6F3FF]">Vision to Life?</span>
                </h2>
                <p class="text-blue-50 text-base md:text-lg mb-8 md:mb-10 leading-relaxed max-w-2xl mx-auto">
                    Join thousands of businesses who trust Hosterex for their digital growth. Our team is ready to help you succeed.
                </p>
                <div class="flex flex-wrap justify-center gap-4 md:gap-6">
                    <!-- Button without hover scale/effect as requested -->
                    <a href="/contact/" class="bg-white text-blue-600 font-bold py-4 md:py-5 px-10 md:px-12 rounded-2xl shadow-xl text-sm md:text-base">
                        Start Your Project
                    </a>
                    <a href="https://wa.me/8801622243011" class="bg-[#111A4C]/20 text-white border border-white/20 backdrop-blur-md font-bold py-4 md:py-5 px-10 md:px-12 rounded-2xl flex items-center justify-center text-sm md:text-base">
                        <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.477 2 12c0 1.891.524 3.662 1.435 5.176L2 22l4.957-1.393c1.517.848 3.252 1.393 5.043 1.393 5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18c-1.63 0-3.18-.465-4.512-1.341l-.323-.213-2.616.736.75-2.545-.234-.372A7.95 7.95 0 014 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/></svg>
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
include __DIR__ . '/../components/faq.php'; 
include __DIR__ . '/../includes/footer.php'; 
?>
