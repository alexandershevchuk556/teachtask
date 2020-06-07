<?php

require_once '../../db/config.php';

$email = htmlspecialchars($_POST['email']);
$pass = htmlspecialchars($_POST['pass']);

$stderr = fopen('php://stderr', 'w');
fwrite($stdderr, $email . "\n");

$sqlselectuser = "SELECT * FROM users WHERE email = :email;";

$stmtselectuser = $pdo->prepare($sqlselectuser);

$stmtselectuser->execute(['email' => $email]);
$user = $stmtselectuser->fetch();



if (empty($user)) {
    echo "No users found";
} else {
    if ($user['password'] != $pass) {
       
        echo "Wrong password";
    } else {
        session_start();
        $_SESSION['user'] = $user;
        echo "Hello {$_SESSION['user']['name']}!";
    }
}