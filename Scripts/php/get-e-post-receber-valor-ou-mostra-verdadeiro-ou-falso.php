<!--starthtml--> // função que tras resultado sem erros caso não exista um GET ou POST

function GET($value){
    if(isset($_GET[$value])){
        return $_GET[$value];
    }   
}
function POST($value){
    if(isset($_POST[$value])){
        return $_POST[$value];
    }   
}

// se existir mostra verdadeiro, ou se não mostra falso
function GET_TRUE($value){
    if(isset($_GET[$value]) and $_GET[$value] != ""){
        return true;
    }else{
        return false;
    }
}
function POST_TRUE($value){
    if(isset($_POST[$value]) and $_POST[$value] != ""){
        return true;
    }else{
        return false;
    }
} <!--endhtml--><!-- /** --TITULO--:get e post receber valor ou mostra verdadeiro ou falso| --LINK--:./Scripts/php/get-e-post-receber-valor-ou-mostra-verdadeiro-ou-falso.php| **/ -->