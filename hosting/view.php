<?php 
require_once __DIR__ . '/../config.php';
include __DIR__ . '/../includes/header.php'; 

// Get Group ID and Name (support both direct variable assignment from wrappers and query parameters)
$gid = isset($gid) ? $gid : (isset($_GET['gid']) ? (int)$_GET['gid'] : 1);
$groupName = isset($groupName) ? $groupName : (isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Hosting Plans');

// Fetch products server-side
$products = getWhmcsProducts($gid);
$startPrice = '0';
if ($products && count($products) > 0) {
    $firstProduct = $products[0];
    $startPrice = $firstProduct['pricing']['BDT']['monthly'] ?? '0';
}
?>

<!-- Premium Hero Section -->
<section class="relative pt-10 pb-12 md:pt-20 md:pb-24 bg-gradient-to-br from-[#0c112b] via-[#111a4c] to-[#0c112b] overflow-hidden">
    <!-- Animated background elements -->
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-primary/20 rounded-full blur-[150px] -mr-48 -mt-48 opacity-50"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-blue-600/10 rounded-full blur-[120px] -ml-24 -mb-24 opacity-30"></div>
    
    <div class="container mx-auto px-6 md:px-10 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-8 md:gap-16">
            <div class="lg:w-[65%]">
                <div class="inline-flex items-center space-x-2 bg-primary/10 text-primary px-4 py-2 rounded-full mb-4 md:mb-8 border border-primary/20">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                    </span>
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em]">Premium Hosting Services</span>
                </div>
                
                <h3 class="text-2xl md:text-5xl font-bold text-white mb-3 md:mb-6 leading-tight tracking-tight">
                    <?php echo $groupName; ?> <br><span class="text-primary ">Built for Speed.</span>
                </h3>
                
                <p class="text-base md:text-lg text-gray-400 mb-6 md:mb-10 leading-relaxed max-w-xl">
                    High-performance hosting with local BDIX connectivity. Everything you need to scale your online presence, starting at an unbeatable price.
                </p>

                <!-- Key Features Highlights -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 mb-8 md:mb-12">
                    <div class="flex items-center space-x-3 group">
                        <div class="w-8 h-8 bg-white/5 rounded-lg flex items-center justify-center border border-white/10 group-hover:border-primary/50 transition-colors">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <span class="text-sm font-bold text-gray-300">NVMe Storage</span>
                    </div>
                    <div class="flex items-center space-x-3 group">
                        <div class="w-8 h-8 bg-white/5 rounded-lg flex items-center justify-center border border-white/10 group-hover:border-primary/50 transition-colors">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <span class="text-sm font-bold text-gray-300">BDIX Optimized</span>
                    </div>
                    <div class="flex items-center space-x-3 group">
                        <div class="w-8 h-8 bg-white/5 rounded-lg flex items-center justify-center border border-white/10 group-hover:border-primary/50 transition-colors">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <span class="text-sm font-bold text-gray-300">Free SSL/CDN</span>
                    </div>
                </div>

                <a href="#plans" class="bg-primary text-white px-10 py-4 rounded-2xl font-black shadow-xl shadow-primary/20 hover:bg-blue-700 transition-all transform hover:-translate-y-1 inline-block">
                    Get Started Now
                </a>
            </div>

            <div class="lg:w-[35%] relative">
                <!-- Attractive Price Card Design -->
                <div class="relative animate-float">
                    <!-- Glow effect -->
                    <div class="absolute inset-0 bg-primary/20 blur-[60px] rounded-full scale-75 animate-pulse"></div>
                    
                    <div class="relative bg-white/5 backdrop-blur-xl border border-white/10 p-5 md:p-7 rounded-3xl shadow-2xl overflow-hidden group">
                        <!-- Decorative circle -->
                        <div class="absolute -right-10 -top-10 w-32 h-32 bg-primary/20 rounded-full blur-2xl group-hover:bg-primary/40 transition-all duration-500"></div>
                        
                        <div class="relative z-10 text-center">
                            <span class="text-primary text-[10px] font-black uppercase tracking-[0.2em] mb-2 md:mb-4 inline-block">Starting from only</span>
                            <h3 class="text-white text-base md:text-lg font-bold mb-4 md:mb-6">Unbeatable Price</h3>
                            
                            <div class="flex flex-col items-center mb-6 md:mb-8">
                                <div class="flex items-start">
                                    <span class="text-primary text-xl md:text-2xl font-black mt-1 md:mt-2 mr-1">৳</span>
                                    <span class="text-white text-4xl md:text-6xl font-black tracking-tighter"><?php echo number_format($startPrice); ?></span>
                                </div>
                                <span class="text-gray-400 font-bold uppercase tracking-widest text-[10px] mt-1">Per Month</span>
                            </div>

                            <ul class="space-y-3 md:space-y-4 mb-6 md:mb-10 text-left">
                                <li class="flex items-center space-x-3 text-sm text-gray-300">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                    <span>High Performance Servers</span>
                                </li>
                                <li class="flex items-center space-x-3 text-sm text-gray-300">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                    <span>24/7 Expert Support</span>
                                </li>
                            </ul>

                            <div class="pt-6 border-t border-white/5">
                                <p class="text-xs text-gray-500 italic">* Prices may vary based on billing cycle</p>
                            </div>
                        </div>
                    </div>

                  
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="plans" class="py-6 md:py-20 bg-white relative">
    <div class="container mx-auto px-6 md:px-10">
        <div class="text-center mb-8 md:mb-20">
            <span class="bg-blue-50 text-primary text-[10px] font-black px-4 py-1.5 rounded-full uppercase tracking-[0.2em] mb-3 md:mb-6 inline-block">Unbeatable Value</span>
            <h2 class="text-2xl md:text-6xl font-extrabold text-brand-dark mb-3 md:mb-6 tracking-tighter">Scalable Plans for Everyone</h2>
            <p class="text-gray-400 text-sm md:text-lg max-w-2xl mx-auto">From startups to enterprises, find the plan that grows with you. Transparent billing, no hidden costs.</p>
        </div>

        <div class="component-wrapper">
            <!-- Dynamic Product Grid (SSR) -->
            <div id="hosting-product-grid" class="real-content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-10">
                <?php if ($products && count($products) > 0): ?>
                    <?php foreach ($products as $index => $product): ?>
                        <?php echo render_pricing_card($product, $index); ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-span-full text-center py-20 text-gray-400 font-bold">Currently no plans available for this category.</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Features Included Section -->
