<?php
function buscarPastaIndex(){
    $path = "../doc/CURSOS/";
	$diretorio = dir($path);

		while($arquivo = $diretorio -> read()){
		if ($arquivo != '.' && $arquivo != '..' && $arquivo != 'documentação de projetos' && $arquivo != 'sobre as pastas.txt'){
			$arquivof .= $arquivo.'<br/>';
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


?>