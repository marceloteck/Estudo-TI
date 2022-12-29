<!--starthtml-->    function fdl($v){
    switch ($v) {
        case 0: return PROJETO;      break;
        case 1: return 'assets/';    break;
        case 2: return 'config/';    break;
        case 3: return 'include/';   break;
        case 4: return 'posts/';     break;
        //Pasta assets
        case 5: return 'css/';       break;
        case 6: return 'html/';      break;
        case 7: return 'img/';       break;
        case 8: return 'js/';        break;
        case 9: return 'lib/';       break;
        case 10: return 'php/';      break;
        case 11: return 'vendor/';   break;
        case 12: return 'videos/';   break;
        //Sub-Pasta css
        case 13: return 'lib_js/';   break;
        case 14: return 'frameworks/';   break;
        case 15: return 'scripts/';   break;
        //Sub-Pasta php
        case 16: return 'UserFunctions/';   break;
        case 17: return 'functions_Global/';   break;
    }
}


//função para contar quantos tem Switch case tem na função numerica:
function countSwitchcaseNumber(){
    for($i = 1; $i > 0; $i++){ 
        if(fdl($i)){ //função para ser contada
            return $i;
        }else{
            break;
        }
    }
} <!--endhtml--><!-- /** --TITULO--:função para contar quantos tem Switch case tem na função numerica| --LINK--:./Scripts/php/funcao-para-contar-quantos-tem-switch-case-tem-na-funcao-numerica.php| **/ -->