<?php
$novoGET = $_GET['novo'];
$antigoGET = $_GET['antigo'];

if($novoGET  != $antigoGET){
    $NameAtg = '../../Scripts/'.$antigoGET.'';
    $NameNv = '../../Scripts/'.$novoGET.'';
    $rsutFnal = rename($NameAtg, $NameNv); // Resultado: TRUE / 
    if($rsutFnal == true){
      echo '<script>alert("Sucesso");</script>';
    }else{
        echo '<script>alert("error");</script>';
    }
  }
?>
