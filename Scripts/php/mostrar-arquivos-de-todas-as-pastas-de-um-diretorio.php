<!--starthtml--> function DiretoryPasts($Pastas){
	$path = $Pastas;
		$diretorio = dir($path);
	
		while($PastaLocal = $diretorio -> read()){
		if ($PastaLocal != '.' && $PastaLocal != '..'&& $PastaLocal != 'index.php'){
            $path1 = $path.'/'.$PastaLocal;
			$empty = ((count(glob("$path1/*")) === 0) ? true : false);
			if(!$empty){
				$dirr = dir($path1);
				while($ar = $dirr -> read()){
					if ($ar != '.' && $ar != '..' && $ar != 'index.php'){
					$arL = str_replace(".php", "", $ar);
					$arf = str_replace("-", " ", $arL);
					$arf = ucfirst($arf);
						//echo  $path1.$arf;	
                        echo '
                            <tr>
                            <td><a class="collapse-item" href="/'.URL_ANTERIO.'/'.$arquivo.'/'.$arL.'">'.$arf.'</a></td>
                        </tr>
                    ';			
					}
				}			
			$dirr -> close();
			
			}else{
				//echo '[ Nada para mostrar ]';					
			}
			//echo '[FORA DA REPETIÇÃO ]';
		}
		}
		$diretorio -> close();	
	}  <!--endhtml--><!-- /** --TITULO--:mostrar arquivos de todas as pastas de um diretorio| --LINK--:./Scripts/php/mostrar-arquivos-de-todas-as-pastas-de-um-diretorio.php| **/ -->