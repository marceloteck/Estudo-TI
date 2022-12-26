 
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
        <?php include 'Assets/php/PastasDIR.php'; ?>
    </div>
</li>

 <!-- Nav Item - Pages Collapse Menu -->
 <li class="nav-item">
    <!-- retirar o collapsed quando quiser deixar a mostra -->
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#TogleScrpt"
        aria-expanded="true" aria-controls="TogleScrpt">
        <i class="fas fa-fw fa-bars"></i>
        <span>Código Fonte</span>
    </a>
    <!-- colocar o show para mostrar -->
    <div id="TogleScrpt" class="collapse  tooltip-demo" aria-labelledby="headingTree" data-parent="#accordionSidebar">
    <?php include 'Assets/php/PastasDIR_SCRIPT.php'; ?>
    </div>
</li>


