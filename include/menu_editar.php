<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
    Editar Post
</div>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseCriar"
        aria-expanded="true" aria-controls="collapseCriar">
        <i class="fas fa-fw fa-bars"></i>
        <span>Editar</span>
    </a>
    <div id="collapseCriar" class="collapse show" aria-labelledby="headingcriar" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Formulario:</h6>
            <form action="#" class="container-fluid" >
            <button onclick="clikButton('enviarForm1')" type="button"  style="width:100%;" name="click1" class="btn btn-primary">Enviar</button>
            <br> <br>
                <label for="inputState" class="form-label">Onde Salvar &nbsp; 
                <button class="tbNT" type="button" onclick="selectJs()">  
                    <i class="material-icons">&#xe5d5;</i> 
                </button>
                <button class="tbNT2" type="button" onclick="ValueNpst('#PastaOption0')">  
                <i class="material-icons">&#xe2cc;</i>
                </button>
            </label>
                <div id="selectAtive"></div>
                <br />
                <input  autocomplete="off" onkeyup="titleLink('#title1','#Link1'),CopiarText('#title1', '#Titulo01'),titleLink('#title1', '#Link01')"  type="text" id="title1" class="form-control" placeholder="Escreva o Link">
                <br />
                <input autocomplete="off" readonly style="display: block;" id="Link1"  type="text" class="form-control" placeholder="Link formatado">
                <br />
            </form>
        </div>
    </div>
</li>
<!-- link para CSS e JS do SELECT com PESQUISA -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /><script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- link para CSS e JS do SELECT com PESQUISA -->
 <!-- #region  CSS do menu criar-->
 <style type="text/css">
  .tbNT{
  border: 0px;
  background-color: #fff;
  position: absolute;
  margin-top:-10px;
}
.tbNT2{
  border: 0px;
  background-color: #fff;
  position: absolute;
  margin-top:-10px;
  right: 10px;
}
 </style>
 <!-- #region  CSS do menu criar-->
<?php include INCLUDE_JS;?>
