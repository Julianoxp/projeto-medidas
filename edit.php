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
         <div class="btn-back" onclick="window.location='index.php'">
                    <div class="icon-mini-burguer">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div> <h3>&nbsp;&nbsp; Editar </h3>
        </header>
        <header class="navbar">
            <button onsubmit="return false" onclick="javascript:history.back()" class="btn-back"> Back</button>
        </header>
        <main>
        <?php
            
            $idSelect = filter_input(INPUT_POST,'idSelect');
            if(isset($idSelect)){
                 require './_classphp/ConectDBMYSQL.php';
                 require './_classphp/SQLQ.php';
                 $con = new SQLQ();
                $sql = $con->selectData($idSelect);
                 
            }
            $carSelect = $sql->fetchAll(PDO::FETCH_ASSOC);
            $carReference = null;
            foreach ($carSelect as $item)
            {
                $carReference = $item['MODELO'];
        ?>
            <form method="POST" action="./_process/process.ini.php" class="edit" >
                <div class="align-left">
                    <label>MODELO :</label><br><br><br>
                    <label>ANO :</label><br><br>
                    <label>PARABRISA :</label><br><br><br>
                    <label>PORTAS DIANT :</label><br><br>
                    <label>PORTAS TRAS :<br><br>
                    <label>VIDRO LAT TRASEIRO:</label><br><br><br>
                    <label>VIDRINHOS DIANT :<br><br>
                    <label>VIDRINHOS TRAS :<br><br>
                    <label>TRASEIRO :</label><br><br>
                    <button type="submit" class="btn-upd" value="updata" name="upData">Save Change</button><input type="hidden" name="carId" value="<?=$item['ID']?>" /><br><br>
                    
                </div>
                <div class="align-rigth">
                    <input type="text" name="modelo" value="<?=$item['MODELO']?>" style="text-align:center;" /><br>
                    <input type="text" name="ano" value="<?=$item['ANO']?>"/><br>
                    <input type="text" name="parabrisa" value="<?=$item['PARABRISA']?>"/><br>
                    <input type="text" name="ptdiant" value="<?=$item['PORTAS DIANTEIRAS']?>"/><br>
                    <input type="text" name="pttras" value="<?=$item['PORTAS TRASEIRAS']?>"/><br>
                    <input type="text" name="lattras" value="<?=$item['VIDRO LAT TRASEIRO']?>"/><br>
                    <input type="text" name="vddiant" value="<?=$item['VIDRO AUX DIANTEIRO']?>"/><br>
                    <input type="text" name="vdtras" value="<?=$item['VIDRO AUX TRASEIRO']?>"/><br>
                    <input type="text" name="traseiro" value="<?=$item['VIGIA TRASEIRO']?>"/><br>
                </div>
            </form>
                <?php 
                }
             ?>
            <form class="form-delcar" action="./_process/process.ini.php" method="post" enctype="multipart/form-data">
                <input type="hidden" value="<?=$carReference?>" name="carRefModel">
                <input type="hidden" value="<?=$idSelect?>" name="idcarDelete">
                <button type="submit" value="del" name="carDelete" >Delete this car</button>
            </form>
            
            </main>
        
        <hr style="width: 80%;margin: auto;" class="hr">
    </body>
</html>