<!--starthtml--> //código php
function dividirUrl($busca, $valor, $url){
	$urlF = explode($busca, $url);
	$valortotal = count($urlF)-$valor;
	$final_url = $urlF[$valortotal];
	$final_url = explode('?', $final_url);
	$final_url = explode('&', $final_url[0]);
	//$final_url = str_replace('/', '', $final_url[0]);
	$final_url = $final_url[0];
	$final_url = str_replace('%20', ' ', $final_url);

	return $final_url;
} <!--endhtml--><!-- /** --TITULO--:dividir url| --LINK--:./Scripts/php/dividir-url.php| **/ -->