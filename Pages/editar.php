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
                <?php
                    
                    if(isset($_GET['edit'])){
                        $edit = $_GET['edit'].'.php';
                        define('EDITANDO_ARQUIVO', $edit);
                    }
                ?>

                            <!-- itens ocultos para envio de formulario -->
                            <button id="enviarForm1" type="submit"  style="width:100%; display:none;" name="button2" class="btn btn-primary">Enviar</button> 
                        <?php include PHP_GRAVAR_POST; ?>
                            <input  autocomplete="off" style="display: none;" name="title" value="<?=URL_UTIMA_Format?>"  type="text" id="Titulo01" class="form-control" placeholder="Escreva o Link">
                            <input autocomplete="off" style="display: none;" id="Link01"  value="<?=URL_UTIMA?>" name="link"  type="text" class="form-control" placeholder="Link formatado">
                            <input autocomplete="off" style="display: none;" id="selectDiv" name="select"  type="text" class="form-control" placeholder="select">
                            <!-- itens ocultos para envio de formulario -->
                            <!-- TEXTAREA -->
                            <textarea class="shadow" name="editor" id="editor" width="100%">
                            <?php 
                            if(file_exists(EDITANDO_ARQUIVO)){
                                include EDITANDO_ARQUIVO; 
                            }else{
                                echo '<h1><span style="font-size:36px"><span style="color:#c0392b">Esse arquivo n&atilde;o EXISTE!</span></span></h1>';
                            }
                           
                            ?>
                            </textarea>
                            <!-- TEXTAREA -->
                        </div>
                    </div>
                </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->