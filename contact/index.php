<?php 
require_once __DIR__ . '/../config.php';
include __DIR__ . '/../includes/header.php'; 
?>

<!-- Simple Header Section -->
<section class="relative pt-10 pb-8 md:pt-16 md:pb-12 bg-gradient-to-b from-[#E6F3FF] to-white overflow-hidden">
    <!-- Background Accents -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100 rounded-full blur-3xl opacity-20 -mr-48 -mt-24"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-100 rounded-full blur-3xl opacity-20 -ml-48 -mb-24"></div>

    <div class="container mx-auto px-6 md:px-10 relative">
        <div class="flex flex-col items-center text-center">
            
            <h1 class="text-3xl md:text-5xl font-extrabold text-brand-navy mb-4 tracking-tight">Contact <span class="text-primary">Us</span></h1>
            <p class="text-gray-500 max-w-2xl text-base md:text-lg leading-relaxed">
                Get in touch with our team of hosting experts. We're here to help you 24/7 with any questions or technical issues.
            </p>
        </div>
    </div>
</section>

<!-- Contact Info Grid (No Hover) -->
<section class="py-8 md:py-12 bg-white">
    <div class="container mx-auto px-6 md:px-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
            <!-- Card 1: Live Support -->
            <div class="bg-[#F8FAFC] p-6 md:p-10 border border-gray-100 rounded-2xl">
                <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-brand-navy mb-3">Live Support</h3>
                <p class="text-gray-500 mb-6 leading-relaxed text-sm">
                    Connect with our hosting specialists instantly for real-time guidance and troubleshooting.
                </p>
                <div class="flex items-center text-primary font-bold text-sm">
                    <a href="https://wa.me/8801622243011" target="_blank" class="hover:underline">Start Chatting</a>
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>

            <!-- Card 2: Email Inquiry -->
            <div class="bg-[#F8FAFC] p-6 md:p-10 border border-gray-100  rounded-2xl">
                <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-brand-navy mb-3">Email Inquiry</h3>
                <p class="text-gray-500 mb-6 leading-relaxed text-sm">
                    Prefer writing? Send us your detailed queries and we'll get back to you within 2-4 hours.
                </p>
                <div class="flex items-center text-primary font-bold text-sm">
                    <a href="mailto:support@hosterex.com" class="hover:underline">support@hosterex.com</a>
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>

            <!-- Card 3: Global Office -->
            <div class="bg-[#F8FAFC] p-6 md:p-10 border border-gray-100  rounded-2xl">
                <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-brand-navy mb-3">Global Office</h3>
                <p class="text-gray-500 mb-6 leading-relaxed text-sm">
                    Based in Wy, USA. Supporting clients worldwide. Check our distributed team locations below.
                </p>
                <div class="flex items-center text-primary font-bold text-sm">
                    <a href="#distributed-team" class="hover:underline">View on Map</a>
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>
        </div>
    </div>
</section>


 
<!-- Distributed Team / Map Section -->
<section id="distributed-team" class="pt-6 pb-0 md:py-8 bg-white overflow-hidden">
    <div class="container mx-auto px-6 md:px-10 text-center">
        <!-- Top Badge -->
        <div class="inline-flex items-center space-x-2 bg-blue-50 border border-blue-100 px-5 py-2 rounded-full mb-6">
            <div class="bg-primary p-1 rounded-md text-white">
                 <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2 2 2 0 012 2v.657M16.486 19.608A9 9 0 1121 12.013"></path></svg>
            </div>
            <span class="text-primary font-bold text-[10px] md:text-[11px] uppercase tracking-wider">Worldwide server locations</span>
        </div>

        <h2 class="text-2xl md:text-5xl font-extrabold text-brand-navy mb-4 tracking-tight">We’re a distributed team</h2>
        <p class="text-gray-500 mb-1 text-sm md:text-base">We have offices and teams all around the world.</p>
        <p class="text-gray-400 font-bold text-[9px] md:text-xs tracking-wider uppercase mb-8 md:mb-10">HEADQUARTER: 1822 BARNES AVE NUM 1 BRONX, NY 10462</p>
        
        <!-- Dotted Map Section -->
        <div class="max-w-6xl mx-auto relative mt-6 md:mt-10">
            <!-- Map Image Test -->
            <div class="relative w-full min-h-[160px] md:min-h-[400px] bg-no-repeat bg-contain bg-center transition-all duration-700" style="background-image: url('../images/Team-Testimonials-BG-Image-1536x732.webp');">
                <!-- Pinging Dots -->
                <!-- North America -->
                <div class="absolute top-[18%] left-[24%]">
                    <span class="relative flex h-2 w-2 md:h-4 md:w-4">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 md:h-4 md:w-4 bg-primary border-2 border-white"></span>
                    </span>
                </div>
                <!-- South America -->
                <div class="absolute top-[68%] left-[35%]">
                    <span class="relative flex h-1.5 w-1.5 md:h-3 md:w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-1.5 w-1.5 md:h-3 md:w-3 bg-primary border-2 border-white"></span>
                    </span>
                </div>
                <!-- Europe -->
                <div class="absolute top-[10%] left-[40%]">
                    <span class="relative flex h-2 w-2 md:h-4 md:w-4">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 md:h-4 md:w-4 bg-primary border-2 border-white"></span>
                    </span>
                </div>
                <!-- Asia -->
                <div class="absolute top-[30%] left-[60%]">
                    <span class="relative flex h-2 w-2 md:h-4 md:w-4">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 md:h-4 md:w-4 bg-primary border-2 border-white"></span>
                    </span>
                </div>
                <!-- Southeast Asia / Bangladesh Area -->
                <div class="absolute top-[45%] left-[60%]">
                    <span class="relative flex h-1.5 w-1.5 md:h-3 md:w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-1.5 w-1.5 md:h-3 md:w-3 bg-primary border-2 border-white"></span>
                    </span>
                </div>
                <!-- Australia -->
                <div class="absolute top-[17%] left-[80%]">
                    <span class="relative flex h-2 w-2 md:h-4 md:w-4">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 md:h-4 md:w-4 bg-primary border-2 border-white"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Contact Form Section -->
