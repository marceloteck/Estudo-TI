
                <!-- Begin Page Content -->
                <div class="container-fluid">

                            <?php

function DirPastasLc(){
    if(URL_ANTERIO == "url-script"){
        $path = "./Scripts/";
    }else if(URL_ANTERIO == "url"){
        $path = "./Posts/";
    }
$arquivo = $_GET['dir'];
	
		$diretorio = dir($path);
			
			echo '
            <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">'.$arquivo.'</h6>
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
                            <td><a class="collapse-item" href="/'.URL_ANTERIO.'/'.$arquivo.'/'.$arL.'">'.$arf.'</a></td>
                        </tr>
                    ';		
					}
				}			
			$dirr -> close();
			
			}else{
				echo '<a  data-toggle="tooltip" data-placement="top" title="[ Nada para mostrar ]" class="collapse-item" href="#">[ Nada para mostrar ]</a>';					
			}
			echo '</tbody>
            </table>
        </div>
    </div>
</div>';
			
	}
    DirPastasLc();
    ?>
                     




















                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
