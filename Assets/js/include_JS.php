<script type="text/javascript">
    function IncludeJS(pagina, divID){
                $.ajax({
                    url: pagina,
                    type: 'GET',
                    success: function(data) {
                    $(divID).html(data);
                    $('#PastaOption0').select2();
                    }
                });
            }
            <?php
                if(isset($_GET['edit'])){
                    $GetEdit = '?edit='.$_GET['edit'];
                    $GetEdit = str_replace('%20',' ',$GetEdit);
                    define('GET_EDIT', $GetEdit);
                }else{
                    define('GET_EDIT', '');
                } 
                if(isset($_GET['editscript'])){
                    $GetEdit = '?editscript='.$_GET['editscript'];
                    $GetEdit = str_replace('%20',' ',$GetEdit);
                    define('GET_EDIT2', $GetEdit);
                }else{
                    define('GET_EDIT2', '');
                }  





            ?>
    //Includes ATIVOS
    window.onload = selectJs();
    window.onload = selectJsScript();
    function selectJs(){ 
        IncludeJS('Assets/html/select_php.php<?=GET_EDIT?>', '#selectAtive');
        $('#PastaOption0').select2();   
    }
    function selectJsScript(){ 
        IncludeJS('Assets/html/select_phpScript.php<?=GET_EDIT2?>', '#selectAtiveScript');
        $('#PastaOption0').select2();   
    }

</script>
