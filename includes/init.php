<?php
// Session start
session_start();

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 0);

// Base path detection
$root_path = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
$request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
$current_path = dirname($_SERVER['SCRIPT_FILENAME']);

// Calculate relative path to root
$path_from_root = str_replace($root_path, '', $current_path);
$path_depth = substr_count($path_from_root, '/');
$relative_path = $path_depth > 0 ? str_repeat('../', $path_depth) : './';

// Company data
$companyData = [
    'name' => 'Abschleppdienst Spuling',
    'phone' => '0123 456789', // Replace with actual phone number
    'phoneLink' => '0123456789', // Replace with actual phone number without spaces
    'email' => 'info@abschleppdienst-spuling.de', // Replace with actual email
    'address' => 'Musterstraße 123, 12345 Musterstadt' // Replace with actual address
];

// Database connection (if needed)
// $db = null;
// try {
//     $db = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $db->exec("SET NAMES 'utf8'");
// } catch (PDOException $e) {
//     // Log error instead of displaying
//     error_log('Database connection error: ' . $e->getMessage());
// }
?>
