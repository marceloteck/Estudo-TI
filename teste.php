<?php
require_once 'Assets/php/url.php';
function Apagar_Arquivos($diretory, $files){
         $resultado = unlink($diretory.'/'.$files);
         if($resultado){
            echo "<script>alert('apagou');</script>";
        }else{
            echo "<script>alert('não apagou');</script>";
         }
}
function Apagar_Pastas_Arquivos($diretory){
        $files = array_diff(scandir($diretory), array('.','..')); 
        foreach ($files as $file) { 
        (is_dir("$diretory/$file")) ? Apagar_Pastas_Arquivos("$diretory/$file") : unlink("$diretory/$file"); 
        } 
        $resultado = rmdir($diretory);
        if($resultado){
            echo "<script>alert('apagou');</script>";
        }else{
              echo "<script>alert('não apagou');</script>";
         }
}

if(GET_TRUE('dir') && GET_TRUE('file')){
    Apagar_Arquivos(GET('dir'), GET('file'));
}else if(GET_TRUE('dirfolder')){
    Apagar_Pastas_Arquivos(GET('dirfolder'));
}


?>


