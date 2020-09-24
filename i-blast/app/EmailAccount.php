<?php

namespace App;

class EmailAccount{
    static $email;

    public static function setFrom($from){
        self::$email = $from;
    }

    public static function getEmail(){
        return self::$email;
    }
}
