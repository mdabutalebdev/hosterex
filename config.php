<?php
// Disable displaying errors on UI for production
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
ini_set('log_errors', 1);

require_once __DIR__ . '/includes/functions.php';

/**
 * Simple .env loader for Hosterex
 */
function loadEnv($path) {
    if (!file_exists($path)) {
        return;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;

        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);

        if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
            putenv(sprintf('%s=%s', $name, $value));
            $_ENV[$name] = $value;
            $_SERVER[$name] = $value;
        }
    }
}

// Load .env
loadEnv(__DIR__ . '/.env');

// Configuration Constants
define('APP_NAME', 'Hosterex');
define('PRIMARY_COLOR', '#0069FF');
define('WHMCS_URL', getenv('WHMCS_BASE_URL') ?: 'https://my.hosterex.com');

// Define Base URL for relative paths (Fixed for all pages)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

// Get the directory of the config file relative to the document root
$doc_root = str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT']));
$current_dir = str_replace('\\', '/', realpath(__DIR__));
$base_dir = str_replace($doc_root, '', $current_dir);
$base_dir = '/' . trim($base_dir, '/') . '/';
if ($base_dir === '//') $base_dir = '/';

define('BASE_URL', $protocol . "://" . $host . $base_dir);

// Global styling configuration (Tailwind Customization)
$tailwind_config = "
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#0069FF',
                    brand: {
                        dark: '#0d1b2a',
                        navy: '#111a4c',
                        blue: '#0069FF',
                        light: '#f8fafc'
                    }
                },
                borderRadius: {
                    '40': '40px',
                }
            }
        }
    }
";
