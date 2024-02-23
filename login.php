<?php 
require '_classphp/ConectDBMYSQL.php';
require '_classphp/SQLQ.php';
require '_classphp/user.php';
$pass = filter_input(INPUT_POST,'senha');
if(!empty($pass))
{
    $user = filter_input(INPUT_POST,'nome');
    //echo $user;
    
    $getuser = new user($user,$pass);
    $getuser->loginUser();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/login.css" type="text/css" >
    <title>Login</title>
</head>
<body>
    <main>
        <div class="login-content">
        <h2>CAR Tech - Meter </h2>
            <form class="form-login" action="<?=$_SERVER['PHP_SELF']?>" enctype="multipart/form-data" method="post">
                <label for="username">Nome de usuário:</label><br>
                <input type="text" placeholder="nome" id="username" name="nome"/><br>
                <label for="passworduser">Senha:</label><br>
                <input type="password" placeholder="Senha" id="passworduser" name="senha"/><br>
                <button type="submit">Login</button>
            </form>
        </div>
    <p style="position:absolute;bottom:0;left:0;">Imagem de <a href="https://br.freepik.com/vetores-gratis/fundo-branco-futurista-tecnologia_6402687.htm#query=vetores%20sistemas&position=8&from_view=search&track=ais&uuid=b1ed6a65-d598-411e-aae8-ba039c78d9b5">Freepik</a></p>
       
    </main>
</body>
</html>