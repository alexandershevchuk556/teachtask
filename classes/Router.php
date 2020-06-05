<?php

namespace Classes;

class Router
{

    public static function getRout($path)
    {
        if ($path != '/') {
            return 'auth' . $path . '.php';
        }

        return 'welcome.php';
    }

}