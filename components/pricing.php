<?php
/**
 * Pricing Component
 * Fetches and renders WHMCS products server-side.
 */
$gid = 1; // BDIX Budget Shared Hosting
$products = getWhmcsProducts($gid);
?>
<div class="component-wrapper">
    <!-- Pricing Section -->
    <section id="plans" class="py-16 bg-white">
        <div class="container mx-auto px-10">
            <div class="text-center mb-12">
                <span class="text-blue-600 font-bold uppercase tracking-[0.2em] text-[10px] mb-3 block">BDIX Hosting</span>
                <h2 class="text-3xl md:text-4xl font-black text-[#111A4C] tracking-tight mb-4">
                    BDIX Budget <span class="text-blue-600">Shared Hosting</span>
                </h2>
                <div class="w-16 h-1 bg-blue-600 mx-auto rounded-full"></div>
            </div>

            <!-- Product Grid -->
            <div id="homepage-pricing-grid" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                <?php if ($products && count($products) > 0): ?>
                    <?php foreach ($products as $index => $product): ?>
                        <?php echo render_pricing_card($product, $index); ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-span-full text-center py-16 bg-gray-50 rounded-[2rem] border border-dashed border-gray-200">
                        <p class="text-gray-400 font-bold uppercase tracking-widest text-[10px]">No active plans found</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>
