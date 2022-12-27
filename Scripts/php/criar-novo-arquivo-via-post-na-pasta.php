<!--starthtml-->     // criar arquivo e escrever 
    function CriarArquivo($dir){
        define("DIR", $dir);
        define('PASTA_DIR', DIR . PASTA . '/');
        define('ARQUIVO', PASTA_DIR . LINK . '.php');

        if(GET_TRUE('edit')){ RenomeArquv(LINK.'.php', GET('edit').'.php', DIR.PASTA.'/');}

        $fp = fopen(ARQUIVO, "w+");
        $escrito = fwrite($fp, EDITOR);
        if($escrito){
            echo 'CRIADO COM SUCESSO';
        }else{
            echo 'NÃO FOI POSSIVEL CRIAR';
           }
        fclose($fp);
    }
   
    define('TITULO', POST('title'));
    define('LINK', POST('link'));
    define('TEXT', POST('textInput'));
    define('PASTA', POST('select'));
    define('EDITOR', TEXT);

    if(POST_TRUE('title') or POST_TRUE('link')){
        CriarArquivo('./teste/');
        // usar o required no formulario caso não tenha o POST ativo.
    } <!--endhtml--><!-- /** --TITULO--:criar novo arquivo via POST na pasta| --LINK--:./Scripts/php/criar-novo-arquivo-via-post-na-pasta.php| **/ -->