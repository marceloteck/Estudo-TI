<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
    Criar novo Post
</div>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseCriar"
        aria-expanded="true" aria-controls="collapseCriar">
        <i class="fas fa-fw fa-bars"></i>
        <span>Titulos e Link</span>
    </a>
    <div  id="collapseCriar" class="collapse show shadow" aria-labelledby="headingcriar" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Formulario:</h6>
            <form action="#" class="container-fluid" >
            <button onclick="clikButton('enviarForm1')" type="button"  style="width:100%;" name="click1" class="btn btn-primary">
            <?php /************************************* */
            if(EXPLODE_SELECAO == "editar"){ echo "Salvar"; }else{ echo "Criar";}
            ?>
            </button>
            <br> <br>
            <?php /************************************* */
              if(isset($_GET['edit'])){
                echo '<button onclick="preVisualizar()" type="button"  style="width:100%;" name="click1" class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Pré-visualizar</button>
                <br> <br>
                ';
              }else{
                echo '';
              }
            ?>

                <label for="inputState" class="form-label">Salvar: &nbsp; 
                <button class="tbNT" type="button" onclick="selectJs()">  
                    <i class="material-icons">&#xe5d5;</i> 
                </button>
                <button class="tbNT2" type="button" onclick="ValueNpst('#PastaOption0')">  
                <i class="material-icons">&#xe2cc;</i>
                </button>
            </label>
                <!--<div id="selectAtive"></div>-->
                
                <input type="text" name="pastaativa" class="form-control" placeholder="pasta">

                <br />
                <?php /************************************* */
                  if(isset($_GET['edit'])){$IptTitle = URL_UTIMA_Format; $IptLink = URL_UTIMA;}else{$IptTitle = ''; $IptLink = '';}
                 ?>
                <input onblur="widthDiv('#collapseCriar', '')" onfocus="widthDiv('#collapseCriar', '400px')"  autocomplete="off" onkeyup="titleLink('#title1','#Link1'),CopiarText('#title1', '#Titulo01'),titleLink('#title1', '#Link01'),SelectValue('PastaOption0', 'selectDiv')" value="<?=$IptTitle?>"  type="text" id="title1" class="form-control" placeholder="Escreva o Link">
                <br />
                <input onblur="widthDiv('#collapseCriar', '')" onfocus="widthDiv('#collapseCriar', '400px')" autocomplete="off" readonly style="display: block;" value="<?=$IptLink?>" id="Link1"  type="text" class="form-control" placeholder="Link formatado">
                <br />
 
                <button style="width:100%;"  type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Editar
                </button>
                <script>
                  window.onload = titleLink('#title1','#Link1'),CopiarText('#title1', '#Titulo01'),titleLink('#title1', '#Link01'),SelectValue('PastaOption0', 'selectDiv');
                </script>

              <script>
              function widthDiv(IDDv, tmnho){
                var IDDIV = document.querySelector(IDDv);
                IDDIV.style.width = tmnho;
              }
            </script>
                     
            
<!--
#region
-->
            </form>
        </div>
    </div>
</li>
<!-- link para CSS e JS do SELECT com PESQUISA -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /><script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- link para CSS e JS do SELECT com PESQUISA -->

<?php include INCLUDE_JS;?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="fs-5" id="exampleModalLabel">GERENCIAR SEUS POSTs</h1> 
	    <div style="float: right; position: absolute; right: 50px;" class="bm-4"><input class="form-control" onkeyup="pesquisa()" type="text" placeholder="Buscar..." id="searchBsc"/>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div id="divDE2"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
"></script>
<script type="text/javascript">
        function pesquisa(){
        var buscarPOr = "tr";
        var IDBuscador = "#searchBsc";
				$(buscarPOr).hide();
				var txt = $(IDBuscador).val();
				$(buscarPOr).each(function(){
				   if($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1){
					   $(this).show();
				   }
				});
}
divDE2();
function divDE2(){IncludeJS('Assets/php/GerenciarPsts.php', '#divDE2');}
      </script>

 <!-- #region  CSS do menu criar-->
 <style type="text/css">
  .tbNT{
  border: 0px;
  background-color: #fff;
  position: absolute;
  margin-top:-10px;
  float: left;
}
.tbNT2{
  border: 0px;
  background-color: #fff;
  position: absolute;
  margin-top:-10px;
  float: right;
  margin-left: 30px;
}
.modal a{
        text-decoration: none;
       
    }


            .confEdit{
                position: relative;
                float: left;
                padding: 0px;
            }
            .confEdit button{
                margin-right:0px;
                
            }
            .confEdit button i{
                font-size: 1.2rem;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .tdTAb{
                float:left;
                min-width: 20%;
                margin-left: 5px;
            }
        </style>
 <!-- #region  CSS do menu criar-->
 <!--
#endregion
 -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><div id="TITLE_posts"></div></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div id="TEXTO_posts"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function preVisualizar(){
    var TITLE_posts = document.querySelector('#title1').value;
    var TEXT_posts = document.querySelector('#editor').value;
    document.querySelector('#TITLE_posts').innerHTML = TITLE_posts;
    document.querySelector('#TEXTO_posts').innerHTML = TEXT_posts;
    
  }
</script>
