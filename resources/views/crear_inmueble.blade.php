<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>NovoSpace - Un lugar para compartir</title>
<link href="{{ URL::asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ URL::asset('js/jquery.min.js')}}"></script>

<!-- Custom Theme files -->
<!--menu-->
<script src="{{ URL::asset('js/scripts.js')}}"></script>
<link href="{{ URL::asset('css/styles.css')}}" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="{{ URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />  
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
<!--header-->
    
    <div class="navigation">
            <div class="container-fluid">
                <nav class="pull">
                    <ul>
                        <li><a  href="/">Inicio</a></li>
                        <li><a  href="about">Sobre Nosotros</a></li>
                        <li><a  href="terms">Terminos</a></li>
                        <li><a  href="privacy">Privacidad</a></li>
                        <li><a  href="contact">Contactanos</a></li>
                    </ul>
                </nav>          
            </div>
        </div>

    
<!--//-->   
<div class=" banner-buying">

    <!--logo-->
            <div class="titulo">
                <h1>NovoSpace</h1>
            </div>
        <!--//logo-->
        <div class="top-nav">
            <ul class="right-icons">
                <li><a  href="login"><i class="glyphicon glyphicon-user"> </i>Login</a></li>
                <li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a></li>
                
            </ul>
            <div class="nav-icon">
                <div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
                        <a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
                    </div>  
                <!---
                <a href="#" class="right_bt" id="activator"><i class="glyphicon glyphicon-menu-hamburger"></i>  </a>
            --->
            </div>
        <div class="clearfix"> </div>
            <!---pop-up-box---->    
                <link href="{{ URL::asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all"/>
                <script src="{{ URL::asset('js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
            <!---//pop-up-box---->
                <div id="small-dialog" class="mfp-hide">
                        <!----- tabs-box ---->
                <div class="sap_tabs">  
                     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                          <ul class="resp-tabs-list">
                              <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>All Homes</span></li>
                              <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>For Sale</span></li>
                              <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>For Rent</span></li>
                              <div class="clearfix"></div>
                          </ul>                  
                          <div class="resp-tabs-container">
                                <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All Homes</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                    <div class="facts">
                                        <div class="login">
                                            <input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">     
                                            <input type="submit" value="">
                                        </div>        
                                    </div>
                                </div>
                                 <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>For Sale</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                    <div class="facts">                                 
                                        <div class="login">
                                            <input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">     
                                            <input type="submit" value="">
                                        </div> 
                                    </div>  
                                 </div>                                 
                                  <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>For Rent</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                     <div class="facts">
                                        <div class="login">
                                            <input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">     
                                            <input type="submit" value="">
                                        </div> 
                                     </div> 
                                </div>
                          </div>
                     </div>
                     <script src="{{ URL::asset('js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('#horizontalTab').easyResponsiveTabs({
                                    type: 'default', //Types: default, vertical, accordion           
                                    width: 'auto', //auto or any width like 600px
                                    fit: true   // 100% fit in a container
                                });
                            });
                         </script>  
                </div>
                </div>
                 <script>
                        $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true, 
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });
                                                                                        
                        });
                </script>
                    
    
        </div>
        <div class="clearfix"> </div>
    <div class=" container">
    <!---->

    <!--
    <div class="menu-right">
         <ul class="menu">
            <li class="item1"><a href="#"> Menu<i class="glyphicon glyphicon-menu-down"> </i> </a>
            <ul class="cute">
                <li class="subitem1"><a href="buy.html">Buy </a></li>
                <li class="subitem2"><a href="buy.html">Rent </a></li>
                <li class="subitem3"><a href="buy.html">Hostels </a></li>
                <li class="subitem1"><a href="buy.html">Resale</a></li>
                <li class="subitem2"><a href="loan.html">Home Loan</a></li>
                <li class="subitem3"><a href="buy.html">Apartment </a></li>
                <li class="subitem3"><a href="dealers.html">Dealers</a></li>
            </ul>
        </li>
        </ul>
    </div>
    -->
    <div class="clearfix"> </div>
        <!--initiate accordion-->
        <script type="text/javascript">
            $(function() {
                var menu_ul = $('.menu > li > ul'),
                       menu_a  = $('.menu > li > a');
                menu_ul.hide();
                menu_a.click(function(e) {
                    e.preventDefault();
                    if(!$(this).hasClass('active')) {
                        menu_a.removeClass('active');
                        menu_ul.filter(':visible').slideUp('normal');
                        $(this).addClass('active').next().stop(true,true).slideDown('normal');
                    } else {
                        $(this).removeClass('active');
                        $(this).next().stop(true,true).slideUp('normal');
                    }
                });
            
            });
        </script>
            
    </div>
