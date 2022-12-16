<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<button onclick="IncludeJS('teste2.php?url=GET funcinando', '#conteudo')" id="acessar">Clique para obter o conteúdo deste site</button>


<div id="conteudo" style="background:#EEF0A6"></div>


<script>

function IncludeJS(pagina, divID){
              $.ajax({
                url: pagina,
                type: 'GET',
                success: function(data) {
                  $(divID).html(data);
                }
              });
          }



</script>
