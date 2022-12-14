<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<form action="#" class="form-inline">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
</form>


<!-- Topbar Search -->
<form
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">

        <input onblur=" blrNone()" onfocus="BlockBsc('#pesquisabar', 'block')"  onkeydown="pesquisaBar()" id="BscBar" type="text" class="form-control bg-light border-0  rounded" placeholder="Pesquisar..."
            aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            
            <!--<button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>-->
<!--pesquisa div -->
<div style="display: none;" id="pesquisabar" class="pesquisabar shadow">
<label id="dgt">Digite para pesquisar...</label>
    <?php
    include "Pages/pesquisaSit.php";
    ?>
</div>
<!--pesquisa div -->
        </div>
    </div>
</form>




<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Search for..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>

    <!-- Nav Item - Alerts
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            !-- Counter - Alerts --
            <span class="badge badge-danger badge-counter">3+</span>
        </a> -->
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
                Alerts Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
        </div>
    </li>

   

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Marcelo Henrique</span>
            <img class="img-profile rounded-circle"
                src="<?=URL_PRINCIPAL?>/Assets/img/undraw_profile.svg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Perfil
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Configura????es
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                Atividade Log
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Sair
            </a>
        </div>
    </li>

</ul>

</nav>
<!-- End of Topbar -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    
<style>
    .pesquisabar{
        position: absolute;
        width: 100%;
        height: auto;
        min-height: 50px;
        max-height: 90vh;
        overflow: auto;
        background-color: #fff;
        border: 0.5px solid #ccc;
        z-index: 999999999999999999999;
        left: 0px;
        top: 0px;
        margin-top: 40px;
        border-radius: 5px;

    }
    .listBusc a{
  text-decoration: none;
  list-style: none;
  width: 100%;
  padding: 5px 5px 5px 15px;
  float: left;
  cursor: pointer;
  color: #000;
  border-bottom:1px solid #fafafa;
}
.listBusc a i{
    font-size: 1rem;
}
.listBusc a:hover{
    background-color: darkgrey;
    color: #fff;
}
</style>

<script type="text/javascript">
function BlockBsc(divMs, displayDiv){
  var div01 = document.querySelector(divMs);
  var status = div01.style.display;
    div01.style.display = displayDiv;
} 

function blrNone(){
    if(!document.getElementById('BscBar').value){
        BlockBsc('#pesquisabar', 'none')
    }
}


    //" onblur="MostraOcultar('#pesquisabar', 'block'),hidepsq()" 
    window.onload = hidepsq();
    function hidepsq(){
        $('psq').hide();
        $('#dgt').show();
    }
    
        function pesquisaBar(){
        var buscarPOr = "psq";
        var Onde = "#listBuscID";
        var IDBuscador = "#BscBar";
				$(buscarPOr).hide();
				$('#dgt').hide();
				var txt = $(IDBuscador).val();
				$(buscarPOr).each(function(){
				   if($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1){
					   $(this).show();
				   }
				});
           
}
            </script>