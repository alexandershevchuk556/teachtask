# teachtask

To check this project you can visit http://s284494.smrtp.ru/

If you want to set it up on your local machine you need to clone this repository and change database settings in db/config.php and phinx.yml

Install all packages with ```composer install``` and run a migration with ```vendor\bin\phinx migrate``` command.

Then go to the https://ulogin.ru/ and register you own site. 
Change ```<script>``` tag in welcome.php to yours
Register your captcha and change the site key in index.php
