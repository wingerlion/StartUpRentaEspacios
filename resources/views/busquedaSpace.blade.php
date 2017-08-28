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
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="js/scripts.js"></script>
<link href="css/styles.css" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="css/1.css" rel="stylesheet">


<!--//theme-style-->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
</style>

<script>
	$(document).on("ready",function(){


/*
	var punto = new google.maps.LatLng(-11.9952,-77.0778);
	var config = {
		zoom:16,
		center:punto,
		mapTypeId: google.maps.MpTypeId.SATELLITE
	};

	var mapa = new google.maps.Map(  $("#mapa")[0].config);
		//alert(1);	*/
	});

</script>

</head>
<body>
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

		</div>


<div class=" banner-buying">

	<!--logo-->
			<div class="titulo">
				<h1>NovoSpace</h1>
			</div>
		<!--//logo-->
		<div class="top-nav">
			<ul class="right-icons">
				<li><a  href="login.html"><i class="glyphicon glyphicon-user"> </i>Login</a></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a></li>
				
			</ul>
			<div class="nav-icon">
				
				<!---
				<a href="#" class="right_bt" id="activator"><i class="glyphicon glyphicon-menu-hamburger"></i>  </a>
			--->
			</div>
		<div class="clearfix"> </div>
			<!---pop-up-box---->    
				<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
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
					 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
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


