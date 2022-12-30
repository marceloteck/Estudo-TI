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


//VERSÃO ATUALIZADA

function CriarArquivo($dir, $pasta, $link, $texto){
    define("DIR", $dir);

    define('LINK', $link);
    define('PASTA', $pasta);
    define('EDITOR', $texto);

    define('PASTA_DIR', DIR . PASTA . '/');
    define('ARQUIVO', PASTA_DIR . LINK );


    $fp = fopen(ARQUIVO, "w+");
    $escrito = fwrite($fp, EDITOR);
    if($escrito){
       // echo 'CRIADO COM SUCESSO';
    }else{
      //  echo 'NÃO FOI POSSIVEL CRIAR';
       }
    fclose($fp);
}


define('LINK_FORM', POST('link'));
define('TEXT_FORM', POST('textInput'));
define('PASTA_FORM', POST('select'));
define('EDITOR_FORM', TEXT_FORM);

if(GET_TRUE('title') or GET_TRUE('link')){
    CriarArquivo('./'.GET('NameProjeto').'/','', '.htacces', 'TEXTO');
    // usar o required no formulario caso não tenha o POST ativo.
} <!--endhtml--><!-- /** --TITULO--:criar nova pasta| --LINK--:./Scripts/php/criar-nova-pasta.php| **/ -->