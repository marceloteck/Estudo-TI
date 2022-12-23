<script type="text/javascript">
function removerAcentos(s) {
  return s.normalize('NFD')
  .replace(/[\u0300-\u036f]/g, "")
  .toLowerCase()
  .replace(/[- ]+/g, "-");
}
function titleLink(title, link){
  var titleweb = document.querySelector(title).value;
  titleweb = removerAcentos(titleweb);
  var linkweb = document.querySelector(link);
  linkweb.value = titleweb;
}
function CopiarText(INput1, Input2){
  var INput1web = document.querySelector(INput1).value;
  var Input2web = document.querySelector(Input2);
  Input2web.value = INput1web;
}
function SelectValue(SecInput, SecIput2){
  var select = document.getElementById(SecInput);
  var opcaoTexto = select.options[select.selectedIndex].value;
  document.getElementById(SecIput2).value = opcaoTexto;
}
window.onload = SelectValue('PastaOption0', 'selectDiv');
function clikButton(bttn){
  var button = document.getElementById(bttn);
  button.click();
}
//MOSTRAR E OCULTAR UMA DIV - divMs: div | displayDiv: block ou flex
function MostraOcultar(divMs, displayDiv){
  var div01 = document.querySelector(divMs);
  var status = div01.style.display;
  if(status == displayDiv){
    div01.style.display = "none";
  }else{
    div01.style.display = displayDiv;
  }
}       
/// PEGAR VALOR DE SELECT MOSTRAR UMA DIV
function IputNovaPasta(Texto, IdInput, IdMostrar){
    var select  = document.querySelector(IdInput);
    var Mstrar  = document.querySelector(IdMostrar);
    var opcaoValor = select.options[select.selectedIndex].value;
    if(Texto == opcaoValor){
        Mstrar.style.display = "block";
    }else{
        Mstrar.style.display = "none";
    }
}
//CRIAR UMA PASTA COM PHP E JS
function NvaPast(){
    var IDnv  = document.querySelector('#NvaPasta').value;
    IncludeJS('Assets/php/CriarPasta.php?past='+IDnv, '#finalres');
    selectJs(); 
}
function NvaPastScript(){
    var IDnv  = document.querySelector('#NvaPasta').value;
    IncludeJS('Assets/php/CriarPasta.php?pastscript='+IDnv, '#finalres');
    selectJsScript(); 
}



//selecionar um valor do select pelo botão
function ValueNpst(IdInput){
    var text = 'NovaPasta';
    var idMstr = document.querySelector('#NvaPasta');
    var select = document.querySelector(IdInput);
    for (var i = 0; i < select.options.length; i++) {
        if (select.options[i].value === text) {
            select.selectedIndex = i;
            idMstr.style.display = "block";
            break;
        }
    }
}
$('#PastaOption0').select2();
</script>
<script>
     CKEDITOR.replace('editor');    
</script>
 <!-- Bootstrap core JavaScript-->
 <script src="<?=URL_PRINCIPAL?>/Assets/vendor/jquery/jquery.min.js"></script>
 <script src="<?=URL_PRINCIPAL?>/Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
<script src="<?=URL_PRINCIPAL?>/Assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  
<!-- Custom scripts for all pages-->
<script src="<?=URL_PRINCIPAL?>/Assets/js/sb-admin-2.min.js"></script>
  
<!-- Page level plugins -->
<script src="<?=URL_PRINCIPAL?>/Assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?=URL_PRINCIPAL?>/Assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
<!-- Page level custom scripts -->
<script src="<?=URL_PRINCIPAL?>/Assets/js/demo/datatables-demo.js"></script>
  
<!-- popper -->                   
<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  
<script src="https://getbootstrap.com/docs/4.0/assets/js/docs.min.js"></script>
  
<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>