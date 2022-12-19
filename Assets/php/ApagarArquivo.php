<?php
$pastaDir 	  = $_GET['dir'];
$ArquivoLetra = $_GET['arquivo'];
if(isset($ArquivoLetra)){
  $arvuivoFnl = '../../'.$pastaDir.$ArquivoLetra;
	$resultado = unlink($arvuivoFnl);
	if($resultado){
	//echo "<script>alert('apagou');</script>";
	}else{
  //  echo "<script>alert('não apagou');</script>";
	}
}else if(isset($DirDel)){
 function delTree($dir) { 
      $files = array_diff(scandir($dir), array('.','..')); 
      foreach ($files as $file) { 
        (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
      } 
      return rmdir($dir); 
    }
    delTree($DirDel);
}
?>

