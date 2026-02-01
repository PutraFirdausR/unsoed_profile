<?php
if (file_exists('../app/helpers.php')) {
    require_once '../app/helpers.php';
}

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$scriptDir  = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$requestUri = str_replace('\\', '/', $requestUri);

if ($scriptDir !== '/' && strpos($requestUri, $scriptDir) === 0) {
    $path = substr($requestUri, strlen($scriptDir));
} else {
    $path = $requestUri;
}

$path = trim($path, '/');

if (empty($path)) {
    $page = 'home';
} else {
    
    $cleanPath = $path;
    $pathUnderscore = str_replace('-', '_', $cleanPath);

    if (file_exists("../app/views/{$cleanPath}.php")) {
        $page = $cleanPath;
    } elseif (file_exists("../app/views/{$pathUnderscore}.php")) {
        $page = $pathUnderscore;
    } else {
        http_response_code(404);
        echo "<!DOCTYPE html>
        <html lang='id'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>404 - Halaman Tidak Ditemukan</title>
            <link rel='stylesheet' href='/unsoed_profile/public/assets/css/output.css'>
        </head>
        <body class='bg-gray-50'>
            <div class='min-h-screen flex items-center justify-center'>
                <div class='text-center p-8 bg-white rounded-xl shadow-lg max-w-md'>
                    <h1 class='text-6xl font-bold text-[#002b54] mb-4'>404</h1>
                    <h2 class='text-2xl font-semibold text-gray-700 mb-2'>Halaman Tidak Ditemukan</h2>
                    <p class='text-gray-500 mb-6'>Halaman yang Anda cari tidak ada atau telah dipindahkan.</p>
                    <p class='text-xs text-gray-400 mb-6'>Path: /{$path}</p>
                    <a href='/unsoed_profile/' class='inline-block px-6 py-3 bg-[#002b54] text-white rounded-lg hover:bg-[#004080] transition'>
                        ← Kembali ke Beranda
                    </a>
                </div>
            </div>
        </body>
        </html>";
        exit;
    }
}

if (file_exists('../app/layouts/main.php')) {
    require '../app/layouts/main.php';
} elseif (file_exists('../app/main.php')) {
    require '../app/main.php';
} else {
    die("Error: File main.php tidak ditemukan!");
}