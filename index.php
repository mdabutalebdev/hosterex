<?php 
/**
 * Home Page
 * 
 * This page assembles the homepage components.
 */
require_once __DIR__ . '/config.php';
include __DIR__ . '/includes/header.php'; 

// Include Home Page Components
include __DIR__ . '/components/hero.php';
include __DIR__ . '/components/domain-search.php';
include __DIR__ . '/components/pricing.php';
include __DIR__ . '/components/services.php';
include __DIR__ . '/components/why-hosterex.php';
include __DIR__ . '/components/features.php';
include __DIR__ . '/components/faq.php';

include __DIR__ . '/includes/footer.php'; 
?>
