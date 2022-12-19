<?php
function pastasMissa(){
	$path = "../../Posts/";
		$diretorio = dir($path);

		$i = 1;
		while($arquivo = $diretorio -> read()){
	
		if ($arquivo != '.' && $arquivo != '..'&& $arquivo != 'index.php'){
			
			echo '<!-- DataTales Example -->
			<div class="">
				  
				  <div class="">
					  <div class="table-responsive" width="80%" style="overflow-x: hidden;">
						  <table class="shadow table table-borderless" id="dataTable-'.$i.'" width="100%" cellspacing="0">
			
                                    <thead>
                                        <tr>
                                            <th># '.$arquivo.'</th>
                                        </tr>
                                    </thead>
									<tfoot>
                                        <tr>
										<th></th>
                                        </tr>
                                    </tfoot>
									<tbody>					
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
							<tr>
                             <td><a  class="" href="/url/'.$arquivo.'/'.$arL.'">
							 <div class="confEdit">
							 <button type="button" class="btn btn-danger"><i class="material-icons">&#xe872;</i></button></button>


							 <button type="button" class="btn btn-success"><i class="material-icons">&#xe3c9;</i></button>	
							 </div>
							 <div class="tdTAb">'.$arf.'</div></a>

							 <div class="confEdit">
							 	<button onclick="excluirItemSelecionado(\''.$arL.'.php\',\'Posts/'.$arquivo.'/\', \''.$arL.'\')" type="button" class="btn btn-danger"> <i class="material-icons">&#xe872;</i></button>
							 </div>

							 </td>
							</tr>
							
                            ';		
					}
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

            
<div id="divDEl"></div>


<script>
    function excluirItemSelecionado(ItemApagar,dir, NameRq){
        var resultado = confirm("Deseja excluir o item: ?");
        if (resultado == true) {
          $.ajax({
                    url: 'Assets/php/ApagarArquivo.php?arquivo='+ItemApagar+'&dir='+dir,
                    type: 'GET',
                    success: function(data) {
                    $('#divDEl').html(data);
                    divDE2();
                    }
                });
            

        
         
        }
        else{
            alert("Cancelado pelo usuário!");
        }
    }
</script>.

