<?php
/**
 * Global helper functions for Hosterex
 * 
 * This file contains reusable UI components and helpers.
 */

/**
 * Renders a standardized button with premium effects.
 * 
 * @param string $text The button text.
 * @param string $link The URL to link to (for <a> tags).
 * @param string $type The button style type: 'primary' or 'black' or 'outline'.
 * @param string $extraClasses Additional CSS classes.
 * @param string $icon HTML for an icon to display inside the button.
 * @param string $size The size of the button: 'sm', 'md', 'lg'.
 * @param string $tag The HTML tag to use: 'a' or 'button'.
 * @param string $extraAttr Additional HTML attributes.
 * @return string The generated HTML for the button.
 */
function render_button($text, $link = '#', $type = 'primary', $extraClasses = '', $icon = '', $size = 'md', $tag = 'a', $extraAttr = '') {
    // Base styles for all buttons
    $baseClasses = "inline-flex items-center justify-center font-bold transition-all duration-300 transform hover:-translate-y-1 active:scale-95 whitespace-nowrap cursor-pointer";
    
    // Size-specific styles
    if ($size === 'sm') {
        $sizeClasses = "px-6 py-3 text-sm font-medium rounded-xl";
    } elseif ($size === 'lg') {
        $sizeClasses = "px-12 py-3 text-sm font-medium rounded-2xl";
    } else {
        $sizeClasses = "px-10 py-3 text-sm font-medium rounded-xl";
    }

    // Type-specific styles
    if ($type === 'primary') {
        $typeClasses = "bg-primary text-white hover:bg-blue-700 shadow-lg shadow-blue-200/50 hover:shadow-blue-300/60";
    } elseif ($type === 'black') {
        $typeClasses = "bg-[#111A4C] text-white hover:bg-black shadow-lg shadow-gray-900/20 hover:shadow-gray-900/40";
    } else {
        // Outline / Soft style (Black outline version)
        $typeClasses = "border-2 border-gray-100 text-brand-dark hover:border-primary hover:text-primary bg-white shadow-sm hover:shadow-md";
    }

    $iconHtml = '';
    if ($icon) {
        $iconHtml = "<span class=\"" . ($size === 'sm' ? 'mr-2' : 'mr-3') . "\">$icon</span>";
    }

    if ($tag === 'button') {
        return "<button $extraAttr class=\"$baseClasses $sizeClasses $typeClasses $extraClasses\">$iconHtml $text</button>";
    } else {
        return "<a href=\"$link\" $extraAttr class=\"$baseClasses $sizeClasses $typeClasses $extraClasses\">$iconHtml $text</a>";
    }
}

/**
 * Renders a group of buttons.
 * 
 * @param array $buttons Array of button configurations (text, link, type, class, icon).
 * @param string $alignment Flexbox alignment class (e.g., 'justify-start', 'justify-center').
 * @return string The generated HTML for the button group.
 */
function render_button_group($buttons, $alignment = 'justify-start') {
    $html = "<div class=\"flex flex-wrap items-center gap-4 $alignment\">";
    foreach ($buttons as $btn) {
        $text = $btn['text'] ?? '';
        $link = $btn['link'] ?? '#';
        $type = $btn['type'] ?? 'primary';
        $class = $btn['class'] ?? '';
        $icon = $btn['icon'] ?? '';
        $html .= render_button($text, $link, $type, $class, $icon);
    }
    $html .= "</div>";
    return $html;
}

/**
 * Logs WHMCS API requests and responses.
 */
function logWhmcsApi($action, $params, $response) {
    $logDir = __DIR__ . '/../logs';
    if (!is_dir($logDir)) {
        @mkdir($logDir, 0755, true);
    }
    $logFile = $logDir . '/whmcs_api.log';
    $timestamp = date('Y-m-d H:i:s');
    
    // Remove sensitive data from log
    $safeParams = $params;
    if (isset($safeParams['secret'])) $safeParams['secret'] = '********';
    
    $decodedResponse = is_string($response) ? json_decode($response, true) : $response;
    $status = (isset($decodedResponse['result']) && $decodedResponse['result'] === 'success') ? 'SUCCESS' : 'ERROR';
    
    $logEntry = "[$timestamp] [$status] ACTION: $action\n";
    $logEntry .= "PARAMS: " . json_encode($safeParams) . "\n";
    $logEntry .= "RESPONSE: " . (is_string($response) ? $response : json_encode($response)) . "\n";
    $logEntry .= "--------------------------------------------------\n";
    
    @file_put_contents($logFile, $logEntry, FILE_APPEND);
}

