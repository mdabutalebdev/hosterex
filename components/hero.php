<div class="component-wrapper overflow-hidden">
    <!-- Hero Section Skeleton -->
    <div class="skeleton-container bg-[#F8F8F8] py-10 overflow-hidden">
        <div class="container mx-auto px-10">
            <div class="flex flex-col lg:flex-row items-center gap-4 lg:gap-10">
                <!-- Left Content Skeleton -->
                <div class="w-full lg:w-[55%] space-y-8">
                    <div class="w-48 h-8 skeleton rounded-full opacity-40"></div>
                    <div class="w-full h-16 skeleton rounded-2xl opacity-60"></div>
                    <div class="w-3/4 h-12 skeleton rounded-2xl opacity-40"></div>
                    <div class="w-full h-24 skeleton rounded-3xl opacity-20"></div>
                    <div class="flex space-x-4 pt-4">
                        <div class="w-40 h-14 skeleton rounded-2xl opacity-50"></div>
                        <div class="w-40 h-14 skeleton rounded-2xl opacity-30"></div>
                    </div>
                </div>
                
                <!-- Right Illustration Skeleton (Full Height) -->
                <div class="w-full lg:w-[45%] relative flex items-center justify-center">
                    <div class="relative w-full h-[300px] lg:h-[600px] flex items-center justify-center">
                        <!-- Main Box Skeleton -->
                        <div class="w-[90%] h-[80%] skeleton rounded-[40px] opacity-10"></div>
                        
                        <!-- Floating Card Skeletons -->
                        <div class="absolute top-10 -left-8 w-48 h-32 skeleton rounded-3xl opacity-20"></div>
                        <div class="absolute bottom-10 -right-8 w-48 h-32 skeleton rounded-3xl opacity-20"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section Real Content -->
    <section class="real-content relative bg-[#F8F8F8] pt-10 md:pt-0 -mt-1 overflow-hidden">
        <!-- Soft Background Elements -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-blue-50/50 to-transparent pointer-events-none"></div>
        
        <div class="container mx-auto px-10 relative">
            <div class="flex flex-col lg:flex-row items-center gap-4 lg:gap-10">
                <!-- Left Content -->
                <div class="w-full lg:w-[55%] text-center lg:text-left">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:space-x-3 mb-4">
                        <h2 class="text-[#0069FF] text-3xl md:text-4xl lg:text-5xl font-bold">Fast & Secure</h2>
                        <h2 class="text-brand-dark text-3xl md:text-4xl lg:text-5xl font-bold mt-1 lg:mt-0">BDIX Hosting</h2>
                    </div> 
                    <h1 class="text-brand-dark text-3xl md:text-4xl lg:text-5xl font-bold mb-5">& Domain Service</h1>
                    
                    <p class="text-gray-600 text-base md:text-lg mb-8 max-w-3xl mx-auto lg:mx-0 leading-relaxed">
                       Hosterex provides complete domain and hosting solutions, including Shared, VPS, Reseller, and Dedicated servers. With high performance and top-tier security, it’s the perfect choice for any business, e-commerce, or agency.
                    </p>
                    
                    <ul class="inline-block text-left space-y-3 mb-10">
                        <li class="flex items-center text-brand-dark font-medium">
                            <div class="w-6 h-6 bg-green-100 text-green-600 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                           Fast & Secure BDIX Hosting
                        </li>
                        <li class="flex items-center text-brand-dark font-medium">
                            <div class="w-6 h-6 bg-green-100 text-green-600 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                        Reliable Domain Service
                        </li>
                        <li class="flex items-center text-brand-dark font-medium">
                            <div class="w-6 h-6 bg-green-100 text-green-600 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                           Web Development All Solutions
                        </li>
                        <li class="flex items-center text-brand-dark font-medium">
                            <div class="w-6 h-6 bg-green-100 text-green-600 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                         24/7 Customer Support
                        </li>
                    </ul>
                    
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <?php 
                        echo render_button("Get Started", "#plans", "primary", "w-full sm:w-auto px-10 py-4 text-lg");
                        echo render_button("View plans", "#plans", "black", "w-full sm:w-auto px-10 py-4 text-lg", '<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>');
                        ?>
                    </div>
                </div>

                <!-- Right Image Illustration -->
                <div class="w-full lg:w-[45%] relative flex items-center justify-center">
                    
                    <div class="relative w-full h-[300px] lg:h-[600px] flex items-center justify-center">
                        <!-- Main Server Dashboard (3.jpg) -->
                        <div class="relative w-[90%] h-[80%] z-20">
                            <div class=" ">
                                <img src="<?php echo BASE_URL; ?>images/hero-main.png" class="w-full h-full object-cover">
                            </div>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
