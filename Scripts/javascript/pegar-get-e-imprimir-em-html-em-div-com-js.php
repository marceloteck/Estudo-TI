<!--startJs-->  <script> function btnDiv(url){
var retorno = url.split("?NameProjeto=");
var link = retorno[1].trim();
link = link.replace(" ", "_");
link = removerAcentos(link).toLowerCase();
document.querySelector('#btnclikOk').innerHTML = '<button id="clikOk" onclick="abrirUrl(\'/'+link+'\')" type="button" class="btn btn-success btn-block">Abrir Projeto</button>';
} </script> <!--endJs--><!-- /** --TITULO--:pegar get e imprimir em html em div com js| --LINK--:./Scripts/javascript/pegar-get-e-imprimir-em-html-em-div-com-js.php| **/ -->