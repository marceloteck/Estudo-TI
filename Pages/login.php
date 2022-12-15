<!doctype html>
<html lang="pt-br">

<head>
<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=URL_PRINCIPAL?>/Assets/css/login_style.css">
<script nonce="e5856cb3-c16e-46cd-aeee-63da705b2aea">
    (function(w,d){!function(eK,eL,eM,eN){eK.zarazData=eK.zarazData||{};eK.zarazData.executed=[];eK.zaraz={deferred:[],listeners:[]};eK.zaraz.q=[];eK.zaraz._f=function(eO){return function(){var eP=Array.prototype.slice.call(arguments);eK.zaraz.q.push({m:eO,a:eP})}};
    for(const eQ of["track","set","debug"])eK.zaraz[eQ]=eK.zaraz._f(eQ);
    eK.zaraz.init=()=>{var eR=eL.getElementsByTagName(eN)[0],eS=eL.createElement(eN),eT=eL.getElementsByTagName("title")[0];
    eT&&(eK.zarazData.t=eL.getElementsByTagName("title")[0].text);eK.zarazData.x=Math.random();eK.zarazData.w=eK.screen.width;eK.zarazData.h=eK.screen.height;eK.zarazData.j=eK.innerHeight;eK.zarazData.e=eK.innerWidth;eK.zarazData.l=eK.location.href;eK.zarazData.r=eL.referrer;eK.zarazData.k=eK.screen.colorDepth;eK.zarazData.n=eL.characterSet;eK.zarazData.o=(new Date).getTimezoneOffset();if(eK.dataLayer)for(const eX of Object.entries(Object.entries(dataLayer).reduce(((eY,eZ)=>({...eY[1],...eZ[1]})))))zaraz.set(eX[0],eX[1],{scope:"page"});eK.zarazData.q=[];for(;eK.zaraz.q.length;){const e_=eK.zaraz.q.shift();eK.zarazData.q.push(e_)}eS.defer=!0;for(const fa of[localStorage,sessionStorage])Object.keys(fa||{}).filter((fc=>fc.startsWith("_zaraz_"))).forEach((fb=>{try{eK.zarazData["z_"+fb.slice(7)]=JSON.parse(fa.getItem(fb))}catch{eK.zarazData["z_"+fb.slice(7)]=fa.getItem(fb)}}));eS.referrerPolicy="origin";eS.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(eK.zarazData)));eR.parentNode.insertBefore(eS,eR)};["complete","interactive"].includes(eL.readyState)?zaraz.init():eK.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);
    </script>
    </head>
    <style type="text/css">
    body{
        background: url(<?=URL_PRINCIPAL?>/Assets/img/login_bg.jpg) center center no-repeat fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
        
        body::-webkit-scrollbar {
            width: 5px;               /* width of the entire scrollbar */
        }
        
        body::-webkit-scrollbar-track {
            background: rgb(255, 255, 255);        /* color of the tracking area */
        }
        
        body::-webkit-scrollbar-thumb {
            background-color: rgb(36, 71, 117);    /* color of the scroll thumb */
            border-radius: 20px;       /* roundness of the scroll thumb */
            border: 0px solid rgb(255, 255, 255);  /* creates padding around scroll thumb */
        }
        body{
            overflow: hidden;
            height: 100vh;
            width: 100vw;
        
        }
    </style>

<body class="img js-fullheight" >

<section class="ftco-section">

<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
<h2 class="heading-section"><a href="#" onclick="divLogin('#LoginDIV'),divLogin('#CadastroDIV')">Login</a> | <a href="#" onclick="divLogin('#CadastroDIV'),divLogin('#LoginDIV')">Cadastro</a></h2>
</div>
</div>


    <div id="LoginDIV" class="row justify-content-center" style="display:flex;" >
        <div class="col-md-6 col-lg-4">
            <div class="login-wrap p-0">
                <h3 class="mb-4 text-center">Tem uma conta?</h3>
                <form action="#" class="signin-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nome de usuário" required>
                    </div>
                    <div class="form-group">
                        <input id="password-field" type="password" class="form-control" placeholder="Senha" required>
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary submit px-3">Entrar</button>
                    </div>
                    <div class="form-group d-md-flex">
                        <div class="w-50">
                            <label class="checkbox-wrap checkbox-primary">Lembre de mim
                                <input type="checkbox" checked>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="w-50 text-md-right">
                        <a href="#" style="color: #fff">Esqueceu a senha</a>
                        </div>
                    </div>
                </form>
                <p class="w-100 text-center">&mdash; Ou entre com &mdash;</p>
                <div class="social d-flex text-center">
                <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Google</a>

                </div>
            </div>
        </div>
    </div>

    <div id="CadastroDIV" class="row justify-content-center" style="display:none;" >
        <div class="col-md-6 col-lg-4">
            <div class="login-wrap p-0">
                <h3 class="mb-4 text-center">Cadastrar nova conta!</h3>
                <form action="#" class="signin-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nome de usuário" required>
                    </div>
                    <div class="form-group">
                        <input id="password-field" type="password" class="form-control" placeholder="Senha" required>
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Seu E-mail" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Seu Nome" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Sobrenome" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary submit px-3">Cadastrar</button>
                    </div>
                
                </form>
            </div>
        </div>
    </div>


</div>
</section>


<script src="<?=URL_PRINCIPAL?>/Assets/js/jquery.min.js"></script>
<script src="<?=URL_PRINCIPAL?>/Assets/js/assets/popper.js"></script>
<script src="<?=URL_PRINCIPAL?>/Assets/js/bootstrap.min.js"></script>
<script src="<?=URL_PRINCIPAL?>/Assets/js/login_main.js"></script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"779aa5818e3100e0","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>


<script type="text/javascript">

function divLogin(value){
        var valuediv = document.querySelector(value);
        var status = valuediv.style.display;
        if(status == "flex"){
          valuediv.style.display = "none";
          
        }else{
          valuediv.style.display = "flex";
        }
      }
</script>


</body>
</html>
