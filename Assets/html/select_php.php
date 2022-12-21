<?php 
include '../php/functions.php'; 
include '../php/url.php';
include '../php/define.php';
?>
<select onchange="SelectValue('PastaOption0', 'selectDiv'),IputNovaPasta('NovaPasta', '#PastaOption0', '#NvaPasta')" name="pastaativa" id="PastaOption0" class="form-control js-example-basic-multiple">
<option value="<?=URL_ANTERIO?>" selected><?=URL_ANTERIO?> (ATUAL)</option>
<?=BUSCPASTA?>
<option value="NovaPasta">Criar Nova Pasta</option>
</select>
<input onchange="NvaPast()"  class="form-control Nvps" placeholder="Nova pasta" style="display: none;" type="text"  id="NvaPasta">
<div id="finalres"></div>
<style>
    select:has(option[value="<?=URL_ANTERIO?>"]) {
  color: #BD5B46;
}
</style>
<script>
    window.onload = SelectValue('PastaOption0', 'selectDiv'),IputNovaPasta('NovaPasta', '#PastaOption0', '#NvaPasta');
</script>
