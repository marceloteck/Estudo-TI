<?php 
if(empty($_GET['script'])){
  function ativess(){
  echo "Teste de PHP <h1>aqui</h1>";
  }
  ativess();
}else if($_GET['script'] == 'true'){
?>
<style>
/* CSS */
.fundo{
  width:100vw;
  height:100vh;
  background: #ddf;
}
  btn-danger {
    background:#b02a37;
    border: 1px solid #000;
}
.btn {
    --bs-btn-padding-x: 0.75rem;
    --bs-btn-padding-y: 0.375rem;
    --bs-btn-font-family: ;
    --bs-btn-font-size: 1rem;
    --bs-btn-font-weight: 400;
    --bs-btn-line-height: 1.5;
    --bs-btn-color: #212529;
    --bs-btn-bg: transparent;
    --bs-btn-border-width: 1px;
    --bs-btn-border-color: transparent;
    --bs-btn-border-radius: 0.375rem;
    --bs-btn-hover-border-color: transparent;
    --bs-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15),0 1px 1px rgba(0, 0, 0, 0.075);
    --bs-btn-disabled-opacity: 0.65;
    --bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
    display: inline-block;
    padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
    font-family: var(--bs-btn-font-family);
    font-size: var(--bs-btn-font-size);
    font-weight: var(--bs-btn-font-weight);
    line-height: var(--bs-btn-line-height);
    color: var(--bs-btn-color);
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
    border-radius: var(--bs-btn-border-radius);
    background-color: var(--bs-btn-bg);
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>
<!-- HTML -->
<div class="fundo">
<button onclick="divDE2()" style="width:100%;"  type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#EditarScript">
Editar
</button>
  
</div>
<script>
// JavaScript & jQuery
function divDE2(){
  alert('sa');
}
</script>
<!-- /** --TITULO--:teste de div css e html com javascript| --LINK--:./Scripts/html/teste-de-div-css-e-html-com-javascript.php| **/ -->
<?php
}
?>