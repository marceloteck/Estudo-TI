<?php
require_once 'conf.php';
/*equire_once 'variaveis.php';
require_once 'functions.php';*/

function Url($valor){
	if (empty($_SERVER['HTTPS'])){
		$serverhttp = "http://";
	  }else{
		$serverhttp = "https://";
	}	
	switch ($valor) {
		case 'host':
			return $serverhttp.$_SERVER['HTTP_HOST'];
			break;
		case 'uri':
			return $_SERVER['REQUEST_URI'];
			break;
		case 'UrlAtual':
			return $serverhttp.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			break;
		
	}
}
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
}

function limitChars($text, $limit)
{
 $join = array();
 $ArrayString = explode(" ", $text);

    if ($limit > count($ArrayString)) {
        $limit = count($ArrayString) / 2;   
    }

    foreach ($ArrayString as $key => $word) {
              $join[] = $word;
           if ($key == $limit) {
               break;
         }
    }
    return implode(" ", $join);

}

function PagAtualLink($valor){
    switch ($valor) {
		case 'inicio':
			return INICIO_PAGES;
			break;
		case 'criar':
			return CRIAR_PAGES;
			break;
		case 'editar':
			return EDITAR_PAGES;
			break;
        case 'script':
            return SCRIPT_PAGES;
            break;
		default:
			return paginasWEb();
			break;
	}
}
function MENUAtualLink($valor){
    switch ($valor) {
		case 'inicio':
			return MENU_INICIO_INCLD;
			break;
		case 'criar':
			return MENU_CRIAR_INCLD;
			break;
		case 'editar':
			return MENU_CRIAR_INCLD;
			break;
        case 'script':
            return MENU_CRIAR_SCRIPT_INCLD;
            break;
		default:
			return MENU_INICIO_INCLD;
			break;
        
	}
}
function paginasWEb(){
	$url = explode('?', URL_COMPLETA);
	$url = explode(URL_PRINCIPAL, $url[0]);
	$url = explode('&', $url[1]);
	$url = str_replace('/', '', $url[0]);
	define('URL_paginasWEb', $url);

	if(TIPO_DEURL == "url-script"){
		if(file_exists(PATH_SCRIPT)){
			return SCRIPT_POST_PAGES;
		}else{
			return ERROR404;	
		}
	}else if(TIPO_DEURL == "url"){
		if(file_exists(PATH_pOST)){
			return POST_PAGES;
		}else{
			return ERROR404;	
		}
	}else if(URL_UTIMA == "pastas"){
			return PASTAS_PAGES;
		}else{
			return ERROR404;	
		}
}

function ExplodeURL($buscaIn, $buscaFn, $N_in, $N_f, $URL)
{
   //ExplodeURL(Busca Inicial, Busca Final, numero inicial, numero final, link pra buscar)
   $buscando = explode($buscaIn, $URL);
   //buscar daqui pra frente na busca
   $buscando = $buscando[$N_in];
   //Buscar daqui pra trás
   $buscando = explode($buscaFn, $buscando);
   $buscando = $buscando[$N_f];
   return $buscando;
 // print_r($buscando);
}

function my_file_get_contents( $site_url ){
	$ch = curl_init();
	$timeout = 5; // set to zero for no timeout
	curl_setopt ($ch, CURLOPT_URL, $site_url);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	ob_start();
	curl_exec($ch);
	curl_close($ch);
	$file_contents = ob_get_contents();
	ob_end_clean();
	return $file_contents;
	}

	function ApiScript($Url, $tipo){ //tipo: css, js, html, php
	$Script = my_file_get_contents($Url);
	if(str_replace('<!-- /**','',$Script)){
		$Script = explode('<!-- /**', $Script);
		$Script = $Script[0];
	  }

	switch ($tipo) {
		case 'css':
			$Script = explode('<!--startCss-->', $Script);
			$Script = explode('<!--endCss-->', $Script[1]);
			$Script = $Script[0];
			$Script = str_replace('<style>', '', $Script);
			$Script = str_replace('</style>', '', $Script);
			return $Script;
			break;
		case 'js':
			$Script = explode('<!--startJs-->', $Script);
			$Script = explode('<!--endJs-->', $Script[1]);
			$Script = $Script[0];
			$Script = str_replace('<script>', '', $Script);
			$Script = str_replace('</script>', '', $Script);
			return $Script;
			break;
		case 'html':
			$Script = explode('<!--starthtml-->', $Script);
			$Script = explode('<!--endhtml-->', $Script[1]);
			$Script = $Script[0];
			return $Script;
			break;
		default:
			return $Script;
			break;
        
	}
	}
	function GET($value){
		if(isset($_GET[$value])){
			return $_GET[$value];
		}   
	}
	function POST($value){
		if(isset($_POST[$value])){
			return $_POST[$value];
		}   
	}
	
	function GET_TRUE($value){
		if(isset($_GET[$value]) and $_GET[$value] != ""){
			return true;
		}else{
			return false;
		}
	}
	function POST_TRUE($value){
		if(isset($_POST[$value]) and $_POST[$value] != ""){
			return true;
		}else{
			return false;
		}
	}

?>
