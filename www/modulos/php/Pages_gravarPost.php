<?php
if(isset($_POST['title']) or isset($_POST['link']) or isset($_POST['editor'])){
    define('TITULO_POST',$_POST['title']);
    define('LINK_POST',$_POST['link']);
    define('EDITOR_POST',$_POST['editor']);
    define('PASTA_POST',$_POST['pastaativa']);

    function CriarArquivo(){
        $pasta = '../doc/CURSOS/'.PASTA_POST.'/';
        $arquivo = $pasta.LINK_POST.'.php';
        $fp = fopen($arquivo, "w+");
        $format = '<h1>' . TITULO_POST .'</h1>'. EDITOR_POST;
        $escrito = fwrite($fp, $format);
        if($escrito){
            echo '<br/><div class="alert alert-success  alert-dismissible fade show" role="alert"> Arquivo enviado com <strong>Sucesso!</strong> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
           
        }else{
            echo '<br/><div class="alert alert-success  alert-dismissible fade show" role="alert"> <strong>Não foi possivel</strong> criar o arquivo<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
        fclose($fp);
    }
    if(LINK_POST != "" && isset($_POST['link'])){
        CriarArquivo();
    }
}


//$titulo.'<br>'.$link.'<br>'.$editor.$pastaativa.'<br>'
?>
