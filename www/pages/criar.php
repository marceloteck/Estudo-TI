<?php
if(isset($_GET['pasta'])){
	$GetPast = $_GET['pasta'];
	$GetPst  = explode('|', $GetPast);
	$coutPst = count($GetPst);
	
	for ($i = 1; $i < $coutPst; $i++) {
		$GetPast .= "<option value='$GetPst[$i]'>$GetPst[$i]</option>";
	}
}else{
	$GetPast = "<option>Erro no script</option>";

}

?>

<div class='container'>
<br />

			<form  method="post" action="#">
				 <div class="form-group">
				    <button type="submit"  style="width:100%;" name="button2" class="btn btn-dark">Enviar</button>
					<br /><br />
					<label for="inputState" class="form-label">Onde Salvar</label>
					<select name="pastaativa" id="PastaOption" class="form-select">
						 <?=$GetPast?>
						  </select>
						<br />
					<input onkeyup="titleLink('#title1','#Link1')" name="title"  type="text" id="title1" class="form-control" placeholder="TITULO">
					
					<input id="Link1" name="link"  type="text" class="form-control" placeholder="LINK DO ARQUIVO">
					<br />
					<textarea name="editor1" id="editor1" width="100%"></textarea>
				</div>
			</form>

		

<script>CKEDITOR.replace( 'editor1' );</script>

</div>
