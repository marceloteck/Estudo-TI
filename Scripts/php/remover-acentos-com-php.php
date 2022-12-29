<!--starthtml--> 
$string="olá À mim! ñ maçã ";
function tirarAcentos($string){
    return preg_replace(array("(á|à|ã|â|ä)","(Á|À|Ã|Â|Ä)","(é|è|ê|ë)","(É|È|Ê|Ë)","(í|ì|î|ï)","(Í|Ì|Î|Ï)","(ó|ò|õ|ô|ö)","(Ó|Ò|Õ|Ô|Ö)","(ú|ù|û|ü)","(Ú|Ù|Û|Ü)","(ñ)","(Ñ)","(ç)","(Ç)"),explode(" ","a A e E i I o O u U n N c C"),$string);
}
echo tirarAcentos($string); <!--endhtml--><!-- /** --TITULO--:remover acentos com php| --LINK--:./Scripts/php/remover-acentos-com-php.php| **/ -->