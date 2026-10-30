<?php require_once __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME; ?> - Premium Hosting Solutions</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        <?php echo $tailwind_config; ?>
    </script>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .mega-menu { 
            display: none; 
            transform: translateY(10px);
            transition: all 0.3s ease;
        }
        .mega-menu.block {
            display: block !important;
            transform: translateY(0);
        }
        
        /* Dropdown arrow rotation */
        .dropdown-active svg {
            transform: rotate(180deg);
        }

        /* Fixed Skeleton Styles - High Visibility & Stability */
        .skeleton {
            background: #e5e7eb;
            background: linear-gradient(90deg, #e5e7eb 25%, #d1d5db 50%, #e5e7eb 75%);
            background-size: 200% 100%;
            animation: skeleton-loading 1.2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes skeleton-loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        #skeleton-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            z-index: 9999;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }

        .component-wrapper {
            display: grid;
            grid-template-columns: 100%;
        }

        .skeleton-container, .real-content {
            grid-column: 1;
            grid-row: 1;
        }

        #main-wrapper {
            padding-top: 100px;
        }

        .real-content {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease-in-out;
            z-index: 1;
        }

        .skeleton-container {
            z-index: 2;
            transition: opacity 0.4s ease-in-out;
        }

        .content-visible {
            opacity: 1 !important;
            visibility: visible !important;
        }

        .skeleton-fade-out {
            opacity: 0 !important;
        }

        .content-hidden { display: none !important; }

        /* Prevent Horizontal Scroll */
        html, body {
            max-width: 100%;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
        }

        body.loading-active {
            overflow: hidden;
        }

        /* Marquee Animation */
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            animation: marquee 40s linear infinite;
        }

        /* Mobile Menu Styles */
        #mobile-menu {
            left: 0;
            transform: translateX(-100%);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        #mobile-menu.active {
            transform: translateX(0);
        }
        #mobile-overlay {
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        #mobile-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        .mobile-submenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        .mobile-submenu.active {
            max-height: 800px;
            transition: max-height 0.5s ease-in;
        }
        .rotate-icon {
            transition: transform 0.3s ease;
        }
        .rotate-icon.active {
            transform: rotate(180deg);
        }

        /* Tawk.to Mobile Optimization */
        @media (max-width: 768px) {
            /* Remove transform from fixed Tawk.to container to avoid layout issues */
            #tawk-chat-container, .tawk-min-container {
                /* transform: scale(0.85); removed */
            }
            #main-header .container, .bg-[#0c133a] .container, .skeleton-container .container {
                padding-left: 2.5rem !important;
                padding-right: 2.5rem !important;
            }
            html, body {
                overflow-x: hidden !important;
                width: 100%;
                max-width: 100%;
                position: relative;
            }
            /* Hide Tawk.to Attention Grabber (popups) on mobile */
            .tawk-attention-grabber, #tawk-attention-grabber {
                display: none !important;
                visibility: hidden !important;
            }
            /* Force Tawk.to position to the right edge */
            #tawk-chat-container, .tawk-min-container, .tawk-bubble-container {
                right: 5px !important;
                left: auto !important;
            }
        }

        @media (max-width: 1024px) {
            #main-wrapper {
                padding-top: 100px; 
            }
        }
    </style>
</head>
<body class="bg-white text-gray-900 loading-active">

<!-- Skeletons will be handled per component -->

