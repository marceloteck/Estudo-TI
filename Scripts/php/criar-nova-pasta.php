<!--starthtml--> //CRIAR NOVA PASTA PHP
function CriarPast($NamePast, $LocalPast){
         $resultado = mkdir( $LocalPast.str_replace(" ", "_", strtolower($NamePast)) , 0755, true);
         if($resultado){
            //echo ' Pasta criada com sucesso!!!';
         }else{
            //echo 'Erro ao Criar pasta ou já existe!';
         }
}

if(GET_TRUE('PASTA')){
   CriarPast(GET('PASTA'), '../../Posts/');
}
 <!--endhtml--><!-- /** --TITULO--:CRiar nova pasta| --LINK--:./Scripts/php/criar-nova-pasta.php| **/ -->