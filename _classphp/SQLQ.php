<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of SQLQ
 *
 * @author Julians
 */
class SQLQ extends ConectDBMYSQL{


    function queryAll()  //Seleciona todos os dados de carros 
    {
        $query = parent::getConn()->prepare("SELECT * FROM CARROS");
        $query->execute();
        if($query->rowCount()>=1){
            
        $row = $query->fetch(PDO::FETCH_ASSOC);
            echo'<table class="view-data"><thead><tr><th colspan="3" class="data-title">'.$row['MODELO'].'</th></tr></thead><tbody>
              <tr><td>PEÇAS</td><td colspan="2">LARGURA x ALTURA</td></tr>';
            
                foreach ($row as $iten=> $value)
                {
                  echo "<tr><td>$iten</td><td>$value</td></tr>";
                }
            echo'</tbody>
             </table>
             <form method="POST" enctype="multipart/form-data" action="./edit.php" class="form-edit">
             <input type="hidden" value="'.$row['MODELO'].'" name="indiceModel"/>
             <input type="submit" value="Editar" name="editFile" class="btn-edit"/>
             </form><br>'; 
    
        }else{
            echo 'Não houve resultados';
        }
        
    }

    //Cadastra os carros e suas medidas
    public function queryInsert(array $data)
        {           
            $sqlinsert = parent::getConn()->prepare("INSERT INTO `carros` (`MODELO`,`ANO`, `PARABRISA`, `PORTAS DIANTEIRAS`, `PORTAS TRASEIRAS`, `VIDRO LAT TRASEIRO`, `VIDRO AUX DIANTEIRO`, `VIDRO AUX TRASEIRO`, `VIGIA TRASEIRO`) VALUES(?,?,?,?,?,?,?,?,?)");
            $sqlinsert->execute($data);
            if($sqlinsert->rowCount()>=1){
                echo"<form id='formadd' action='search.php?carname={$data[0]}' method='post'><input type='hidden' value='Cadastrado com sucesso!!' name='instcar'/></form>";
                echo '<script language="javascript">'
                . 'document.getElementById("formadd").submit();';
                echo '</script>';   
             
            }
        else{
            echo '<script language="javascript">alert("Erro ao cadastrar!!");'
            . 'document.location="../index.php";';
            echo '</script>';   
        }

    }

    //Seleciona algum modelo para editar os valores
    public function selectData($carid){
                
                $slct = parent::getConn()->prepare("SELECT * FROM `carros` WHERE ID='$carid'");
                $slct->execute();
                if($slct->rowCount())
                {
                   return $slct;                  
                }
    }

    //Edita os valores dos veliculos selecionados
    function updtData($updmodel,$updano,$updPbrsa,$updptdiant,$updpttras,$updlattras,$updvddiant,$updvdtras,$updtras,$idcar){  
        
        $upd = parent::getConn()->prepare("UPDATE `carros` SET `MODELO`='$updmodel',`ANO`='$updano', `PARABRISA`='$updPbrsa', `PORTAS DIANTEIRAS`='$updptdiant',`PORTAS TRASEIRAS`='$updpttras',`VIDRO LAT TRASEIRO`='$updlattras',`VIDRO AUX DIANTEIRO`='$updvddiant', `VIDRO AUX TRASEIRO`='$updvdtras', `VIGIA TRASEIRO`='$updtras' WHERE `ID`='$idcar'");
        $upd->execute();
        if($upd->rowCount()>=1)
        {
            echo"<form id='formadd' action='search.php?carname={$updmodel}' method='post'><input type='hidden' value='Atualizado com sucesso!!' name='updtcar'/></form>";
            echo '<script language="javascript">'
            . 'document.getElementById("formadd").submit();';
            echo '</script>';  
            
            
        }
        else{
            echo '<script language="javascript">alert("Dados iguais,Nada atualizado!!");'
            . 'document.location="search.php?carname='.$updmodel.'";';
            echo '</script>';       
            
        }
    }

