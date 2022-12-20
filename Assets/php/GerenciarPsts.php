<?php
function pastasMissa(){
	$path = "../../Posts/";
		$diretorio = dir($path);
		$i = 1;
		while($arquivo = $diretorio -> read()){
		if ($arquivo != '.' && $arquivo != '..'&& $arquivo != 'index.php'){
			$path1 = $path.$arquivo;
			
			echo '<!-- DataTales Example -->
			<div class="">  
				  <div class="">
					  <div class="table-responsive" width="80%" style="overflow-x: hidden;">
						  <table class="shadow table table-borderless border-top" id="" width="100%" cellspacing="0">			
                                    <thead>
                                        <tr>
                                            <th><div class="confEdit"><button onclick="ApagarArquvs(\'?DirDel=Posts/'.$arquivo.'\',\''.$arquivo.'\')" type="button" class="btn btn-circle btn-sm "> <i class="material-icons">&#xe872;</i></button></div>  # '.$arquivo.'
											
											</th>
                                        </tr>
                                    </thead>
									
									';			
						
			$empty = ((count(glob("$path1/*")) === 0) ? true : false);
			if(!$empty){
				$dirr = dir($path1);
				while($ar = $dirr -> read()){
					if ($ar != '.' && $ar != '..' && $ar != 'index.php'){
					$arL = str_replace(".php", "", $ar);
					$arf = str_replace("-", " ", $arL);
					$arf = ucfirst($arf);
					echo '
							<tr>
                             <td>
							 <div class="confEdit">
								<button onclick="ApagarArquvs(\'?arquivo='.$arL.'.php&dir=Posts/'.$arquivo.'/\',\''.$arf.'\')" type="button" class="btn "> <i class="material-icons">&#xe872;</i></button>
								<a href="/editar?edit=/Posts/'.$arquivo.'/'.$arL.'">
									<button type="button" class="btn "><i class="material-icons">&#xe3c9;</i></button>
								</a>	
							 </div> 
							 <div class="tdTAb"><a  class="" href="/url/'.$arquivo.'/'.$arL.'/">'.$arf.'</a></div>
							 </td>
							 
							</tr>
							
                            ';		
					} //Assets/php/ApagarArquivo.php?arquivo=&dir=
					//onclick="ApagarArquvs(\''.$arL.'.php\',\'Posts/'.$arquivo.'/\', \''.$arf.'\')"
				}			
			$dirr -> close();
			}else{
				echo '
				<tbody>
				<tr>
				 <td>Nada aqui</td>
				</tr>
				</tbody>';					
			}
			echo '  
			</tbody> 
					</table>
				</div>
			</div>
		</div>';
		}
		$i++;
		}
		$diretorio -> close();	
	}
		pastasMissa();
    ?>
<script>
    function ApagarArquvs(ItemApagar,NameRq){
        var resultado = confirm("Deseja excluir o item: "+NameRq+" ?");
        if (resultado == true) {
          $.ajax({
                    url: 'Assets/php/ApagarArquivo.php'+ItemApagar,
                    type: 'GET',
                    success: function(data) {
						//$('#divtesr').html(data);
                     divDE2();
                    }
                });
        }
        else{
            alert("Cancelado pelo usuário!");
        }
    }
/*
function ApagarArquvs(ItemApagar,dir, NameRq){
        var resultado = confirm("Deseja excluir o item: "+NameRq+" ?");
        if (resultado == true) {
          $.ajax({
                    url: 'Assets/php/ApagarArquivo.php?arquivo='+ItemApagar+'&dir='+dir,
                    type: 'GET',
                    success: function(data) {
                    divDE2();
                    }
                });
        }
        else{
            alert("Cancelado pelo usuário!");
        }
    }*/
	
</script>

