<?php
require_once "modulos/php/PagesPhp.php";
//require_once "../modulos/php/Pages_gravarPost.php";
?>

<style type="text/css">
table tr td a{
	text-decoration: none;
	color: #fff;
}
table tr td a:hover{
	color: #ffcc1a;
}
</style>

<div class='container'>
<br>
	<div id="resultado"></div>
<br>

<div class="accordion " id="accordionExample">
<div class="accordion-item">
	<h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
	  Opções de estudo para edição
      </button>
    </h2>
	<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">

<?php
pastasMissa();
?>
      </div>
    </div>
  </div>
</div>



<br />
	<div id="formedit" <?php
	if(!isset($_GET['url'])){
		echo 'style="display: none;"';
	}else{
		echo 'style="display: block;"';
	} ?>>
			<form id="favoritar" action="#"  method="post"  >
				 <div class="form-group">
				    <button  type="submit"  style="width:100%;" name="button2" class="btn btn-dark">Enviar</button>
					<br /><br />
					<label for="inputState" class="form-label">Onde Salvar</label>
					<select name="pastaativa" id="PastaOption" class="form-select">
                    <option selected value='VALORAQUIPHP'>AMOSTRA (ATUAL)</option>
						 <?=$GetPast?>
						  </select>
						<br />
					<input onkeyup="titleLink('#title1','#Link1')" name="title"  type="text" id="title1" class="form-control" placeholder="TITULO">
					
					<input style="display: none;" id="Link1" name="link"  type="text" class="form-control" placeholder="LINK DO ARQUIVO">
					<br />
					<textarea name="editor" id="editor1" width="100%"></textarea>
					<br>
				</div>
			</form>
	</div>




</div>
<script>CKEDITOR.replace( 'editor1' );</script>