    //Deleta carros selecionados na pagina de editar
    function deleteCar($iDelete,$model)
    {    
        $delcar = parent::getConn()->prepare("DELETE FROM `carros` WHERE ID='$iDelete'");
        $delcar->execute();
        if($delcar->rowCount()>=1)
        {
            echo"<form id='formadd' action='search.php?carname={$model}' method='post'><input type='hidden' value='Item Deletado!!' name='deletcar'/></form>";
            echo '<script language="javascript">'
            . 'document.getElementById("formadd").submit();';
            echo '</script>'; 
                    
                    
        }
    }
  
    //Seleciona os veículos de acordo com o nome de referência na barra de pesquisas
    function GetnameCar($carname){
        $gnc = parent::getConn()->prepare("SELECT * FROM `carros` WHERE `MODELO` LIKE '%$carname%'");
        $gnc->execute();
        if($gnc->rowCount()){
            $listname = $gnc->fetchAll(PDO::FETCH_ASSOC);
            
                        
                foreach ($listname as $item)
                {
                  echo"<table class='view-data'><thead><tr><th colspan='3' class='data-title'>{$item['MODELO']}</th></tr></thead><tbody>
                    <tr><td class='subthead'>PEÇAS</td><td colspan='2' class='subthead'>LARGURA x ALTURA</td></tr>";

                  echo "<tr><td class='lefttd'>PARABRISA</td><td>".str_replace(' ',' x ',$item['PARABRISA'])."</td></tr>";
                  echo "<tr><td class='lefttd'>PORTAS DIANTEIRA</td><td>".str_replace(' ',' x ',$item['PORTAS DIANTEIRAS'])."</td></tr>";
                  echo "<tr><td class='lefttd'>PORTAS TRASEIRAS</td><td>".str_replace(' ',' x ',$item['PORTAS TRASEIRAS'])."</td></tr>";
                  echo "<tr><td class='lefttd'>VIDRO LAT TRASEIRO</td><td>".str_replace(' ',' x ',$item['VIDRO LAT TRASEIRO'])."</td></tr>";
                  echo "<tr><td class='lefttd'>VIDRO AUX DIANTEIRO</td><td>".str_replace(' ',' x ',$item['VIDRO AUX DIANTEIRO'])."</td></tr>";
                  echo "<tr><td class='lefttd'>VIDRO AUX TRASEIRO</td><td>".str_replace(' ',' x ',$item['VIDRO AUX TRASEIRO'])."</td></tr>";
                  echo "<tr><td class='lefttd'>VIGIA TRASEIRO</td><td>".str_replace(' ',' x ',$item['VIGIA TRASEIRO'])."</td></tr>";
                  

                  echo'</tbody>
                  </table>
                  <form method="POST" enctype="multipart/form-data" action="./edit.php" class="form-edit">
                  <input type="hidden" value="'.$item['ID'].'" name="idSelect"/>
                  <input type="submit" value="Editar" name="editFile" class="btn-edit"/>
                  </form><br>';
                }
           
          }
         
        else{
            echo '<main class="not-result"><div><h2>OPS.. Não houve resultados!</h2></div></main>';
        }
            
    }

    //Seleciona o total de veiclos encontrados de acordo com a referência passada na barra de pesquisas
   function GetResult($carname)
    {
        if($getResult = parent::getConn()->prepare("SELECT * FROM `carros` WHERE `MODELO` LIKE '%$carname%'")){
            $getResult->execute();
            if($getResult->rowCount()>=1){
                $count = $getResult->fetchAll(PDO::FETCH_ASSOC);
                $totresult = 0;
                foreach($count as $number)
                {
                    $totresult++;
                }
                return $totresult;
            }
        }
        else{echo'0';}
        
        
       
    }

    //Consulta de usuários existentes e validação de login
    function queryUser($pass)
    {
        $conn = parent::getConn();
        $query = $conn->prepare("SELECT * FROM `usuarios` WHERE `USERPASS`='$pass'");
        $query->execute();
        if($query->rowCount())       {
            header("location:index.php");
        }
        else{
            header("location:login.php");
        }
    }

        
   /* function GetTimerProcess($carname){
       
        $getTimeResult = parent::getConn()->prepare("SELECT * FROM `carros` WHERE `MODELO` LIKE '%$carname%'");
        $getTimeResult->execute();
        if($getTimeResult->rowCount()>=1 or $getTimeResult->rowCount()==0){
 
            $tempo = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
            printf("%0.16f segundos", $tempo/1000000);
        }
        
    }*/

}
