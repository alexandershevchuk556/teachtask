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
		echo "
		<div style='display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;' class='mx-auto'>
		<script src='//ulogin.ru/js/ulogin.js'></script>
				<div id='uLogin' data-ulogin='display=panel;theme=flat;fields=first_name,last_name;providers=vkontakte,odnoklassniki,mailru,facebook;hidden=other;redirect_uri=http%3A%2F%2Fs284494.smrtp.ru%2Flogin;mobilebuttons=0;'></div>

		Hello, {$_SESSION['user']['name']}
		<div class='logout'>
			<a href='/logout'>Logout</a>
		</div>
		</div>

";
    }
}
