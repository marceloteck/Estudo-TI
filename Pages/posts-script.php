
<link rel="stylesheet" href="/Assets/editorHtml/css/style.css" type="text/css">
                <script src="https://cdn.firebase.com/v0/firebase.js"></script>
                <script src="/Assets/editorHtml/js/vendor/codemirror.js"></script>
                <script src="/Assets/editorHtml/js/vendor/css.js"></script>
                <script src="/Assets/editorHtml/js/vendor/htmlmixed.js"></script>
                <script src="/Assets/editorHtml/js/vendor/xml.js"></script>
                <script src="/Assets/editorHtml/js/vendor/javascript.js"></script>
                <script src="/Assets/editorHtml/js/vendor/jquery.js"></script>
                <script src="/Assets/editorHtml/js/vendor/jquery-ui.js"></script>
                <script src="/Assets/editorHtml/js/app.js"></script>



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Códigos Fontes</h6>

                            link: <a href="<?=PATH_SCRIPT?>"><?=PATH_SCRIPT?></a>
                        </div>
                        <div class="card-body">
                            <div id="TEXtPostEdt">


                            <textarea style="display: none;" id="html" name="html">
                            <?php include PATH_SCRIPT;?>
                              </textarea>
                              


                         

                              <!--  <textarea readonly class="textView">
                                <?php //include PATH_SCRIPT;?>
                                </textarea>-->
                            
                                
                            </div>
                            <style>
                                .CodeMirror {
                                    width: 100% !important;
                                    height: 100vh !important;
                                }
                                                                
                            </style>
                            
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
