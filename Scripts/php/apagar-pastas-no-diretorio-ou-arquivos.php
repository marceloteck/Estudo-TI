<!--starthtml--> function delete_files($diretory, $files){
         $resultado = unlink($diretory.'/'.$files);
         if($resultado){
            //echo "<script>alert('apagou');</script>";
        }else{
           // echo "<script>alert('não apagou');</script>";
         }
}
function delete_files_folder($diretory){
        $files = array_diff(scandir($diretory), array('.','..')); 
        foreach ($files as $file) { 
        (is_dir("$diretory/$file")) ? delete_files_folder("$diretory/$file") : unlink("$diretory/$file"); 
        } 
        $resultado = rmdir($diretory);
        if($resultado){
            //echo "<script>alert('apagou');</script>";
        }else{
            //echo "<script>alert('não apagou');</script>";
         }
}

if(GET_TRUE('dir') && GET_TRUE('file')){
    delete_files(GET('dir'), GET('file'));
}else if(GET_TRUE('dirfolder')){
    delete_files_folder(GET('dirfolder'));
}
 <!--endhtml--><!-- /** --TITULO--:apagar pastas no diretorio ou arquivos| --LINK--:./Scripts/php/apagar-pastas-no-diretorio-ou-arquivos.php| **/ -->