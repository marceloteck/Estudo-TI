<!--starthtml--> 
function CFiles($c){
    switch ($c) {
        case 1: return array('./ckeditor/', PROJETO.'config/lib/ckeditor/');
        case 2: return array('./Cod_script/', PROJETO.'assets/vendor/');
        case 3: return array('./global_php/', PROJETO.'config/php/functions_Global/');
        case 4: return array('./global_js/', PROJETO.'assets/js/app/');
        case 5: return array('./global_css/', PROJETO.'assets/css/');
        case 6: return array('./global_plugins/', PROJETO.'assets/vendor/');
        case 7: return array('./local_cod/', PROJETO.'config/php/User_Functions/');
        case 8: return array('./template/', PROJETO.'config/layout/modelo/');
       }
}

  function copyFiles(){
        for($i = 1; $i <=countSwitchcaseNumber_CFiles(); $i++){ 
            list($di1,$des1) = CFiles($i);
            copiar_diretorio($di1, $des1);
        }
    } <!--endhtml--><!-- /** --TITULO--:função php com array return| --LINK--:./Scripts/php/funcao-php-com-array-return.php| **/ -->