/**
 * Centralized function to call WHMCS API with caching.
 */
function callWhmcsApi($action, $params = []) {
    $cacheDir = __DIR__ . '/../cache';
    if (!is_dir($cacheDir)) {
        @mkdir($cacheDir, 0755, true);
    }
    
    // Generate a unique cache key based on action and params
    $cacheKey = md5($action . json_encode($params));
    $cacheFile = $cacheDir . '/' . $cacheKey . '.json';
    $cacheTTL = 3600; // 1 hour

    // Try to serve from valid cache first
    if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheTTL)) {
        $cachedData = file_get_contents($cacheFile);
        $decoded = json_decode($cachedData, true);
        if ($decoded && isset($decoded['result']) && $decoded['result'] === 'success') {
            return $decoded;
        }
    }

    $apiUrl = (getenv('WHMCS_BASE_URL') ?: 'https://my.hosterex.com') . '/includes/api.php';
    $identifier = getenv('WHMCS_IDENTIFIER');
    $secret = getenv('WHMCS_SECRET');

    $postfields = array_merge([
        'identifier' => $identifier,
        'secret' => $secret,
        'action' => $action,
        'responsetype' => 'json',
    ], $params);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15); // Shorter timeout for API
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postfields));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    $response = curl_exec($ch);
    $curl_error = curl_error($ch);
    curl_close($ch);

    if ($response === false) {
        $apiResult = ['result' => 'error', 'message' => 'CURL Error: ' . $curl_error];
    } else {
        $apiResult = json_decode($response, true);
    }

    // Log the call
    logWhmcsApi($action, $postfields, $response ?: json_encode($apiResult));

    // If API call succeeded, update cache
    if (isset($apiResult['result']) && $apiResult['result'] === 'success') {
        @file_put_contents($cacheFile, json_encode($apiResult));
        return $apiResult;
    }

    // If API call failed but we have an old cache, use it as fallback
    if (file_exists($cacheFile)) {
        $cachedData = file_get_contents($cacheFile);
        $decoded = json_decode($cachedData, true);
        if ($decoded) return $decoded;
    }

    return $apiResult;
}

/**
 * Fetches product data from WHMCS API.
 * 
 * @param int $gid The Group ID of the products to fetch.
 * @return array|bool Returns an array of products or false on failure.
 */
function getWhmcsProducts($gid = 1) {
    $data = callWhmcsApi('GetProducts', ['gid' => $gid]);

    if (isset($data['result']) && $data['result'] === 'success') {
        $products = $data['products']['product'] ?? [];
        
        // Structure the data for our frontend
        $formattedProducts = [];
        foreach ($products as $p) {
            $pricing = [];
            // WHMCS returns prices as -1.00 if disabled
            if (isset($p['pricing'])) {
                foreach ($p['pricing'] as $currCode => $priceData) {
                    $monthly = $priceData['monthly'] ?? '-1.00';
                    
                    // If monthly is disabled, try to find any valid price
                    if ($monthly == '-1.00') {
                        $monthly = (isset($priceData['annually']) && $priceData['annually'] > 0) ? number_format($priceData['annually']/12, 2) : '0.00';
                    }

                    $pricing[$currCode] = [
                        'monthly' => $monthly,
                        'annually' => $priceData['annually'] ?? '0.00',
                    ];
                }
            }

            // Clean description: convert HTML lists/breaks to array
            $rawDesc = $p['description'] ?? '';
            $rawDesc = str_replace(["\r\n", "\r", "\n"], "\n", $rawDesc);
            $rawDesc = str_replace(['<br>', '<br/>', '<br />'], "\n", $rawDesc);
            $rawDesc = strip_tags($rawDesc);
            $specs = array_filter(explode("\n", $rawDesc), function($s) { return trim($s) !== ''; });
            $specs = array_values(array_map('trim', $specs));

            $formattedProducts[] = [
                'pid' => $p['pid'],
                'name' => $p['name'],
                'description' => $p['description'] ?? '',
                'specs' => $specs,
                'pricing' => $pricing,
                'isFeatured' => (strpos(strtolower($p['name']), 'popular') !== false || strpos(strtolower($p['name']), 'business') !== false || strpos(strtolower($p['name']), '10g') !== false),
            ];
        }
        return $formattedProducts;
    }
    return false;
}

