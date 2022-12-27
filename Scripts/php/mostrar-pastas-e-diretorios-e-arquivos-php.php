<!--starthtml--> function DiretoryPasts($Pastas){
	$path = $Pastas;
		$diretorio = dir($path);
	
		while($PastaLocal = $diretorio -> read()){
		if ($PastaLocal != '.' && $PastaLocal != '..'&& $PastaLocal != 'index.php'){
            $path1 = $path.$PastaLocal;

			echo $PastaLocal; //*** */

			$empty = ((count(glob("$path1/*")) === 0) ? true : false);
			if(!$empty){
				$dirr = dir($path1);
				while($ar = $dirr -> read()){
					if ($ar != '.' && $ar != '..' && $ar != 'index.php'){
					$arL = str_replace(".php", "", $ar);
					$arf = str_replace("-", " ", $arL);
					$arf = ucfirst($arf);
							echo  $path1.$arf;		
					}
				}			
			$dirr -> close();
			
			}else{
				echo '[ Nada para mostrar ]';					
			}
			echo '[FORA DA REPETIÇÃO ]';
		}
		}
		$diretorio -> close();	
	}
    DiretoryPasts('/pasta'); <!--endhtml--><!-- /** --TITULO--:mostrar pastas e diretorios e arquivos php| --LINK--:./Scripts/php/mostrar-pastas-e-diretorios-e-arquivos-php.php| **/ -->