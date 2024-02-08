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
     
    function queryAll()
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
    public function queryInsert($modelo,$parabrisa,$ptdianteira,$ptraseira,$vddiant,$vdtras,$traseiro)
    {
        $sqlinsert = parent::getConn()->prepare("INSERT INTO `carros` (`MODELO`, `PARABRISA`, `PORTAS DIANTEIRAS`, `PORTAS TRASEIRAS`, `VIDRINHOS/VIDROS DIANT`, `VIDRINHOS/VIDROS TRAS`, `TRASEIRO`) VALUES"
                . " ('$modelo', '$parabrisa', '$ptdianteira', '$ptraseira', '$vddiant', '$vdtras', '$traseiro')");
        $sqlinsert->execute();
        if($sqlinsert->rowCount()>=1){
            
            echo '<script language="javascript">alert("Cadastrado com Sucesso!!");'
            . 'document.location="../search.php?carname='.$modelo.'";';
            echo '</script>';   
         
        }
        else{
            echo '<script language="javascript">alert("Erro ao cadastrar!!");'
            . 'document.location="../index.php";';
            echo '</script>';   
        }

    }
    public function selectData($modelo){
                
                $slct = parent::getConn()->prepare("SELECT * FROM `carros` WHERE MODELO='$modelo'");
                $slct->execute();
                if($slct->rowCount())
                {
                   return $slct;                  
                }
    }
    function updtData($updPbrsa,$updptdiant,$updpttras,$updvddiant,$updvdtras,$updtras,$indModel){
        
        $upd = parent::getConn()->prepare("UPDATE `carros` SET `PARABRISA`='$updPbrsa', `PORTAS DIANTEIRAS`='$updptdiant',`PORTAS TRASEIRAS`='$updpttras',`VIDRINHOS/VIDROS DIANT`='$updvddiant', `VIDRINHOS/VIDROS TRAS`='$updvdtras', `TRASEIRO`='$updtras' WHERE `MODELO`='$indModel'");
        $upd->execute();
        if($upd->rowCount()>=1)
        {
            echo '<script language="javascript">alert("Sucesso!!");'
            . 'document.location="../search.php?carname='.$indModel.'";';
            echo '</script>';    
            
            
        }
        else{
            echo '<script language="javascript">alert("Dados iguais,Nada atualizado!!");'
            . 'document.location="../search.php?carname='.$indModel.'";';
            echo '</script>';       
            
        }
    }
    function deleteCar($modelo)
    {
        $delcar = parent::getConn()->prepare("DELETE FROM `carros` WHERE MODELO='$modelo'");
                $delcar->execute();
                if($delcar->rowCount()>=1)
                {
                    echo '<script language="javascript">alert("Excluído!!");'
                    . 'document.location="../search.php?carname='.$modelo.'";';
                    echo '</script>';       
                    
                }
    }
  
  
    function GetnameCar($carname){
        $gnc = parent::getConn()->prepare("SELECT * FROM `carros` WHERE `MODELO` LIKE '%$carname%'");
        $gnc->execute();
        if($gnc->rowCount()>=1){
            $listname = $gnc->fetch(PDO::FETCH_ASSOC);
            
            echo'<table class="view-data"><thead><tr><th colspan="3" class="data-title">'.$listname['MODELO'].'</th></tr></thead><tbody>
              <tr><td>PEÇAS</td><td colspan="2">LARGURA x ALTURA</td></tr>';
            
                foreach ($listname as $iten=> $value)
                {
                  echo "<tr><td>$iten</td><td>$value</td></tr>";
                }
            echo'</tbody>
             </table>
             <form method="POST" enctype="multipart/form-data" action="./edit.php" class="form-edit">
             <input type="hidden" value="'.$listname['MODELO'].'" name="indiceModel"/>
             <input type="submit" value="Editar" name="editFile" class="btn-edit"/>
             </form><br>';
          }
         
        else{
            echo '<main class="not-result"><div><h2>OPS.. Não houve resultados!</h2></div></main>';
        }
            
    }
   /* function GetNumberResult($carname)
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
                echo $totresult;
            }
        }
        else{echo'0';}
        
        
       
    }
    
    function GetTimerProcess($carname){
       
        $getTimeResult = parent::getConn()->prepare("SELECT * FROM `carros` WHERE `MODELO` LIKE '%$carname%'");
        $getTimeResult->execute();
        if($getTimeResult->rowCount()>=1 or $getTimeResult->rowCount()==0){
 
            $tempo = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
            printf("%0.16f segundos", $tempo/1000000);
        }
        
    }*/
}
