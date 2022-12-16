
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="">
                        <!--card shadow mb-4
                         <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Criar um Post de estudo</h6>
                        </div>-->
                        <div class="card-body">
                        <form action="#" method="Post">
                       
                                <button id="enviarForm1" type="submit"  style="width:100%; display:none;" name="button2" class="btn btn-primary">Enviar</button> 
                        
                        <?php
                            include PHP_GRAVAR_POST;
                        ?>
                        <input  autocomplete="off" style="display: none;" name="title"  type="text" id="Titulo01" class="form-control" placeholder="Escreva o Link">
                        
                        <input autocomplete="off" style="display: none;" id="Link01" name="link"  type="text" class="form-control" placeholder="Link formatado">

                        <input autocomplete="off" style="display: none;" id="selectDiv" name="select"  type="text" class="form-control" placeholder="select">

                            <textarea class="shadow" name="editor" id="editor" width="100%"></textarea>
                                
                         </div>
                    </div>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
