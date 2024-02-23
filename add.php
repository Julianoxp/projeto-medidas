<?php 
require '_classphp/ConectDBMYSQL.php';
require '_classphp/SQLQ.php';
$okinsert = filter_input(INPUT_POST, 'insertData');
$action = new SQLQ();
        
        if(!empty($okinsert)){
         
            $modelo = filter_input(INPUT_POST, 'modelo');
            $ano = filter_input(INPUT_POST,'ano');
            $parabrisa = filter_input(INPUT_POST, 'parabrisaLAR') .' x '. filter_input(INPUT_POST, 'parabrisaALT');
            $ptdiant = filter_input(INPUT_POST, 'ptdiantLAR').' x '.filter_input(INPUT_POST, 'ptdiantALT');
            $pttras = filter_input(INPUT_POST, 'pttrasLAR') .' x '. filter_input(INPUT_POST, 'pttrasALT');
            $lattras = filter_input(INPUT_POST, 'vidro-lat-tras-lar') .' x '. filter_input(INPUT_POST, 'vidro-lat-tras-alt');
            $vddiant = filter_input(INPUT_POST, 'vddiantLAR') .' x '. filter_input(INPUT_POST, 'vddiantALT');
            $vdtras = filter_input(INPUT_POST, 'vdtrasLAR') .' x '. filter_input(INPUT_POST, 'vdtrasALT');
            $traseiro = filter_input(INPUT_POST, 'traseiroLAR') .' x '. filter_input(INPUT_POST, 'traseiroALT');
            
            printf($modelo);
            $action->queryInsert($modelo,$ano,$parabrisa,$ptdiant,$pttras,$lattras,$vddiant,$vdtras,$traseiro);
                    
        }
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv='pragma' content='no-cache'>
        <title>CarTech-Meter</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="_css/main.css"/>
        <link rel="stylesheet" type="text/css" href="_css/add.css"/>
        <script src="_js/validate.data.js"></script>
        
    </head>
    <body>
         <header class="topo-menu" style="position:inherit;">
                <div class="btn-back" onclick="window.location='index.php'">
                    <div class="icon-mini-burguer">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div> <h3>&nbsp;&nbsp; Adicionar </h3>
        </header>
        <div id="msg"><p id="pmsg"></p> <button onclick="rmvMsg(true);"></button></div>
         <main>
        
            <div class="form-area">
                <form class="form-add-args" id="submt-form" method="POST" enctype="multipart/form-data" action="<?=$_SERVER['PHP_SELF']?>" >
                    <label>Modelo<br><input class="valuesadd" type="text" name="modelo" id="1" ></label><span id="alertEr" style="color:red;"></span><br>
                    
                    <label for="ano">Ano <input type="number" class="valuesadd" name="ano"  pattern="[0-9]" id="2"></label><br>

                    <label>Parabrisa <input class="valuesadd" step="0.010" type="number" name="parabrisaLAR" pattern="[0-9]" id="3">&nbsp;x&nbsp;<input class="valuesadd" type="number" step="0.010" name="parabrisaALT" pattern="[0-9]" id="4"></label><br>

                    <label>Portas Dianteiras <input class="valuesadd" step="0.010" type="number" name="ptdiantLAR"  pattern="[0-9]" id="5">&nbsp;x&nbsp;<input class="valuesadd" type="number" step="0.010" name="ptdiantALT" pattern="[0-9]" id="6"></label><br>

                    <label>Portas traseiras <input class="valuesadd" step="0.010" type="number" name="pttrasLAR" pattern="[0-9]" id="7">&nbsp;x&nbsp;<input class="valuesadd" type="number" step="0.010" name="pttrasALT"  pattern="[0-9]" id="8"></label><br>

                    <label for="lateral-traseiro">Vidro Lateral traseiro<input class="valuesadd" type="number"  name="vidro-lat-tras-lar" step="0.010" pattern="[0-9]" id="9">&nbsp;x&nbsp;<input class="valuesadd" type="number"  name="vidro-lat-tras-alt" step="0.010" pattern="[0-9]" id="10" ></label><br>

                    <label>Vidro auxiliar dianteiro<input class="valuesadd" step="0.010" type="number" name="vddiantLAR" pattern="[0-9]" id="11">&nbsp;x&nbsp;<input class="valuesadd" step="0.010" type="number" name="vddiantALT" pattern="[0-9]" id="12" ></label><br>

                    <label>Vidro auxiliar traseiro<input class="valuesadd" step="0.010" type="number" name="vdtrasLAR" pattern="[0-9]" id="13" >&nbsp;x&nbsp;<input class="valuesadd" step="0.010" type="number" name="vdtrasALT"  pattern="[0-9]" id="14" ></label><br>

                    <label>Vidro vigia<input class="valuesadd" type="number" step="0.010" name="traseiroLAR" pattern="[0-9]" id="15" >&nbsp;x&nbsp;<input class="valuesadd" size="4" type="number" step="0.010" name="traseiroALT" pattern="[0-9]" id="16" ></label><br>
                    <input type="hidden" value="dataInsert" name="insertData"/>
                    
                    <input type="submit" onclick="validateForm();return false;" id="btn-form-mobile" value="SALVAR">
                 </form>
                 
            </div>
            <button onclick="validateForm();"  class="btn-save" id="btnsave"> Salvar</button>
           
        </main>
        <script>
           
         </script>
    </body>
</html>
