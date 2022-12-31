<!--starthtml--> //require
require_once "./get_e_post.php";
require_once "./textos-dos-arquivos.php";

//define
define('HOME_DIR', '../');
define('PROJETO', str_replace(" ", "_", HOME_DIR.tirarAcentos(trim(GET('NameProjeto'))).'/'));

function tirarAcentos($string){
    return preg_replace(array("(á|à|ã|â|ä)","(Á|À|Ã|Â|Ä)","(é|è|ê|ë)","(É|È|Ê|Ë)","(í|ì|î|ï)","(Í|Ì|Î|Ï)","(ó|ò|õ|ô|ö)","(Ó|Ò|Õ|Ô|Ö)","(ú|ù|û|ü)","(Ú|Ù|Û|Ü)","(ñ)","(Ñ)","(ç)","(Ç)"),explode(" ","a A e E i I o O u U n N c C"),$string);
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
function countSwitchcaseNumber_CFiles(){
    for($i = 1; $i > 0; $i++){ 
        if(CFiles($i)){ //função para ser contada
            $valor = $i;      
        }else{
            break;
        }
    }
    return $valor;
}
//copiar diretorios e arquivos
function copiar_diretorio($diretorio, $destino, $ver_acao = false){
    if ($destino[strlen($destino) - 1] == '/'){
       $destino = substr($destino, 0, -1);
      }
    if (!is_dir($destino)){
       if ($ver_acao){
         // echo "Criando diretorio {$destino}\n";
          }
       mkdir($destino, 0755);
    }
    $folder = opendir($diretorio);
    while ($item = readdir($folder)){
       if ($item == '.' || $item == '..'){
          continue;
          }
       if (is_dir("{$diretorio}/{$item}")){
        copiar_diretorio("{$diretorio}/{$item}", "{$destino}/{$item}", $ver_acao);
       }else{
          if ($ver_acao){
             //echo "Copiando {$item} para {$destino}"."\n";
          }
          copy("{$diretorio}/{$item}", "{$destino}/{$item}");
          }
    }
 }
//functions >> criar pastas
function CriarPast($LocalPast, $NamePast){
    $pasta = $LocalPast . strtolower(trim(str_replace(" ", "_", tirarAcentos($NamePast))));
    if(!file_exists($pasta)){
         mkdir( $pasta , 0755, true);
    }
}
//functions >> criar arquivos
function CriarArquivo($dirFolder, $Name_arquivo, $texto){
    $fp = fopen($dirFolder . '/' . strtolower(trim(str_replace(" ", "_", tirarAcentos($Name_arquivo)))), "w+");
    fwrite($fp, trim($texto));
    fclose($fp);
}
//criar pastas em lote com array
function New_folderInstall($Diretorys, $Newfolders){
    array_map(function($Diretory, $Newfolder) {
        CriarPast($Diretory, $Newfolder);
        New_FilesInstall([$Diretory.$Newfolder.'/'],['index.php'],[TextosFile('index_dir')]);//criar um index.php em cada pasta
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
    
    function copyFiles(){
        for($i = 1; $i <=countSwitchcaseNumber_CFiles(); $i++){ 
            list($di1,$des1) = CFiles($i);
            copiar_diretorio($di1, $des1);
        }
    }
    function NewProjets(){
    CriarPastasNvs();
    CriarFilesNvs();
    copyFiles();
    }
    
//lista de pastas
function fdl($v){
    //              0       1     2     3       4       5       6          7
    $p = array('assets/','js/','php/','css/','lib/','config/','posts/','layout/');
    switch ($v) {
        #region
        case 0:  return array('./', PROJETO);
        case 1:  return array(PROJETO ,'assets/');
        case 2:  return array(PROJETO ,'config/');
        case 3:  return array(PROJETO ,'pages/');
        case 4:  return array(PROJETO ,'posts/');
        //Pasta assets
        case 5:  return array(PROJETO.$p[0] ,'css/');
        case 6:  return array(PROJETO.$p[0] ,'html/');
        case 7:  return array(PROJETO.$p[0] ,'img/');
        case 8:  return array(PROJETO.$p[0] ,'js/');
        //Pasta assets
        case 9: return array(PROJETO.$p[0] ,'vendor/');
        case 10: return array(PROJETO.$p[0] ,'videos/');
        //Sub-Pasta js
        case 11: return array(PROJETO.$p[0].$p[1] ,'lib_js/');
        case 12: return array(PROJETO.$p[0].$p[1] ,'frameworks/');
        case 13: return array(PROJETO.$p[0].$p[1] ,'scripts/');
        case 14: return array(PROJETO.$p[0].$p[1] ,'app/');
        //Sub-Pasta php
        case 15: return array(PROJETO.$p[5].$p[2] ,'User_Functions/');
        case 16: return array(PROJETO.$p[5].$p[2] ,'functions_Global/');
        //Sub-pasta css
        case 17: return array(PROJETO.$p[0].$p[3] ,'bootstrap/');
        case 18: return array(PROJETO.$p[0].$p[3] ,'icones/');
        case 19: return array(PROJETO.$p[0].$p[3] ,'fontes/');
        case 20: return array(PROJETO.$p[0].$p[3] ,'style/');
        //Sub-Pasta lib
        case 21: return array(PROJETO.$p[5].$p[4] ,'ckeditor/'); 
        //Pasta Config
        case 22:  return array(PROJETO.$p[5] ,'lib/');
        case 23: return array(PROJETO.$p[5] ,'php/');
        case 24: return array(PROJETO.$p[5] ,'cache/');
        case 25: return array(PROJETO.$p[5] ,'doc/');
        case 26: return array(PROJETO.$p[5] ,'layout/');
        case 27: return array(PROJETO.$p[5] ,'modulos/');
        case 28: return array(PROJETO.$p[5] ,'sql/');
        //Pasta post
        
        case 29: return array(PROJETO.$p[6] ,'img/');
        case 30: return array(PROJETO.$p[6] ,'dir_Files/');
        case 31: return array(PROJETO.$p[6] ,'audios/');
        case 32: return array(PROJETO.$p[6] ,'videos/');
        case 33: return array(PROJETO.$p[6] ,'doc/');
        //sub-pasta layout
        case 34:  return array(PROJETO.$p[5].$p[7],'assets/');
        case 35:  return array(PROJETO.$p[5].$p[7],'include/');
        case 36:  return array(PROJETO.$p[5].$p[7].$p[0] ,'css/');
        case 37:  return array(PROJETO.$p[5].$p[7].$p[0] ,'html/');
        case 38:  return array(PROJETO.$p[5].$p[7].$p[0] ,'img/');
        case 39:  return array(PROJETO.$p[5].$p[7].$p[0] ,'js/');
        #endregion
    }
}
//lista de arquivos
function fls($f){
    switch ($f) {
        case 1: return array(PROJETO, 'index.php', 'texto index');
        case 2: return array(PROJETO,'.htacces', 'texto htacces');

        case 3: return array(PROJETO.'assets/','assets.php', '');
        case 4: return array(PROJETO.'config/','config.php', '');
        case 5: return array(PROJETO.'pages/','pages.php', '');
        case 6: return array(PROJETO.'posts/','posts.php', '');

        case 7: return array(PROJETO.'assets/css/style/','style.css', '');
        case 8: return array(PROJETO.'config/php/User_Functions/','funcion_Place_user.php','');
        case 9: return array(PROJETO.'config/php/functions_Global/','diretory.php','');
        case 10: return array(PROJETO.'config/php/functions_Global/','url.php','');
        case 11: return array(PROJETO.'config/php/','conf_error.php',TextosFile('ErrorPhp'));
        case 12: return array(PROJETO.'config/php/','conf.php','');

        case 13: return array(PROJETO.'config/layout/include/','menu.php','');
        case 14: return array(PROJETO.'config/layout/include/','top.php','');
        case 15: return array(PROJETO.'config/layout/include/','header.php','');
        case 16: return array(PROJETO.'config/layout/include/','rodape.php','');
        case 17: return array(PROJETO.'config/layout/include/','include.php','');
        case 18: return array(PROJETO.'config/layout/','template.php','');

        case 19: return array(PROJETO.'pages/','inicio.php','');
        case 20: return array(PROJETO.'pages/','404.php','');
        case 21: return array(PROJETO.'pages/','login.php','');
        case 22: return array(PROJETO.'pages/','post.php','');
        case 23: return array(PROJETO.'pages/','busca.php','');

        case 24: return array(PROJETO.'config/php/','variaveis.php','');
    }
}

//lista de copiar aquivos de uma pasta para ou tra
function CFiles($c){
    switch ($c) {
        case 1: return array('./ckeditor/', PROJETO.'config/lib/ckeditor/');
        case 2: return array('./Cod_script/', PROJETO.'assets/vendor/');
       }
}

if(GET_TRUE('NameProjeto')){
    NewProjets();
}


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Criar Novo Projeto</title>
  <?php
    include "Install/include.php";
  ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>Criar Novo Projeto</b><sup>.ns</sup></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg shadow">Escolha um nome para iniciar!</p>

      <form>
        <div class="input-group mb-3">
          <input id="INput" name="NameProjeto" type="text" class="form-control" placeholder="Nome do Projeto">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-code"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-5">
          <div id="btnclikOk"></div>
          </div>
          <!-- /.col -->
          <div class="col-7">
            <button id="nvPjt" onclick="IncludeJS('Install/install_functions.php?NameProjeto='+GetInputValue('#INput')+'', '', '')" type="button" class="btn btn-primary btn-block">Criar Projeto</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
  </div>
</div>
<!-- /.login-box -->
        <div class="loader" style="display: none;" id="loader">
          <label for="">construindo diretorio ...</label>
          <div class="c-loader"></div>
          <div class="fnd"></div>
        </div>
</body>
</html> <!--endhtml--><!--startJs-->  <script> 
function IncludeJS(pagina, divID){
  ClickEnv();
  $.ajax({
    url: pagina,
    type: 'GET',
    success: function(data) {
    $(divID).html(data);
    ClickSucess();
    btnDiv(pagina);
    }
  });
}
//copiar texto de um input em outro
function GetInputValue(INput){
  var INput1web = document.querySelector(INput).value;
  return INput1web;
} 

function ClickEnv(){
  document.querySelector('#nvPjt').disabled = true;
  document.querySelector('#loader').style.display = 'flex';
}
function ClickSucess(){
  document.querySelector('#nvPjt').disabled = false;
  document.querySelector('#loader').style.display = 'none';
}
function removerAcentos(s) {
  return s.normalize('NFD')
  .replace(/[\u0300-\u036f]/g, "")
  .toLowerCase()
  .replace(/[- ]+/g, "_");
}

function btnDiv(url){
var retorno = url.split("?NameProjeto=");
var link = retorno[1].trim();
link = removerAcentos(link).toLowerCase();
document.querySelector('#btnclikOk').innerHTML = '<button id="clikOk" onclick="abrirUrl(\'/'+link+'\')" type="button" class="btn btn-success btn-block">Abrir Projeto</button>';
}
function abrirUrl(link){
  window.open(link,"_blank");
}
 </script> <!--endJs--><!-- /** --TITULO--:install php criar pastas sub pastas e arquivos via php| --LINK--:./Scripts/php/install-php-criar-pastas-sub-pastas-e-arquivos-via-php.php| **/ -->