<section class="py-6 md:py-20 bg-gray-50 border-t border-gray-100">
    <div class="container mx-auto px-6 md:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-20 items-center">
            <div>
                <h3 class="text-2xl md:text-5xl font-black text-brand-dark mb-4 md:mb-6 leading-tight tracking-tighter">Everything you need <br>is <span class="text-primary">Included.</span></h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    <div class="flex space-x-4">
                        <div class="w-12 h-12 bg-white rounded-2xl shadow-sm border border-gray-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-brand-dark mb-1">Free SSL Certificate</h4>
                            <p class="text-xs text-gray-500 leading-relaxed">Secure your visitors' data with free Let's Encrypt SSL on all domains.</p>
                        </div>
                    </div>
                    <div class="flex space-x-4">
                        <div class="w-12 h-12 bg-white rounded-2xl shadow-sm border border-gray-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-brand-dark mb-1">Automated Backups</h4>
                            <p class="text-xs text-gray-500 leading-relaxed">Daily and weekly backups stored off-site to keep your business safe.</p>
                        </div>
                    </div>
                    <div class="flex space-x-4">
                        <div class="w-12 h-12 bg-white rounded-2xl shadow-sm border border-gray-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-brand-dark mb-1">LiteSpeed Servers</h4>
                            <p class="text-xs text-gray-500 leading-relaxed">Industry leading web servers with LS-Cache for 10x faster loading.</p>
                        </div>
                    </div>
                    <div class="flex space-x-4">
                        <div class="w-12 h-12 bg-white rounded-2xl shadow-sm border border-gray-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-brand-dark mb-1">Softaculous Installer</h4>
                            <p class="text-xs text-gray-500 leading-relaxed">Install WordPress, Joomla, and 400+ scripts with just one click.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-brand-dark rounded-3xl md:rounded-[2.5rem] p-6 md:p-12 text-white relative overflow-hidden group">
                <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-primary/20 rounded-full blur-[80px] group-hover:bg-primary/30 transition-all duration-700"></div>
                <h4 class="text-xl md:text-3xl font-black mb-3 md:mb-6">Need a Custom Solution?</h4>
                <p class="text-gray-400 text-xs md:text-base mb-6 md:mb-10 leading-relaxed">Our experts can help you architect the perfect infrastructure for your high-traffic application or enterprise needs.</p>
                <a href="/contact/" class="inline-flex items-center space-x-3 bg-white text-brand-dark px-8 md:px-10 py-3.5 md:py-4 rounded-2xl font-black hover:bg-primary hover:text-white transition-all transform hover:-translate-y-1 text-sm md:text-base">
                    <span>Contact Expert</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
