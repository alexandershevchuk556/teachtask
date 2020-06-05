<?php
require_once 'vendor/autoload.php';

use Classes\Router;

$page = Router::getRout($_SERVER['REQUEST_URI']);
