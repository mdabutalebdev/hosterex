<?php
require_once __DIR__ . '/../config.php';

header('Content-Type: application/json');

$gid = isset($_GET['gid']) ? (int)$_GET['gid'] : 1;
$products = getWhmcsProducts($gid);

if ($products) {
    echo json_encode([
        'success' => true,
        'products' => $products
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'No products found or API error.'
    ]);
}
