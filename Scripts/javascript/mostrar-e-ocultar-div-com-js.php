<!--startJs--> <script> //mostrar e ocultar div com js
function MostraOcultar(divMs, displayDivTYpe){
  var div01 = document.querySelector(divMs);
  var status = div01.style.display;
  if(status == displayDivTYpe){
    div01.style.display = "none";
  }else{
    div01.style.display = displayDivTYpe;
  }
} </script> <!--endJs--><!-- /** --TITULO--:mostrar e ocultar div com js| --LINK--:./Scripts/javascript/mostrar-e-ocultar-div-com-js.php| **/ -->