</div>
<!--//header-->
<!--contact-->
<div class="login-right">
    <div class="container">
        <h3>Crear Inmueble</h3>
        <div class="login-top">
                <!--
                <ul class="login-icons">
                    <li><a href="facebook" ><i class="facebook"> </i><span>Facebook</span></a></li>
                    
                    <li><a href="#" class="twit"><i class="twitter"></i><span>Twitter</span></a></li>
                    <li><a href="#" class="go"><i class="google"></i><span>Google +</span></a></li>
                    <li><a href="#" class="in"><i class="linkedin"></i><span>Linkedin</span></a></li>                   
                    
                    <div class="clearfix"> </div>
                </ul>
                -->
                <div class="form-info">
                    <form role="form" method="POST" action="{{ url('/inmueble') }}">
                            {{ csrf_field() }}

                            <div>
                                <label for="longitud" class="col-md-4 control-label">Longitud</label>
                                <div class="col-md-6">
                                    <input id="longitud" type="text">
                                </div>
                            </div>
                            <div>
                                <label for="latitud" class="col-md-4 control-label">Latitud</label>
                                <div class="col-md-6">
                                    <input id="latitud" type="text">
                                </div>
                            </div>

                            <!-- Fechas, datepicker??-->

                            <div>
                                <label for="precio" class="col-md-4 control-label">Precio</label>
                                <div class="col-md-6">
                                    <input id="precio" type="text">
                                </div>
                            </div>

                            <div>
                                <label for="moneda" class="col-md-4 control-label">Moneda</label>
                                <div class="col-md-6">
                                    <input id="moneda" type="text">
                                </div>
                            </div>

                            <div>
                                <label for="metros" class="col-md-4 control-label">Metros cuadrados</label>
                                <div class="col-md-6">
                                    <input id="metros" type="text">
                                </div>
                            </div>
                            
                            <div>
                                <label for="direccion" class="col-md-4 control-label">Dirección exacta</label>
                                <div class="col-md-6">
                                    <input id="direccion" type="text">
                                </div>
                            </div>
                            <div>
                                <label for="referencia" class="col-md-4 control-label">Referencia</label>
                                <div class="col-md-6">
                                    <input id="referencia" type="text">
                                </div>
                            </div>
                            <div>
                                <label for="disponibilidad" class="col-md-4 control-label">Disponibilidad</label>
                                <div class="col-md-6">
                                    <input id="disponibilidad" type="text">
                                </div>
                            </div>
                            <div>
                                <label for="tipoInmueble" class="col-md-4 control-label">Tipo de inmueble</label>
                                <div class="col-md-6">
                                    <input id="tipoInmueble" type="text">
                                </div>
                            </div>
                            <div>
                                <label for="distrito" class="col-md-4 control-label">Distrito</label>
                                <div class="col-md-6">
                                    <input id="distrito" type="text">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Crear inmueble
                                    </button>
                                </div>
                            </div>
                    </form>
              </div>
            
    </div>
</div>
</div>
<!--//contact-->
<!--footer-->
<div class="footer">
    <div class="container">
        <div class="footer-top-at">
            <div class="col-md-3 amet-sed">
                <h4>Nuestra Compañia</h4>
                <ul class="nav-bottom">
                    <li><a href="about">Sobre nosostros</a></li>
                    <!--<li><a href="blog.html">For Sale By Owner Blog</a></li>
                        <li><a href="blog.html">Blog</a></li>
                    <li><a href="mobile_app.html">Mobile</a></li>
                    <li><a href="terms.html">Terminos y Condiciones</a></li>-->
                    <li><a href="privacy">Política de Privacidad</a></li>   
                    <li><a href="contact">Contactanos</a></li>

                    
                </ul>   
            </div>
            <div class="col-md-3 amet-sed ">
                <h4>Mejora al Servicio</h4>
                    <ul class="nav-bottom">
                    <!--
                        <li><a href="single.html">Real Estate Brokers</a></li>
                        <li><a href="single.html">Business Development</a></li>
                        <li><a href="single.html">Affiliate Programs</a></li>
                        -->
                        <li><a href="feedback">Feedback</a></li>    
                        <li><a href="#">Chat en vivo</a></li>
                        <li><a href="faqs">Preguntas Frecuentes</a></li>
                        <li><a href="suggestion">Envia tu sugerencia</a></li>
                    </ul>   
            </div>
            <div class="col-md-3 amet-sed">
                <h4>Soporte al cliente</h4>
                <p>Lun-Vie, 9AM-6PM </p>
                <p>Sab-Dom, 8AM-5PM </p>
                <p>989166938</p>
    
            </div>
            <div class="col-md-3 amet-sed ">
                <h4>Servicios Propios</h4>
                   <ul class="nav-bottom">
                   <!--
                        <li><a href="single">Residential Property</a></li>
                        <li><a href="single">Commercial Property</a></li>
                        <li><a href="typo">Short Codes</a></li> 
                        -->
                        <li><a href="login">Login</a></li>
                        <li><a href="register">Registro</a></li>
                    </ul>   
                    <ul class="social">
                        <li><a href="#"><i> </i></a></li>
                        <li><a href="#"><i class="gmail"> </i></a></li>
                        <li><a href="#"><i class="twitter"> </i></a></li>
                        <li><a href="#"><i class="camera"> </i></a></li>
                        <li><a href="#"><i class="dribble"> </i></a></li>
                    </ul>
            </div>
        <div class="clearfix"> </div>
        </div>
    </div>

</div>
    
    <div class="footer-bottom">
        <div class="container">
            <div class="col-md-4 footer-logo">
                <h2><a href="index">NovoSpace</a></h2>
            </div>
            <div class="col-md-8 footer-class">
                <p >© 2017 NovoSpace. Diseñado por  <a href="https://www.youtube.com/watch?v=h29lOEoEi48" target="_blank">Los Practicantes</a> </p>
            </div>
        <div class="clearfix"> </div>
        </div>
    </div>
<!--//footer-->
</body>
</html>