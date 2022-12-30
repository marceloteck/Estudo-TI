<!--starthtml--> //copiar diretorios e arquivos
function copiar_diretorio($diretorio, $destino, $ver_acao = false){
    if ($destino[strlen($destino) - 1] == '/'){
       $destino = substr($destino, 0, -1);
      }
    if (!is_dir($destino)){
       if ($ver_acao){
         // echo "Criando diretorio {$destino}\n";
          }
       mkdir($destino, 0755);
    }
    $folder = opendir($diretorio);
    while ($item = readdir($folder)){
       if ($item == '.' || $item == '..'){
          continue;
          }
       if (is_dir("{$diretorio}/{$item}")){
        copiar_diretorio("{$diretorio}/{$item}", "{$destino}/{$item}", $ver_acao);
       }else{
          if ($ver_acao){
             //echo "Copiando {$item} para {$destino}"."\n";
          }
          copy("{$diretorio}/{$item}", "{$destino}/{$item}");
          }
    }
 } <!--endhtml--><!-- /** --TITULO--:copiar diretorios e arquivos com php| --LINK--:./Scripts/php/copiar-diretorios-e-arquivos-com-php.php| **/ -->