<?php
session_start(); 

if (file_exists('../app/helpers.php')) require_once '../app/helpers.php';
if (file_exists('../app/config/database.php')) require_once '../app/config/database.php';

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$scriptDir  = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$requestUri = str_replace('\\', '/', $requestUri);

if ($scriptDir !== '/' && strpos($requestUri, $scriptDir) === 0) {
    $path = substr($requestUri, strlen($scriptDir));
} else {
    $path = $requestUri;
}
$path = trim($path, '/');

$routes = require '../app/routes/web.php'; 

if (empty($path)) {
    $page = 'home';
} elseif (array_key_exists('/' . $path, $routes)) {
    $page = $routes['/' . $path];
} else {
    $cleanPath = $path;
    $pathUnderscore = str_replace('-', '_', $cleanPath);

    if (file_exists("../app/views/{$cleanPath}.php")) {
        $page = $cleanPath;
    } elseif (file_exists("../app/views/{$pathUnderscore}.php")) {
        $page = $pathUnderscore;
    } else {
        http_response_code(404);
        $page = '404'; 
    }
}

if (file_exists('../app/layouts/main.php')) {
    require '../app/layouts/main.php';
} else {
    die("Error: File layout main.php tidak ditemukan!");
}
?>