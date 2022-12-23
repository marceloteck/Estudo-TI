<?php
require_once 'conf.php';
// DEFINE LOCAL
define('BUSCPASTA', buscarPastaIndex("../../Posts"));
define('BUSCPASTA_SCRIPT', buscarPastaIndex("../../Scripts"));

//FUNÇÕES PHP
function buscarPastaIndex($pastaLc){
    $path = $pastaLc;
	$diretorio = dir($path);

		while($arquivo = $diretorio -> read()){
		if ($arquivo != 'index.php' && $arquivo != '.' && $arquivo != '..' && $arquivo != 'documentação de projetos' && $arquivo != 'sobre as pastas.txt'){
			$arquivo_TITLE = str_replace('-', ' ', $arquivo);
			$arquivo_TITLE = strtoupper($arquivo_TITLE);
			$arquivof .= "
			<option value='$arquivo'>$arquivo_TITLE</option>";
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