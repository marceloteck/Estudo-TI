<?php
if(isset($_GET['pasta'])){
	$GetPast = $_GET['pasta'];
	$GetPst  = explode('|', $GetPast);
	$coutPst = count($GetPst);
	
	for ($i = 1; $i < $coutPst; $i++) {
		$GetPast .= "<option value='$GetPst[$i]'>$GetPst[$i]</option>";
	}
}else{
	$GetPast = "<option>Erro no script</option>";
}

?>