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

<!-- Datepicker JQuery UI -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jquery-ui.min.css')}}">

<link href="{{ URL::asset('css/main.css')}}" rel="stylesheet" type="text/css" >

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</head>
<body>
<!--header-->

<!--header-->
  
  <div class="navigation">
      <div class="container-fluid">
        <nav class="pull">
          <ul>
            <li><a  href="index">Inicio</a></li>
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
        <h1>NovoSpaces</h1>
        <div style="display: inline-block; float:left; margin-top: 100px; margin-left: 50px; color: white;">
                @if (Auth::guest())
                    <div >
                        <ul>
                            <li><a style="color: white;" href="{{ url('/login') }}"><i class="glyphicon glyphicon-user"> </i>Login</a></li>
                            <li><a style="color: white;" class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a></li>
                        </ul>
                    </div>
                @else
                <div>
                    <strong><a style="color: white;" href="{{ url('/home') }}" class="dropdown-toggle" role="button" aria-expanded="false">Bienvenid(a), {{ Auth::user()->name }}</a></strong>
                </div>
                <div>
                    <a style="color: white;" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar sesión</a>
                </div>
                @endif  

            </div>
      </div>
    <!--//logo-->
    <div class="top-nav">
      <ul class="right-icons">
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
              </ul>            F
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
          
      <div class="clearfix"> </div>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </div>
</div>
<!--//header-->











<!-- CREAR INMUEBLE -->

<div class="container" >
  <h2>Publica tu espacio</h2>
  
  <!--                           
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tipo de espacio
    <span class="caret"></span></button>
     <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
     <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="collapse" data-target="#demo" >Departamento</a></li>
     <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="collapse" data-target="#demo" >Almacen</a></li>
     <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="collapse" data-target="#demo" >Cochera</a></li>
     <li role="presentation" class="divider"></li>
     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Otros</a></li>
    </ul>
  </div>
