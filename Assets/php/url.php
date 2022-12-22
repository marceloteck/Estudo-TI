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
			return $serverhttp.$_SERVER[HTTP_HOST];
			break;
		case 'uri':
			return $_SERVER[REQUEST_URI];
			break;
		case 'UrlAtual':
			return $serverhttp.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];
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
	if(file_exists(PATH_pOST)){
		return POST_PAGES;
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


?>
