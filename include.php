<?php

session_start();
require_once 'db/config.php';
require_once 'vendor/autoload.php';

use Classes\Router;

$page = Router::getRout($_SERVER['REQUEST_URI']);
if (!file_exists($page)) {
    $page = 'error404.php';
} 