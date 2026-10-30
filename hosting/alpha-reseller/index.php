<?php 
require_once __DIR__ . '/../../config.php';
include __DIR__ . '/../../includes/header.php'; 
?>

$groupName = "Alpha Reseller Hosting";
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
                    <span class="text-[10px] font-black uppercase tracking-widest">Coming Soon</span>
                </div>
                
                <h1 class="text-4xl md:text-7xl font-black text-white mb-6 leading-tight tracking-tighter">
                    <?php echo $groupName; ?> <br><span class="text-primary italic">Powerful Control.</span>
                </h1>
                
                <p class="text-lg text-gray-400 mb-10 leading-relaxed max-w-xl">
                    Our Alpha Reseller hosting is coming soon. Get ready for unprecedented control and scalability for your hosting business.
                </p>

                <div class="bg-white/5 border border-white/10 p-6 rounded-2xl inline-block">
                    <p class="text-white font-bold">Launching Soon - Stay Tuned!</p>
                </div>
            </div>

            <div class="lg:w-2/5 relative">
                <!-- Attractive Price Card Design -->
                <div class="relative animate-float">
                    <div class="absolute inset-0 bg-primary/20 blur-[60px] rounded-full scale-75 animate-pulse"></div>
                    <div class="relative bg-white/5 backdrop-blur-xl border border-white/10 p-10 rounded-[40px] shadow-2xl overflow-hidden group">
                        <div class="relative z-10 text-center py-10">
                            <h3 class="text-white text-2xl font-bold mb-4">Under Development</h3>
                            <p class="text-gray-400">We are fine-tuning the best Alpha Reseller experience for you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
