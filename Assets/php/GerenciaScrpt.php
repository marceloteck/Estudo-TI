<?php
function pastasMissa(){
	$path = "../../Scripts/";
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
                                            <th><div class="confEdit"><button onclick="ApagarArquvs(\'?DirDel=Scripts/'.$arquivo.'\',\''.$arquivo.'\')" type="button" class="btn btn-circle btn-sm "> <i class="material-icons">&#xe872;</i></button> #</div> <div style="display:none;">'.$arquivo.'</div>  <input  onchange="Renmar(\'#Rname'.$i.'\'),renomPst(\''.$arquivo.'\',this.value)" autocomplete="off" id="Rname'.$i.'"  value="'.$arquivo.'" name="rname'.$i.'"  type="text" class="EditRname" readonly> 
											<script>
												$("#Rname'.$i.'").on(\'dblclick\', function() {
												$(\'input[name="rname'.$i.'"]\').removeAttr(\'readonly\');
												});
												</script>
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
								<button onclick="ApagarArquvs(\'?arquivo='.$arL.'.php&dir=Scripts/'.$arquivo.'/\',\''.$arf.'\')" type="button" class="btn "> <i class="material-icons">&#xe872;</i></button>
								<a href="/editar?edit=Scripts/'.$arquivo.'/'.$arL.'">
									<button type="button" class="btn "><i class="material-icons">&#xe3c9;</i></button>
								</a>	
							 </div> 
							 <div class="tdTAb"><a  class="" href="/url-script/'.$arquivo.'/'.$arL.'">'.$arf.'</a></div>
							 </td>							 
							</tr>
                            ';		
					} 
				}			
			$dirr -> close();
			}else{
				echo '
				<tbody><tr>
				 <td>Nada aqui</td>
				</tr></tbody>';					
			}
			echo '  
			</tbody> 
			</table>
			</div></div></div>';
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
                     divDE2();
					 selectJsScript();
                    }
                });
        }
        else{
            alert("Cancelado pelo usuário!");
        }
    }

function renomPst(dirpstAntg, dirpstNv){
	
          $.ajax({
                    url: 'Assets/php/RenomearPasta.php?antigo='+dirpstAntg+'&novo='+dirpstNv,
                    type: 'GET',
                    success: function(data) {
                     divDE2();
					 selectJsScript();
                    }
                });
        }
        

function Renmar(idDv){
const input = document.querySelector(idDv)
input.setAttribute("readonly", true)
}

</script>
