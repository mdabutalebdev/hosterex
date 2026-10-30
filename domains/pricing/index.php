<?php 
require_once __DIR__ . '/../../config.php';
include __DIR__ . '/../../includes/header.php'; 

// Fetch TLD Pricing from WHMCS
$tlds = getWhmcsTldPricing();

// Get Sort Parameter
$sort = $_GET['sort'] ?? 'default';

// Sort TLDs based on selection
if ($tlds) {
    if ($sort === 'az') {
        usort($tlds, function($a, $b) {
            return strcmp(strtolower($a['tld']), strtolower($b['tld']));
        });
    } elseif ($sort === 'price-low') {
        usort($tlds, function($a, $b) {
            return (float)$a['register'] - (float)$b['register'];
        });
    } elseif ($sort === 'price-high') {
        usort($tlds, function($a, $b) {
            return (float)$b['register'] - (float)$a['register'];
        });
    } else {
        // Default Sort to prioritize common ones
        $commonTlds = ['.com', '.net', '.org', '.info', '.biz', '.co', '.me', '.online', '.shop', '.store', '.pro', '.xyz'];
        usort($tlds, function($a, $b) use ($commonTlds) {
            $aIdx = array_search(strtolower($a['tld']), $commonTlds);
            $bIdx = array_search(strtolower($b['tld']), $commonTlds);
            if ($aIdx !== false && $bIdx !== false) return $aIdx - $bIdx;
            if ($aIdx !== false) return -1;
            if ($bIdx !== false) return 1;
            return strcmp($a['tld'], $b['tld']);
        });
    }
}

// Pagination Logic
$itemsPerPage = 20; 
$totalItems = $tlds ? count($tlds) : 0;
$totalPages = ceil($totalItems / $itemsPerPage);
$currentPage = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$startIndex = ($currentPage - 1) * $itemsPerPage;

$displayTlds = $tlds ? array_slice($tlds, $startIndex, $itemsPerPage) : [];
?>

<!-- Hero Section -->
<section class="relative pt-5  md:pt-12 mb-5 md:pb-10 bg-gradient-to-b from-[#E6F3FF] to-white overflow-hidden text-center">
    <!-- Animated background element -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[300px] bg-blue-100/50 rounded-full blur-[120px] -z-10 mt-10"></div>
    
    <div class="container mx-auto px-6 relative">
        <div class="inline-flex items-center space-x-2 bg-blue-50 text-primary px-4 py-2 rounded-full mb-3 border border-blue-100">
            <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
            <span class="text-[10px] font-black uppercase tracking-widest">Global TLD Support</span>
        </div>
        <h1 class="text-4xl md:text-6xl font-bold text-brand-dark tracking-tighter leading-tight">
            Domain <span class="text-primary  ">Pricing.</span>
        </h1>
        
        <!-- Search & Filter Bar -->
        <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-stretch gap-4 mt-8">
            <div class="relative flex-grow group">
                <div class="absolute inset-y-0 left-6 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="text" id="tld-search" placeholder="Search for a domain extension (e.g. .com, .net)..." 
                    class="w-full pl-14 pr-6 py-4 bg-white border border-gray-200 rounded-2xl text-base focus:outline-none focus:border-primary transition-all font-medium placeholder:text-gray-400 shadow-sm">
            </div>
            <div class="relative md:min-w-[220px]">
                <select id="tld-sort" onchange="window.location.href='?sort='+this.value+'&page=1'" class="w-full h-full appearance-none bg-white border border-gray-200 rounded-2xl px-6 py-4 text-gray-700 font-bold focus:outline-none focus:border-primary transition-all cursor-pointer shadow-sm pr-12">
                    <option value="default" <?php echo $sort === 'default' ? 'selected' : ''; ?>>Default Sort</option>
                    <option value="az" <?php echo $sort === 'az' ? 'selected' : ''; ?>>A-Z Alphabetical</option>
                    <option value="price-low" <?php echo $sort === 'price-low' ? 'selected' : ''; ?>>Price: Low to High</option>
                    <option value="price-high" <?php echo $sort === 'price-high' ? 'selected' : ''; ?>>Price: High to Low</option>
                </select>
                <div class="absolute inset-y-0 right-5 flex items-center pointer-events-none text-gray-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Table Section -->
