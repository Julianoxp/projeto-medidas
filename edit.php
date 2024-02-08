<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>CarTech-Meter</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="_css/main.css"/>
        <link rel="stylesheet" type="text/css" href="_css/edit.css"/>
    </head>
    <body>
         <header class="topo-menu">
                <h3 class="title-main">Dashborad &nbsp;|&nbsp; Updating</h3>
        </header>
        <header class="navbar">
            <button onsubmit="return false" onclick="javascript:history.back()" class="btn-back"> Back</button>
        </header>
        <main>
        <?php
            
            $postt = filter_input(INPUT_POST,'editFile');
            if($postt){
                 $model = filter_input(INPUT_POST, 'indiceModel');
                 require './_classphp/ConectDBMYSQL.php';
                 require './_classphp/SQLQ.php';
                 $con = new SQLQ();
                $sql = $con->selectData($model);
                 
            }
            $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach ($lista as $iten)
            {
        ?>
            <form method="POST" action="./_process/process.ini.php" class="edit" >
                <div class="align-left">
                    <label name="indiceModel">MODELO :</label><input type="hidden" name="indiceModel" value="<?=$iten['MODELO']?>" /><br><br>
                    <label>PARABRISA :</label><br><br>
                    <label>PORTAS DIANT :</label><br><br>
                    <label>PORTAS TRAS :<br><br>
                    <label>VIDRINHOS DIANT :<br><br>
                    <label>VIDRINHOS TRAS :<br><br>
                    <label>TRASEIRO :</label><br><input type="submit" name="editData" value="Save" class="btn-upd"/><br><br>
                </div>
                <div class="align-rigth">
                    <input type="text" value="<?=$iten['MODELO']?>" disabled style="text-align:center;" /><br>
                    <input type="text" name="parabrisa" value="<?=$iten['PARABRISA']?>"/><br>
                    <input type="text" name="ptdiant" value="<?=$iten['PORTAS DIANTEIRAS']?>"/><br>
                    <input type="text" name="pttras" value="<?=$iten['PORTAS TRASEIRAS']?>"/><br>
                    <input type="text" name="vddiant" value="<?=$iten['VIDRINHOS/VIDROS DIANT']?>"/><br>
                    <input type="text" name="vdtras" value="<?=$iten['VIDRINHOS/VIDROS TRAS']?>"/><br>
                    <input type="text" name="traseiro" value="<?=$iten['TRASEIRO']?>"/><br>
                </div>
            </form>
                <?php 
                }
             ?>
            <form class="form-delcar" action="./_process/process.ini.php" method="post" enctype="multipart/form-data">
                <input type="hidden" value="<?=$model?>" name="delCar">
                <input type="submit" value="Delete this car">
            </form>
            
            </main>
        
        <hr style="width: 80%;margin: auto;" class="hr">
    </body>
</html>