<?php

require_once '../../db/config.php';

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$pass = htmlspecialchars($_POST['pass']);

$sqlselect = "SELECT * FROM users;";
$sqlinsert = 'INSERT INTO users (name, email, password) VALUES (:name, :email, :pass)';

$stmtselect = $pdo->prepare($sqlselect);
$stmtselect->execute();
$users = $stmtselect->fetchAll();

foreach($users as $user) {}
if (
    $user['name'] == $name ||
    $user['email'] == $email
) {
    echo  'Пользователь с таким именем или email\'ом уже существует.';
} else {

    $stmtinsert = $pdo->prepare($sqlinsert);

    $stmtinsert->execute(['name' => $name, 'email' => $email, 'pass' => $pass]);

    echo 'Вы успешно зарегестрировались';
} 