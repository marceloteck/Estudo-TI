<!--starthtml--> //php
function link_A($link, $title,$htmlLink){
    echo "<psq><a $htmlLink href='$link'>$title</a></psq>";	
}

function PstPesquisa($pasta,$urldir){
	$path = $pasta;
		$diretorio = dir($path);
		$i = 1;
		while($arquivo = $diretorio -> read()){
		if ($arquivo != '.' && $arquivo != '..'&& $arquivo != 'index.php'){
			$path1 = $path.$arquivo;

           link_A($urldir.'/pastas?dir='.$arquivo, '<i class="material-icons">folder</i> '.$arquivo,'');
					
						
			$empty = ((count(glob("$path1/*")) === 0) ? true : false);
			if(!$empty){
				$dirr = dir($path1);
				while($ar = $dirr -> read()){
					if ($ar != '.' && $ar != '..' && $ar != 'index.php'){
					$arL = str_replace(".php", "", $ar);
					$arf = str_replace("-", " ", $arL);
					$arf = ucfirst($arf);

                    link_A($urldir.'/'.$arquivo.'/'.$arL, '<i class="material-icons">insert_drive_file</i> '.$arf,'');
					} 
				}			
			$dirr -> close();
			}else{
									
			}
			
		}
		$i++;
		}
		$diretorio -> close();	
	}
   
 
<div class="listBusc" id="listBuscID">
  <?//PstPesquisa("./Posts/","/url")?>
  <?//PstPesquisa("./Scripts/","/url-script")?>
</div>
  
       <!--endhtml--><!-- /** --TITULO--:pesquisar em diretorio php| --LINK--:./Scripts/php/pesquisar-em-diretorio-php.php| **/ -->