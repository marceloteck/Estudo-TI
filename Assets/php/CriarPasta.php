<?php
require_once 'conf.php';
$gtPast = $_GET['past'];
function CriarPast($NamePast, $LocalPast){
    $novapasta = str_replace(" ", "_", $NamePast);
	$novapasta = strtolower($novapasta);
    $novapasta = $LocalPast.$novapasta;
    $resultado = mkdir( $novapasta , 0755, true);
    if($resultado){
		echo '<script type="text/javascript">
        alert("Pasta criada com sucesso!!!");
        
        </script>';
		}else{
		echo '<script type="text/javascript">alert("Erro ao Criar pasta ou já existe"); </script>';
		}
}
if($gtPast != ""){
   CriarPast($gtPast, '../../Posts/');
}
?>