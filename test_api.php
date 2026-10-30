<?php
require_once __DIR__ . '/config.php';
$data = callWhmcsApi('GetTLDPricing', ['currencyid' => 1]);
header('Content-Type: application/json');
echo json_encode($data, JSON_PRETTY_PRINT);
?>
