<?php
require_once "../modulos/php/PagesPhp.php";
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
function pastasMissa(){
$path = "../../doc/cursos/";
	$diretorio = dir($path);

	while($arquivo = $diretorio -> read()){
	if ($arquivo != '.' && $arquivo != '..'){
		
		echo '
		<table class="table table-dark table-striped">
		<thead>
				<tr>
				  <th scope="col">'.$arquivo.'</th>
				</tr>
			  </thead><tbody>
			  ';
		
		
		$path1 = $path.$arquivo;
		
		$empty = ((count(glob("$path1/*")) === 0) ? true : false);
		if(!$empty){
			$dirr = dir($path1);
			while($ar = $dirr -> read()){
				if ($ar != '.' && $ar != '..'){
				$arf = str_replace(".php", "", $ar);
				$arf = str_replace("-", " ", $arf);
				$arf = ucfirst($arf);
						echo '<tr>
								  <td><a href="?url='.$path1.'/'.$arf.'">'.$arf.'</a></td>
							 </tr>';		
				}
			}			
		$dirr -> close();
		
		}else{
			echo '<tr><td>Nenhuma m&uacute;sica ainda.</td></tr>';					
		}
		echo '</tbody></table>';
	}
	}
	$diretorio -> close();	
}

pastasMissa();


?>
      </div>
    </div>
  </div>
</div>



<br />
	<div id="formedit" style="display: none;">
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