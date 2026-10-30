<div class="component-wrapper overflow-hidden">
    <!-- Domain Search Skeleton -->
    <div class="skeleton-container py-10 md:py-20 bg-white border-y border-gray-50">
        <div class="container mx-auto px-10 text-center max-w-3xl">
            <div class="w-48 h-8 skeleton rounded-full mx-auto mb-8 opacity-30"></div>
            <div class="w-full h-12 skeleton rounded-2xl mb-6 opacity-50"></div>
            <div class="w-2/3 h-6 skeleton rounded-full mx-auto mb-10 opacity-20"></div>
            <div class="w-full h-16 skeleton rounded-2xl mb-8 opacity-10 shadow-sm"></div>
            <div class="flex justify-center space-x-3">
                <div class="w-20 h-10 skeleton rounded-full opacity-20"></div>
                <div class="w-20 h-10 skeleton rounded-full opacity-20"></div>
                <div class="w-20 h-10 skeleton rounded-full opacity-20"></div>
            </div>
        </div>
    </div>

    <!-- Domain Search Real Content -->
    <section class="real-content py-10 md:py-20 bg-gradient-to-b from-[#E6F3FF] to-white overflow-hidden border-y border-blue-50">
        <div class="container mx-auto px-10">
            <!-- Background Accent -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-blue-100 rounded-full blur-3xl opacity-20 -mr-20 -mt-10"></div>
            
            <div class="relative text-center max-w-3xl mx-auto">
                <!-- Badge -->
                <div class="inline-flex items-center space-x-2 bg-white px-4 py-1.5 rounded-full shadow-sm border border-blue-100 mb-6">
                    <div class="w-6 h-6 bg-primary rounded-full flex items-center justify-center text-white">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <span class="text-primary font-bold text-xs">Secure Your Online Identity</span>
                </div>

                <h2 class="text-4xl md:text-6xl font-extrabold text-[#111A4C] mb-6 tracking-tight">
                    Register Your <span class="text-[#0069FF]">Domain</span>
                </h2>
                
                <p class="text-gray-500 text-base md:text-lg mb-8 leading-relaxed">
                    Get your perfect domain name in minutes. Secure, fast, and<br class="hidden md:block"> compliant with BTCL & BTRC regulations.
                </p>

                <!-- Domain Search Form -->
                <div class="relative max-w-2xl mx-auto mb-10">
                    <form action="<?php echo WHMCS_URL; ?>/cart.php?a=add&domain=register" method="POST" class="whmcs-currency-form flex items-center bg-white rounded-2xl shadow-xl shadow-blue-100/50 p-1.5 border border-blue-50 overflow-hidden">
                        <input type="text" name="query" placeholder="Search domain..." class="flex-grow min-w-0 bg-transparent border-none outline-none focus:ring-0 focus:bg-transparent px-3 md:px-6 py-3 md:py-4 text-brand-dark text-sm md:text-lg placeholder-gray-400">
                        <div class="flex-shrink-0">
                            <?php echo render_button("Search", "#", "primary", "px-5 md:px-10 !transform-none !shadow-lg shadow-blue-200/50 hover:!bg-primary", "", "md", "button", 'type="submit"'); ?>
                        </div>
                    </form>
                </div>

                <!-- Popular TLDs -->
                <div class="flex flex-wrap justify-center items-center gap-3">
                    <span class="text-gray-600 font-bold mr-2 text-sm">popular tlds:</span>
                    
                    <?php 
                    $tldPricing = getWhmcsTldPricing();
                    $headerTlds = ['.com', '.net', '.io', '.bd', '.xyz'];
                    if ($tldPricing):
                        foreach ($headerTlds as $pop):
                            foreach ($tldPricing as $tld):
                                if (strtolower($tld['tld']) === $pop):
                                    $tldName = ltrim($tld['tld'], '.');
                                    $styles = "bg-white border border-gray-100";
                                    $textStyles = "text-brand-dark";
                                    $priceStyles = "text-gray-900";
                                    
                                    if ($tldName === 'io') {
                                        $styles = "bg-[#FFEDD5] border border-orange-200";
                                        $textStyles = "text-orange-900";
                                        $priceStyles = "bg-[#FDBA74] text-white px-2 py-0.5 rounded";
                                    } elseif ($tldName === 'xyz') {
                                        $styles = "bg-[#FEF9C3] border border-yellow-200";
                                        $textStyles = "text-yellow-900";
                                        $priceStyles = "bg-[#FACC15] text-white px-2 py-0.5 rounded";
                                    }
                    ?>
                    <div class="<?php echo $styles; ?> rounded-full px-4 py-2 flex items-center space-x-3 shadow-sm hover:shadow-md transition-all cursor-pointer group">
                        <span class="<?php echo $textStyles; ?> font-bold text-sm">.<?php echo $tldName; ?></span>
                        <span class="<?php echo $priceStyles; ?> font-extrabold text-sm"><span class="currency-symbol">৳</span><span class="price-value" data-bdt="<?php echo $tld['register']; ?>" data-usd="<?php echo $tld['usd_register']; ?>"><?php echo number_format((float)$tld['register']); ?></span></span>
                    </div>
                    <?php 
                                    break;
                                endif;
                            endforeach;
                        endforeach;
                    endif; 
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>
