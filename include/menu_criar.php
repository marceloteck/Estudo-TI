 <style>
    .tbNT{
       border: 0px;
       background-color: #fff;
       position: absolute;
       margin-top:-10px;
    }
 </style>


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
    <div id="collapseCriar" class="collapse show" aria-labelledby="headingcriar" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">


            <h6 class="collapse-header">Formulario:</h6>

            <form action="#" class="container-fluid" >

            <button onclick="clikButton('enviarForm1')" type="button"  style="width:100%;" name="click1" class="btn btn-primary">Enviar</button>
            <br> <br>

                <label for="inputState" class="form-label">Onde Salvar &nbsp; <button class="tbNT" type="button" onclick="selectJs()">  <i class="material-icons">&#xe5d5;</i> <!--<a href="#" onclick="MostraOcultar('#NvaPasta', 'block')"> <i class="material-icons">&#xe2cc;</i>--></a></button></label>
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
<?php include INCLUDE_JS;?>

