<script type="text/javascript">
      function Navtab(value, div1, div2){
        var valuediv = document.querySelector(value);
        var divtab = document.querySelector(value + '-tab');

        var div01 = document.querySelector(div1);
        var div02 = document.querySelector(div2);
        var div01tab = document.querySelector(div1 + '-tab');
        var div02tab = document.querySelector(div2 + '-tab');

        var status = valuediv.style.display;
        if(status == "block"){
          valuediv.style.display = "none";
          divtab.classList.toggle("active");
        }else{
          valuediv.style.display = "block";
          div01.style.display = "none";
          div02.style.display = "none";
          div01tab.classList.remove("active");
          div02tab.classList.remove("active");
          divtab.classList.toggle("active");
        }
      }
    CKEDITOR.replace( 'editor1' );

    // In your Javascript (external .js resource or <script> tag)

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

      </script>