<?php
if(isset($_POST['title']) or isset($_POST['link']) or isset($_POST['editor'])){
    define('TITULO_POST',$_POST['title']);
    define('LINK_POST',$_POST['link']);
    define('EDITOR_POST',$_POST['editor']);
    define('PASTA_POST',$_POST['select']);

    

    function CriarArquivo(){
      if(LINK_POST != URL_UTIMA){
        $NameAtg = './Posts/'.PASTA_POST.'/'.URL_UTIMA.'.php';
        $NameNv = './Posts/'.PASTA_POST.'/'.LINK_POST.'.php';
        $rsutFnal = rename($NameAtg, $NameNv); // Resultado: TRUE / 
        if($rsutFnal == true){
          $renameOK = "Renomeado com Sucesso!";
        }else{
          $renameOK = "";
        }
      }else{
        $renameOK = "";
      }

        $pasta = './Posts/'.PASTA_POST.'/';
        $arquivo = $pasta.LINK_POST.'.php';
        $Linknv = URL_PRINCIPAL . "/editar?edit=Posts"."/" . PASTA_POST . "/".LINK_POST;
        $fp = fopen($arquivo, "w+");
        $InfoEscrita = '<!-- /** --TITULO--:' . TITULO_POST .'| --LINK--:' . $arquivo .'| **/ -->';
        if(str_replace('<!-- /**','',EDITOR_POST)){
          $conteudoPOST = explode('<!-- /**', EDITOR_POST);
          $conteudoPOST = $conteudoPOST[0];
        }else{
          $conteudoPOST = EDITOR_POST;
        }

        $format =  $conteudoPOST.$InfoEscrita;
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
                 <div id="AvsAlert1"><i class="fas fa-info-circle"></i> <strong>Não foi possivel</strong> criar o arquivo
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
    if(LINK_POST != "" && isset($_POST['link'])){
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
                 <div id="AvsAlert1"><i class="fas fa-info-circle"></i> <strong>ATENÇÃO</strong> Preencha todos os campos para continuar!
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

