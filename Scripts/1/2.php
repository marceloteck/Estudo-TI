
    <?php
    if(empty($_GET["script"])){
    
$valor =  "php aqui";


    }else if($_GET["script"] == "true"){
    ?>
    <style>
    
h1{
 color:blue; 
}
div{
 font-size:4rem;
  color:red;
}
    </style>
    
<h1>teste</h1>



<div onclick="aqui()"><?=$valor?></div>

    <script>
    
function aqui(){
 alert('funcionou!'); 
}
    </script>

    <?php
    }
    ?>
    <!-- /** --TITULO--:2| --LINK--:./Scripts/1/2.php| **/ -->