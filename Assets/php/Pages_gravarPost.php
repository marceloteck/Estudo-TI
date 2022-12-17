<?php
if(isset($_POST['title']) or isset($_POST['link']) or isset($_POST['editor'])){
    define('TITULO_POST',$_POST['title']);
    define('LINK_POST',$_POST['link']);
    define('EDITOR_POST',$_POST['editor']);
    define('PASTA_POST',$_POST['select']);

    /*echo TITULO_POST.
    '<br>'
    .LINK_POST.
    '<br>'
    .EDITOR_POST.
    '<br>'
    .PASTA_POST;*/

    function CriarArquivo(){
        $pasta = './Posts/'.PASTA_POST.'/';
        $arquivo = $pasta.LINK_POST.'.php';
        $fp = fopen($arquivo, "w+");
        $format = '<h1>' . TITULO_POST .'</h1>'. EDITOR_POST;
        $escrito = fwrite($fp, $format);
        if($escrito){
            echo '<div style="display: block;" id="alert" class="alertPost alert alert-success  alert-dismissible fade show" role="alert"> Arquivo enviado com <strong>Sucesso!</strong> <button onclick="MostraOcultar(\'#alert\',\'block\')" type="button" class="close" data-bs-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>';
           
        }else{
            echo '<div style="display: block;" id="alert" class="alertPost alert alert-danger  alert-dismissible fade show" role="alert"> <strong>Não foi possivel</strong> criar o arquivo<button onclick="MostraOcultar(\'#alert\',\'block\')" type="button" class="close" data-bs-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>';
        }
        fclose($fp);
    }
    if(LINK_POST != "" && isset($_POST['link'])){
        CriarArquivo();
    }else{
        echo '
        <div style="display: block;" id="alert"  class="alertPost alert alert-danger  alert-dismissible fade show" role="alert"> 
        <strong>ATENÇÃO</strong> Preencha todos os campos para continuar!
        <button onclick="MostraOcultar(\'#alert\',\'block\')" type="button" class="close" data-bs-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
        </div>
        
        ';
    }
}

?>
