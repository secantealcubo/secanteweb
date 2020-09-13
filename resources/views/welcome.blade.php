<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dist/images/logo.png')}}">
    <title>Secanteweb</title>
    <!-- This page CSS -->
    <link href="{{asset('assets/node_modules/owl.carousel/owl.carousel.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/node_modules/owl.carousel/owl.theme.default.css')}}" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="{{asset('dist/css/style.css')}}" rel="stylesheet">
    <!--Font awesome-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
    .parallax {
  /* The image used */
 background-image: url("dist/images/banner-long2.png");
  /* Set a specific height */
  min-height: 300px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    .icon-size{
    font-size: 80px;
}
</style>
</head>

<body>
    <div id="main-wrapper">
        <div class="container-fluid">
            <div class="navbar-fixed">
                <div class="fix-width">
                    <!-- Start Header -->
                    <div class="header">
                        <nav class="navbar navbar-expand-md navbar-light bg-white">
                            <a class="navbar-brand" href="#">
                            <img src="{{asset('dist/images/secantelogoweb.png')}}" alt="logo">
                        </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!--<ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#myfeatures">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../documentation/documentation.html" target="_blank">Documentation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://goo.gl/ZmMJ37" class="btn btn-primary btn-rounded cs-btn" target="_blank">BUY NOW</a>
                                    </li>
                                </ul>-->
                            </div>
                        </nav>
                    </div>
                    <!-- End Header -->
                </div>
            </div>
            <div class="page-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fix-width banner-part text-center">
                            <div class="min-h">
                                <h1 class="banner-title">The Ultimate Admin Dashboard Web App Kit</h1>
                            </div>
                            <span class="banner-small-text">
                                Soy realmente un apasionado de la programación, autodidacta y siempre con ambición por querer aprender más.<br>El programador perfecto es quien estaá en constante evolución y aprendiendo continuamente.
                            </span>
                            <div class="btn-box">
                                <!--<a href="#choose-demo" class="btn btn-outline-secondary btn-rounded btn-lg custom-btn text-dark m-t-10">View all demos</a>
                                <a href="https://goo.gl/ZmMJ37" class="btn btn-outline-secondary btn-rounded btn-lg custom-btn text-dark m-t-10">Buy elite now</a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="parallax">
                </div>
                <br>
                <div class="row" id="choose-demo">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="">
                            <div class="text-center">
                                <small class="text-primary">"Primero resuelve el problema. Entonces, escribe el código"-- John Johnson</small>
                                <h2 class="text-title">SOLVENTAR UN PROBLEMA</h2>
                                <p>Escribir código consiste en detectar y resolver problemas. La programación siempre tiene el objetivo de aportar soluciones a necesidades del cliente o del usuario.
                                <br>
                                Para desarrollar esta habilidad sólo se necesita práctica,mucha práctica. Enfrentar un problema de código desde múltiples perspectivas ayuda a pensar fuera de la caja para llegar a la mejor solución para resolverlo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
                <div class="row m-t-40" id="myfeatures">
                    <div class="col-md-12">
                        <div class="fix-width">
                            <div class="row">
                                <div class="col-md-5 demo-text">"¿Internet? ¿Todavía anda eso por ahí?"-- Homer Simpson“Las cosas buenas llegan a los que saben esperar.”</small>
                                    <h2 class="text-title">MOTIVACIÓN</h2>
                                    <p class="m-t-30 m-b-30">Extremadamente motivado para desarrollar constantemente mis habilidades y crecer profesionalmente. Confío en mi capacidad para proponer ideas interesantes.</p>
                                </div>
                                <div class="col-md-7 auto-img"><img src="{{asset('dist/images/responsive.jpg')}}" /></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-t-40">
                    <div class="col-md-12">
                        <div class="fix-width">
                            <div class="row">
                                <div class="col-md-7 auto-img "><img src="dist/images/ecommerce.jpg" class="pull-right" /></div>
                                <div class="col-md-5 demo-text">
                                    <small class="text-primary">"Iterar es humano, 'recursivar' es divino" -- L. Peter Deutsch</small>
                                    <h2 class="text-title">TRABAJO EN EQUIPO</h2>
                                    <p class="m-t-30 m-b-30">Trabajar en equipo es muy enriquecedor, pero es normal que surjan conflictos. Si en vez de intentar eludirlos, sabemos gestionarlos desde la empatía, la asertividad y la responsabilidad, ganaremos mucho en experiencia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-t-40 m-b-40">
                    <div class="col-md-12">
                        <div class="fix-width">
                            <div class="text-center">
                                <small class="text-primary">"No te preocupes si no funciona bien. Si todo estuviera correcto, serías despedido de tu trabajo" -- Ley de Mosher de la Ingeniería del Software</small>
                                <h2 class="text-title">INSTRUMENTOS, SOFTWARE Y MÁS...</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fix-width">
                </div>
                <div class="fix-width">
                    <div class="row m-t-40 v-top">
                        <!-- .col -->
                        <div class="col-md-3 col-sm-6 text-center">
                            <i class="fa fa-file-code-o icon-size" aria-hidden="true"></i>
                            <h4 class="text-title m-t-30">LARAVEL PHP</h4>
                            <p>Mi framework favorito para el desarrollo.</p>
                        </div>
                        <!-- /.col -->
                        <!-- .col -->
                        <div class="col-md-3 col-sm-6 text-center">
                            <i class="fa fa-code icon-size" aria-hidden="true"></i>
                            <h4 class="text-title m-t-30">Bootstrap 4</h4>
                            <p>Todos los desarrollos estan trabajados en Bootstrap 4, esto ayuda a que sea 100% responsivo.</p>
                        </div>
                        <!-- /.col -->
                        <!-- .col -->
                        <div class="col-md-3 col-sm-6 text-center">
                            <i class="fa fa-github icon-size" aria-hidden="true"></i>
                            <h4 class="text-title m-t-30">GitHub</h4>
                            <p>Manejo de proyectos y controlo versiones en Git Hub para el correcto seguimiento del mismo.</p>
                        </div>
                        <!-- /.col -->
                        <!-- .col -->
                        <div class="col-md-3 col-sm-6 text-center">
                           <i class="fa fa-mobile icon-size" aria-hidden="true"></i>
                            <h4 class="text-title m-t-30">Full Responsivo</h4>
                            <p>Todas las páginas son 100% adaptables para cualquier dispositivo.</p>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <div class="fix-width">
                    <div class="row m-t-40 v-top">
                        <!-- .col -->
                        <div class="col-md-3 col-sm-6 text-center">
                            <i class="fa fa-pencil icon-size" aria-hidden="true"></i>
                            <h4 class="text-title m-t-30">Desarrollos customizables</h4>
                            <p>Todo desarrollo es y será customizado para el usuario o cliente.</p>
                        </div>
                        <!-- /.col -->
                        <!-- .col -->
                        <div class="col-md-3 col-sm-6 text-center">
                            <i class="fa fa-google icon-size" aria-hidden="true"></i>
                            <h4 class="text-title m-t-30">¿Google?</h4>
                            <p>Nuestro mejor aliado.</p>
                        </div>
                        <!-- /.col -->
                        <!-- .col -->
                        <div class="col-md-3 col-sm-6 text-center">
                            <i class="fa fa-rebel icon-size" aria-hidden="true"></i>
                            <h4 class="text-title m-t-30">Alianza Rebelde</h4>
                            <p>"Debes desaprender lo que has aprendido."--Yoda</p>
                        </div>
                        <!-- /.col -->
                        <!-- .col -->
                        <div class="col-md-3 col-sm-6 text-center">
                            <i class="fa fa-gamepad icon-size" aria-hidden="true"></i>
                            <h4 class="text-title m-t-30">Gamer</h4>
                            <p>Juego videojuegos cómo LOL y GTA V.</p>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <div class="row m-t-40">

                </div>


                <footer class="footer text-center">
                    <span>Copyright 2020. Todos los derechos reservados <a class="text-white" href="https://secanteweb.com" target="_blank">Secanteweb</a></span>
                </footer>
            </div>
        </div>
    </div>
</body>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{asset('assets/node_modules/popper/popper.min.js')}}"></script>
<script src="{{asset('assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/node_modules/owl.carousel/owl.carousel.js')}}"></script>
<!-- jQuery for typing -->
<script src="{{asset('assets/node_modules/typed.js-master/dist/typed.min.js')}}"></script>
<script src="{{asset('dist/js/custom.js')}}"></script>
<script>
$(function() {
    $(".banner-title").typed({
        strings: ["Desarrollo Web","Pasión proactiva", "Adaptación al cambio"],
        typeSpeed: 100,
        loop: true
    });
});
</script>
<!-- GetButton.io widget -->
<script type="text/javascript">
(function () {
var options = {
whatsapp: "+56997704728", // WhatsApp number
email: "Info@secanteweb.com", // Email
call_to_action: "Contacto ", // Call to action
button_color: "#129BF4", // Color of button
position: "right", // Position may be 'right' or 'left'
order: "whatsapp,email", // Order of buttons
};
var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>
<!-- /GetButton.io widget -->
</html>