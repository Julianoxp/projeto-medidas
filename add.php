<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>CarTech-Meter</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="_css/main.css"/>
        <link rel="stylesheet" type="text/css" href="_css/add.css"/>
        <script src="_js/validate.js"></script>
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
                <form class="form-add-args" method="POST" enctype="multipart/form-data" action="_process/process.ini.php">
                    <label>Modelo<br><input class="valuesadd" type="text" name="modelo" id="modelcar" required pattern="[a-zA-Z0-9]+"></label><br>
                    <label>Parabrisa<br><input class="valuesadd" step="0.010" type="number" name="parabrisaLAR"  required >&nbsp;x&nbsp;<input class="valuesadd" type="number" step="0.010" name="parabrisaALT"  required ></label><br>
                    <label>Portas Dianteiras<br><input class="valuesadd" step="0.010" type="number" name="ptdiantLAR"  required >&nbsp;x&nbsp;<input class="valuesadd" type="number" step="0.010" name="ptdiantALT"  required ></label><br>
                    <label>Portas traseiras<br><input class="valuesadd" step="0.010" type="number" name="pttrasLAR" required >&nbsp;x&nbsp;<input class="valuesadd" type="number" step="0.010" name="pttrasALT"  required ></label><br>
                    <label>Vidro auxiliar dianteiro<br><input class="valuesadd" step="0.010" type="number" name="vddiantLAR" required >&nbsp;x&nbsp;<input class="valuesadd" step="0.010" type="number" name="vddiantALT"  required ></label><br>
                    <label>Vidro auxiliar traseiro<br><input class="valuesadd" step="0.010" type="number" name="vdtrasLAR" required >&nbsp;x&nbsp;<input class="valuesadd" step="0.010" type="number" name="vdtrasALT"  required ></label><br>
                    <label>Vidro vigia<br><input class="valuesadd" type="number" step="0.010" name="traseiroLAR" required >&nbsp;x&nbsp;<input class="valuesadd" type="number" step="0.010" name="traseiroALT"  required ></label><br>
                    <button type="submit" name="data" class="submt" value="insert">Create</button>
                    <button type="reset" class="btn-reset">Reset</button>
                 </form>
                
            </div>
         <script>
            document.getElementById('modelcar').onkeypress = function(e){
                
               
                
            }
         </script>
           
        </main>
    </body>
</html>
