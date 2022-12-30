<!--starthtml--> 
//require
require_once "./Install/get_e_post.php";
require_once "./Install/textos-dos-arquivos.php";

//define
define('PROJETO', str_replace(" ", "_", './'.GET('NameProjeto').'/'));
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
//functions >> criar pastas
function CriarPast($LocalPast, $NamePast){
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
function New_folderInstall($Diretorys, $Newfolders){
    array_map(function($Diretory, $Newfolder) {
        CriarPast($Diretory, $Newfolder);
        New_FilesInstall([$Diretory.$Newfolder.'/'],['index.php'],['Proibido!']);//criar um index.php em cada pasta
    }, $Diretorys, $Newfolders);
}

//criar arquivos em lote com array
function New_FilesInstall($folders, $files, $texts){
    array_map(function($folder, $File, $Text) {
        CriarArquivo($folder, $File, $Text);
    }, $folders, $files, $texts);
}

//criar pastas do diretório
function CriarPastasNvs(){
    New_folderInstall(['./'], [PROJETO]); // pasta projeto
    for($i = 1; $i <=countSwitchcaseNumber_fdl(); $i++){ 
        list($Diretorys, $Newfolders) = fdl($i);
        New_folderInstall([$Diretorys], [$Newfolders]);
    }
} 
    //criar arquivos
    function CriarFilesNvs(){
        for($i = 1; $i <=countSwitchcaseNumber_fls(); $i++){ 
            list($folder,$file,$text) = fls($i);
            New_FilesInstall([$folder],[$file],[$text]); 
        }
    }
// copiar arquivos e pastas de um lugar para o outro
function copyFileFolder($exit, $up){
   // copyFileFolder('link de onde sai', 'link de onde vai ficar')
    if(file_exists($exit)){
        copy($exit, $up);
    }else{
        echo "o arquivo não existe";
    }
}
//lista de pastas
function fdl($v){
    $p = array('assets/','js/','php/','css/');
    switch ($v) {
        case 0:  return array('./', PROJETO);
        case 1:  return array(PROJETO ,'assets/');
        case 2:  return array(PROJETO ,'config/');
        case 3:  return array(PROJETO ,'include/');
        case 4:  return array(PROJETO ,'posts/');
        //Pasta assets
        case 5:  return array(PROJETO.$p[0] ,'css/');
        case 6:  return array(PROJETO.$p[0] ,'html/');
        case 7:  return array(PROJETO.$p[0] ,'img/');
        case 8:  return array(PROJETO.$p[0] ,'js/');
        case 9:  return array(PROJETO.$p[0] ,'lib/');
        case 10: return array(PROJETO.$p[0] ,'php/');
        case 11: return array(PROJETO.$p[0] ,'vendor/');
        case 12: return array(PROJETO.$p[0] ,'videos/');
        //Sub-Pasta js
        case 13: return array(PROJETO.$p[0].$p[1] ,'lib_js/');
        case 14: return array(PROJETO.$p[0].$p[1] ,'frameworks/');
        case 15: return array(PROJETO.$p[0].$p[1] ,'scripts/');
        //Sub-Pasta php
        case 16: return array(PROJETO.$p[0].$p[2] ,'UserFunctions/');
        case 17: return array(PROJETO.$p[0].$p[2] ,'functions_Global/');
        //Sub-Pasta css
        case 18: return array(PROJETO.$p[0].$p[3] ,'bootstrap/');
        case 19: return array(PROJETO.$p[0].$p[3] ,'icones/');
        case 20: return array(PROJETO.$p[0].$p[3] ,'fontes/');
        case 21: return array(PROJETO.$p[0].$p[3] ,'style/');
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

function CFiles($c){
    switch ($c) {
        case 1: return array(PROJETO, './');
       }
}
    

if(GET_TRUE('NameProjeto')){
CriarPastasNvs();
CriarFilesNvs();
}



<form action="#" method="get">
    <input type="text" name="NameProjeto" placeholder="Nome do novo projeto">
    <button type="submit">Enviar</button>
</form> <!--endhtml--><!-- /** --TITULO--:install web site| --LINK--:./Scripts/php/install-web-site.php| **/ -->