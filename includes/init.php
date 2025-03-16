<?php
// Definiere Basis-URL und Pfade
if (!defined('BASE_PATH')) {
    define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));
}

// Prüfe ob wir im Unterverzeichnis sind und passe den relativen Pfad an
$current_dir = dirname($_SERVER['PHP_SELF']);
$depth = substr_count($current_dir, '/');
$relative_path = str_repeat('../', max(0, $depth - 1));

// Konfiguration einbinden
require_once BASE_PATH . '/includes/config.php';
