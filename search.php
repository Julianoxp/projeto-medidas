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
    <script>
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
</script>
         <header class="topo-menu">
                <h3 class="title-main">Dashborad &nbsp;|&nbsp; Search Car </h3>
        </header>
        <header class="navbar">
            <form method="post" action="<?=$_SERVER['PHP_SELF']?>" class="find-car">
                <input type="text"  class="input-find-car" required="true" name="carname" value="<?php echo $carReference;?>"/>
                <button type="submit">Search</button>
            </form>
            <button onsubmit="return false" onclick="window.location='index.php'" class="btn-back"> Back</button>
        </header>
        <div id="msg"><?php if(!empty($insertpostmsg)){echo$insertpostmsg;}else{if(!empty($updpostmsg)){echo$updpostmsg;}else{echo'Consulta com Sucesso!!'.' '.' Resultados: '.$q->GetResult($carReference);}} ?></div>
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
