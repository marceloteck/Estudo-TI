<!--starthtml--> //php
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
 <!--endhtml--><!-- /** --TITULO--:escolher pagina pra mostrar| --LINK--:./Scripts/php/escolher-pagina-pra-mostrar.php| **/ -->