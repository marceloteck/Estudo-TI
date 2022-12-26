<!--startJs--> <script> // apagar arquivos com js e php

function ApagarArquvs(ItemApagar,NameRq){
        var resultado = confirm("Deseja excluir o item: "+NameRq+" ?");
        if (resultado == true) {
          $.ajax({
                    url: 'Assets/php/ApagarArquivo.php'+ItemApagar,
                    type: 'GET',
                    success: function(data) {
                      // onde mostrar resultado 
                      //$('#div').html(data);
                    }
                });
        }
        else{
            alert("Cancelado pelo usuário!");
        }
    } </script> <!--endJs--><!-- /** --TITULO--:apagar arquivos com js e php| --LINK--:./Scripts/javascript/apagar-arquivos-com-js-e-php.php| **/ -->