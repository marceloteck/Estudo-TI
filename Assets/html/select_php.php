<?php include '../php/functions.php'; ?>
<select onchange="IputNovaPasta('NovaPasta', '#PastaOption0', '#NvaPasta')" name="pastaativa" id="PastaOption0" class="form-control">
<?=BUSCPASTA?>
<option value="NovaPasta">Criar Nova Pasta</option>
    </select>

<input onchange="NvaPast()"  class="form-control Nvps" placeholder="Nova pasta" style="display: none;" type="text"  id="NvaPasta">


<style>
    .Nvps{
        margin-top: 5px;
        border-color:#4e73df;
    }
    .Nvps::placeholder {
  color: #4e73df;
}
</style>

<script>

/// PEGAR VALOR DE SELECT
function IputNovaPasta(Texto, IdInput, IdMostrar){
    var select  = document.querySelector(IdInput);
    var Mstrar  = document.querySelector(IdMostrar);
    var opcaoValor = select.options[select.selectedIndex].value;
    if(Texto == opcaoValor){
        Mstrar.style.display = "block";
    }else{
        Mstrar.style.display = "none";
    }
}

function NvaPast(){
    var IDnv  = document.querySelector('#NvaPasta').value;
    IncludeJS('Assets/php/CriarPasta.php?past='+IDnv, '#finalres');
}
</script>
<div id="finalres"></div>
<?php
//include '../php/CriarPasta.php';
/*
<div id="alertadiv1"></div>
<script type="text/javascript">
    function alerta(TEXto, AvisoCor, DivId){
                $.ajax({
                    url: 'Assets/html/alerta.php?aviso='+TEXto+'&cor='+AvisoCor,
                    type: 'GET',
                    success: function(data) {
                    $(DivId).html(data);
                    }
                });
            }
</script>*/
?>