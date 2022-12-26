<!--startJs--> <script> //pegar valor de input select e copiar em um input text
function SelectValue(SecInput, SecIput2){
  var select = document.getElementById(SecInput);
  var opcaoValue = select.options[select.selectedIndex].value;
  //var opcaoText = select.options[select.selectedIndex].text;
  document.getElementById(SecIput2).value = opcaoValue;
} </script> <!--endJs--><!-- /** --TITULO--:pegar valor de input select e copiar em um input text| --LINK--:./Scripts/javascript/pegar-valor-de-input-select-e-copiar-em-um-input-text.php| **/ -->