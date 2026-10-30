<?php 
require_once __DIR__ . '/../../config.php';
include __DIR__ . '/../../includes/header.php'; 
?>

<!-- Hero Section -->
<section class="relative pt-32 pb-20 bg-gradient-to-b from-[#E6F3FF] to-white overflow-hidden text-center">
    <div class="container mx-auto px-10 relative">
        <h1 class="text-5xl md:text-6xl font-extrabold text-brand-dark mb-6 tracking-tighter">Bulk <span class="text-primary">Transfer</span></h1>
        <p class="text-gray-500 text-lg max-w-2xl mx-auto">Have multiple domains? Transfer them all at once and save time and money with our bulk transfer tool.</p>
    </div>
</section>

<!-- Bulk Input -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-10">
        <div class="max-w-3xl mx-auto">
            <div class="relative bg-white rounded-3xl p-8 md:p-12 shadow-xl shadow-blue-500/5 border border-blue-50">
                <form action="<?php echo WHMCS_URL; ?>/cart.php?a=add&domain=transfer" method="POST" class="whmcs-currency-form">
                    <label class="block text-brand-dark font-bold mb-4">Enter one domain per line</label>
                    <textarea name="query" rows="8" class="w-full bg-gray-50 border border-gray-100 rounded-2xl p-6 text-brand-dark outline-none focus:border-primary transition-colors mb-8 placeholder-gray-400" placeholder="example.com&#10;domain.net&#10;site.org"></textarea>
                    
                    <button type="submit" class="w-full bg-primary text-white py-5 rounded-2xl font-bold text-lg shadow-xl shadow-blue-500/20 hover:bg-blue-700 transition-all flex items-center justify-center space-x-3">
                        <span>Initiate Bulk Transfer</span>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </button>
                    
                    <div class="mt-8 flex items-center justify-center space-x-6 text-xs text-gray-400 font-bold uppercase tracking-widest">
                        <span class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Secure Transfer</span>
                        <span class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Immediate Auth</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
