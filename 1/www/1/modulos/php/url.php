<?php
require_once 'conf.php';
require_once 'variaveis.php';
require_once 'functions.php';

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
	return $final_url;
}


function inicio(){
	$url = explode('?', URL_COMPLETA);
	$url = explode(URL_PRINCIPAL, $url[0]);
	$url = explode('&', $url[1]);
	$url = str_replace('/', '', $url[0]);

	if(URL_UTIMA == ""){
	
	header("location:/index");
	include "www/inicio.php";
	}else if($url == "index" ){
	include "inicio.php";
	}else{
	echo "erro 404";
	}
}
define("URL_PRINCIPAL", Url('host'));
define("URL_PAGINAS", Url('uri'));
define("URL_COMPLETA", Url('UrlAtual'));
define("URL_UTIMA", dividirUrl("/", 1, URL_COMPLETA));
define("URL_UTIMA_get", dividirUrl("?url=", 1, URL_COMPLETA));
define("TITULO_DOSITE", titleWeb('titleSite'));
define("GETBOOTSTRAPCSS", titleWeb('getbootstrapCss'));
define("GETBOOTSTRAPJS", titleWeb('getbootstrapjS'));
define("NAMESITE", titleWeb('NameSite'));
define("PASTAS_ESTUDOS", buscarPastaIndex('option'));




?>
