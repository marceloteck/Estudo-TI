<?php
require_once 'conf.php';
$gtPast = $_GET['past'];
function CriarPast($NamePast, $LocalPast){
    $novapasta = str_replace(" ", "_", $NamePast);
	$novapasta = strtolower($novapasta);
    $novapasta = $LocalPast.$novapasta;
    $resultado = mkdir( $novapasta , 0755, true);
    if($resultado){
        echo '<div style="display: block;" class="modal fade show" id="MODALdiv" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="fs-5" id=""><i class="fas fa-exclamation-triangle"></i> Aviso</h1>
                  <button onclick="hideNone(\'#MODALdiv\')" type="button" class="btn-close"></button>
                </div>
                <div class="modal-body">
                 <div id="AvsAlert1"><i class="fas fa-info-circle"></i> Pasta criada com <strong>sucesso!!!</strong>
                 </div>
                 </div>
                <div class="modal-footer">
                  <button onclick="hideNone(\'#MODALdiv\')" type="button" class="btn btn-secondary">Fechar</button>
                  
                </div>
              </div>
            </div>
          </div>
          <div style="display: block;"  id="MODALdiv-1" class="modal-backdrop fade show"></div>';
		}else{
            echo '<div style="display: block;" class="modal fade show" id="MODALdiv" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="fs-5" id=""><i class="fas fa-exclamation-triangle"></i> Aviso</h1>
                  <button onclick="hideNone(\'#MODALdiv\')" type="button" class="btn-close"></button>
                </div>
                <div class="modal-body">
                 <div id="AvsAlert1"><i class="fas fa-info-circle"></i> Erro ao Criar pasta ou <strong>já existe!</strong>
                 </div>
                 </div>
                <div class="modal-footer">
                  <button onclick="hideNone(\'#MODALdiv\')" type="button" class="btn btn-secondary">Fechar</button>
                  
                </div>
              </div>
            </div>
          </div>
          <div style="display: block;"  id="MODALdiv-1" class="modal-backdrop fade show"></div>';
		}
}
if($gtPast != ""){
   CriarPast($gtPast, '../../Posts/');
}
?>