</div>


  <div id="demo" class="collapse ">
      <div class="container" >
          <label for="email">Distrito</label>              
          <div id = "distrito-dropdown" class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Distrito
              <span class="caret"></span></button>
              <ul id = "distrito-dropdown-menu" class="dropdown-menu" role="menu" aria-labelledby="menu1">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="collapse" data-target="#demo1" >Lima</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="collapse" data-target="#demo1" >Arequipa</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="collapse" data-target="#demo1" >Cusco</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Callao</a></li>
              </ul>
          </div>
      </div>

  </div>
  -->

  <div id="inmueble-form">
  <!-- <div id="demo1" class="collapse "> -->
    <div class="container">
          <div class= "col-md-7">
            <form role="form" method="POST" action="{{ url('/inmueble') }}">
                {{ csrf_field() }}

                  <div class="form-group">
                      <label for="inmueble">Tipo de inmueble</label>
                      <select name = "inmueble-list" id = "inmueble-list">
                      </select>
                  </div>
                  <div>
                      <div class="form-group" style="width:30%; display: inline-block;">
                          <label for="depa">Departamento</label>
                          <select name = "depa-list" id = "depa-list">
                          </select>
                      </div>
                      <div class="form-group" style="width:30%; display: inline-block;">
                          <label for="ciudad">Ciudad</label>
                          <select name = "ciudad-list" id = "ciudad-list">
                          </select>
                      </div>
                      <div class="form-group" style="width:30%; display: inline-block;">
                          <label for="distrito">Distrito</label>
                          <select name = "distrito-list" id = "distrito-list">
                          </select>
                      </div>
                      <!-- Mapa googlemaps-->
                      <div class="form-group" style="height: 400px;">
                          <div id="map" style="height: 100%;"></div>
                      </div>
                  </div>
                  <div id ="inmueble-formulario">
                      <div class="form-group">
                          </br>
                          <label for="email">Ubicación exacta</label>
                          <input type="text" class="form-control" id="direccion" placeholder="Dirección..." name="direccion">
                      </div>
                      <div class="form-group">
                          <label for="pwd">Referencia</label>
                          <input type="text" class="form-control" id="referencia" placeholder="Referencia..." name="referencia">
                      </div>
                      <div>
                          <div class="form-group" style="width:40%; display: inline-block;">
                              <label for="pwd">Fecha Inicio Publicacion</label><br> 
                              <i class="glyphicon glyphicon-calendar"></i>  <input type="text" class="form-control" name="fecha-inicio" id="datepicker1">
                          </div>
                          <div class="form-group" style="width:40%; display: inline-block;">
                              <label for="pwd">Fecha Fin Publicacion</label><br>
                              <i class="glyphicon glyphicon-calendar"></i>  <input type="text" class="form-control" name="fecha-fin" id="datepicker2">
                          </div>
                      </div>
                      
                      <div class="form-group">
                          <label for="pwd">Estado</label>
                          <input type="text" class="form-control" id="estado" placeholder="" name="estado">
                      </div>
                      <div>
                          <div class="form-group" style="width:10%; display: inline-block;">
                              <label for="moneda">Moneda</label>
                              <select name = "moneda-list" id = "moneda-list">
                                  <option value="dolares">  $  </option>
                                  <option value="soles"> S/. </option>
                              </select>
                          </div>
                          <div class="form-group" style="width:80%; display: inline-block;">
                              <label for="pwd">Precio</label>
                              <input type="text" class="form-control" id="precio" placeholder="" name="precio">
                          </div>
                      </div>              
                      <div class="form-group">
                          <label for="pwd">Metros cuadrados (m2)</label>
                          <input type="text" class="form-control" id="metros" placeholder="" name="metros">
                      </div>
                      <div class="form-group">
                          <label for="pwd">Disponibilidad horaria</label><br>
                          <input type="radio" name="horario" value="tododia" checked> Todo el día<br>
                          <input type="radio" name="horario" value="manana"> Mañana<br>
                          <input type="radio" name="horario" value="tarde"> Tarde<br>
                          <input type="radio" name="horario" value="noche"> Noche<br> 
                      </div>
                      <br><br>
                      <br><br>                  
                      <div style="display:none;" class="form-group">
                          <label for="pwd">Latitud</label>
                          <input type="text" class="form-control" id="latitud" name="latitud">
                      </div>
                      <div style="display:none;" class="form-group">
                          <label for="pwd">Longitud</label>
                          <input type="text" class="form-control" id="longitud" name="longitud">
                      </div>
                      <script>
                          var latitud;
                          var longitud;
                          var map;
                          var marker;
                          function initMap() {
                              console.log('INICIAR MAPA GOOGLE');
                              var myLatLng = {lat: -12.054368, lng: -77.040073};

                              map = new google.maps.Map(document.getElementById('map'), {
                                center: myLatLng,
                                zoom: 8
                              });

                              marker = new google.maps.Marker({
                                position: myLatLng,
                                map: map,
                                draggable: true,
                                title: 'Ubicación'
                              });

                              //inicializar datos a enviar
                              latitud = marker.getPosition().lat();
                              longitud = marker.getPosition().lng();                 
                              $('#latitud').val(latitud);
                              $('#longitud').val(longitud);

                              // arrastrar marcador
                              marker.addListener('dragend', function() {

                                  latitud = this.getPosition().lat();
                                  longitud = this.getPosition().lng();
                                  //console.log(latitud);
                                  //console.log(longitud);                   
                                  $('#latitud').val(latitud);
                                  $('#longitud').val(longitud);
                                  
                              });

                              // This event listener will call addMarker() when the map is clicked.
                              map.addListener('click', function(event) {
                                  reposicionarMarcador(event.latLng);
                              });
                          }

                          function reposicionarMarcador(location) {
                              console.log(location);
                              // eliminar ubicacion anterior
                              marker.setMap(null);
                              // ubicar marcador en donde se hizo click en el mapa
                              marker = new google.maps.Marker({
                                position: location,
                                map: map,
                                draggable: true,
                                title: 'Ubicación'
                              });

                              //actualizar datos a enviar
                              latitud = marker.getPosition().lat();
                              longitud = marker.getPosition().lng();                 
                              $('#latitud').val(latitud);
                              $('#longitud').val(longitud);
                          }
                      </script>
                      <!-- Google Map Api -->
                      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfVyMAoFLOJNWifS9QAAJfvAAveyQD2WQ&callback=initMap"></script>
                      <!-- Date picker JQuery UI -->
                      <script src="{{ URL::asset('js/jquery.js')}}" type="text/javascript"></script>
                      <script src="{{ URL::asset('js/jquery-ui.min.js')}}" type="text/javascript"></script>
                      <script src="{{ URL::asset('js/datepicker-es.js')}}" type="text/javascript"></script>
                      <script>
                            $( function() {
                              //$( "#datepicker" ).datepicker($.datepicker.regional[ "es" ] );
                              $( "#datepicker1" ).datepicker({dateFormat: 'dd-mm-yy'}, $.datepicker.regional[ "es" ]);
                            });
                            $( function() {
                              //$( "#datepicker" ).datepicker($.datepicker.regional[ "es" ] );
                              $( "#datepicker2" ).datepicker({dateFormat: 'dd-mm-yy'}, $.datepicker.regional[ "es" ]);
                            });
                        </script>
                                
                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  <i class="fa fa-btn fa-user"></i> Publicar
                              </button>
                          </div>
                      </div>

                  </div>
            </form>
          </div>
    </div>


 </div>

























