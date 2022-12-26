<!--startJs--> <script> /// PEGAR VALOR DE SELECT MOSTRAR UMA DIV
function IputNovaPasta(Texto, IdInput, IdMostrar){
    var select  = document.querySelector(IdInput);
    var Mstrar  = document.querySelector(IdMostrar);
    var opcaoValor = select.options[select.selectedIndex].value;
    if(Texto == opcaoValor){
        Mstrar.style.display = "block";
    }else{
        Mstrar.style.display = "none";
    }
} </script> <!--endJs--><!-- /** --TITULO--:PEGAR VALOR DE SELECT MOSTRAR UMA DIV| --LINK--:./Scripts/javascript/pegar-valor-de-select-mostrar-uma-div.php| **/ -->