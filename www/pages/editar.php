<?php
require_once "../modulos/php/PagesPhp.php";
//require_once "../modulos/php/Pages_gravarPost.php";
?>

<div class='container'>


<div id="resultado"></div>


<br />

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
				</div>
			</form>
</div>
<script>CKEDITOR.replace( 'editor1' );</script>