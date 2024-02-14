<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once './_classphp/ConectDBMYSQL.php';
require_once './_classphp/SQLQ.php';

$carname = filter_input(INPUT_POST, 'carname');
$insertpostmsg = filter_input(INPUT_POST, 'instcar');
$updpostmsg = filter_input(INPUT_POST, 'updtcar');
$Delpostmsg = filter_input(INPUT_POST, 'deletcar');
$carReference;

$q = new SQLQ();
if(empty($carname))
    {
     $carReference = filter_input(INPUT_GET,'carname');
    }
    else {
        $carReference = $carname;
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       
        <title>CarTech-Meter</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="_css/main.css"/>
        <link rel="stylesheet" type="text/css" href="_css/view.css"/>
    </head>
    <body>
        <?php if(!empty($insertpostmsg) || !empty($updpostmsg))
            {
            ?>
            <script>
          
            if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
            }
            
            </script>
        <?php }?>
         <header class="topo-menu">
                <div class="btn-back" onclick="window.location='index.php'">
                    <div class="icon-mini-burguer">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div> <h3>&nbsp;&nbsp; Procurar </h3>
        </header>
        <header class="navbar">
            <form method="post" action="<?=$_SERVER['PHP_SELF']?>" class="find-car">
                <input type="text"  class="input-find-car" required="true" name="carname" value="<?php echo $carReference;?>"/>
                <button type="submit">Search</button>
            </form>
        </header>
        <?php if(!empty($insertpostmsg)){echo'<div id="msg" style="background-color:#009A68">'.$insertpostmsg.'</div>';}if(!empty($updpostmsg)){echo'<div id="msg" style="background-color:#4a6dd6">'.$updpostmsg.'</div>';}if(!empty($Delpostmsg)){echo'<div id="msg" style="background-color:#af3a3a">'.$Delpostmsg.'</div>';}?>
        <main>
         <?php
               
            $process = microtime(true);
            if($carReference!=null){
                
                   $q->GetnameCar($carReference);
                                  
                }
          ?>
         <script>
            setTimeout(function(){
               var msg = document.querySelector('#msg');
               msg.parentNode.removeChild(msg);
            },8000);
         </script>
        </main>
    </body>
</html>
