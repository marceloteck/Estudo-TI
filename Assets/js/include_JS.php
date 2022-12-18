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
    //Includes ATIVOS
    window.onload = selectJs();
    function selectJs(){ 
        IncludeJS('Assets/html/select_php.php', '#selectAtive');
        $('#PastaOption0').select2();
        
    }
</script>
