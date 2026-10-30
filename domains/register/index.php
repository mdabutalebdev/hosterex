<?php 
require_once __DIR__ . '/../../config.php';
include __DIR__ . '/../../includes/header.php'; 
?>

<!-- Hero Section -->
<section class="relative pt-12 pb-10 bg-gradient-to-b from-[#E6F3FF] to-white overflow-hidden text-center">
    <!-- Background Accents -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100 rounded-full blur-3xl opacity-20 -mr-48 -mt-24"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-100 rounded-full blur-3xl opacity-20 -ml-48 -mb-24"></div>

    <div class="container mx-auto px-10 relative">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-extrabold text-brand-dark mb-4 tracking-tighter">
                Find Your Perfect <span class="text-primary">Domain</span>
            </h1>
            <p class="text-gray-500 text-base md:text-lg mb-8 max-w-2xl mx-auto leading-relaxed">
                Connect your business to the world with a memorable domain. Fast registration, transparent pricing, and robust management tools.
            </p>

            <!-- Domain Search Form -->
            <div class="relative max-w-3xl mx-auto">
                <form action="<?php echo WHMCS_URL; ?>/cart.php?a=add&domain=register" method="POST" class="whmcs-currency-form flex items-center bg-white rounded-2xl shadow-xl shadow-blue-500/5 p-1.5 border border-blue-50 overflow-hidden">
                    <input type="text" name="query" placeholder="Enter your dream domain name" class="flex-grow min-w-0 bg-transparent border-none outline-none px-4 md:px-6 py-3.5 md:py-4 text-brand-dark text-base md:text-lg placeholder:text-gray-400">
                    <button type="submit" class="flex-shrink-0 bg-primary hover:bg-blue-700 text-white px-5 md:px-8 py-3.5 md:py-4 rounded-xl font-bold transition-all shadow-lg flex items-center space-x-2">
                        <span>Search</span>
                        <svg class="w-5 h-5 hidden md:block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php 
$tldPricing = getWhmcsTldPricing();
// Filter for popular TLDs to highlight
$popularTlds = ['.com', '.net', '.bd', '.xyz', '.org', '.io', '.me', '.tech', '.online', '.shop'];
$displayTlds = [];

if ($tldPricing) {
    foreach ($popularTlds as $pop) {
        foreach ($tldPricing as $tld) {
            if (strtolower($tld['tld']) === $pop) {
                $displayTlds[] = $tld;
                break;
            }
        }
    }
}
?>

<!-- TLD Highlights -->
<section class="py-10 bg-white">
    <div class="container mx-auto px-10">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <?php if (!empty($displayTlds)): ?>
                <?php foreach ($displayTlds as $tld): 
                    $tldName = ltrim($tld['tld'], '.');
                    $bgColor = 'bg-white border-gray-100';
                    $textColor = 'text-brand-dark';
                    $accentColor = 'text-primary';
                    $badgeText = 'Registration';

                    // Custom styling for specific TLDs
                    if ($tldName === 'io') {
                        $bgColor = 'bg-indigo-50 border-indigo-100';
                        $textColor = 'text-indigo-700';
                        $accentColor = 'text-indigo-600';
                        $badgeText = 'Premium TLD';
                    } elseif ($tldName === 'xyz') {
                        $bgColor = 'bg-emerald-50 border-emerald-100';
                        $textColor = 'text-emerald-700';
                        $accentColor = 'text-emerald-600';
                        $badgeText = 'Student Choice';
                    } elseif ($tldName === 'tech') {
                        $bgColor = 'bg-blue-50 border-blue-100';
                        $textColor = 'text-blue-700';
                        $accentColor = 'text-blue-600';
                        $badgeText = 'Tech Startups';
                    } elseif ($tldName === 'me') {
                        $bgColor = 'bg-rose-50 border-rose-100';
                        $textColor = 'text-rose-700';
                        $accentColor = 'text-rose-600';
                        $badgeText = 'Personal';
                    }
                ?>
                <div class="<?php echo $bgColor; ?> border p-4 md:p-6 rounded-3xl text-center shadow-sm hover:shadow-md transition-all">
                    <span class="text-2xl font-extrabold <?php echo $textColor; ?> block mb-2">.<?php echo $tldName; ?></span>
                    <p class="<?php echo $accentColor; ?> font-bold text-xl">
                        <span class="currency-symbol">৳</span><span class="price-value" data-bdt="<?php echo $tld['register']; ?>" data-usd="<?php echo $tld['usd_register']; ?>"><?php echo number_format((float)$tld['register']); ?></span>
                    </p>
                    <p class="text-[9px] text-gray-400 mt-2 uppercase tracking-widest font-bold"><?php echo $badgeText; ?></p>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-full text-center py-10">
                    <p class="text-gray-400">Loading domain pricing...</p>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="text-center mt-16">
            <a href="/domains/pricing/" class="bg-primary text-white px-6 py-4 rounded-2xl font-medium  text-[14px]  inline-flex items-center space-x-2">
                <span>View All Extension Pricing</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 20 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>
    </div>
</section>

 

<!-- Features Section -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="flex flex-col space-y-6 group">
                <div class="w-16 h-16 bg-blue-50 text-primary rounded-2xl flex items-center justify-center transition-transform group-hover:scale-110">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-brand-dark mb-3">Domain Privacy</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Protect your personal information from WHOIS scrapers and spammers with our ID protection.</p>
                </div>
            </div>
            <div class="flex flex-col space-y-6 group">
                <div class="w-16 h-16 bg-blue-50 text-primary rounded-2xl flex items-center justify-center transition-transform group-hover:scale-110">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-brand-dark mb-3">DNS Management</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Full control over your DNS records (A, MX, CNAME, etc.) with our easy-to-use control panel.</p>
                </div>
            </div>
            <div class="flex flex-col space-y-6 group">
                <div class="w-16 h-16 bg-blue-50 text-primary rounded-2xl flex items-center justify-center transition-transform group-hover:scale-110">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-brand-dark mb-3">24/7 Expert Support</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Need help with registration? Our experts are available around the clock to assist you.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
