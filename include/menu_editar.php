 
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
        <span>Editar</span>
    </a>
    <div id="collapseCriar" class="collapse show" aria-labelledby="headingcriar" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">


            <h6 class="collapse-header">Formulario:</h6>
            

            <form action="#" class="container-fluid" >
                <label for="inputState" class="form-label">Onde Salvar</label>
                <select onchange="SelectValue('PastaOption0', 'selectDiv')" name="pastaativa" id="PastaOption0" class="form-control">
                <option value="aqui 1">aqui 1</option>
                <option value="aqui 2">aqui 2</option>
                <option value="aqui 3">aqui 3</option>
                <option value="aqui 4">aqui 4</option>
                </select>
                <br />
                <input  autocomplete="off" onkeyup="titleLink('#title1','#Link1'),CopiarText('#title1', '#Titulo01'),titleLink('#title1', '#Link01')"  type="text" id="title1" class="form-control" placeholder="Titulo">
                <br />
                <input autocomplete="off" readonly style="display: block;" id="Link1"  type="text" class="form-control" placeholder="Link">

                <br />
            </form>
        

        </div>
    </div>
</li>

