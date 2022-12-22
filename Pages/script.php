
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Centro de Leitura</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                            <form action="#" method="Post">
              

                            <!-- itens ocultos para envio de formulario -->
                            <button id="enviarForm1" type="submit"  style="width:100%; display:none;" name="button2" class="btn btn-primary">Enviar</button> 
                        <?php include PHP_GRAVAR_POST; ?>
                            <input  autocomplete="off" style="display: none;" name="title" value=""  type="text" id="Titulo01" class="form-control" placeholder="Escreva o Link">
                            <input autocomplete="off" style="display: none;" id="Link01"  value="" name="link"  type="text" class="form-control" placeholder="Link formatado">
                            <input autocomplete="off" style="display: none;" id="selectDiv" name="select"  type="text" class="form-control" placeholder="select">
                            <!-- itens ocultos para envio de formulario -->

                             <!--------------------------------------------------->  
                             
                             <!--<link rel="stylesheet" href="./Assets/editorHtml/css/reset.css" type="text/css">-->  
                            <link rel="stylesheet" href="./Assets/editorHtml/css/style.css" type="text/css">
                            <script src="https://cdn.firebase.com/v0/firebase.js"></script>
                            <script src="./Assets/editorHtml/js/vendor/codemirror.js"></script>
                            <script src="./Assets/editorHtml/js/vendor/css.js"></script>
                            <script src="./Assets/editorHtml/js/vendor/htmlmixed.js"></script>
                            <script src="./Assets/editorHtml/js/vendor/xml.js"></script>
                            <script src="./Assets/editorHtml/js/vendor/javascript.js"></script>
                            <script src="./Assets/editorHtml/js/vendor/jquery.js"></script>
                            <script src="./Assets/editorHtml/js/vendor/jquery-ui.js"></script>

                            <script src="./Assets/editorHtml/js/app.js"></script>
                    

                            <div id="controls">
                                <!-- <a class="button together button-on" onclick="TogetherJS(this); return false;" title="toggle collaboration"></a> -->
                                
                                <!-- <a href="#" class="bnt  lights" title="toggle the lights"><i class="material-icons">&#xe2cc;</i></a> -->
                               <a href="#" class="" title="toggle the lights"><i class="material-icons">&#xe2cc;</i></a> 
                            </div>

                            
                            <textarea id="html">HTML</textarea>
                            <textarea id="css">CSS</textarea>
                            <textarea id="js">JS</textarea>

                          <!--  <div id="frame" class="cm-s-default frame">
                                <iframe id="preview"></iframe>
                            </div>-->

                            <div id="MstrarDiv" class="cm-s-default frame shadow MstrarDiv">
                                <iframe id="preview"></iframe>
                            </div>
                            <script>
                              
                            </script>
    <style>
        textarea{
            border: #ccc;
        }
        .MstrarDiv{
            float: right;
            width: 40%;
            min-height: 150vh;
            top: 75px;
            position: absolute;
            right: 10px;
            color: #fff;
            border-radius: 0.2em;
           
        }
    </style>





                            <!--------------------------------------------------->  
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid 
                Assets\editorHtml
            -->

            </div>
            <!-- End of Main Content -->
