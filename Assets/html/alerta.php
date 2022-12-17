<style>
/**** MODAL ALERT****/
.modaltabAlert{
  width: 500px;
  text-align: center;
  
}
.botyMdal{
  width: 99vw;
  height: 95vh;
  position: fixed;
  z-index: 999999999999;
  display: flex;
  align-items: center;
  justify-content: center;
  top: 0px;
  right: 0px;

}
</style>
<div class="botyMdal" style="display: flex;" id="mdlAlert">
    <div class="modaltabAlert">
    <div style="display: block;" id="alert" class=" alert alert-<?=$_GET['cor']?>  alert-dismissible fade show" role="alert"> <?=$_GET['aviso']?> <button onclick="MostraOcultar('#mdlAlert','flex')" type="button" class="close" data-bs-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>
    </div>
</div>

<br>