<!-- Real Content -->
<!-- Fixed Header Container -->
<div class="fixed top-0 left-0 w-full z-[100] component-wrapper">
    <!-- Header Skeleton -->
    <div class="skeleton-container w-full bg-white/90 backdrop-blur-md">
        <!-- Promo Bar Skeleton -->
        <div class="w-full h-10 bg-[#0c133a] flex items-center justify-center">
            <div class="w-64 h-3 skeleton rounded-full opacity-30"></div>
        </div>
        <!-- Navbar Skeleton -->
        <div class="container mx-auto px-10 h-20 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 skeleton rounded-full opacity-50"></div>
                <div class="w-28 h-6 skeleton rounded-md opacity-30"></div>
            </div>
            <div class="hidden xl:flex space-x-8">
                <div class="w-16 h-3 skeleton rounded-full opacity-20"></div>
                <div class="w-16 h-3 skeleton rounded-full opacity-20"></div>
                <div class="w-16 h-3 skeleton rounded-full opacity-20"></div>
            </div>
            <div class="w-32 h-10 skeleton rounded-xl opacity-40"></div>
        </div>
    </div>

    <!-- Real Header Content -->
    <?php 
    // Get the current path without query strings
    $request_uri = strtok($_SERVER['REQUEST_URI'], '?');
    $base_path = rtrim(parse_url(BASE_URL, PHP_URL_PATH), '/');
    
    // Calculate relative path more robustly
    $relative_path = $request_uri;
    if (!empty($base_path) && strpos($request_uri, $base_path) === 0) {
        $relative_path = substr($request_uri, strlen($base_path));
    }
    $relative_path = '/' . ltrim($relative_path, '/');

    function get_active_class($target_path, $is_button = false) {
        global $relative_path;
        $target_path = '/' . ltrim($target_path, '/');
        
        // Exact match for home or specific pages
        $is_active = ($relative_path === $target_path);
        
        // Parent match for submenus (e.g., /domains/ matching /domains/pricing/)
        if (!$is_active && $target_path !== '/') {
            $is_active = (strpos($relative_path, $target_path) === 0);
        }

        if ($is_button) return $is_active ? 'text-primary' : 'text-[#333333]';
        return $is_active ? 'text-primary font-bold' : 'text-[#333333] font-medium';
    }
    ?>
    <div class="real-content w-full">
        <!-- Promo Bar Component -->
        <?php include __DIR__ . '/../components/promo-bar.php'; ?>

        <?php
        function get_hosting_icon($name, $classes = "w-5 h-5 transition-colors") {
            // Default icon
            $icon = '<svg class="'.$classes.'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2-2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2"></path></svg>';
            
            if (stripos($name, 'Budget Shared') !== false) {
                $icon = '<svg class="'.$classes.'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>';
            } elseif (stripos($name, 'SSD KVM') !== false) {
                $icon = '<svg class="'.$classes.'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>';
            } elseif (stripos($name, 'Student') !== false) {
                $icon = '<svg class="'.$classes.'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18 18.247 18.477 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>';
            } elseif (stripos($name, 'NVME') !== false) {
                $icon = '<svg class="'.$classes.'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>';
            } elseif (stripos($name, 'Managed') !== false) {
                $icon = '<svg class="'.$classes.'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>';
            } elseif (stripos($name, 'Dedicated') !== false) {
                $icon = '<svg class="'.$classes.'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2-2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2M5 12a2 2 0 00-2-2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2"></path></svg>';
            } elseif (stripos($name, 'USA') !== false) {
                $icon = '<svg class="'.$classes.'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
            }
            return $icon;
        }
        ?>

        <header id="main-header" class="bg-white/90 backdrop-blur-md border-b border-gray-100 transition-all duration-300 shadow-sm">
            <div class="container mx-auto px-4 lg:px-10">
                <div class="flex items-center h-16 lg:h-20">
                    <!-- Logo area (Left) -->
                    <div class="flex-shrink-0">
                        <a href="<?php echo BASE_URL; ?>" class="flex items-center group">
                            <img src="<?php echo BASE_URL; ?>images/whitout bd logo.png" alt="Hosterex Logo" class="h-8 lg:h-12 w-auto object-contain transition-transform group-hover:scale-105">
                        </a>
                    </div>

                    <!-- Main Menu (Center on Desktop) -->
                    <nav class="hidden xl:flex space-x-6 items-center mx-auto">
                        <a href="<?php echo BASE_URL; ?>" class="<?php echo get_active_class('/'); ?> hover:text-primary text-sm transition-colors">Home</a>
                        
                        <!-- Domains Menu -->
                        <div class="relative group">
                            <button class="flex items-center <?php echo get_active_class('/domains/', true); ?> hover:text-primary font-medium text-sm py-7 transition-colors">
                                Domains
                                <svg class="ml-1 w-3.5 h-3.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            <div class="mega-menu absolute left-1/2 -translate-x-1/2 mt-0 w-[550px] bg-white shadow-2xl rounded-2xl border border-gray-100 overflow-hidden z-[110]">
                                <div class="p-8 grid grid-cols-2 gap-6">
                                    <a href="/domains/register/" class="group/item flex items-start p-3 rounded-xl hover:bg-blue-50/50 transition-all">
                                        <div class="w-12 h-12 bg-gray-50 group-hover/item:bg-white rounded-xl flex items-center justify-center flex-shrink-0 transition-colors shadow-sm">
                                            <svg class="w-6 h-6 text-gray-700 group-hover/item:text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-sm font-bold text-brand-dark group-hover/item:text-primary">Register Domain</h4>
                                            <p class="text-[11px] text-gray-500 mt-1">Check availability and buy now</p>
                                        </div>
                                    </a>
                                    <a href="/domains/pricing/" class="group/item flex items-start p-3 rounded-xl hover:bg-blue-50/50 transition-all">
                                        <div class="w-12 h-12 bg-gray-50 group-hover/item:bg-white rounded-xl flex items-center justify-center flex-shrink-0 transition-colors shadow-sm">
                                            <svg class="w-6 h-6 text-gray-700 group-hover/item:text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-sm font-bold text-brand-dark group-hover/item:text-primary">Domain Pricing</h4>
                                            <p class="text-[11px] text-gray-500 mt-1">Affordable rates for all TLDs</p>
                                        </div>
                                    </a>
                                    <a href="/domains/transfer/" class="group/item flex items-start p-3 rounded-xl hover:bg-blue-50/50 transition-all">
                                        <div class="w-12 h-12 bg-gray-50 group-hover/item:bg-white rounded-xl flex items-center justify-center flex-shrink-0 transition-colors shadow-sm">
                                            <svg class="w-6 h-6 text-gray-700 group-hover/item:text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-sm font-bold text-brand-dark group-hover/item:text-primary">Transfer Domains</h4>
                                            <p class="text-[11px] text-gray-500 mt-1">Move your domain effortlessly</p>
                                        </div>
                                    </a>
                                    <a href="/domains/bulk-transfer/" class="group/item flex items-start p-3 rounded-xl hover:bg-blue-50/50 transition-all">
                                        <div class="w-12 h-12 bg-gray-50 group-hover/item:bg-white rounded-xl flex items-center justify-center flex-shrink-0 transition-colors shadow-sm">
                                            <svg class="w-6 h-6 text-gray-700 group-hover/item:text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-sm font-bold text-brand-dark group-hover/item:text-primary">Bulk Transfer</h4>
                                            <p class="text-[11px] text-gray-500 mt-1">Scale your portfolio management</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Hosting Menu -->
                        <div class="relative group">
                            <button class="flex items-center <?php echo get_active_class('/hosting/', true); ?> hover:text-primary font-medium text-sm py-7 transition-colors">
                                Hosting
                                <svg class="ml-1 w-3.5 h-3.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            <div class="mega-menu absolute left-1/2 -translate-x-[65%] mt-0 w-[900px] bg-white shadow-2xl rounded-2xl border border-gray-100 overflow-hidden z-[110]">
                                <div class="flex h-full">
                                    <div class="w-[65%] p-10 grid grid-cols-2 gap-x-8 gap-y-6 overflow-y-auto max-h-[500px]">
                                        <?php 
                                        $hostingGroups = [
                                            ['name' => 'BDIX Budget Shared Hosting', 'url' => '/hosting/bdix-budget-shared/'],
                                            ['name' => 'BDIX SSD KVM VPS', 'url' => '/hosting/bdix-budget-vps/'],
                                            ['name' => 'BDIX Student Shared Hosting', 'url' => '/hosting/bdix-student-shared/'],
                                            ['name' => 'BDIX NVME KVM VPS', 'url' => '/hosting/bdix-nvme-vps/'],
                                            ['name' => 'BDIX Managed VPS', 'url' => '/hosting/bdix-managed-vps/'],
                                            ['name' => 'BDIX Dedicated Server', 'url' => '/hosting/dedicated-servers/'],
                                            ['name' => 'USA AMD EPYC VPS', 'url' => '/hosting/usa-budget-shared/'],
                                        ];
                                        foreach ($hostingGroups as $group): 
                                            $name = $group['name'];
                                            $url = $group['url'];
                                            
                                            // Using helper function for professional icons
                                            $icon = get_hosting_icon($name, "w-5 h-5 text-gray-500 group-hover/item:text-primary transition-colors");
                                        ?>
                                        <a href="<?php echo BASE_URL; ?><?php echo ltrim($url, '/'); ?>" class="group/item flex items-center transition-all">
                                            <div class="w-10 h-10 bg-gray-50 group-hover/item:bg-blue-50 rounded-xl flex items-center justify-center flex-shrink-0 transition-colors">
                                                <?php echo $icon; ?>
                                            </div>
                                            <div class="ml-4">
                                                <h4 class="text-sm font-medium text-brand-dark group-hover/item:text-primary"><?php echo $name; ?></h4>
                                            </div>
                                        </a>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="w-[35%] bg-gray-50/50 p-8 border-l border-gray-100 flex flex-col justify-between">
                                        <div>
                                            <div class="flex items-center space-x-3 mb-4">
                                                <div class="w-10 h-10 bg-blue-100 text-primary rounded-xl flex items-center justify-center">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                </div>
                                                <h3 class="text-sm font-bold text-brand-dark">Expert Help</h3>
                                            </div>
                                            <p class="text-xs text-gray-500 mb-6 leading-relaxed">Confused? Get direct assistance from our experts via WhatsApp.</p>
                                            
                                            <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm mb-6">
                                                <div class="flex items-center space-x-3 mb-1">
                                                    <div class="w-8 h-8 bg-green-100 text-green-600 rounded-lg flex items-center justify-center">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.438 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                                    </div>
                                                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Direct WhatsApp</span>
                                                </div>
                                                <a href="https://wa.me/8801622243011" target="_blank" class="text-lg font-extrabold text-brand-dark hover:text-primary transition-colors">+880 1622-243011</a>
                                            </div>
                                        </div>
                                        
                                        <a href="https://wa.me/8801622243011" target="_blank" class="w-full bg-primary hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-2xl flex items-center justify-center space-x-3 shadow-xl shadow-blue-100 transition-all transform hover:-translate-y-1">
                                            <span>Chat with Us</span>
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reseller Menu -->
                        <div class="relative group">
                            <button class="flex items-center <?php echo get_active_class('/reseller/', true); ?> hover:text-primary font-medium text-sm py-7 transition-colors">
                                Reseller
                                <svg class="ml-1 w-3.5 h-3.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            <div class="mega-menu absolute left-0 mt-0 w-[300px] bg-white shadow-2xl rounded-2xl border border-gray-100 overflow-hidden z-[110]">
                                <div class="p-6">
                                    <a href="/hosting/reseller-hosting/" class="group/item flex items-start p-3 rounded-xl hover:bg-blue-50/50 transition-all">
                                        <div class="ml-4">
                                            <h4 class="text-sm font-bold text-brand-dark group-hover/item:text-primary">BDIX Reseller Hosting</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <a href="<?php echo BASE_URL; ?>services/" class="<?php echo get_active_class('/services/'); ?> hover:text-primary text-sm transition-colors">Services</a>
                        <a href="<?php echo BASE_URL; ?>about/" class="<?php echo get_active_class('/about/'); ?> hover:text-primary text-sm transition-colors">About Us</a>
                        <a href="<?php echo BASE_URL; ?>contact/" class="<?php echo get_active_class('/contact/'); ?> hover:text-primary text-sm transition-colors">Contact Us</a>
                    </nav>

                    <!-- Actions (Right) -->
                    <div class="flex items-center space-x-2 sm:space-x-6 ml-auto">
                        <!-- Currency Switcher -->
                        <div class="relative currency-dropdown hidden md:block">
                            <button id="currency-toggle" class="flex items-center space-x-2 text-brand-dark hover:text-primary font-bold text-xs bg-white px-4 py-2.5 rounded-xl border border-gray-100 shadow-sm transition-all hover:border-primary">
                                <span id="current-currency-text">BDT</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            <div id="currency-menu" class="absolute right-0 mt-2 w-32 bg-white shadow-2xl rounded-2xl border border-gray-100 py-2 hidden z-[120] overflow-hidden">
                                <button onclick="switchCurrency('BDT')" class="currency-option w-full text-left px-4 py-3 text-xs font-bold text-gray-700 hover:bg-blue-50 hover:text-primary">BDT ৳</button>
                                <button onclick="switchCurrency('USD')" class="currency-option w-full text-left px-4 py-3 text-xs font-bold text-gray-700 hover:bg-blue-50 hover:text-primary">USD $</button>
                            </div>
                        </div>

                        <!-- Client Area Button (Desktop Only) -->
                        <div class="hidden sm:block">
                            <?php echo render_button("Client Area", WHMCS_URL . "/clientarea.php", "outline", "", "", "sm"); ?>
                        </div>

                        <!-- Mobile Toggle (Right on Mobile) -->
                        <button id="mobile-toggle" class="xl:hidden text-brand-dark p-2 hover:bg-gray-100 rounded-lg transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>

    <!-- Mobile Menu Drawer (Left Side) -->
    <div id="mobile-overlay" class="fixed inset-0 bg-brand-dark/50 backdrop-blur-sm z-[200] xl:hidden"></div>
    <div id="mobile-menu" class="fixed top-0 left-0 h-full w-[300px] bg-white z-[201] shadow-2xl xl:hidden flex flex-col">
        <div class="p-6 border-b border-gray-100 flex items-center justify-between bg-white">
            <img src="<?php echo BASE_URL; ?>images/whitout bd logo.png" alt="Hosterex Logo" class="h-10 w-auto">
            <button id="mobile-close" class="text-gray-400 hover:text-brand-dark transition-colors p-2 rounded-lg hover:bg-gray-50">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        <div class="flex-1 overflow-y-auto p-6 bg-white">
            <nav class="space-y-2">
                <a href="<?php echo BASE_URL; ?>" class="flex items-center p-3 text-base font-bold text-brand-dark hover:bg-blue-50 hover:text-primary rounded-xl transition-all">
                    <svg class="w-5 h-5 mr-3 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    Home
                </a>
                
                <!-- Domains Mobile Accordion -->
                <div class="mobile-nav-item">
                    <button class="mobile-accordion-btn flex items-center justify-between w-full p-3 text-base font-bold text-brand-dark hover:bg-blue-50 hover:text-primary rounded-xl transition-all">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-1.343 3-3s-1.343-3-3-3m0 6c-1.657 0-3-1.343-3-3s1.343-3 3-3m0 0V4m0 16v-4"></path></svg>
                            Domains
                        </div>
                        <svg class="rotate-icon w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="mobile-submenu ml-8 space-y-2">
                        <a href="/domains/register/" class="block py-2 text-sm font-semibold text-gray-500 hover:text-primary transition-colors">Register Domain</a>
                        <a href="/domains/pricing/" class="block py-2 text-sm font-semibold text-gray-500 hover:text-primary transition-colors">Domain Pricing</a>
                        <a href="/domains/transfer/" class="block py-2 text-sm font-semibold text-gray-500 hover:text-primary transition-colors">Transfer Domain</a>
                    </div>
                </div>

                <!-- Hosting Mobile Accordion -->
                <div class="mobile-nav-item">
                    <button class="mobile-accordion-btn flex items-center justify-between w-full p-3 text-base font-bold text-brand-dark hover:bg-blue-50 hover:text-primary rounded-xl transition-all">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            Hosting
                        </div>
                        <svg class="rotate-icon w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="mobile-submenu ml-8 space-y-2">
                        <?php 
                        $hostingGroups = [
                            ['name' => 'Budget Shared Hosting', 'url' => '/hosting/bdix-budget-shared/'],
                            ['name' => 'SSD KVM VPS', 'url' => '/hosting/bdix-budget-vps/'],
                            ['name' => 'Student Shared Hosting', 'url' => '/hosting/bdix-student-shared/'],
                            ['name' => 'NVME KVM VPS', 'url' => '/hosting/bdix-nvme-vps/'],
                            ['name' => 'Managed VPS', 'url' => '/hosting/bdix-managed-vps/'],
                            ['name' => 'Dedicated Server', 'url' => '/hosting/dedicated-servers/'],
                            ['name' => 'USA AMD EPYC VPS', 'url' => '/hosting/usa-budget-shared/'],
                        ];
                        foreach ($hostingGroups as $group): ?>
                            <a href="<?php echo $group['url']; ?>" class="flex items-center py-2 text-sm font-semibold text-gray-500 hover:text-primary transition-colors">
                                <div class="w-8 h-8 bg-gray-50 rounded-lg flex items-center justify-center mr-3 flex-shrink-0">
                                    <?php echo get_hosting_icon($group['name'], "w-4 h-4 opacity-70"); ?>
                                </div>
                                <?php echo $group['name']; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Reseller Mobile Accordion -->
                <div class="mobile-nav-item">
                    <button class="mobile-accordion-btn flex items-center justify-between w-full p-3 text-base font-bold text-brand-dark hover:bg-blue-50 hover:text-primary rounded-xl transition-all">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            Reseller
                        </div>
                        <svg class="rotate-icon w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="mobile-submenu ml-8 space-y-2">
                        <a href="/hosting/reseller-hosting/" class="block py-2 text-sm font-semibold text-gray-500 hover:text-primary transition-colors">BDIX Reseller Hosting</a>
                    </div>
                </div>

                <a href="/services/" class="flex items-center p-3 text-base font-bold text-brand-dark hover:bg-blue-50 hover:text-primary rounded-xl transition-all">
                    <svg class="w-5 h-5 mr-3 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13l-9 7-9-7V5a2 2 0 012-2h10a2 2 0 012 2v8z"></path></svg>
                    Services
                </a>
                <a href="/about/" class="flex items-center p-3 text-base font-bold text-brand-dark hover:bg-blue-50 hover:text-primary rounded-xl transition-all">
                    <svg class="w-5 h-5 mr-3 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    About Us
                </a>
                <a href="/contact/" class="flex items-center p-3 text-base font-bold text-brand-dark hover:bg-blue-50 hover:text-primary rounded-xl transition-all">
                    <svg class="w-5 h-5 mr-3 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Contact Us
                </a>
                
                <!-- Client Area Button for Mobile Menu -->
                <div class="pt-4 mt-4 border-t border-gray-100">
                    <a href="<?php echo WHMCS_URL; ?>/clientarea.php" class="flex items-center p-3 text-base font-bold text-white bg-primary hover:bg-blue-700 rounded-xl transition-all shadow-lg shadow-blue-100">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        Client Area
                    </a>
                </div>
            </nav>
        </div>
        <div class="p-6 border-t border-gray-100 bg-white">
            <p class="text-[10px] text-gray-400 text-center uppercase font-bold tracking-widest">Premium Hosting Solutions</p>
        </div>
    </div>
