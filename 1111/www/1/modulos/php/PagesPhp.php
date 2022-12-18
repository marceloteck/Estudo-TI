<?php
if(GETNAVTAB != ""){
	$GetPast = GETNAVTAB;
	$GetPst  = explode('|', $GetPast);
	$coutPst = count($GetPst);
	
	for ($i = 1; $i < $coutPst; $i++) {
		$GetPast .= "<option value='$GetPst[$i]'>$GetPst[$i]</option>";
	}
}else{
	$GetPast = "<option>Erro no script</option>";
}

?>

