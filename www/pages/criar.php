<div class='container'>
<br />
<script>
	$(document).ready(function() {
		$('#PastaOption').select2();
	});
</script>
			<form  method="post" action="#">
				 <div class="form-group">
				    <button type="submit"  style="width:100%;" name="button2" class="btn btn-dark">Enviar</button>
					<br /><br />
					<label for="inputState" class="form-label">Onde Salvar</label>
					<select name="pastaativa" id="PastaOption" class="form-select">
						 <?=PASTAS_ESTUDOS?>
						  </select>
						<br />
					<input onkeyup="titleLink('#title1','#Link1')" name="title"  type="text" id="title1" class="form-control" placeholder="TITULO">
					
					<input id="Link1" name="link"  type="text" class="form-control" placeholder="LINK DO ARQUIVO">
					<br />
					<textarea name="editor1" id="editor1" width="100%"></textarea>
				</div>
			</form>

		



</div>