<section id="contact-form" class="pt-2 pb-6 md:py-8 bg-white">
    <div class="container mx-auto px-6 md:px-10 ">
        <div class="flex flex-col lg:flex-row bg-white   overflow-hidden  rounded-2xl">
            <!-- Left Side: Form -->
            <div class="lg:w-3/5 p-6 md:p-12 border-r border-gray-100  rounded-2xl">
                <h2 class="text-2xl md:text-3xl font-bold text-brand-navy mb-1">Send us a message</h2>
                <p class="text-gray-500 mb-6 md:mb-8 text-sm md:text-base">We'll respond to your inquiry as soon as possible.</p>
                
                <form action="#" class="space-y-3 md:space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-6">
                        <div class="space-y-1.5">
                            <label class="text-xs md:text-sm font-bold text-brand-navy ml-1">Full Name</label>
                            <input type="text" placeholder="John Doe" class="w-full bg-[#F8FAFC] border border-gray-100 rounded-xl px-5 py-3 md:px-6 md:py-4 text-sm outline-none focus:border-primary transition-all">
                        </div>
                        <div class="space-y-1.5">
                            <label class="text-xs md:text-sm font-bold text-brand-navy ml-1">Email Address</label>
                            <input type="email" placeholder="john@example.com" class="w-full bg-[#F8FAFC] border border-gray-100 rounded-xl px-5 py-3 md:px-6 md:py-4 text-sm outline-none focus:border-primary transition-all">
                        </div>
                    </div>
                    <div class="space-y-1.5">
                        <label class="text-xs md:text-sm font-bold text-brand-navy ml-1">Subject</label>
                        <input type="text" placeholder="How can we help?" class="w-full bg-[#F8FAFC] border border-gray-100 rounded-xl px-5 py-3 md:px-6 md:py-4 text-sm outline-none focus:border-primary transition-all">
                    </div>
                    <div class="space-y-1.5">
                        <label class="text-xs md:text-sm font-bold text-brand-navy ml-1">Message</label>
                        <textarea placeholder="Tell us more about your inquiry..." rows="4" class="w-full bg-[#F8FAFC] border border-gray-100 rounded-xl px-5 py-3 md:px-6 md:py-4 text-sm outline-none focus:border-primary transition-all resize-none"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-primary hover:bg-blue-600 text-white font-bold py-3.5 md:py-4 rounded-xl text-sm md:text-base transition-all">
                        Submit Inquiry
                    </button>
                </form>
            </div>

            <!-- Right Side: Contact Info -->
            <div class="lg:w-2/5 bg-brand-navy p-6 md:p-12 relative overflow-hidden">
                <div class="relative z-10">
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-4">Contact Information</h3>
                    <p class="text-gray-400 mb-8 md:mb-10 text-sm md:text-base">Don't hesitate to reach out. We're here to support your success.</p>

                    <div class="space-y-6 md:space-y-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.948V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold mb-0.5 text-sm md:text-base">WhatsApp</h4>
                                <p class="text-gray-400 text-xs md:text-sm">+880 1622-243011</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold mb-0.5 text-sm md:text-base">Email</h4>
                                <p class="text-gray-400 text-xs md:text-sm">support@hosterex.com</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold mb-0.5 text-sm md:text-base">Head Office</h4>
                                <p class="text-gray-400 text-xs md:text-sm leading-relaxed">30 N Gould St Ste R, Sheridan, WY 82801, USA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php 
include __DIR__ . '/../components/faq.php'; 
include __DIR__ . '/../includes/footer.php'; 
?>