<div class="container">
  <div class="future">
    <h3 >Proximos Espacios</h3>
      <div class="content-bottom-in">
          <ul id="flexiselDemo1">     
            <li><div class="project-fur">
                <a href="single" ><img class="img-responsive" src="{{ URL::asset('images/pi.jpg')}}" alt="" /> </a>
                  <div class="fur">
                    <div class="fur1">
                                        <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
                                        <h6 class="fur-name"><a href="single">Contrary to popular</a></h6>
                                        <span>Paris</span>
                                    </div>
                                  <div class="fur2">
                                      <span>2 BHK</span>
                                   </div>
                  </div>          
              </div></li>
              <li><div class="project-fur">
                  <a href="single" ><img class="img-responsive" src="{{ URL::asset('images/pi1.jpg')}}" alt="" />  </a>
                    <div class="fur">
                      <div class="fur1">
                                          <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
                                         <h6 class="fur-name"><a href="single">Contrary to popular</a></h6>
                                          <span>Paris</span>
                                      </div>
                                    <div class="fur2">
                                        <span>2 BHK</span>
                                     </div>
                    </div>          
                </div></li>
                <li><div class="project-fur">
                <a href="single" ><img class="img-responsive" src="{{ URL::asset('images/pi2.jpg')}}" alt="" />  </a>
                  <div class="fur">
                    <div class="fur1">
                                        <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
                                       <h6 class="fur-name"><a href="single">Contrary to popular</a></h6>
                                        <span>Paris</span>
                                    </div>
                                  <div class="fur2">
                                      <span>2 BHK</span>
                                   </div>
                  </div>          
              </div></li>
              <li><div class="project-fur">
                <a href="single" ><img class="img-responsive" src="{{ URL::asset('images/pi3.jpg')}}" alt="" />  </a>
                  <div class="fur">
                    <div class="fur1">
                                        <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
                                        <h6 class="fur-name"><a href="single.html">Contrary to popular</a></h6>
                                        <span>Paris</span>
                                    </div>
                                  <div class="fur2">
                                      <span>2 BHK</span>
                                   </div>
                  </div>          
              </div></li>
          </ul>
          <script type="text/javascript">
            $(window).load(function() {
              $("#flexiselDemo1").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,        
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                  responsiveBreakpoints: { 
                    portrait: { 
                      changePoint:480,
                      visibleItems: 1
                    }, 
                    landscape: { 
                      changePoint:640,
                      visibleItems: 2
                    },
                    tablet: { 
                      changePoint:768,
                      visibleItems: 3
                    }
                  }
                });
                
            });
      </script>
      <script type="text/javascript" src="{{ URL::asset('js/jquery.flexisel.js')}}"></script>

    </div>
  </div>
</div>
































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


