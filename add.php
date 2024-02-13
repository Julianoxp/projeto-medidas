<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>CarTech-Meter</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="_css/main.css"/>
        <link rel="stylesheet" type="text/css" href="_css/add.css"/>
        <script src="_js/validate.data.js"></script>
    </head>
    <body>
         <header class="topo-menu">
                <h3 class="title-main">|&nbsp; New Car </h3>
        </header>
        <header class="navbar">
            <button onsubmit="return false" onclick="window.location='index.php'" class="btn-back"> Back</button>
        </header>
         <main>
             
            <div class="form-area">
                <form class="form-add-args" method="POST" enctype="multipart/form-data" action="_process/process.ini.php" >
                    <label>Modelo<br><input class="valuesadd" type="text" name="modelo" id="modelcar" ></label><br>
                    
                    <label for="ano">Ano <input type="number" class="valuesadd" name="ano"  pattern="[0-9]"></label><br>

                    <label>Parabrisa<br><input class="valuesadd" step="0.010" type="number" name="parabrisaLAR" pattern="[0-9]"  >&nbsp;x&nbsp;<input class="valuesadd" type="number" step="0.010" name="parabrisaALT" pattern="[0-9]"  ></label><br>

                    <label>Portas Dianteiras<br><input class="valuesadd" step="0.010" type="number" name="ptdiantLAR"  pattern="[0-9]" >&nbsp;x&nbsp;<input class="valuesadd" type="number" step="0.010" name="ptdiantALT" pattern="[0-9]" ></label><br>

                    <label>Portas traseiras<br><input class="valuesadd" step="0.010" type="number" name="pttrasLAR" pattern="[0-9]" >&nbsp;x&nbsp;<input class="valuesadd" type="number" step="0.010" name="pttrasALT"  pattern="[0-9]"></label><br>

                    <label for="lateral-traseiro">Vidro Lateral traseiro<br><input class="valuesadd" type="number"  name="vidro-lat-tras-lar" step="0.010" pattern="[0-9]">&nbsp;x&nbsp;<input class="valuesadd" type="number"  name="vidro-lat-tras-alt" step="0.010" pattern="[0-9]"></label><br>

                    <label>Vidro auxiliar dianteiro<br><input class="valuesadd" step="0.010" type="number" name="vddiantLAR" pattern="[0-9]">&nbsp;x&nbsp;<input class="valuesadd" step="0.010" type="number" name="vddiantALT" pattern="[0-9]"  ></label><br>

                    <label>Vidro auxiliar traseiro<br><input class="valuesadd" step="0.010" type="number" name="vdtrasLAR" pattern="[0-9]">&nbsp;x&nbsp;<input class="valuesadd" step="0.010" type="number" name="vdtrasALT"  pattern="[0-9]"></label><br>

                    <label>Vidro vigia<br><input class="valuesadd" type="number" step="0.010" name="traseiroLAR" pattern="[0-9]">&nbsp;x&nbsp;<input class="valuesadd" size="4" type="number" step="0.010" name="traseiroALT" pattern="[0-9]"></label><br>

                    <button type="submit" class="submt" value="dataInsert" name="insertData">Create</button>
                    <button type="reset" class="btn-reset">Reset</button>
                 </form>
                
            </div>
 
           
        </main>
    </body>
</html>
