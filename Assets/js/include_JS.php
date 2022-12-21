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
                    $GetEdit = '';
                    define('GET_EDIT', $GetEdit);
                }  
            ?>
    //Includes ATIVOS
    window.onload = selectJs();
    function selectJs(){ 
        IncludeJS('Assets/html/select_php.php<?=GET_EDIT?>', '#selectAtive');
        $('#PastaOption0').select2();   
    }
    function teste(){ 
        alert('teste');
    }
</script>
