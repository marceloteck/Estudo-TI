<!--starthtml--> //php

/** functions url.php **/
define("URL_PRINCIPAL", Url('host'));
define("URL_PAGINAS", Url('uri'));
define("URL_COMPLETA", Url('UrlAtual'));
define("URL_UTIMA", dividirUrl("/", 1, URL_COMPLETA));
define('URL_UTIMA_Format', str_replace('-', ' ', URL_UTIMA));
define("EXPLODE_SELECAO", ExplodeURL('/', '?', '1', '0', URL_PAGINAS));
define("URL_ANTERIO", dividirUrl("/", 2, URL_COMPLETA));
define("TIPO_DEURL", dividirUrl("/", 3, URL_COMPLETA));
define("URL_UTIMA_get", dividirUrl("?past=", 1, URL_COMPLETA));
define("EDITAR_get", dividirUrl("?edit=", 1, URL_COMPLETA));
define('PATH_pOST', './Posts/' . str_replace('%20', ' ', URL_ANTERIO) . '/' .str_replace('%20', ' ', URL_UTIMA).'.php');

define('PATH_SCRIPT', './Scripts/' . str_replace('%20', ' ', URL_ANTERIO) . '/' .str_replace('%20', ' ', URL_UTIMA).'.php');

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
define('MENU_CRIAR_INCLD', 'include/menu_criar.php');
define('MENU_EDITAR_INCLD', 'include/menu_editar.php');
define('TOPBAR_INCLD', 'include/TopBar.php');


define('MENU_CRIAR_SCRIPT_INCLD', 'include/menu_criar_script.php');

//PAGES
define('INICIO_PAGES', 'Pages/inicio.php');
define('CRIAR_PAGES', 'Pages/criar.php');
define('EDITAR_PAGES', 'Pages/editar.php');
define('SCRIPT_PAGES', 'Pages/script.php');
define('POST_PAGES', 'Pages/posts.php');
define('PASTAS_PAGES', 'Pages/pastas.php');
define('SCRIPT_POST_PAGES', 'Pages/posts-script.php');
define('LOGIN_PAGES', 'Pages/login.php');
define('ERROR404', 'Pages/404.php');



//ASSETs PHP
define('PHP_GRAVAR_POST', 'Assets/php/Pages_gravarPost.php');
define('PHP_GRAVAR_SCRIPT', 'Assets/php/Pages_gravarPostScript.php');

//ASSETs JAVASCRIPT
define('INCLUDE_JS', 'Assets/js/include_JS.php');
 <!--endhtml--><!-- /** --TITULO--:define do estudos.ns| --LINK--:./Scripts/php/define-do-estudos.ns.php| **/ -->