<!--startJs--> <script> //: /url-script/javascript/include_em_js
function EnviarGetUrl(valueIdFrm, urlGEt, idResult){
    //EnviarGetUrl(id do input, url + o get, div onde a resposta será impressa)
    var IDnv  = document.querySelector(valueIdFrm).value;
    IncludeJS(urlGEt+IDnv, idResult);
} </script> <!--endJs--><!-- /** --TITULO--:enviar get para o php pelo js| --LINK--:./Scripts/javascript/enviar-get-para-o-php-pelo-js.php| **/ -->