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
        $okinsert = filter_input(INPUT_POST, 'insertData');
        $okupdate  = filter_input(INPUT_POST, 'upData');
        $okdelete  = filter_input(INPUT_POST,'carDelete');
        
        $action = new SQLQ();
        
        if(isset($okinsert) != null){
         
            $modelo = filter_input(INPUT_POST, 'modelo');
            $ano = filter_input(INPUT_POST,'ano');
            $parabrisa = filter_input(INPUT_POST, 'parabrisaLAR') .' x '. filter_input(INPUT_POST, 'parabrisaALT');
            $ptdiant = filter_input(INPUT_POST, 'ptdiantLAR').' x '.filter_input(INPUT_POST, 'ptdiantALT');
            $pttras = filter_input(INPUT_POST, 'pttrasLAR') .' x '. filter_input(INPUT_POST, 'pttrasALT');
            $lattras = filter_input(INPUT_POST, 'vidro-lat-tras-lar') .' x '. filter_input(INPUT_POST, 'vidro-lat-tras-alt');
            $vddiant = filter_input(INPUT_POST, 'vddiantLAR') .' x '. filter_input(INPUT_POST, 'vddiantALT');
            $vdtras = filter_input(INPUT_POST, 'vdtrasLAR') .' x '. filter_input(INPUT_POST, 'vdtrasALT');
            $traseiro = filter_input(INPUT_POST, 'traseiroLAR') .' x '. filter_input(INPUT_POST, 'traseiroALT');
            
            
            $action->queryInsert($modelo,$ano,$parabrisa,$ptdiant,$pttras,$lattras,$vddiant,$vdtras,$traseiro);
                    
        }
        if(isset($okupdate) != null)
        {
            $carid = filter_input(INPUT_POST, 'carId');
            $model = filter_input(INPUT_POST, 'modelo');
            $ano = filter_input(INPUT_POST,'ano');
            $ptdiant = filter_input(INPUT_POST, 'ptdiant');
            $pttras = filter_input(INPUT_POST, 'pttras');
            $lattras = filter_input(INPUT_POST,'lattras');
            $vddiant = filter_input(INPUT_POST, 'vddiant');
            $vdtras = filter_input(INPUT_POST, 'vdtras');
            $traseiro = filter_input(INPUT_POST, 'traseiro');
            $parabrisa = filter_input(INPUT_POST, 'parabrisa');
        
            $action->updtData($model,$ano,$parabrisa,$ptdiant,$pttras,$lattras,$vddiant,$vdtras,$traseiro,$carid);
            //echo"UPDATED ON";
        }
        if(isset($okdelete) != null)
        {
            $car = filter_input(INPUT_POST,'carDelete');
            if(isset($car))
            {
                $carRef = filter_input(INPUT_POST,'carRefModel');
               
                $iDelete= filter_input(INPUT_POST,'idcarDelete');
                $action->deleteCar($iDelete,$carRef);
            }
            
            //echo"DELETED ON";
        }

        
        ?>
        
</main>
  </body>
</html>
