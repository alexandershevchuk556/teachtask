<?php
if (!empty($_POST['token'])) {

    $s = file_get_contents('http://ulogin.ru/token.php?token=' . $_POST['token'] . '&host=' . $_SERVER['HTTP_HOST']);
    $user = json_decode($s, true);
    $_SESSION['user']['name'] = $user['first_name']; 
}
                
?>
<?php if (empty($_SESSION['user'])) : ?>

    <div class="panel-body w-25 mx-auto" style="margin-top: 15%;">
        <form id="form" method="post">

            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <input style="width: 100%;" type="password" name="password" id="password" class="form-cntrol input-sm" placeholder="Password" required>
                    </div>
                </div>
            </div>
            <div id="captcha" class="mb-2"></div>

        </form>

		<script  src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
		</script>
        <input id="submit" type="submit" value="Login" class="btn btn-primary btn-block" disabled>
        <div class="error"></div>
    </div>
<?php else : ?>
<div style='display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;' class='mx-auto'>
<script src="//ulogin.ru/js/ulogin.js"></script>
        <div id="uLogin" data-ulogin="display=panel;theme=flat;fields=first_name,last_name;providers=vkontakte,odnoklassniki,mailru,facebook;hidden=other;redirect_uri=http%3A%2F%2Fs284494.smrtp.ru%2Flogin;mobilebuttons=0;"></div>

<?php echo  "Hello, {$_SESSION['user']['name']}"; ?>
<div class="logout">
    <a href="/logout">Logout</a>
</div>
</div>

<?php endif;?>
