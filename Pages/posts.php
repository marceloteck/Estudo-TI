
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Centro de Leitura</h6>
                            <div style="float: right; position: absolute; right: 0px; margin-top: -30px; right: 15px;">
                            <?php
                            $LinkPost = str_replace('./', '', PATH_pOST);
                            $LinkPost = str_replace('.php', '', $LinkPost);
                            ?>
                              <a href="/editar?edit=<?=$LinkPost?>"><button class="btn btn-danger">Editar</button></a>
                             
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <div id="TEXtPostEdt">
                                
                            
                                <?php
                               
                                 include PATH_pOST;?>
                            </div>
                            
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <style>
                blockquote{
                border-left: 5px solid #4e73df;
                padding: 15px;
                background-color: aliceblue;
                font-size: 1.5rem;
                }
            </style>