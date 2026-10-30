<?php
require_once __DIR__ . '/config.php';

$data = callWhmcsApi('GetProductGroups');

if (isset($data['groups']['group'])) {
    foreach ($data['groups']['group'] as $group) {
        echo "ID: " . $group['gid'] . " - Name: " . $group['name'] . "\n";
    }
} else {
    echo "Failed to fetch groups: " . json_encode($data);
}
