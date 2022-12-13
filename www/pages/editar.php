<?php
require_once "../modulos/php/PagesPhp.php";
//require_once "../modulos/php/Pages_gravarPost.php";
?>

<div class='container'>

<?php
function pastasMissa(){
$path = "../../doc/cursos/";
	$diretorio = dir($path);

	while($arquivo = $diretorio -> read()){
	if ($arquivo != '.' && $arquivo != '..'){
		
		echo '<table class="table table-dark table-striped">
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
								  <td>'.$arf.'</td>
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



<!--
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
-->




</div>
<script>CKEDITOR.replace( 'editor1' );</script>