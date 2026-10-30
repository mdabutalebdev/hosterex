<?php 
require_once __DIR__ . '/../../config.php';
include __DIR__ . '/../../includes/header.php'; 

$gid = 1; // Shared Hosting
$products = getWhmcsProducts($gid);
$startPrice = '0';
if ($products && count($products) > 0) {
    $firstProduct = $products[0];
    $startPrice = $firstProduct['pricing']['BDT']['monthly'] ?? '0';
}
?>

<!-- Premium Hero Section -->
<section class="relative pt-32 pb-24 bg-brand-dark overflow-hidden">
    <!-- Animated background elements -->
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-primary/10 rounded-full blur-[120px] -mr-48 -mt-48"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-blue-900/20 rounded-full blur-[100px] -ml-24 -mb-24"></div>
    
    <div class="container mx-auto px-10 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-3/5">
                <div class="inline-flex items-center space-x-2 bg-primary/10 text-primary px-4 py-2 rounded-full mb-8 border border-primary/20">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                    </span>
                    <span class="text-[10px] font-black uppercase tracking-widest">Premium Shared Hosting</span>
                </div>
                
                <h1 class="text-4xl md:text-7xl font-black text-white mb-6 leading-tight tracking-tighter">
                    Shared Hosting for <br><span class="text-primary italic">Fast & Secure Websites</span>
                </h1>
                
                <p class="text-lg text-gray-400 mb-10 leading-relaxed max-w-xl">
                    Experience high-performance NVMe storage, free SSL, and 24/7 support. The simplest way to get your website online today.
                </p>

                <!-- Key Features Highlights -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                    <div class="flex items-center space-x-3 group">
                        <div class="w-8 h-8 bg-white/5 rounded-lg flex items-center justify-center border border-white/10 group-hover:border-primary/50 transition-colors">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <span class="text-sm font-bold text-gray-300">99.9% Uptime</span>
                    </div>
                    <div class="flex items-center space-x-3 group">
                        <div class="w-8 h-8 bg-white/5 rounded-lg flex items-center justify-center border border-white/10 group-hover:border-primary/50 transition-colors">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <span class="text-sm font-bold text-gray-300">Free Migration</span>
                    </div>
                    <div class="flex items-center space-x-3 group">
                        <div class="w-8 h-8 bg-white/5 rounded-lg flex items-center justify-center border border-white/10 group-hover:border-primary/50 transition-colors">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <span class="text-sm font-bold text-gray-300">NVMe SSD</span>
                    </div>
                </div>

                <a href="#product-grid" class="bg-primary text-white px-10 py-4 rounded-2xl font-black shadow-xl shadow-primary/20 hover:bg-blue-700 transition-all transform hover:-translate-y-1 inline-block">
                    View All Plans
                </a>
            </div>

            <div class="lg:w-2/5 relative">
                <!-- Attractive Price Card Design -->
                <div class="relative animate-float">
                    <!-- Glow effect -->
                    <div class="absolute inset-0 bg-primary/20 blur-[60px] rounded-full scale-75 animate-pulse"></div>
                    
                    <div class="relative bg-white/5 backdrop-blur-xl border border-white/10 p-10 rounded-[40px] shadow-2xl overflow-hidden group">
                        <!-- Decorative circle -->
                        <div class="absolute -right-10 -top-10 w-32 h-32 bg-primary/20 rounded-full blur-2xl group-hover:bg-primary/40 transition-all duration-500"></div>
                        
                        <div class="relative z-10 text-center">
                            <span class="text-primary text-[10px] font-black uppercase tracking-[0.2em] mb-4 inline-block">Best Price Guarantee</span>
                            <h3 class="text-white text-xl font-bold mb-8">Starting Plans From</h3>
                            
                            <div class="flex flex-col items-center mb-10">
                                <div class="flex items-start">
                                    <span class="text-primary text-3xl font-black mt-2 mr-1">৳</span>
                                    <span class="text-white text-8xl font-black tracking-tighter"><?php echo number_format($startPrice); ?></span>
                                </div>
                                <span class="text-gray-400 font-bold uppercase tracking-widest text-sm mt-2">Per Month</span>
                            </div>

                            <ul class="space-y-4 mb-10 text-left">
                                <li class="flex items-center space-x-3 text-sm text-gray-300">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                    <span>NVMe SSD Storage</span>
                                </li>
                                <li class="flex items-center space-x-3 text-sm text-gray-300">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                    <span>Free SSL Certificate</span>
                                </li>
                            </ul>

                            <div class="pt-6 border-t border-white/5">
                                <p class="text-xs text-gray-500 italic">* Monthly billing available</p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Badge -->
                    <div class="absolute -bottom-6 -right-6 bg-white p-6 rounded-3xl shadow-2xl transform rotate-12 group-hover:rotate-0 transition-transform duration-500">
                        <div class="text-brand-dark">
                            <p class="text-[10px] font-black uppercase tracking-widest opacity-50">Support</p>
                            <p class="text-2xl font-black">24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Pricing Comparison -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-brand-dark mb-4">Choose Your Perfect Plan</h2>
            <p class="text-gray-500">Transparent pricing with no hidden fees.</p>
        </div>

        <!-- Dynamic Product Grid (SSR) -->
        <div id="product-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 min-h-[400px]">
            <?php if ($products && count($products) > 0): ?>
                <?php foreach ($products as $index => $product): 
                    $isFeatured = $index === 1; // Second plan as featured
                    $pricing = $product['pricing']['BDT'] ?? ['monthly' => '0'];
                    $usdPricing = $product['pricing']['USD'] ?? ['monthly' => '0'];
                    
                    $desc = str_replace(['<br>', '<br/>', '<br />'], "\n", $product['description']);
                    $specs = array_filter(explode("\n", $desc), function($s) { return trim($s) !== ''; });
                    $specs = array_slice($specs, 0, 5);
                    
                    if (empty($specs)) {
                        $specs = ['Ultra-Fast NVMe Storage', 'LiteSpeed Web Server', 'Free SSL Certificate', '24/7 Premium Support', 'Daily Automated Backups'];
                    }
                ?>
                    <div class="<?php echo $isFeatured ? 'border-2 border-primary shadow-2xl scale-105 z-10' : 'border border-gray-100 hover:shadow-xl'; ?> rounded-3xl p-8 transition-all flex flex-col bg-white relative">
                        <?php if ($isFeatured): ?>
                            <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-primary text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase">Value Plan</div>
                        <?php endif; ?>
                        <h3 class="font-bold text-xl mb-1"><?php echo htmlspecialchars($product['name']); ?></h3>
                        <p class="text-xs text-gray-400 mb-6 uppercase tracking-widest">NVMe SSD Hosting</p>
                        <div class="flex items-baseline mb-6">
                            <span class="text-3xl font-black text-brand-dark">
                                <span class="currency-symbol">৳</span>
                                <span class="price-value" data-bdt="<?php echo $pricing['monthly']; ?>" data-usd="<?php echo $usdPricing['monthly']; ?>"><?php echo number_format((float)$pricing['monthly']); ?></span>
                            </span>
                            <span class="text-gray-400 text-sm ml-1">/mo</span>
                        </div>
                        <ul class="space-y-4 mb-8 text-sm text-gray-600 flex-grow">
                            <?php foreach ($specs as $spec): ?>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 
                                    <?php echo htmlspecialchars(strpos($spec, ':') !== false ? trim(explode(':', $spec)[1]) : trim($spec)); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="<?php echo WHMCS_URL; ?>/cart.php?a=add&pid=<?php echo $product['pid']; ?>" data-pid="<?php echo $product['pid']; ?>" class="order-button w-full text-center py-3 rounded-2xl font-bold transition-all <?php echo $isFeatured ? 'bg-primary text-white hover:bg-blue-700' : 'bg-black text-white hover:bg-gray-800'; ?>">Order Now</a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-full text-center py-20 text-gray-400">Failed to load plans.</div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Features Grid -->
<section class="py-20 bg-gray-50 border-t border-gray-100">
    <div class="container mx-auto px-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-lg mb-6 transition-transform group-hover:rotate-12">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h4 class="text-xl font-bold mb-2 text-brand-dark">Lightning Fast</h4>
                <p class="text-gray-500 text-sm">Our NVMe-powered servers ensure your site loads in milliseconds.</p>
            </div>
            <div class="flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-lg mb-6 transition-transform group-hover:rotate-12">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <h4 class="text-xl font-bold mb-2 text-brand-dark">Secure by Design</h4>
                <p class="text-gray-500 text-sm">Advanced firewalls and free SSL keeping your data safe.</p>
            </div>
            <div class="flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-lg mb-6 transition-transform group-hover:rotate-12">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h4 class="text-xl font-bold mb-2 text-brand-dark">24/7 Support</h4>
                <p class="text-gray-500 text-sm">Always here to help with any technical questions.</p>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
