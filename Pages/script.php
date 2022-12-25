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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Editor Online</h6>

                           

                            <div id="controls">
                            <a href="/script"  class="bnt" style="color: rgb(37, 81, 131);"><i class="material-icons">add_box</i></a>

                                <a onclick="expandirDiv('#MstrarDiv')" class="bnt lights"><i class="material-icons">&#xe31f;</i></a>
                                
                                
                                <a href="#"  class="bnt  lights" title="toggle the lights"><i class="material-icons">&#xe1ae;</i></a>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                          
                    <form action="#" method="Post">
              

                            <!-- itens ocultos para envio de formulario -->
                            <button id="enviarForm1" type="submit"  style="width:100%; display:none;" name="button2" class="btn btn-primary">Enviar</button> 
                            <?php
                             include PHP_GRAVAR_SCRIPT;
                            
                            ?>
                              <?php /************************************* */
                            if(isset($_GET['editscript'])){$IptTitle = URL_UTIMA_Format; $IptLink = URL_UTIMA;}else{$IptTitle = ''; $IptLink = '';}
                            ?>
                            <input  autocomplete="off" style="display: none;" name="title" value="<?=$IptTitle?>"  type="text" id="Titulo01" class="form-control" placeholder="Escreva o Link">
                            <input autocomplete="off" style="display: none;" id="Link01"  value="<?=$IptLink?>" name="link"  type="text" class="form-control" placeholder="Link formatado">
                            <input autocomplete="off" style="display: none;" id="selectDiv" name="select"  type="text" class="form-control" placeholder="select">
                            <!-- itens ocultos para envio de formulario -->
                            <?php
                            if(isset($_GET['editscript'])){
                                define('EDITsCRIPTGET', URL_PRINCIPAL.'/'.$_GET['editscript'].'.php');

                                $texHtml = ApiScript(EDITsCRIPTGET, 'html');
                                $texCss = ApiScript(EDITsCRIPTGET, 'css');
                                $texJS = ApiScript(EDITsCRIPTGET, 'js');

                                
                            
                            }else{
                                $texHtml = '';
                                $texCss = '';
                                $texJS = '';
                            }
                           
                            ?>

                             <!--------------------------------------------------->  
                        <div id="cnthtml">
                            <textarea style="display: none;" id="html" name="html"><!-- HTML  ou PHP --><?=trim($texHtml)?></textarea>
                            <textarea style="display: none;" id="css" name="css">/* CSS */<?=trim($texCss)?></textarea>
                            <textarea style="display: none;" id="js" name="js">/*JavaScript & jQuery*/<?=trim($texJS)?></textarea>
                        </div>
              
                     
                           

                          <!--  <div id="frame" class="cm-s-default frame">
                                <iframe id="preview"></iframe>
                            </div>-->

                            <div id="MstrarDiv" class="cm-s-default frame shadow MstrarDiv">
                                <iframe id="preview"></iframe>
                            </div>
                            
                     </form>

                     <script>
                                    function expandirDiv(idDV){
                                        var divE = document.querySelector(idDV);
                                        //$(idDV).ToggleClass("SIze98");
                                        divE.classList.toggle('SIze98');
                                        
                                    }
                                </script>
                                
    <style>
.SIze98{
width: 98% !important;
z-index: 99;
background-color: #fff;
                                        
}

        textarea{
            border: #ccc;
        }
        .MstrarDiv{
            float: right;
            width: 38%;
            min-height: 150vh;
            top: 75px;
            position: absolute;
            right: 10px;
            color: #fff;
            border-radius: 0.2em;
        
           
        }
        .MstrarDiv iframe{
            width: 100%;
            height: 100vh;
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
