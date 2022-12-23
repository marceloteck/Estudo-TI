<?php
//?antigo='+dirpstAntg+'$novo='+dirpstNv,
$novoGET = $_GET['novo'];
$antigoGET = $_GET['antigo'];

if(LINK_POST != URL_UTIMA){
    $NameAtg = './Posts/'.PASTA_POST.'/'.URL_UTIMA.'.php';
    $NameNv = './Posts/'.PASTA_POST.'/'.LINK_POST.'.php';
    $rsutFnal = rename($NameAtg, $NameNv); // Resultado: TRUE / 
    if($rsutFnal == true){
      echo '<script>alert("Sucesso");</script>';
    }else{
        echo '<script>alert("Error");</script>';
    }
  }
?>