/**
 * Fetches all product groups from WHMCS API.
 * 
 * @return array Returns an array of groups.
 */
function getWhmcsGroups() {
    $data = callWhmcsApi('GetProductGroups');

    // Hardcoded fallback in case API is restricted
    $fallbackGroups = [
        ['gid' => 1, 'name' => 'BDIX Budget Shared Hosting', 'slug' => 'bdix-budget-shared-hosting', 'icon' => 'server'],
        ['gid' => 2, 'name' => 'BDIX SSD KVM VPS', 'slug' => 'bdix-ssd-kvm-vps', 'icon' => 'cloud'],
        ['gid' => 3, 'name' => 'BDIX Student Shared Hosting', 'slug' => 'bdix-student-shared-hosting', 'icon' => 'book'],
        ['gid' => 5, 'name' => 'BDIX NVME KVM VPS', 'slug' => 'bdix-nvme-kvm-vps', 'icon' => 'zap'],
        ['gid' => 6, 'name' => 'BDIX Managed VPS', 'slug' => 'bdix-managed-vps', 'icon' => 'shield'],
        ['gid' => 9, 'name' => 'BDIX Reseller Hosting', 'slug' => 'bdix-reseller-hosting', 'icon' => 'users'],
        ['gid' => 8, 'name' => 'BDIX Dedicated Server', 'slug' => 'bdix-dedicated-server', 'icon' => 'database'],
        ['gid' => 11, 'name' => 'USA AMD EPYC VPS', 'slug' => 'usa-amd-epyc-vps', 'icon' => 'cpu'],
    ];

    if (isset($data['result']) && $data['result'] === 'success') {
        return $data['groups']['group'] ?? $fallbackGroups;
    }

    return $fallbackGroups;
}

/**
 * Fetches TLD pricing from WHMCS API.
 * 
 * @return array|bool Returns an array of TLD pricing or false on failure.
 */
function getWhmcsTldPricing() {
    $bdtData = callWhmcsApi('GetTLDPricing', ['currencyid' => 1]); // BDT
    $usdData = callWhmcsApi('GetTLDPricing', ['currencyid' => 2]); // USD

    if (isset($bdtData['result']) && $bdtData['result'] === 'success') {
        $bdtPricing = $bdtData['pricing'] ?? [];
        $usdPricing = (isset($usdData['result']) && $usdData['result'] === 'success') ? ($usdData['pricing'] ?? []) : [];
        
        $formatted = [];

        foreach ($bdtPricing as $tld => $p) {
            // Handle different price formats (sometimes it's a nested array, sometimes just a value)
            $getVal = function($arr, $key) {
                if (!isset($arr[$key])) return '0.00';
                $val = $arr[$key];
                if (is_array($val)) return $val['1'] ?? ($val[1] ?? '0.00');
                return $val;
            };

            $reg = $getVal($p, 'register');
            $renew = $getVal($p, 'renew');
            $transfer = $getVal($p, 'transfer');

            // USD fallbacks
            $usdReg = isset($usdPricing[$tld]) ? $getVal($usdPricing[$tld], 'register') : round((float)$reg / 100, 2);
            $usdRenew = isset($usdPricing[$tld]) ? $getVal($usdPricing[$tld], 'renew') : round((float)$renew / 100, 2);
            $usdTransfer = isset($usdPricing[$tld]) ? $getVal($usdPricing[$tld], 'transfer') : round((float)$transfer / 100, 2);

            $tldDisplay = (strpos($tld, '.') === 0) ? $tld : '.' . $tld;

            $formatted[] = [
                'tld' => $tldDisplay,
                'register' => $reg,
                'transfer' => $transfer,
                'renew' => $renew,
                'minyears' => $p['minyears'] ?? '1',
                'usd_register' => $usdReg,
                'usd_transfer' => $usdTransfer,
                'usd_renew' => $usdRenew,
            ];
        }
        return $formatted;
    }
    return false;
}

