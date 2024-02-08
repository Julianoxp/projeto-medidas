<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require './_classphp/ConectDBMYSQL.php';
require './_classphp/SQLQ.php';

$carname = filter_input(INPUT_POST, 'carname');
$getcarname = filter_input(INPUT_GET, 'carname');

$carherf;

$q = new SQLQ();
if(empty($carname) && empty($getcarname))
    {
     $carherf = null;
    }
    else {
        if(!empty($carname))
        {
            $carherf = $carname;
        }
        else{
            $carherf = $getcarname;
        }
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
         <header class="topo-menu">
                <h3 class="title-main">Dashborad &nbsp;|&nbsp; Search Car </h3>
        </header>
        <header class="navbar">
            <button onsubmit="return false" onclick="window.location='index.php'" class="btn-back"> Back</button>
        </header>
        <div class="find-car">
            <form method="GET" action="search.php">
                <input type="text"  class="input-find-car" required="true" name="carname" value="<?php echo $carherf;?>"/>
                <button type="submit">Search</button>
            </form>
            
        </div>        
        <main>
         <?php
               
            $process = microtime(true);
            if($carherf!=null){
                
                   $q->GetnameCar($carherf);
                                  
                }
          ?>
         <script>
            setTimeout(function(){
               var msg = document.querySelector('#msg');
               msg.parentNode.removeChild(msg);
            },5000);
         </script>
       
    </body>
</html>
