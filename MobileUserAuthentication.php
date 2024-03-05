<?php
    trait MobileUserAuthentication
    {
        public function authenticate(string $login, string $password)
        {
            return ( $login == "root" && $password == "2" );
        }
    }