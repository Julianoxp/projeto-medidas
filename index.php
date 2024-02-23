<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="pragma" content="no-cache" />
        <title>CarTech-Meter</title>
        <link rel="stylesheet" type="text/css" href="./_css/main.css"/>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <script src="_js/function.js"></script>
    </head>
    <body>
        <header class="topo-menu">
            <div class="btn-menu">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <h3 class="title-main"> &nbsp;|&nbsp; Home </h3>

        </header>
        <main>
            <div class="init-contents">

                <div class="welcomemsg" onclick="window.location='login.php'">
                        <h2>CAR Tech - Meter </h2>            
                  </div>
                    <form method="post" action="search.php" class="form-search" >
                        <input class="input-search" type="search" name="carname"  placeholder="Digite seu veículo.." />
                    <button class="btn-search"></button>
                 </form>
                
            </div>
             
          
        </main>
        <div class="content-menu-bar" id="menu-mobile">
            <ul class="menu-bar">
                <li style="background-color:#6563FF;" onclick="window.location='add.php';">New car add</li>
                <li style="background-color: #3399FF;" onclick="alert('Função ainda não implementada!')">Services</li>
            </ul>
        </div>
    </body>
</html>
