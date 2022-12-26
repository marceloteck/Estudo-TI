<!--starthtml--> //php
function CondicionalRtrn($value){
    if($value != ""){
            return $value;
    }else{
        return '';
    }
}


if(isset($_GET['site'])){
    echo CondicionalRtrn($_GET['site']);
}
//diminuição no tamanho do código ao inves de usar a condição toda vez, basta usar a função <!--endhtml--><!-- /** --TITULO--:condional para o codigo| --LINK--:./Scripts/php/condional-para-o-codigo.php| **/ -->