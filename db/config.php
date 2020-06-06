<?php

$dbname = 'techtask_database';
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$dbport = 3306;

$stdderr = fopen('php://stderr', 'w');

$dsn = "mysql:host={$dbhost};dbname={$dbname}";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    fwrite($stdderr, "Connection successful\n"); 
    return $pdo;
} catch(PDOException $e) {
    fwrite($stdderr, "Connection failed " . $e->getMessage() . "\n"); 
}
