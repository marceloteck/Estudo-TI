<!--starthtml--> function RenomeArquv($novoGET, $antigoGET, $Pasta){
   if($novoGET  != $antigoGET){
        $NameAtg = $Pasta.$antigoGET;
        $NameNv = $Pasta.$novoGET;
        $rsutFnal = rename($NameAtg, $NameNv); // Resultado: TRUE / 
        if($rsutFnal == true){
          // echo '<script>alert("Sucesso");</script>'; 
        }else{
          // echo '<script>alert("error");</script>'; 
        }
      }

}

//RenomeArquv(NOVO_NOME.PHP, ANTIGO_NOME.PHP, ./DIR/PASTAlOCAL/)
   if(GET_TRUE('edit')){
            RenomeArquv(LINK.'.php', GET('edit').'.php', DIR.PASTA.'/');
        } <!--endhtml--><!-- /** --TITULO--:renomear aquivo com php| --LINK--:./Scripts/php/renomear-aquivo-com-php.php| **/ -->