<?php
require_once "../modulos/php/PagesPhp.php";
require_once "../modulos/php/Pages_gravarPost.php";
?>

<div class='container'>


<div id="resultado"></div>


<br />

			<form id="favoritar"  method="post"  >
				 <div class="form-group">
				    <button  type="submit"  style="width:100%;" name="button2" class="btn btn-dark">Enviar</button>
					<br /><br />
					<label for="inputState" class="form-label">Onde Salvar</label>
					<select name="pastaativa" id="PastaOption" class="form-select">
						 <?=$GetPast?>
						  </select>
						<br />
					<input onkeyup="titleLink('#title1','#Link1')" name="title"  type="text" id="title1" class="form-control" placeholder="TITULO">
					
					<input id="Link1" name="link"  type="text" class="form-control" placeholder="LINK DO ARQUIVO">
					<br />
					<textarea name="editor" id="editor" width="100%"></textarea>
				</div>
			</form>

		

<script>CKEDITOR.replace( 'editor' );</script>

<script type="text/javascript">
/*
$(function(){

    $('#favoritar').submit(function(event){
        event.preventDefault();
        var formDados = new FormData($(this)[0]);

        $.ajax({
            url:'http://localhost:83/www/modulos/php/Pages_gravarPost.php',
            type:'POST',
            data:formDados,
            cache:false,
            contentType:false,
            processData:false,
            success:function(data){
                $('#resultado').html(data);
                //alert('Favoritado Com Sucesso!');

            },
            dataType:'html'
        });
        return false;
    });
});
*/







</script>



</div>