<div id="DIV_1">

	<div id="DIV_23">
		<div id="DIV_26">
			<div id="map"></div>
				<script>

					function initMap() {

						//var lista = {lat: -11.9952, lng: -77.0778};
						var map = new google.maps.Map(document.getElementById('map'), {
							center: {lat: -11.9952, lng: -77.0778},
							zoom: 16,
							mapTypeId: google.maps.MapTypeId.ROADMAP 
						});

						map.addListener('click', function(e) {
							placeMarker(e.latLng, map);
						});
							
						mostrarMarcadores(map);
			
					}	

					function placeMarker(position, map) {
						
							alert(position);
							var marker = new google.maps.Marker({
								position: position,
								animation: google.maps.Animation.DROP, // como aparecera en el marcador
								draggable:false, // para q no se arrastre
								map: map
							});
							map.panTo(position);
					}	

					function mostrarMarcadores(map) {
						

					    $.ajax({
							type: "GET",
							url: 'getLongLatAll',
							contentType: "application/json; charset=utf-8",
    						dataType: "json",
							data: "",
							success: function(data) {
								//console.log(data.length );
								
								//var myLatlng = new google.maps.LatLng(parseFloat(data[1]['Longitud']),parseFloat(data[1]['Latitud']));
								//placeMarker(myLatlng,map);


								for(index = 0; index < data.length; index++){
									//placeMarker(data[index],map);
									console.log(data[index]);	
									//alert(index + "");
									var myLatlng = new google.maps.LatLng(parseFloat(data[index]['Longitud']),parseFloat(data[index]['Latitud']));
									alert("alerta "  + myLatlng);

									placeMarker(myLatlng,map);
								}
								
								
								
								
							},
							error: function() {
       						  	alert("chau");
      						}

						});
					}	

				</script>
    			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQwG1d7QYu_dbedftXgRCFLsB24xCbHDk&callback=initMap"async defer></script>
		</div>
		<div id="DIV_165">

				<div id="DIV_167">
						<form id="FORM_168" action="http://spacebee.com/es/api/busqueda">
							<div id="DIV_169">
								
								<label for="inputPlace" id="LABEL_170">
									Donde
								</label>
								<div id="DIV_171">
									<div id="DIV_172">
										<select id="SELECT_175" name="ciudad">
											
											<option value="lima" id="OPTION_176">
												Lima
											</option> 
											<option value="arequipa" id="OPTION_177">
												Arequipa
											</option> 
											<option value="cuzco" id="OPTION_178">
												Cuzco
											</option> 
											<option value="chiclayo" id="OPTION_179">
												Chiclayo
											</option>
										</select>
									</div>
								</div>
								<div id="DIV_180">
									
									<select id="SELECT_181" name="interesting_point_id">
										
										<option id="OPTION_182">
											Más cerca de...
										</option> 
										<option value="7" id="OPTION_183">
											Los Olivos
										</option> 
										<option value="8" id="OPTION_184">
											Pueblo Libre
										</option> 
										<option value="9" id="OPTION_185">
											San Miguel
										</option> 
										<option value="11" id="OPTION_186">
											Ventanilla
										</option> 
										<option value="12" id="OPTION_187">
											San Juan de Lurigancho
										</option> 
										<option value="40" id="OPTION_188">
											Miraflores
										</option> 
										<option value="42" id="OPTION_189">
											San Isidro
										</option> 
										<!--
										<option value="45" id="OPTION_190">
											Palau de la Música
										</option> 
										<option value="48" id="OPTION_191">
											Paseo del Born
										</option> 
										<option value="49" id="OPTION_192">
											La Barceloneta
										</option> 
										<option value="51" id="OPTION_193">
											Fira Montjuic
										</option> 
										<option value="52" id="OPTION_194">
											Palau Sant Jordi
										</option> 
										<option value="56" id="OPTION_195">
											Paseo Sant Joan
										</option> 
										<option value="58" id="OPTION_196">
											Sant Cugat del Vallès
										</option>
										-->
									</select>
								</div>
							</div>
							<div id="DIV_197">
								
								<label for="inputDate" id="LABEL_198">
									Cuando
								</label>
								<div id="DIV_199">
									<input id="INPUT_200" type="text" name="check_in_date" placeholder="entrada" />
								</div>
								<div id="DIV_201">
									<i id="I_202"></i>
								</div>
								<div id="DIV_203">
									<input id="INPUT_204" type="text" name="check_out_date" placeholder="salida" />
								</div>
								<div id="DIV_205">
									
									<select name="capacity" id="SELECT_206">
										
										<option value="1" id="OPTION_207">
											1 personas
										</option> } 
										<option value="2" id="OPTION_208">
											2 personas
										</option> } 
										<option value="3" id="OPTION_209">
											3 personas
										</option> } 
										<option value="4" id="OPTION_210">
											4 personas
										</option> } 
										<option value="5" id="OPTION_211">
											5 personas
										</option> } 
										<option value="6" id="OPTION_212">
											6 personas
										</option> } 
										<option value="7" id="OPTION_213">
											7 personas
										</option> } 
										<option value="8" id="OPTION_214">
											8 personas
										</option> } 
										<option value="9" id="OPTION_215">
											9 personas
										</option> } 
										<option value="10" id="OPTION_216">
											10+ personas
										</option>
									</select>
								</div>
							</div>
							<div id="DIV_217">
								
								<label for="inputSpaceType" id="LABEL_218">
									Espacio
								</label>
								<div id="DIV_219">
									
									<select name="space_type_id" id="SELECT_220">
										
										<option value="all" id="OPTION_221">
											Todos
										</option> 
										<option value="26" id="OPTION_222">
											Multiuso
										</option> 
										<option value="1" id="OPTION_223">
											Sala de reuniones
										</option> 
										<option value="11" id="OPTION_224">
											Aula
										</option>
									</select>
								</div>
							</div>
							<div id="DIV_225">
								
								<label for="inputPrice" id="LABEL_226">
									Precio
								</label>
								<div id="DIV_227">
									<input id="INPUT_228" type="text" name="min_price" placeholder="mínimo" />
								</div>
								<div id="DIV_229">
									<i id="I_230"></i>
								</div>
								<div id="DIV_231">
									<input id="INPUT_232" type="text" name="max_price" placeholder="máximo" />
								</div>
								<div id="DIV_233">
									
									<select id="SELECT_234" name="price_per">
										
										<option id="OPTION_235">
											Por..
										</option> 
										<option value="price_per_hour" id="OPTION_236">
											Hora
										</option> 
										<option value="price_per_day" id="OPTION_237">
											Día
										</option> 
										<option value="price_per_week" id="OPTION_238">
											Semana
										</option> 
										<option value="price_per_month" id="OPTION_239">
											Mes
										</option>
									</select>
								</div>
							</div>
							<div id="DIV_240">
								<div id="DIV_241">
									<input type="hidden" id="INPUT_242" name="latNE" value="41.409725957344136" />
									<input type="hidden" id="INPUT_243" name="lngNE" value="2.1976779525756456" />
									<input type="hidden" id="INPUT_244" name="latSW" value="41.34197036079663" />
									<input type="hidden" id="INPUT_245" name="lngSW" value="2.1587966506957628" />
									<input type="hidden" id="INPUT_246" name="tag_id" />
								</div>
							</div> 
							<button type="button" id="BUTTON_247">
								Ocultar filtros
							</button>
						</form> 
						<button type="button" id="BUTTON_248">
							Mostrar filtros
						</button>
						<!--DIV_269-->
				</div>

				<div id="DIV_249">
					<div id="DIV_250">
						<p id="P_251">
							<span id="SPAN_252">61</span> espacios disponibles
						</p>
					</div>

					<div id="DIV_254" style = "margin-top: 50px">
					@if (count($imagenes)>0)
						@foreach($imagenes as $imagen)
							<div id="DIV_255">
								<div id="DIV_256">
									<div id="DIV_258">
										<div id="DIV_259">
											{!! Html::image($imagen->Ruta, null, array('class'=>'', 'id'=> 'IMG_260')) !!}
										</div>
										<div id="DIV_261">
											<h4 id="H4_262">
												Espacio para entrevistas
											</h4>
											<p id="P_263">
												SALAS Y AULAS para cursos o reuniones de empresa
											</p>
										</div>
									</div>
								</div>
							</div>
							<!--<script>initMap();</script>-->
						@endforeach						
					@endif
					</div>
				
				</div>
		</div>
	</div>
</div>

<!--//contact-->
<!--footer-->

<div class="footer" style = "margin-top: 10px">
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