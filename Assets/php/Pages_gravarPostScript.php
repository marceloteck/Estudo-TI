<?php
/*if(isset($_POST['title']) or isset($_POST['link'])){
    define('TITULO_SCRIPT',$_POST['title']);
    define('LINK_SCRIPT',$_POST['link']);
    define('HTML_PHP_COD',str_replace('<!-- HTML  ou PHP -->','', $_POST['html']));
    define('CSS_CODE',str_replace('/* CSS /','', $_POST['css']));
    define('JS_CODE',str_replace('/*JavaScript & jQuery/','', $_POST['js']));
    define('PASTA_SCRIPT',$_POST['select']);
    
    //codigo abaixo 
    /*if (HTML_PHP_COD != "") {
      define('HTML_SCRIPT', '<!--starthtml--> '.HTML_PHP_COD.' <!--endhtml-->');
    }else{
      define('HTML_SCRIPT', '');
    }
    if(JS_CODE != ""){
    define('JS_SCRIPT', '<!--startJs--> <script> '.JS_CODE.' </script> <!--endJs-->');    
    }else{
      define('JS_SCRIPT', ''); 
    }
    if(CSS_CODE != ""){
      define('CSS_SCRIPT', '<!--startCss--> <style> '.CSS_CODE.' </style> <!--endCss-->');    
      }else{
        define('CSS_SCRIPT', ''); 
      }
*/
 


      if(POST_TRUE('title') or POST_TRUE('link')){
      define('TITULO_SCRIPT',POST('title'));
      define('LINK_SCRIPT',POST('link'));
      define('HTML_PHP_COD',str_replace('<!-- HTML  ou PHP -->','',POST('html')));
      define('CSS_CODE',str_replace('/* CSS */','', POST('css')));
      define('JS_CODE',str_replace('/*JavaScript & jQuery*/','', POST('js')));
      define('PASTA_SCRIPT', POST('select'));
    
        function BuscaPorDefine($defineDfLocal, $NvDefine, $InTagBusc, $FnTagBusc){
          if ($defineDfLocal != "") {
            define($NvDefine, $InTagBusc.$defineDfLocal.$FnTagBusc);
          }else{
            define($NvDefine, '');
          }
        }

        BuscaPorDefine(HTML_PHP_COD, 'HTML_SCRIPT', '<!--starthtml--> ', ' <!--endhtml-->');
        BuscaPorDefine(JS_CODE, 'JS_SCRIPT', '<!--startJs-->  <script> ', ' </script> <!--endJs-->');
        BuscaPorDefine(CSS_CODE, 'CSS_SCRIPT', '<!--startCss--> <style> ', ' </style> <!--endCss-->');


    define('EDITOR_SCRIPT', CSS_SCRIPT.HTML_SCRIPT.JS_SCRIPT);
    function CriarArquivo(){
      if(LINK_SCRIPT != URL_UTIMA){
        $NameAtg = './Scripts/'.PASTA_SCRIPT.'/'.URL_UTIMA.'.php';
        $NameNv = './Scripts/'.PASTA_SCRIPT.'/'.LINK_SCRIPT.'.php';
        $rsutFnal = rename($NameAtg, $NameNv); // Resultado: TRUE / 
        if($rsutFnal == true){
          $renameOK = "Renomeado com Sucesso!";
        }else{
          $renameOK = "";
        }
      }else{
        $renameOK = "";
      }

        $pasta = './Scripts/'.PASTA_SCRIPT.'/';
        $arquivo = $pasta.LINK_SCRIPT.'.php';
        $Linknv = URL_PRINCIPAL . "/script?editscript=Scripts"."/" . PASTA_SCRIPT . "/".LINK_SCRIPT;
        $fp = fopen($arquivo, "w+");
        $InfoEscrita = '<!-- /** --TITULO--:' . TITULO_SCRIPT .'| --LINK--:' . $arquivo .'| **/ -->';
        if(str_replace('<!-- /**','',EDITOR_SCRIPT)){
          $conteudoSCRIPT = explode('<!-- /**', EDITOR_SCRIPT);
          $conteudoSCRIPT = $conteudoSCRIPT[0];
        }else{
          $conteudoSCRIPT = EDITOR_SCRIPT;
        }

        $format =  $conteudoSCRIPT.$InfoEscrita;
        $escrito = fwrite($fp, $format);
        if($escrito){
          
            echo '<div style="display: block;" class="modal fade show" id="MODALdiv" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="fs-5" id=""><i class="fas fa-exclamation-triangle"></i> Aviso</h1>
                  <button onclick="hideNone(\'#MODALdiv\'),RedirectUrl(\''.$Linknv.'\')" type="button" class="btn-close"></button>
                </div>
                <div class="modal-body">
                 <div id="AvsAlert1"><i class="fas fa-info-circle"></i> Arquivo enviado com <strong>Sucesso!</strong> 
                 <br>
                 '.$renameOK.'
                 </div>
                 </div>
                <div class="modal-footer">
                  <button onclick="hideNone(\'#MODALdiv\'),RedirectUrl(\''.$Linknv.'\')" type="button" class="btn btn-secondary">Fechar</button>
                  
                </div>
              </div>
            </div>
          </div>
          <div style="display: block;" onclick="hideNone(\'#MODALdiv\')" id="MODALdiv-1" class="modal-backdrop fade show"></div>';
        }else{
            echo '<div style="display: block;" class="modal fade show" id="MODALdiv" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="fs-5" id=""><i class="fas fa-exclamation-triangle"></i> Aviso</h1>
                  <button onclick="hideNone(\'#MODALdiv\')" type="button" class="btn-close"></button>
                </div>
                <div class="modal-body">
                 <div id="AvsAlert1"><i class="fas fa-info-circle"></i> <strong>N??o foi possivel</strong> criar o arquivo
                 </div>
                 </div>
                <div class="modal-footer">
                  <button onclick="hideNone(\'#MODALdiv\')" type="button" class="btn btn-secondary">Fechar</button>
                  
                </div>
              </div>
            </div>
          </div>
          <div style="display: block;" onclick="hideNone(\'#MODALdiv\')"  id="MODALdiv-1" class="modal-backdrop fade show"></div>';
           }
        fclose($fp);
    }
    if(LINK_SCRIPT != "" && isset($_POST['link'])){
        CriarArquivo();
    }else{
        echo '<div style="display: block;" class="modal fade show" id="MODALdiv" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="fs-5" id=""><i class="fas fa-exclamation-triangle"></i> Aviso</h1>
                  <button onclick="hideNone(\'#MODALdiv\')" type="button" class="btn-close"></button>
                </div>
                <div class="modal-body">
                 <div id="AvsAlert1"><i class="fas fa-info-circle"></i> <strong>ATEN????O</strong> Preencha todos os campos para continuar!
                 </div>
                 </div>
                <div class="modal-footer">
                  <button onclick="hideNone(\'#MODALdiv\')" type="button" class="btn btn-secondary">Fechar</button>
                  
                </div>
              </div>
            </div>
          </div>
          <div style="display: block;" onclick="hideNone(\'#MODALdiv\')" id="MODALdiv-1" class="modal-backdrop fade show"></div>';
       
    }
}
?>

<script>
function RedirectUrl(url){
  window.location.href = url;
}



      function hideNone(IDdv){
        var idModal = document.querySelector(IDdv);
        var idModal1 = document.querySelector(IDdv+'-1');
        idModal.style.display = "none";
        idModal1.style.display = "none";
        idModal.classList.remove("show");
        idModal1.classList.remove("show");
    }
  /* function showBlock(IDdv){
     var idModal = document.querySelector(IDdv);
        var idModal1 = document.querySelector(IDdv+'-1');
       // idModal.hide;
        idModal.style.display = "block";
        idModal1.style.display = "block";
        idModal.classList.toggle("show");
        idModal1.classList.toggle("show");
        alert('aqui');
    }*/
</script>

