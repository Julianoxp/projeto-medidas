<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of user
 *
 * @author Julians
 */
class user extends ConectDBMYSQL{
    private static $user;
    private static $password;
    function __construct($username,$password) {
           self::$user = $username;
            self::$password = $password;
         parent::__construct();
    }
    public function getuser() {
        echo self::$user;
    }
    public function getpassuser() {
        echo self::$password;
    }
}
