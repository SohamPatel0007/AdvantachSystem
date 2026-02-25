<?php
class Security {
    public static function csrf(){
        if(empty($_SESSION['csrf'])){
            $_SESSION['csrf'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf'];
    }

    public static function csrfVerify($token){
        if(!hash_equals($_SESSION['csrf'], $token)){
            die("CSRF validation failed");
        }
    }
}
