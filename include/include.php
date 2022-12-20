<?php
#region 1
/* página INICIAL

//  tem arquivos que mudam de acordo com cada página:
//  meta_tags.php 
//  header.php  >> menu da página

//Topo do site
include TOP_INCLD;

//deve mudar em cada página
include INICIO_PAGES;

//arquivos que nunca muda
include RODAPE_INCLD; */
#endregion

if(URL_UTIMA == ""){ $LinkUrl = "inicio"; }
else{ 
    $url = explode('?', URL_COMPLETA);
	$url = explode(URL_PRINCIPAL, $url[0]);
	$url = explode('&', $url[1]);
	$url = str_replace('/', '', $url[0]);
    $LinkUrl = $url;

}

echo   $LinkUrl.'  - aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';

define('INCLUDE_ATUAL',PagAtualLink($LinkUrl));
define('MENU_ATUAL',MENUAtualLink($LinkUrl));

include TOP_INCLD;
include INCLUDE_ATUAL;
include RODAPE_INCLD;
?>