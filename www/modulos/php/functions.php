<?php
function buscarPastaIndex(){
    $path = "doc/";
	$diretorio = dir($path);

	while($arquivo = $diretorio -> read()){
	if ($arquivo != '.' && $arquivo != '..'){
		$arquivof = ucfirst($arquivo);
            return $arquivof.'<br/>';
	}
	}
	$diretorio -> close();	
}

?>