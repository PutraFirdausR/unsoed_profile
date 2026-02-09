<?php
// FILE: public/index.php

session_start(); 

// 1. Muat Helper & Koneksi Database
if (file_exists('../app/helpers.php')) require_once '../app/helpers.php';
if (file_exists('../app/config/database.php')) require_once '../app/config/database.php';

// 2. Proses URL
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$scriptDir  = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$requestUri = str_replace('\\', '/', $requestUri);

if ($scriptDir !== '/' && strpos($requestUri, $scriptDir) === 0) {
    $path = substr($requestUri, strlen($scriptDir));
} else {
    $path = $requestUri;
}
$path = trim($path, '/');

// 3. Logika Routing
$routes = require '../app/routes/web.php'; 

if (empty($path)) {
    $page = 'home';
} elseif (array_key_exists('/' . $path, $routes)) {
    $page = $routes['/' . $path];
} else {
    // Fallback: Cek file fisik
    $cleanPath = $path;
    $pathUnderscore = str_replace('-', '_', $cleanPath);

    if (file_exists("../app/views/{$cleanPath}.php")) {
        $page = $cleanPath;
    } elseif (file_exists("../app/views/{$pathUnderscore}.php")) {
        $page = $pathUnderscore;
    } else {
        // --- PERUBAHAN DI SINI ---
        // Jangan langsung require dan exit.
        // Set http code, lalu set $page jadi '404' agar diload oleh main.php di bawah
        http_response_code(404);
        $page = '404'; 
    }
}

// 4. Render Halaman Utama
if (file_exists('../app/layouts/main.php')) {
    require '../app/layouts/main.php';
} else {
    die("Error: File layout main.php tidak ditemukan!");
}
?>