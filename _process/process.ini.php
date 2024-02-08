<?php
require '../_classphp/ConectDBMYSQL.php';
require '../_classphp/SQLQ.php';

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>...</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="../_css/main.css"/>
        <link rel="stylesheet" type="text/css" href="../_css/view.css"/>
    </head>
    <body>
         <header class="topo-menu">
                <h3 class="title-main">Dashborad &nbsp;|&nbsp; Procurar </h3>
        </header>
        <header class="navbar">
            <button onsubmit="return false" onclick="window.location='../index.php'" class="btn-back"> Voltar</button>
        </header>
<main style="min-height:540px;">
        <?php
        $okinsert = filter_input(INPUT_POST, 'data');
        $okupdate  = filter_input(INPUT_POST, 'editData');
        $okdelete  = filter_input(INPUT_POST,'delCar');
        
        $action = new SQLQ();
        
        if(isset($okinsert) != null){
           
            $modelo = filter_input(INPUT_POST, 'modelo');
            $ptdiant = filter_input(INPUT_POST, 'ptdiantLAR').' x '.filter_input(INPUT_POST, 'ptdiantALT');
            $pttras = filter_input(INPUT_POST, 'pttrasLAR') .' x '. filter_input(INPUT_POST, 'pttrasALT');
            $vddiant = filter_input(INPUT_POST, 'vddiantLAR') .' x '. filter_input(INPUT_POST, 'vddiantALT');
            $vdtras = filter_input(INPUT_POST, 'vdtrasLAR') .' x '. filter_input(INPUT_POST, 'vdtrasALT');
            $traseiro = filter_input(INPUT_POST, 'traseiroLAR') .' x '. filter_input(INPUT_POST, 'traseiroALT');
            $parabrisa = filter_input(INPUT_POST, 'parabrisaLAR') .' x '. filter_input(INPUT_POST, 'parabrisaALT');
            
            $action->queryInsert($modelo,$parabrisa,$ptdiant,$pttras,$vddiant,$vdtras,$traseiro);
        
        }
        if(isset($okupdate) != null)
        {
            $modelo = filter_input(INPUT_POST, 'indiceModel');
            $ptdiant = filter_input(INPUT_POST, 'ptdiant');
            $pttras = filter_input(INPUT_POST, 'pttras');
            $vddiant = filter_input(INPUT_POST, 'vddiant');
            $vdtras = filter_input(INPUT_POST, 'vdtras');
            $traseiro = filter_input(INPUT_POST, 'traseiro');
            $parabrisa = filter_input(INPUT_POST, 'parabrisa');
        
            $action->updtData($parabrisa,$ptdiant,$pttras,$vddiant,$vdtras,$traseiro,$modelo);
          
        }
        if(isset($okdelete) != null)
        {
            $car = filter_input(INPUT_POST,'delCar');
            $action->deleteCar($car);
        }
        ?>
        
</main>
  </body>
</html>
