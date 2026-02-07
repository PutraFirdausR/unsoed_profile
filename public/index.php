<?php
session_start(); // Penting untuk fitur bahasa atau login nanti

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

// 3. Logika Routing (Membaca web.php)
$routes = require '../app/routes/web.php'; // Pastikan path ini benar

if (empty($path)) {
    $page = 'home';
} elseif (array_key_exists('/' . $path, $routes)) {
    // Cek apakah URL ada di daftar web.php
    $page = $routes['/' . $path];
} else {
    // Fallback: Cek file fisik jika tidak ada di web.php
    $cleanPath = $path;
    $pathUnderscore = str_replace('-', '_', $cleanPath);

    if (file_exists("../app/views/{$cleanPath}.php")) {
        $page = $cleanPath;
    } elseif (file_exists("../app/views/{$pathUnderscore}.php")) {
        $page = $pathUnderscore;
    } else {
        // Tampilkan 404
        http_response_code(404);
        require '../app/views/404.php'; // Bikin file 404.php biar rapi
        exit;
    }
}

// 4. Render Halaman Utama
if (file_exists('../app/layouts/main.php')) {
    require '../app/layouts/main.php';
} else {
    die("Error: File layout main.php tidak ditemukan!");
}