</div></div>

<div id="main-wrapper">

<script>
    // Currency Switching Logic
    let currentCurrency = localStorage.getItem('selectedCurrency') || 'BDT';

    function updatePrices() {
        const prices = document.querySelectorAll('.price-value');
        const yearlyPrices = document.querySelectorAll('.yearly-price-value');
        const symbols = document.querySelectorAll('.currency-symbol');
        const textElements = document.querySelectorAll('#current-currency-text');

        textElements.forEach(el => el.textContent = currentCurrency);

        prices.forEach(priceEl => {
            const val = currentCurrency === 'BDT' ? priceEl.getAttribute('data-bdt') : priceEl.getAttribute('data-usd');
            priceEl.textContent = Number(val).toLocaleString();
        });

        yearlyPrices.forEach(priceEl => {
            const val = currentCurrency === 'BDT' ? priceEl.getAttribute('data-bdt-yearly') : priceEl.getAttribute('data-usd-yearly');
            priceEl.textContent = Number(val).toLocaleString();
        });

        symbols.forEach(symbolEl => {
            symbolEl.textContent = currentCurrency === 'BDT' ? '৳' : '$';
        });
        
        // Update WHMCS Order Links
        const currencyId = currentCurrency === 'BDT' ? '1' : '2';
        document.querySelectorAll('.order-button').forEach(btn => {
            const pid = btn.getAttribute('data-pid');
            if (pid) {
                const whmcsUrl = '<?php echo WHMCS_URL; ?>';
                btn.setAttribute('href', `${whmcsUrl}/cart.php?a=add&pid=${pid}&currency=${currencyId}`);
            }
        });

        // Update WHMCS Forms
        document.querySelectorAll('.whmcs-currency-form').forEach(form => {
            let input = form.querySelector('input[name="currency"]');
            if (!input) {
                input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'currency';
                form.appendChild(input);
            }
            input.value = currencyId;
        });
    }

    function switchCurrency(currency) {
        currentCurrency = currency;
        localStorage.setItem('selectedCurrency', currency);
        updatePrices();
        
        // Mark active in UI
        document.querySelectorAll('.currency-option').forEach(opt => {
            if (opt.getAttribute('data-currency') === currency) {
                opt.classList.add('bg-blue-50', 'text-primary');
            } else {
                opt.classList.remove('bg-blue-50', 'text-primary');
            }
        });

        // Close menu
        const menu = document.getElementById('currency-menu');
        const toggle = document.getElementById('currency-toggle');
        if (menu) menu.classList.add('hidden');
        if (toggle) toggle.classList.remove('dropdown-active');
    }

    document.addEventListener("DOMContentLoaded", function() {
        // Initial price update
        updatePrices();

        // Submenu Click Logic
        const menuItems = document.querySelectorAll('.relative.group');
        
        menuItems.forEach(item => {
            const button = item.querySelector('button');
            const menu = item.querySelector('.mega-menu');
            
            if (button && menu) {
                button.addEventListener('click', (e) => {
                    e.stopPropagation();
                    const isVisible = menu.classList.contains('block');
                    
                    // Close all other menus
                    document.querySelectorAll('.mega-menu').forEach(m => {
                        if (m !== menu) {
                            m.classList.remove('block');
                            m.style.display = 'none';
                        }
                    });
                    document.querySelectorAll('.dropdown-active').forEach(d => {
                        if (d !== button) d.classList.remove('dropdown-active');
                    });
                    
                    // Toggle current
                    if (!isVisible) {
                        menu.classList.add('block');
                        menu.style.display = 'block';
                        button.classList.add('dropdown-active');
                    } else {
                        menu.classList.remove('block');
                        menu.style.display = 'none';
                        button.classList.remove('dropdown-active');
                    }
                });
            }
        });

        // Currency Switcher Logic
        const currencyToggle = document.getElementById('currency-toggle');
        const currencyMenu = document.getElementById('currency-menu');
        
        if (currencyToggle && currencyMenu) {
            currencyToggle.addEventListener('click', (e) => {
                e.stopPropagation();
                
                // Close other menus (mega menus)
                document.querySelectorAll('.mega-menu').forEach(m => {
                    m.classList.remove('block');
                    m.style.display = 'none';
                });
                document.querySelectorAll('.dropdown-active').forEach(b => {
                    if (b !== currencyToggle) b.classList.remove('dropdown-active');
                });

                const isHidden = currencyMenu.classList.contains('hidden');
                if (isHidden) {
                    currencyMenu.classList.remove('hidden');
                    currencyToggle.classList.add('dropdown-active');
                } else {
                    currencyMenu.classList.add('hidden');
                    currencyToggle.classList.remove('dropdown-active');
                }
            });
        }

        // Mobile Menu Logic
        const mobileToggle = document.getElementById('mobile-toggle');
        const mobileClose = document.getElementById('mobile-close');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileOverlay = document.getElementById('mobile-overlay');

        if (mobileToggle && mobileMenu && mobileOverlay) {
            const toggleMenu = (show) => {
                mobileMenu.classList.toggle('active', show);
                mobileOverlay.classList.toggle('active', show);
                document.body.style.overflow = show ? 'hidden' : '';
            };

            mobileToggle.addEventListener('click', () => toggleMenu(true));
            mobileClose.addEventListener('click', () => toggleMenu(false));
            mobileOverlay.addEventListener('click', () => toggleMenu(false));
        }

        // Mobile Accordion Logic
        document.querySelectorAll('.mobile-accordion-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const submenu = btn.nextElementSibling;
                const icon = btn.querySelector('.rotate-icon');
                
                // Toggle current
                submenu.classList.toggle('active');
                icon.classList.toggle('active');
                
                // Close others (Optional, for true accordion behavior)
                document.querySelectorAll('.mobile-submenu').forEach(other => {
                    if (other !== submenu) {
                        other.classList.remove('active');
                        other.previousElementSibling.querySelector('.rotate-icon').classList.remove('active');
                    }
                });
            });
        });

        // Close on click outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.relative.group') && !e.target.closest('.currency-dropdown')) {
                document.querySelectorAll('.mega-menu').forEach(m => {
                    m.classList.remove('block');
                    m.style.display = 'none';
                });
                document.getElementById('currency-menu')?.classList.add('hidden');
                document.querySelectorAll('.dropdown-active').forEach(b => {
                    b.classList.remove('dropdown-active');
                });
            }
        });
    });
</script>
