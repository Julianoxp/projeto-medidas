<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of ConectDBMYSQL
 *
 * @author Julians
 */
abstract class ConectDBMYSQL {
    
    function __construct()
    {
        define('HOST','localhost');
        define('USER','root');
        define('PASS','');
        define('DBSA','sistemafilm');
        define('DSN','mysql:host='.HOST.';dbname='.DBSA);
    }
    
    private static $ConnectON = null;

        private static function Conectar()
        {
            try{

                if(self::$ConnectON == null):
                
                    self::$ConnectON = new PDO(DSN,USER,PASS);
                                       
                 endif;

            }catch(PDOException $e )
            {
                echo '<div class="msgerror"><h3>OPS! Parece que estamos com problemas com o banco de dados</h3><br><p>Solicite o suporte!<br>'.$e->getMessage().'  '.$e->getLine().'</p><div class="picerror"></div></div>';
                
                die;
            }
            
        }

        public static function getConn()
        {
            self::Conectar();
            return self::$ConnectON;
        }
}