<section class="pb-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="overflow-hidden border border-gray-100 rounded-2xl shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse" id="pricing-table">
                    <thead class="bg-white text-gray-700 border-b border-gray-100">
                        <tr>
                            <th class="px-8 py-5 text-sm font-bold">Domain extension</th>
                            <th class="px-8 py-5 text-sm font-bold">First year</th>
                            <th class="px-8 py-5 text-sm font-bold">Renews at</th>
                            <th class="px-8 py-5 text-sm font-bold text-right">Transfer</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <?php if ($displayTlds): ?>
                            <?php foreach ($displayTlds as $item): ?>
                                <tr class="tld-row hover:bg-gray-50/30 transition-all group" data-tld="<?php echo strtolower($item['tld']); ?>">
                                    <td class="px-8 py-6">
                                        <span class="text-lg font-black text-primary tracking-tighter"><?php echo $item['tld']; ?></span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-semibold text-gray-700">
                                                <span class="currency-symbol">৳</span><span class="price-value" 
                                                    data-bdt="<?php echo $item['register']; ?>" 
                                                    data-usd="<?php echo $item['usd_register']; ?>"><?php echo number_format($item['register']); ?></span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <span class="text-sm font-semibold text-gray-600">
                                            <span class="currency-symbol">৳</span><span class="price-value" 
                                                data-bdt="<?php echo $item['renew']; ?>" 
                                                data-usd="<?php echo $item['usd_renew']; ?>"><?php echo number_format($item['renew']); ?></span>/yr
                                        </span>
                                    </td>
                                    <td class="px-8 py-6 text-right">
                                        <span class="text-sm font-semibold text-gray-600">
                                            <span class="currency-symbol">৳</span><span class="price-value" 
                                                data-bdt="<?php echo $item['transfer']; ?>" 
                                                data-usd="<?php echo $item['usd_transfer']; ?>"><?php echo number_format($item['transfer']); ?></span>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="py-24 text-center text-gray-400 font-bold uppercase tracking-widest">No pricing data found from WHMCS</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Professional Pagination -->
        <?php if ($totalPages > 1): ?>
        <div id="pagination-container" class="mt-12 flex justify-center items-center space-x-2">
            <?php if ($currentPage > 1): ?>
                <a href="?page=<?php echo $currentPage - 1; ?>&sort=<?php echo $sort; ?>" class="w-10 h-10 flex items-center justify-center rounded-xl border border-gray-100 text-gray-400 hover:bg-primary hover:text-white transition-all shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
                </a>
            <?php endif; ?>

            <?php 
            $startRange = max(1, $currentPage - 1);
            $endRange = min($totalPages, $currentPage + 1);
            
            if ($currentPage == 1) $endRange = min($totalPages, 3);
            if ($currentPage == $totalPages) $startRange = max(1, $totalPages - 2);

            for ($i = $startRange; $i <= $endRange; $i++): 
            ?>
                <a href="?page=<?php echo $i; ?>&sort=<?php echo $sort; ?>" class="w-10 h-10 flex items-center justify-center rounded-xl font-bold transition-all <?php echo $i === $currentPage ? 'bg-primary text-white shadow-md' : 'bg-white border border-gray-100 text-gray-500 hover:border-primary hover:text-primary'; ?>">
                    <?php echo $i; ?>
                </a>
            <?php endfor; ?>

            <?php if ($currentPage < $totalPages): ?>
                <a href="?page=<?php echo $currentPage + 1; ?>&sort=<?php echo $sort; ?>" class="w-10 h-10 flex items-center justify-center rounded-xl border border-gray-100 text-gray-400 hover:bg-primary hover:text-white transition-all shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Global TLD Data for Search -->
<script id="all-tlds-data" type="application/json">
    <?php echo json_encode($tlds); ?>
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('tld-search');
    const table = document.getElementById('pricing-table');
    const tbody = table.querySelector('tbody');
    const paginationContainer = document.getElementById('pagination-container');
    const allTlds = JSON.parse(document.getElementById('all-tlds-data').textContent);
    
    const originalContent = tbody.innerHTML;

    searchInput.addEventListener('input', function() {
        const term = searchInput.value.toLowerCase().trim();
        
        if (term === '') {
            tbody.innerHTML = originalContent;
            if (paginationContainer) paginationContainer.style.display = 'flex';
            if (typeof updatePrices === 'function') updatePrices();
            return;
        }

        if (paginationContainer) paginationContainer.style.display = 'none';

        // Filter (allTlds is already sorted by PHP)
        const matches = allTlds.filter(tld => tld.tld.toLowerCase().includes(term));
        
        if (matches.length === 0) {
            tbody.innerHTML = '<tr><td colspan="4" class="py-24 text-center text-gray-400 font-bold uppercase tracking-widest">No results found for "' + term + '"</td></tr>';
        } else {
            let html = '';
            matches.slice(0, 100).forEach(item => {
                html += `
                    <tr class="tld-row hover:bg-gray-50/30 transition-all group" data-tld="${item.tld.toLowerCase()}">
                        <td class="px-8 py-6">
                            <span class="text-lg font-black text-primary tracking-tighter">${item.tld}</span>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex flex-col">
                                <span class="text-sm font-semibold text-gray-700">
                                    <span class="currency-symbol">৳</span><span class="price-value" 
                                        data-bdt="${item.register}" 
                                        data-usd="${item.usd_register}">${item.register}</span>
                                </span>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <span class="text-sm font-semibold text-gray-600">
                                <span class="currency-symbol">৳</span><span class="price-value" 
                                    data-bdt="${item.renew}" 
                                    data-usd="${item.usd_renew}">${item.renew}</span>/yr
                            </span>
                        </td>
                        <td class="px-8 py-6 text-right">
                            <span class="text-sm font-semibold text-gray-600">
                                <span class="currency-symbol">৳</span><span class="price-value" 
                                    data-bdt="${item.transfer}" 
                                    data-usd="${item.usd_transfer}">${item.transfer}</span>
                            </span>
                        </td>
                    </tr>
                `;
            });
            tbody.innerHTML = html;
        }
        
        if (typeof updatePrices === 'function') updatePrices();
    });
});
</script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
