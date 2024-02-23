<?php





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
        
        
        
        
        if(!empty($okupdate))
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
        
        echo 'nada aqui<br>';
        

        ?>
        
</main>
  </body>
</html>