<script type="text/javascript">
    $( document ).ready(function() {


        // iniciar los combobox
        $('#inmueble-list').empty();
        $('#inmueble-list').append('<option value="">--Seleccione--</option>');
        $('#depa-list').empty();
        $('#depa-list').append('<option value="">--Seleccione--</option>');
        $('#ciudad-list').empty();
        $('#ciudad-list').append('<option value="">--Seleccione--</option>');
        $('#distrito-list').empty();
        $('#distrito-list').append('<option value="">--Seleccione--</option>');
        $("#inmueble-formulario").hide();

        var baseUrl = "{{ url('') }}";

        console.log( "ready!" );
        // obtener tipos de inmueble
        $.ajax({
              url: baseUrl + "/getTipoInmuebles",
              async: false,
              type: 'GET',
              dataType: 'json',
              contentType: "application/json; charset=utf-8",
              success: function (data) {
                  console.log(data);
                  // recibio data
                  if(data!=null){           
                      $('#inmueble-list').empty();
                      $('#inmueble-list').append('<option value="">--Seleccione--</option>');
                      // agregar al select list
                      $.each(data, function(key, value){
                          console.log("holi: " + key);           
                          $('#inmueble-list').append("<option value='"  +  value['IdTipoInmueble'] + "'>" +  value['Descripcion'] + "</option>");
                      });         
                  }
              },
              error: function () {
                  console.log("Ocurrió un error");
                  return false;
              }
        });

        // obtener Departamentos
        $.ajax({
              url: baseUrl + "/getDepartamentos",
              async: false,
              type: 'GET',
              dataType: 'json',
              contentType: "application/json; charset=utf-8",
              success: function (data) {
                  console.log(data);
                  // recibio data                 
                  if(data!=null){           
                      $('#depa-list').empty();
                      $('#depa-list').append('<option value="">--Seleccione--</option>');
                      // agregar al select list
                      $.each(data, function(key, value){
                          console.log("holi: " + key);           
                          $('#depa-list').append("<option value='"  +  value['IdDepartamento'] + "'>" +  value['Descripcion'] + "</option>");
                      });         
                  }
                  
              },
              error: function () {
                  console.log("Ocurrió un error");
                  return false;
              }
        });

        // obtener las Ciudades del Departamento seleccionado
        $('#depa-list').change(function(){
                var idDep = $('#depa-list').val();
                console.log('idDep: '+idDep);
                
                $.ajax({        
                    url: baseUrl + "/getCiudades/" + idDep,
                    async: false,
                    type: 'GET',
                    dataType: 'json',
                    contentType: "application/json; charset=utf-8",
                    success: function (data) {
                        console.log("ciudades: ");
                        console.log(data);

                        if(data!=null){ 
                            // recibio data                            
                                     
                            $('#ciudad-list').empty();
                            $('#ciudad-list').append('<option value="">--Seleccione--</option>');
                            // agregar al select list
                            $.each(data, function(key, value){          
                                $('#ciudad-list').append("<option value='"  +  value['IdCiudad'] + "'>" +  value['Descripcion'] + "</option>");
                            });         
                                                             
                        }                       
                    },
                    error: function (e) {
                        console.log('Ocurrio un error');
                      //console.log(e.responseText);
                    },
                });
        });
        
        // obtener las Distritos de la Ciudad seleccionada
        $('#ciudad-list').change(function(){
                var idCiudad = $('#ciudad-list').val();
                console.log('idCiudad: '+idCiudad);
                
                $.ajax({        
                    url: baseUrl + "/getDistritos/" + idCiudad,
                    async: false,
                    type: 'GET',
                    dataType: 'json',
                    contentType: "application/json; charset=utf-8",
                    success: function (data) {
                        console.log("distritos: ");
                        console.log(data);
                                     
                        if(data!=null){           
                            $('#distrito-list').empty();
                            $('#distrito-list').append('<option value="">--Seleccione--</option>');
                            // agregar al select list
                            $.each(data, function(key, value){
                                //console.log("holi: " + value);           
                                $('#distrito-list').append("<option value='"  +  value['IdDistrito'] + "'>" +  value['Descripcion'] + "</option>");
                            });         
                        }                                 
                                               
                    },
                    error: function (e) {
                        console.log('Ocurrio un error');
                      //console.log(e.responseText);
                    },
                });
        });


        /* Efecto de mostrar/ocultar campos */

        $('#distrito-list').on('change', function() {
          
              //$("#inmueble-formulario").hide();

              if ( this.value == '--Seleccione--' || this.value == '') // no eligio distrito
              {
                  $("#inmueble-formulario").hide();
              }
              else // aun no elige distrito
              {
                  $("#inmueble-formulario").show();
              }
        });

    });
    

</script>


</html>
