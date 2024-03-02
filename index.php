<?php
    spl_autoload_register(function ($trait) { include $trait.'.php'; });

    class Example
    {
        public function auth(string $login, string $password)
        {
            echo AppUserAuthentication::authenticate($login, $password) ? "User authenticated in App!" :
                 ( MobileUserAuthentication::authenticate($login, $password) ? "User authenticated in mobile App!" :
                 "User not authenticated!" );
        }
    }

    $ex = new Example();
    //$ex->auth("admin", "1"); // admin 1 - авторизация в APP
    $ex->auth("root", "2");  // root 2 - авторизация в Mobile App
    // $ex->auth("guest", "123");
