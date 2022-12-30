
                <!-- Begin Page Content --
                <div class="container-fluid">
                   <div style=" position: absolute; align-items: center; display: flex; width:80vw; height:80vh;justify-content: center; color: aliceblue; font-size: 3rem;">
                   <div>
                   ESTUDOS<sup>.ns</sup>
                   </div>
                </div> 
<img src="Assets/img/login_bg.jpg" alt="" style="width: 100%;" >

    </div>
              !-- /.container-fluid --

            </div>
           !-- End of Main Content -->


            
                <!-- Begin Page Content -->
                <div class="container-fluid">


            <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">HOME:</h6>
                        </div>
                        <div class="card-body">
                            <div style="overflow: hidden;"class="table-responsive">
                                <table   class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Arquivos enviados</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Arquivos enviados</th>
                                
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
			                     DiretoryPasts('./Scripts'); 
                                ?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
			
	
   
 
                     

<?php

 function DiretoryPasts($Pastas){
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
	}     
?>


















                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
