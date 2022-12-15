 
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
    Páginas criadas
</div>

 <!-- Nav Item - Pages Collapse Menu -->
 <li class="nav-item">
    <!-- retirar o collapsed quando quiser deixar a mostra -->
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree"
        aria-expanded="true" aria-controls="collapseTree">
        <i class="fas fa-fw fa-bars"></i>
        <span>Conteudo de estudos</span>
    </a>
    <!-- colocar o show para mostrar -->
    <div id="collapseTree" class="collapse  tooltip-demo" aria-labelledby="headingTree" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded DivConteudo">
            <h4 class="collapse-header">CSS 3:</h4>
            <?php
            for ($i = 1; $i <= 10; $i++){
                echo '<a  data-toggle="tooltip" data-placement="top" title="inicio de como criar uma pagina css '.$i.'" class="collapse-item" href="/">'.limitChars('inicio de como criar uma pagina css '.$i.'', 4).'</a>';
            }
            ?>
        </div>

        <div class="bg-white py-2 collapse-inner rounded">
            <h4 class="collapse-header">HTML 5:</h4>
            <?php
            for ($i = 1; $i <= 10; $i++){
                echo '<a class="collapse-item" href="/">inicio '.$i.'</a>';
            }
            ?>
        </div>
    </div>
</li>

