<?php
require_once __DIR__ . '/config.php';
$groups = getWhmcsGroups();
header('Content-Type: application/json');
echo json_encode($groups, JSON_PRETTY_PRINT);
?>
