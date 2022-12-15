<?php
/** functions url.php **/
define("URL_PRINCIPAL", Url('host'));
define("URL_PAGINAS", Url('uri'));
define("URL_COMPLETA", Url('UrlAtual'));
define("URL_UTIMA", dividirUrl("/", 1, URL_COMPLETA));
define("URL_UTIMA_get", dividirUrl("?url=", 1, URL_COMPLETA));

/** functions Pag **/
//define("TITULO_DOSITE", titleWeb('titleSite'));
//define("GETBOOTSTRAPCSS", titleWeb('getbootstrapCss'));
//define("GETBOOTSTRAPJS", titleWeb('getbootstrapjS'));
//define("NAMESITE", titleWeb('NameSite'));
//define("PASTAS_ESTUDOS", buscarPastaIndex('option'));


//INCLUDE URL DE HTML
define('TOP_INCLD', 'include/top.php');
define('METATAGS_INCLD', 'include/meta_tags.php');
define('HEADER_INCLD', 'include/header.php');
define('JSRODAPE_INCLD', 'include/js_rodape.php');
define('RODAPE_INCLD', 'include/rodape.php');
define('CSS_INCLD', 'include/links_Css.php');
define('MENU_INCLD', 'include/menu.php');
define('MENU_INICIO_INCLD', 'include/menu_inicio.php');
define('TOPBAR_INCLD', 'include/TopBar.php');


//PAGES
define('INICIO_PAGES', 'Pages/inicio.php');
define('LOGIN_PAGES', 'Pages/login.php');


?>