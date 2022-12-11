<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=TITULO_DOSITE?></title>
    <link href="<?=GETBOOTSTRAPCSS?>" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="www/templates/css/style.css">

</head>
<body>
    <head>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?=NAMESITE?></a>
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./">INICIO</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Link</a>
        </li>-->
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
    </head>
    <article class='container'>
        <h1>Caderno de estudos</h1>
        <hr>
        <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a onclick="Navtab('#nav-home','#nav-profile', '#nav-contact')" class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"  role="tab" href="#" aria-controls="nav-home" aria-selected="true">Criar</a>
          <a onclick="Navtab('#nav-profile','#nav-contact','#nav-home')" class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#" role="tab" aria-controls="nav-profile" aria-selected="false">Apagar</a>
          <a onclick="Navtab('#nav-contact','#nav-home', '#nav-profile')"class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#" role="tab" aria-controls="nav-contact" aria-selected="false">Editar</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div style="display: block;" class="tab-pane fade show active" id="nav-home" >Criar</div>
        <div style="display: none;" class="tab-pane fade show" id="nav-profile" >Apagar</div>
        <div style="display: none;" class="tab-pane fade show" id="nav-contact" >Editar</div>
      </div>
    </article>
  <?php
  include "modulos/js/function_JS.php";
  ?>
    <script src="<?=GETBOOTSTRAPJS?>" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
