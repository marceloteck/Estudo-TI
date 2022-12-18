<?php include '../php/functions.php'; ?>
<select onchange="SelectValue('PastaOption0', 'selectDiv'),IputNovaPasta('NovaPasta', '#PastaOption0', '#NvaPasta')" name="pastaativa" id="PastaOption0" class="form-control js-example-basic-multiple">
<?=BUSCPASTA?>
<option value="NovaPasta">Criar Nova Pasta</option>
</select>
<input onchange="NvaPast()"  class="form-control Nvps" placeholder="Nova pasta" style="display: none;" type="text"  id="NvaPasta">
<div id="finalres"></div>

<button ></button>