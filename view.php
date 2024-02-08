<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>View page</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="_css/main.css"/>
        <link rel="stylesheet" type="text/css" href="_css/view.css"/>
    </head>
    <body>
         <header class="topo-menu">
                <h3 class="title-main">Dashborad &nbsp;|&nbsp; Procurar </h3>
        </header>
        <header class="navbar">
            <button onsubmit="return false" onclick="window.location='index.php'" class="btn-back"> Voltar</button>
        </header>
        <div class="find-car">
            <form>
             <input type="text" class="input-find-car"/>
             <button>Procurar</button>
            </form>
            <div class="div-result-data">
                <span class="val-result">Resultados :&nbsp; 0</span><span class="val-result">Tempo de busca :&nbsp;0,000 milisegundos</span>
            </div>
        </div>
        
        <main>
            
        <?php
         
         require './_classphp/ConectDBMYSQL.php';
         require './_classphp/SQLQ.php';
         //require '_process/process.ini.php';
         
         $q = new SQLQ();
         $q->queryAll();
        ?>
                <!--<tr class="data-title"><td colspan="3">MODELO</td></tr>
                <tr><td>Result</td><td>Result</td><td>Result</td></tr>
                <tr><td>Result</td><td>Result</td><td>Result</td></tr>
                <tr><td>Result</td><td>Result</td><td>Result</td></tr>
                <tr><td>Result</td><td>Result</td><td>Result</td></tr> -->
            
        </main>
        <hr>
    </body>
</html>
