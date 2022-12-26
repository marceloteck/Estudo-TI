<!--startJs--> <script> function removerAcentos(s) {
  return s.normalize('NFD')
  .replace(/[\u0300-\u036f]/g, "")
  .toLowerCase()
  .replace(/[- ]+/g, "-");
}

//converter titulo em link em outro input
function ConverterTitleInLink(title, link){
  var titleweb = document.querySelector(title).value;
  titleweb = removerAcentos(titleweb);
  var linkweb = document.querySelector(link);
  linkweb.value = titleweb;
} </script> <!--endJs--><!-- /** --TITULO--:remover acentos js e converter link em titulo| --LINK--:./Scripts/javascript/remover-acentos-js-e-converter-link-em-titulo.php| **/ -->