<?php 
include '../php/functions.php'; 
include '../php/url.php';
include '../php/define.php';
//if(isset($_GET['editscript'])){
if(GET_TRUE('editscript')){
  $optionVals = '<option value="'.URL_ANTERIO.'" selected>'.URL_ANTERIO.' (ATUAL)</option>';
}else{
  $optionVals = '';
}
?>
<select style="width:100%" onchange="SelectValue('PastaOption0', 'selectDiv'),IputNovaPasta('NovaPasta', '#PastaOption0', '#NvaPasta')" name="pastaativa" id="PastaOption0" class="form-control js-example-basic-multiple">
<?=$optionVals?>
<?=BUSCPASTA_SCRIPT?>
<option value="NovaPasta">Criar Nova Pasta</option>
</select>
<input onchange="NvaPastScript(),divDE2()"  class="form-control Nvps" placeholder="Nova pasta" style="display: none; width:100%" type="text"  id="NvaPasta">
<div id="finalres2"></div>
<style>
    select:has(option[value="<?=URL_ANTERIO?>"]) {
  color: #BD5B46;
}
</style>
<script>
    window.onload = SelectValue('PastaOption0', 'selectDiv'),IputNovaPasta('NovaPasta', '#PastaOption0', '#NvaPasta');
</script>

