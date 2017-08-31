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
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ URL::asset('js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('js/scripts.js')}}"></script>

<!-- Custom Theme files -->
<!--menu-->



        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" /> 

<link href="{{ URL::asset('css/main.css')}}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('css/fileinput.min.css')}}" media="all" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('css/styles.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jquery-ui.min.css')}}"> 

<!--//menu-->
<!--theme-style-->
<!--//theme-style-->

<link href="{{ URL::asset('css/stepbystep.css')}}" rel="stylesheet" type="text/css" media="all" /> 


<!-- Datepicker JQuery UI -->


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

       
 


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</head>
<body>


    <div class="banner-buying">
        <!--logo-->
        <div class="titulo">
            <h1>NovoSpaces</h1>
        </div>
        <!--//logo-->
    </div>
    
        <div class='progress_inner'>
            <div class='progress_inner__step'>
                <label for='step-1'>Informacion</label>
            </div>
            <div class='progress_inner__step'>
                <label for='step-2'>Espacio </label>
            </div>
            <div class='progress_inner__step'>
                <label for='step-3'>Caracteristicas</label>
            </div>
            <div class='progress_inner__step'>
                <label for='step-4'>Publicar</label>
            </div>
 
            <input checked='checked' id='step-1' name='step' type='radio'>
            <input id='step-2' name='step' type='radio'>
            <input id='step-3' name='step' type='radio'>
            <input id='step-4' name='step' type='radio'>
            <div class='progress_inner__bar'></div>
            <div class='progress_inner__bar--set'></div>
            <div class='progress_inner__tabs'>
                <div class='tab tab-0'>
                    <h1>Datos Basicos</h1>
                    <p>Queremos conocer la información básica del lugar del alquiler ¿Cierto? :) del alquiler ¿Cierto? :) del alquiler ¿Cierto? :) </p>
                    <br>
                    <div class="form-group">
                        <label for="inmueble">Tipo de inmueble</label>
                        <br>
                        <br>
                        <select name = "inmueble-list" id = "inmueble-list">
                        </select>
                    </div>
                    <div class="form-group" style="height: 400px;">
                          <div id="map" style="height: 100%; width: 100%"></div>
                      </div>
                </div>
       

                <div class='tab tab-1'>
                <h1>Nuevo Espacio</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tortor ipsum, eleifend vitae massa non, dignissim finibus eros. Maecenas non eros tristique nisl maximus sollicitudin.</p>
                </div>
                <div class='tab tab-2'>
                <h1>Caracteristicas </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tortor ipsum, eleifend vitae massa non, dignissim finibus eros. Maecenas non eros tristique nisl maximus sollicitudin.</p>
                </div>
                <div class='tab tab-3'>
                <h1>Publicar Espacio</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tortor ipsum, eleifend vitae massa non, dignissim finibus eros. Maecenas non eros tristique nisl maximus sollicitudin.</p>
                </div>
                <div class='tab tab-4'>
                <h1>Send gift</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tortor ipsum, eleifend vitae massa non, dignissim finibus eros. Maecenas non eros tristique nisl maximus sollicitudin.</p>
                </div>
            </div>
            <div class='progress_inner__status'>
                <div class='box_base'></div>
                <div class='box_lid'></div>
                <div class='box_ribbon'></div>
                <div class='box_bow'>
                <div class='box_bow__left'></div>
                <div class='box_bow__right'></div>
                </div>
                <div class='box_item'></div>
                <div class='box_tag'></div>
                <div class='box_string'></div>
            </div>
        </div>
    </div>
    

</body>

 <?php   
    $directory = "imagenes_/";      
    $images = glob($directory . "*.*");
    ?>
  
  
  
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

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfVyMAoFLOJNWifS9QAAJfvAAveyQD2WQ&callback=initMap"></script>


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
        //$("#inmueble-formulario").hide();

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
                          //console.log("holi: " + key);           
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
                          //console.log("holi: " + key);           
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
        

        var $firstButton = $(".first"),
        $secondButton = $(".second"),
        $input = $("input"),
        $name = $(".name"),
        $more = $(".more"),
        $yourname = $(".yourname"),
        $reset = $(".reset"),
        $ctr = $(".container");

        $firstButton.on("click", function(e){
        $(this).text("Saving...").delay(900).queue(function(){
            $ctr.addClass("center slider-two-active").removeClass("full slider-one-active");
        });
        e.preventDefault();
        });

        $secondButton.on("click", function(e){
        $(this).text("Saving...").delay(900).queue(function(){
            $ctr.addClass("full slider-three-active").removeClass("center slider-two-active slider-one-active");
            $name = $name.val();
            if($name == "") {
            $yourname.html("Anonymous!");
            }
            else { $yourname.html($name+"!"); }
        });
        e.preventDefault();
        });

        // copy
        //balapaCop("Step by Step Form", "#999");

    });
    





</script>
    
</html>
