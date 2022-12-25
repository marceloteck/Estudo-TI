<?php
function pastasMissa2(){
	$path = "./Scripts/";
		$diretorio = dir($path);
	
		while($arquivo = $diretorio -> read()){
		if ($arquivo != '.' && $arquivo != '..'&& $arquivo != 'index.php'){
			
			echo '
            <div class="bg-white py-2 collapse-inner rounded DivConteudo"><a href="/url-script/pastas?dir='.$arquivo.'">
            <h4 class="collapse-header">'.$arquivo.'</h4>
			</a>
			';
			
			
			$path1 = $path.$arquivo;
		
			
			$empty = ((count(glob("$path1/*")) === 0) ? true : false);
			if(!$empty){
				$dirr = dir($path1);
				while($ar = $dirr -> read()){
					if ($ar != '.' && $ar != '..' && $ar != 'index.php'){
					$arL = str_replace(".php", "", $ar);
					$arf = str_replace("-", " ", $arL);
					$arf = ucfirst($arf);
							echo '
                            <a  data-toggle="tooltip" data-placement="top" title="'.$arf.'" class="collapse-item" href="/url-script/'.$arquivo.'/'.$arL.'">'.limitChars("$arf", 4).'</a>';		
					}
				}			
			$dirr -> close();
			
			}else{
				echo '<a  data-toggle="tooltip" data-placement="top" title="[ Nada para mostrar ]" class="collapse-item" href="#">[ Nada para mostrar ]</a>';					
			}
			echo ' </div>';
		}
		}
		$diretorio -> close();	
	}
pastasMissa2();
    ?>
    
<style>
 a{ outline: none; text-decoration: none;}
</style>     

