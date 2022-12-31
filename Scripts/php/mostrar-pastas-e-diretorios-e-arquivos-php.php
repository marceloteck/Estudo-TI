<!--starthtml--> function folder_files($Pastas){
            $path = $Pastas;
                $diretorio = dir($path);
            
                while($PastaLocal = $diretorio -> read()){
                if ($PastaLocal != '.' && $PastaLocal != '..'&& $PastaLocal != 'index.php'){
                    $path1 = $path.$PastaLocal;
        
                    echo $PastaLocal;  // pasta que vai exibir os arquivos
        
                    $empty = ((count(glob("$path1/*")) === 0) ? true : false);
                    if(!$empty){
                        $dirr = dir($path1);
                        while($ar = $dirr -> read()){
                            if ($ar != '.' && $ar != '..' && $ar != 'index.php'){
                            $arL = str_replace(".php", "", $ar);
                            $arf = str_replace("-", " ", $arL);
                            $arf = ucfirst($arf);
                                    echo  $path1.'/'.$arf;	// os arquivos que serão exibidos	
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
folder_files('./'); <!--endhtml--><!-- /** --TITULO--:mostrar pastas e diretorios e arquivos php| --LINK--:./Scripts/php/mostrar-pastas-e-diretorios-e-arquivos-php.php| **/ -->