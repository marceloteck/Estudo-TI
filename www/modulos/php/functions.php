<?php
function buscarPastaIndex($valor){
    $path = "../doc/CURSOS/";
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

?>