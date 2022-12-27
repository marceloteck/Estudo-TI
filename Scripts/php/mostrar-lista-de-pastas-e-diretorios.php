<!--starthtml--> 
function ListPasts($pastaLc){
   // error_reporting(0);
    $path = $pastaLc;
	$diretorio = dir($path);
		while($arquivo = $diretorio -> read()){
		if ($arquivo != 'index.php' && $arquivo != '.' && $arquivo != '..'){
           $arquiv .= $arquivo."<br>";
		}
	}
	$diretorio -> close();
    return $arquiv;
}
echo ListPasts('./Scripts'); <!--endhtml--><!-- /** --TITULO--:mostrar lista de pastas e diretorios| --LINK--:./Scripts/php/mostrar-lista-de-pastas-e-diretorios.php| **/ -->