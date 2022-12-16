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

    
          function UrlAjaxPages(tagDiv, divLoad, Arquiv){
              var load = document.querySelector(divLoad);
             // load.style.display = "flex";
              $.ajax({
            url: "www/pages/"+Arquiv,
            type:'POST',
            cache:false,
            contentType:false,
            processData:false,
            success:function(data){
                $(tagDiv).html(data);
                load.style.display = "none";

            },
            dataType:'html'
        });
                             
          }
          function IncludeJS(pagina, divID){
              $.ajax({
                url: pagina,
                type: 'GET',
                success: function(data) {
                  $(divID).html(data);
                }
              });
          }


          //////////////////////
 
    

      </script>