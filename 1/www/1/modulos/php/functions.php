<?php
#region salvar 1
/*
//caso der problema usar esse código pra liberar o erro 
function buscarPastaIndex($valor){
    //$path = "../doc/CURSOS";
	//$diretorio = dir($path)'';
	$diretorio = '';

		//while($arquivo = $diretorio -> read()){
		if ($arquivo != '.' && $arquivo != '..' && $arquivo != 'documentação de projetos' && $arquivo != 'sobre as pastas.txt'){

			switch ($valor) {
				case 'option':
					$arquivof .= "<option value='$arquivo'>$arquivo</option>";
					break;
				case 'simples':
					$arquivof .= '|'.$arquivo;
					break;
			}
		}
	//}
	//$diretorio -> close();
	return $arquivof;
}
#endregion fimsalvar
*/

function buscarPastaIndex($valor){
    $path = "../doc/CURSOS";
	$diretorio = dir($path);

		while($arquivo = $diretorio -> read()){
		if ($arquivo != '.' && $arquivo != '..' && $arquivo != 'documentação de projetos' && $arquivo != 'sobre as pastas.txt'){

			switch ($valor) {
				case 'option':
					$arquivof .= "<option value='$arquivo'>$arquivo</option>";
					break;
				case 'simples':
					$arquivof .= '|'.$arquivo;
					break;
			}
		}
	}
	$diretorio -> close();
	return $arquivof;
}


function buscarArquivodaPasta($valor){
   $path = "../doc/CURSOS/".$valor.'/';
	$diretorio = dir($path);

		while($arquivo = $diretorio -> read()){
		if ($arquivo != '.' && $arquivo != '..'){
			$arquivof .= $arquivo.'<br/>';
		}
	}
	$diretorio -> close();
	return $arquivof;
}

function GetNavtab($valor)
{
	
	switch ($valor) {
		case 'pastaestudo':
			return '?pasta='.buscarPastaIndex('simples');
			break;

	}
}
define('GETNAVTAB', GetNavtab('pastaestudo'));



function pastasMissa(){
	$path = "../doc/cursos/";
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
			$gettab = $_GET['tab'];
			
			$empty = ((count(glob("$path1/*")) === 0) ? true : false);
			if(!$empty){
				$dirr = dir($path1);
				while($ar = $dirr -> read()){
					if ($ar != '.' && $ar != '..'){
					$arf = str_replace(".php", "", $ar);
					$arf = str_replace("-", " ", $arf);
					$arf = ucfirst($arf);
							echo '<tr>
									  <td><a href="?tab='.$gettab.'&url='.$path1.'/'.$arf.'">'.$arf.'</a></td>
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
	
	
	
	



?>