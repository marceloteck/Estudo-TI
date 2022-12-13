<?php
//require_once 'conf.php';
if(isset($_POST['title']) or isset($_POST['link']) or isset($_POST['editor'])){
$titulo = $_POST['title'];
$link = $_POST['link'];
$editor = $_POST['editor'];
$pastaativa = $_POST['pastaativa'];

echo $titulo.'<br>'.$link.'<br>'.$editor.'<br>'.$pastaativa.'<br>';


function gravarPost(){
	
}

}
?>

