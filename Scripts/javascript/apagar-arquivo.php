<!--startJs--> <script> 
    function ApagarArquvs(ItemApagar,NameRq){
        var resultado = confirm("Deseja excluir o item: "+NameRq+" ?");
        if (resultado == true) {
          $.ajax({
                    url: 'Assets/php/ApagarArquivo.php'+ItemApagar,
                    type: 'GET',
                    success: function(data) {
                     divDE2();
                    }
                });
        }
        else{
            alert("Cancelado pelo usuário!");
        }
    } </script> <!--endJs--><!-- /** --TITULO--:apagar arquivo| --LINK--:./Scripts/javascript/apagar-arquivo.php| **/ -->