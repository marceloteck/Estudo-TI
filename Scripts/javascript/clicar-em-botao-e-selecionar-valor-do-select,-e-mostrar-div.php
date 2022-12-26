<!--startJs--> <script> //clicar em botão e selecionar valor do select, e mostrar div
function ValueNpst(TextBusc, Idmstrar , IdInput){
    var text = TextBusc;
    var idMstr = document.querySelector(Idmstrar);
    var select = document.querySelector(IdInput);
    for (var i = 0; i < select.options.length; i++) {
        if (select.options[i].value === text) {
            select.selectedIndex = i;
            idMstr.style.display = "block";
            break;
        }
    }
} </script> <!--endJs--><!-- /** --TITULO--:clicar em botão e selecionar valor do select, e mostrar div| --LINK--:./Scripts/javascript/clicar-em-botao-e-selecionar-valor-do-select,-e-mostrar-div.php| **/ -->