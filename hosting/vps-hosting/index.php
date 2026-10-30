<?php 
require_once __DIR__ . '/../../config.php';
include __DIR__ . '/../../includes/header.php'; 

$gid = 2; // VPS Hosting
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
                    <span class="text-[10px] font-black uppercase tracking-widest">Premium VPS Hosting</span>
                </div>
                
                <h1 class="text-4xl md:text-7xl font-black text-white mb-6 leading-tight tracking-tighter">
                    Scalable <span class="text-primary italic">Cloud VPS</span> Servers
                </h1>
                
                <p class="text-lg text-gray-400 mb-10 leading-relaxed max-w-xl">
                    Full root access, dedicated resources, and lightning-fast NVMe storage. Build your project on the best infrastructure.
                </p>

                <!-- Key Features Highlights -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                    <div class="flex items-center space-x-3 group">
                        <div class="w-8 h-8 bg-white/5 rounded-lg flex items-center justify-center border border-white/10 group-hover:border-primary/50 transition-colors">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <span class="text-sm font-bold text-gray-300">Root Access</span>
                    </div>
                    <div class="flex items-center space-x-3 group">
                        <div class="w-8 h-8 bg-white/5 rounded-lg flex items-center justify-center border border-white/10 group-hover:border-primary/50 transition-colors">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <span class="text-sm font-bold text-gray-300">NVMe SSD</span>
                    </div>
                    <div class="flex items-center space-x-3 group">
                        <div class="w-8 h-8 bg-white/5 rounded-lg flex items-center justify-center border border-white/10 group-hover:border-primary/50 transition-colors">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <span class="text-sm font-bold text-gray-300">KVM Tech</span>
                    </div>
                </div>

                <a href="#vps-grid" class="bg-primary text-white px-10 py-4 rounded-2xl font-black shadow-xl shadow-primary/20 hover:bg-blue-700 transition-all transform hover:-translate-y-1 inline-block">
                    View VPS Plans
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
                            <span class="text-primary text-[10px] font-black uppercase tracking-[0.2em] mb-4 inline-block">Enterprise Performance</span>
                            <h3 class="text-white text-xl font-bold mb-8">Starting VPS From</h3>
                            
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
                                    <span>Dedicated Resources</span>
                                </li>
                                <li class="flex items-center space-x-3 text-sm text-gray-300">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                    <span>Full Root Access</span>
                                </li>
                            </ul>

                            <div class="pt-6 border-t border-white/5">
                                <p class="text-xs text-gray-500 italic">* High Availability Network</p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Badge -->
                    <div class="absolute -bottom-6 -right-6 bg-white p-6 rounded-3xl shadow-2xl transform rotate-12 group-hover:rotate-0 transition-transform duration-500">
                        <div class="text-brand-dark">
                            <p class="text-[10px] font-black uppercase tracking-widest opacity-50">Port</p>
                            <p class="text-2xl font-black">1Gbps</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- VPS Plans -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-10">
        <!-- Dynamic VPS Grid (SSR) -->
        <div id="vps-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 min-h-[450px]">
            <?php if ($products && count($products) > 0): ?>
                <?php foreach ($products as $index => $product): 
                    $isFeatured = $index === 1;
                    $pricing = $product['pricing']['BDT'] ?? ['monthly' => '0'];
                    $usdPricing = $product['pricing']['USD'] ?? ['monthly' => '0'];
                    
                    $desc = str_replace(['<br>', '<br/>', '<br />'], "\n", $product['description']);
                    $specs = array_filter(explode("\n", $desc), function($s) { return trim($s) !== ''; });
                    
                    if (empty($specs)) {
                        $specs = ['Root Access: Full Control', 'SSD Storage: Pure Performance', 'Virtualization: KVM/VMware', 'Network: 1Gbps Port', 'DDoS Protection: Included'];
                    }
                ?>
                    <div class="<?php echo $isFeatured ? 'bg-brand-dark border-4 border-primary ring-8 ring-blue-50/50' : 'bg-white border-2 border-gray-50 hover:border-blue-100'; ?> rounded-[32px] p-8 transition-all flex flex-col relative group">
                        <?php if ($isFeatured): ?>
                            <div class="absolute top-0 right-10 -translate-y-1/2 bg-primary text-white text-[10px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest shadow-xl">Best Performance</div>
                        <?php endif; ?>
                        <h3 class="font-bold text-xl mb-4 <?php echo $isFeatured ? 'text-white' : 'text-brand-dark'; ?>"><?php echo htmlspecialchars($product['name']); ?></h3>
                        <div class="flex items-baseline mb-8">
                            <span class="text-3xl font-black <?php echo $isFeatured ? 'text-white' : 'text-brand-dark'; ?>">
                                <span class="currency-symbol">৳</span>
                                <span class="price-value" data-bdt="<?php echo $pricing['monthly']; ?>" data-usd="<?php echo $usdPricing['monthly']; ?>"><?php echo number_format((float)$pricing['monthly']); ?></span>
                            </span>
                            <span class="text-gray-400 text-sm ml-1 font-medium">/mo</span>
                        </div>
                        <div class="space-y-4 mb-10 text-sm flex-grow">
                            <?php foreach ($specs as $spec): ?>
                                <div class="flex items-center <?php echo $isFeatured ? 'text-gray-300' : 'text-gray-600'; ?>">
                                    <svg class="w-5 h-5 text-primary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span><?php echo htmlspecialchars(strpos($spec, ':') !== false ? trim(explode(':', $spec)[1]) : trim($spec)); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?php echo WHMCS_URL; ?>/cart.php?a=add&pid=<?php echo $product['pid']; ?>" data-pid="<?php echo $product['pid']; ?>" class="order-button w-full text-center py-4 rounded-2xl font-bold transition-all <?php echo $isFeatured ? 'bg-primary text-white hover:bg-blue-700' : 'bg-brand-dark text-white hover:bg-black'; ?>">Order Now</a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-full text-center py-20 text-gray-400">No VPS plans found.</div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
