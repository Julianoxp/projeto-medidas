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
class user extends SQLQ{
    private static $username;
    private static $userpass;
   
    function __construct($name,$pass) {
           self::$username = $name;
            self::$userpass = $pass;
         parent::__construct();
    }
    public function getuser() {
        echo self::$username;
    }
    public function getpassuser() {
        echo self::$userpass;
    }
    public function loginUser()
    {
        parent::queryUser(self::$userpass);
    }
}
