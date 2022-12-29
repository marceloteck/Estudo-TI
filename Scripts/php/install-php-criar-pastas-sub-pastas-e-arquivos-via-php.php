<!--starthtml--> 
//require
require_once "./Install/get_e_post.php";
require_once "./Install/textos-dos-arquivos.php";

//define
define('PROJETO', str_replace(" ", "_", './'.GET('NameProjeto').'/'));

//functions >> criar pastas
function CriarPast($NamePast, $LocalPast){
    $pasta = $LocalPast . strtolower(trim($NamePast));
    if(!file_exists($pasta)){
         mkdir( $pasta , 0755, true);
    }
}
//functions >> criar arquivos
function CriarArquivo($dirFolder, $Name_arquivo, $texto){
    $fp = fopen($dirFolder . '/' . trim(str_replace(" ", "-", $Name_arquivo)), "w+");
    fwrite($fp, trim($texto));
    fclose($fp);
}
//criar pastas em lote com array
function New_folderInstall($Newfolders, $Diretorys){
    array_map(function($Newfolder, $Diretory) {
        CriarPast($Newfolder, $Diretory);
        New_FilesInstall([$Diretory.$Newfolder.'/'],['index.php'],['Proibido!']);//criar um index.php em cada pasta
    }, $Newfolders, $Diretorys);
}

//criar arquivos em lote com array
function New_FilesInstall($folders, $texts, $files){
    array_map(function($folder, $Text, $File) {
        CriarArquivo($folder, $Text, $File);
    }, $folders, $texts, $files );
}
 //função do usuario
 function countSwitchcaseNumber_fdl(){
    for($i = 1; $i > 0; $i++){ 
        if(fdl($i)){ //função para ser contada
            $valor = $i;      
        }else{
            break;
        }
    }
    return $valor;
}
function countSwitchcaseNumber_fls(){
    for($i = 1; $i > 0; $i++){ 
        if(fls($i)){ //função para ser contada
            $valor = $i;      
        }else{
            break;
        }
    }
    return $valor;
}
//criar pastas do diretório
function CriarPastasNvs(){
    New_folderInstall([PROJETO], ['./']); // pasta projeto
    for($i = 1; $i <=countSwitchcaseNumber_fdl(); $i++){ 
        list($Newfolders,$Diretorys) = fdl($i);
        New_folderInstall([$Newfolders], [$Diretorys]);
    }
} 
    //criar arquivos
    function CriarFilesNvs(){
        for($i = 1; $i <=countSwitchcaseNumber_fls(); $i++){ 
            list($folder,$file,$text) = fls($i);
            New_FilesInstall([$folder],[$file],[$text]); 
        }
    }

//lista de pastas
function fdl($v){
    switch ($v) {
        case 0: return array(PROJETO, './');
        case 1: return array('assets/', PROJETO);
        case 2: return array('config/', PROJETO);
        case 3: return array('include/', PROJETO);
        case 4: return array('posts/', PROJETO);
        //Pasta assets
        case 5: return array('css/', PROJETO.'assets/');
        case 6: return array('html/', PROJETO.'assets/');
        case 7: return array('img/', PROJETO.'assets/');
        case 8: return array('js/', PROJETO.'assets/');
        case 9: return array('lib/', PROJETO.'assets/');
        case 10: return array('php/', PROJETO.'assets/');
        case 11: return array('vendor/', PROJETO.'assets/');
        case 12: return array('videos/', PROJETO.'assets/');
        //Sub-Pasta js
        case 13: return array('lib_js/', PROJETO.'assets/js/');
        case 14: return array('frameworks/', PROJETO.'assets/js/');
        case 15: return array('scripts/', PROJETO.'assets/js/');
        //Sub-Pasta php
        case 16: return array('UserFunctions/', PROJETO.'assets/php/');
        case 17: return array('functions_Global/', PROJETO.'assets/php/');
        //Sub-Pasta css
        case 18: return array('bootstrap/', PROJETO.'assets/css/');
        case 19: return array('icones/', PROJETO.'assets/css/');
        case 20: return array('fontes/', PROJETO.'assets/css/');
        case 21: return array('style/', PROJETO.'assets/css/');
    }
}
//lista de arquivos
function fls($f){
    switch ($f) {
        case 1: return array(PROJETO, 'index.php', 'texto index');
        case 2: return array(PROJETO,'.htacces', 'texto htacces');
        case 3: return array(PROJETO.'assets/css/style/','style.css', '');
        case 4: return array(PROJETO.'assets/php/UserFunctions/','funcion_Place_user.php','');
        case 5: return array(PROJETO.'assets/php/functions_Global/','diretory.php','');
        case 6: return array(PROJETO.'assets/php/functions_Global/','url.php','');
        case 7: return array(PROJETO.'assets/php/','conf_error.php','');
    }
}


    

if(GET_TRUE('NameProjeto')){
CriarPastasNvs();
CriarFilesNvs();
}



<form action="#" method="get">
    <input type="text" name="NameProjeto" placeholder="Nome do novo projeto">
    <button type="submit">Enviar</button>
</form> <!--endhtml--><!-- /** --TITULO--:install php criar pastas sub pastas e arquivos via php| --LINK--:./Scripts/php/install-php-criar-pastas-sub-pastas-e-arquivos-via-php.php| **/ -->