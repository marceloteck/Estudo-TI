<link rel="stylesheet" href="/Assets/vendor/jquery/jquery.min.js">
<?php
include 'Assets/js/include_JS.php';
?>
<div id="divDEl"></div>

<button onclick="excluirItemSelecionado('ApagandoCompleto')" type="button" class="btn btn-danger"> Apagar</button>

<script>
    function excluirItemSelecionado(ItemApagar){
      
        
        var resultado = confirm("Deseja excluir o item: ?");
        if (resultado == true) {
          $.ajax({
                    url: 'Assets/php/ApagarArquivo.php',
                    type: 'GET',
                    success: function(data) {
                    $('#divDEl').html(data);
                    
                    }
                });
            

        
         
        }
        else{
            alert("cancelado");
        }
    }
</script>
<a href="Assets/php/ApagarArquivo.php?del=ApagandoCompleto">link</a>
