<!--startJs--> <script> 
function BlockBsc(divMs, displayDiv){
  var div01 = document.querySelector(divMs);
  var status = div01.style.display;
    div01.style.display = displayDiv;
}
function HideDivInput($Id_input, $idDivOcult){
    if(!document.querySelector($Id_input).value){
        BlockBsc($idDivOcult, 'none')
    }
} </script> <!--endJs--><!-- /** --TITULO--:mostrar div| --LINK--:./Scripts/javascript/mostrar-div.php| **/ -->