/**
 * Renders a standardized pricing card.
 * 
 * @param array $product The product data from getWhmcsProducts.
 * @param int $index The index of the product in the grid.
 * @return string The generated HTML.
 */
function render_pricing_card($product, $index = 0) {
    $isFeatured = $product['isFeatured'];
    $pricing = $product['pricing']['BDT'] ?? ['monthly' => '0', 'annually' => '0'];
    $usdPricing = $product['pricing']['USD'] ?? ['monthly' => '0', 'annually' => '0'];
    $specs = $product['specs'] ?? [];
    
    // Default specs if none provided
    if (empty($specs)) {
        $specs = ['Optimized BDIX Network', 'Full NVMe SSD Storage', 'Unlimited Bandwidth', 'Free SSL Certificates', 'LiteSpeed + LSCache', '24/7 Priority Support', 'Free Daily Backups'];
    }

    ob_start();
    ?>
    <div class="bg-white rounded-[2rem] border border-gray-100 flex flex-col relative transition-all duration-300 shadow-[0_5px_25px_-5px_rgba(0,0,0,0.08)] <?php echo $isFeatured ? 'ring-2 ring-blue-600' : ''; ?>">
        
        <?php if ($isFeatured): ?>
            <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-blue-600 text-white text-[9px] font-bold px-4 py-1 rounded-full uppercase tracking-widest shadow-md">
                Most Popular
            </div>
        <?php endif; ?>

        <!-- Header -->
        <div class="p-7 text-center">
            <h3 class="text-lg font-bold text-[#111A4C] mb-4"><?php echo htmlspecialchars($product['name']); ?></h3>
            <div class="flex flex-col items-center justify-center">
                <div class="flex items-baseline">
                    <span class="text-[#111A4C] text-4xl font-black">
                        <span class="currency-symbol text-xl font-bold">৳</span><span class="price-value" data-bdt="<?php echo $pricing['monthly']; ?>" data-usd="<?php echo $usdPricing['monthly']; ?>"><?php echo number_format((float)$pricing['monthly']); ?></span>
                    </span>
                    <span class="text-[14px] font-semibold text-gray-600 ml-1  ">/Month</span>
                </div>
                <!-- Yearly Price Display -->
                <?php if ((float)$pricing['annually'] > 0): ?>
                <div class="mt-2 text-[14px] font-semibold text-gray-600 ml-10">
                    <span class="currency-symbol">৳</span><span class="yearly-price-value" data-bdt-yearly="<?php echo $pricing['annually']; ?>" data-usd-yearly="<?php echo $usdPricing['annually']; ?>"><?php echo number_format((float)$pricing['annually']); ?></span> /Year
                </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Features -->
        <div class="px-7 pb-7 flex flex-col flex-grow">
            <div class="w-full h-px bg-gray-50 mb-6"></div>
            
            <ul class="space-y-3 mb-8 flex-grow">
                <?php foreach ($specs as $spec): ?>
                    <li class="flex items-start text-gray-600 text-[13px]">
                        <svg class="w-4 h-4 text-green-500 mr-2.5 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg> 
                        <span class="leading-snug font-medium"><?php echo htmlspecialchars($spec); ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>

            <a href="<?php echo WHMCS_URL; ?>/cart.php?a=add&pid=<?php echo $product['pid']; ?>" data-pid="<?php echo $product['pid']; ?>" class="order-button w-full text-center py-3.5 bg-[#111A4C] hover:bg-blue-700 text-white font-bold rounded-2xl text-sm transition-all duration-300 shadow-lg shadow-blue-900/5">
                Order Now
            </a>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
