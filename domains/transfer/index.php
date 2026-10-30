<?php 
require_once __DIR__ . '/../../config.php';
include __DIR__ . '/../../includes/header.php'; 
?>

<!-- Hero Section -->
<section class="relative pt-12 pb-10 bg-gradient-to-b from-[#E6F3FF] to-white overflow-hidden text-center">
    <!-- Background Accents -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100 rounded-full blur-3xl opacity-20 -mr-48 -mt-24"></div>
    
    <div class="container mx-auto px-10 relative">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-extrabold text-brand-dark mb-4 tracking-tighter">
                Transfer Your <span class="text-primary">Domain</span>
            </h1>
            <p class="text-gray-500 text-base md:text-lg mb-8 max-w-2xl mx-auto leading-relaxed">
                Experience better management and support. Transfer your domain to Hosterex today and get 1-year free extension on most TLDs.
            </p>

            <!-- Domain Transfer Form -->
            <div class="relative max-w-3xl mx-auto">
                <form action="<?php echo WHMCS_URL; ?>/cart.php?a=add&domain=transfer" method="POST" class="whmcs-currency-form flex items-center bg-white rounded-2xl shadow-xl shadow-blue-500/5 p-1.5 border border-blue-50 overflow-hidden">
                    <input type="text" name="query" placeholder="Enter domain name to transfer" class="flex-grow min-w-0 bg-transparent border-none outline-none px-4 md:px-6 py-3.5 md:py-4 text-brand-dark text-base md:text-lg placeholder:text-gray-400">
                    <button type="submit" class="flex-shrink-0 bg-brand-dark hover:bg-black text-white px-5 md:px-8 py-3.5 md:py-4 rounded-xl font-bold transition-all shadow-lg flex items-center space-x-2">
                        <span>Transfer</span>
                        <svg class="w-5 h-5 hidden md:block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Why Transfer (New) -->
<section class="py-10 bg-white border-y border-gray-50">
    <div class="container mx-auto px-10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-primary font-black text-3xl mb-2">Secure</div>
                <p class="text-gray-500 text-xs uppercase tracking-widest font-bold">Domain Locking</p>
            </div>
            <div class="text-center">
                <div class="text-primary font-black text-3xl mb-2">Simple</div>
                <p class="text-gray-500 text-xs uppercase tracking-widest font-bold">1-Click Setup</p>
            </div>
            <div class="text-center">
                <div class="text-primary font-black text-3xl mb-2">24/7</div>
                <p class="text-gray-500 text-xs uppercase tracking-widest font-bold">Expert Support</p>
            </div>
            <div class="text-center">
                <div class="text-primary font-black text-3xl mb-2">Full</div>
                <p class="text-gray-500 text-xs uppercase tracking-widest font-bold">DNS Control</p>
            </div>
        </div>
    </div>
</section>

<!-- Transfer Steps -->
<section class="py-12 bg-gray-50/50">
    <div class="container mx-auto px-10">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-brand-dark">How to transfer in 3 easy steps</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Step 1 -->
            <div class="relative">
                <div class="w-16 h-16 bg-blue-50 text-primary rounded-2xl flex items-center justify-center text-2xl font-black mb-8">1</div>
                <h3 class="text-xl font-bold text-brand-dark mb-4">Unlock & Auth</h3>
                <p class="text-gray-500 leading-relaxed">Unlock your domain at your current registrar and obtain the Auth/EPP code.</p>
                <div class="hidden md:block absolute top-8 left-full w-20 border-t-2 border-dashed border-gray-100"></div>
            </div>
            <!-- Step 2 -->
            <div class="relative">
                <div class="w-16 h-16 bg-blue-50 text-primary rounded-2xl flex items-center justify-center text-2xl font-black mb-8">2</div>
                <h3 class="text-xl font-bold text-brand-dark mb-4">Place Order</h3>
                <p class="text-gray-500 leading-relaxed">Enter your domain above, provide the Auth code, and complete the checkout.</p>
                <div class="hidden md:block absolute top-8 left-full w-20 border-t-2 border-dashed border-gray-100"></div>
            </div>
            <!-- Step 3 -->
            <div class="relative">
                <div class="w-16 h-16 bg-blue-50 text-primary rounded-2xl flex items-center justify-center text-2xl font-black mb-8">3</div>
                <h3 class="text-xl font-bold text-brand-dark mb-4">Confirm & Wait</h3>
                <p class="text-gray-500 leading-relaxed">Approve the transfer via email. It usually takes 5-7 days for the process to complete.</p>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
