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

  function MostraOcultar(divMs, displayDiv){
    var div01 = document.querySelector(divMs);
    var status = div01.style.display;
    if(status == displayDiv){
      div01.style.display = "none";
    }else{
      div01.style.display = displayDiv;
   }
}
         

</script>

<script>
     CKEDITOR.replace( 'editor' );    
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