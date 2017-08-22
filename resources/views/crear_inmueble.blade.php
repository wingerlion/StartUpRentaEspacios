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
		<!--//theme-style-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	</head>

	<body>

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
	                        <i class="fa fa-btn fa-user"></i> Crear
	                    </button>
	                </div>
	            </div>
        </form>

	</body>
</html>