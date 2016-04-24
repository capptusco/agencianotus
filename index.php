<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="./css/template.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>                       
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet" href="tools/slide/style.css">
<script src="tools/slide/slide.js"></script>


</head>
<body>

<?php 
$page='home';
include('superior.php'); 
?>

<!--Inicio Container-->
<div id="container" class="col-md-10">

	<!--Inicio Acordeones-->
	<div id="acordeones" class="row">	
		<!--Inicio Restaurantes-->
		<div id="restaurantes" class="col-md-4">
			<div class="tituloacordeon row">
				<h2>RESTAURANTES</h2>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis nisi sit amet 
				purus convallis pharetra. Nulla facilisi. Vivamus sagittis
			</div>
			<div class="imgac row active">
				<img src="img/restaurantes/quito1.png">
			</div>
			<div class="imgac row">
				<img src="img/restaurantes/amazonia1.png">
			</div>
			<div class="imgac row">
				<img src="img/restaurantes/costa1.png">
			</div>
			<div class="masrest row">
				<h4>Ver más</h4>
			</div>	
					
		</div>
		<!--Fin Restaurantes-->
		<!--Inicio hoteles-->
		<div id="hoteles" class="col-md-4">
			<div class="tituloacordeon row">
				<h2>HOTELES</h2>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis nisi sit amet 
				purus convallis pharetra. Nulla facilisi. Vivamus sagittis
			</div>
			<div class="imgac row active">
				<img src="img/hoteles/hotel_quito1.png">
			</div>
			<div class="imgac row">
				<img src="img/hoteles/hotel_amazonia1.png">
			</div>
			<div class="imgac row">
				<img src="img/hoteles/hotel_costa1.png">
			</div>
			<div class="masrest row">
				<h4>Ver más</h4>
			</div>	
		</div>
		<!--Fin hoteles-->
		<!--Inicio actividades-->
		<div id="actividades" class="col-md-4">
			<div class="tituloacordeon row">
				<h2>ACTIVIDADES</h2>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis nisi sit amet 
				purus convallis pharetra. Nulla facilisi. Vivamus sagittis
			</div>
			<div class="imgac row active">
				<img src="img/actividades/actividades_cuenca1.png">
			</div>
			<div class="imgac row">
				<img src="img/actividades/actividades_amazonia1.png">
			</div>
			<div class="imgac row">
				<img src="img/actividades/actividades_costa1.png">
			</div>
			<div class="masrest row">
				<h4>Ver más</h4>
			</div>	
		</div>
		<!--Fin actividades-->
	</div>
	<!--Fin Acordeones-->
	
	
	<!--Inicio paquetes-->
	<div id="paquetes" class="row">
		<!--Inicio encabezado_paquetes-->
		<div id="encabezado_paquetes" class="row">
			<div id="titulo" class="col-md-5 col-md-offset-1">
				<h1>TOURS</h1>
			</div>
			<div id="btn_derecha" class="col-md-2 col-md-offset-3">
				<img src="img/btn_ver_todos.png"/>
			</div>
		</div>
		<!--Fin paquete-->
		
		<!--Inicio paquete row1-->
		<div class="row">
		<!--Inicio paquete1-->
		<div class="col-md-6 paquete">
			<div class="imagenpaquete col-md-12">
				<img src="img/tours_home/foto_alrededores.png" class="img-responsive"/>
				<div class="fantasma">	
					<div class="vermas">
						<a href="#">Ver mas</a>
					</div>
				</div>
			</div>
			<div class="nombrepaquete col-md-12">
				<p>Quito y sus alrededores</p>
			</div>
			<div class="descpaquete col-md-12">
				<div class="descripcion col-md-7">
					<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.</p>
				</div>
				<div class="precio col-md-5">
					<p class="final">Precio final</p>
					<p class="signo">$</p>
					<p class="dolares">110</p>
				</div>
			</div>
		</div>
		<!--Fin paquete1-->
		<!--Inicio paquete2-->
		<div class="col-md-6 paquete">
			<div class="imagenpaquete col-md-12">
				<img src="img/tours_home/foto_iglesia.png" class="img-responsive"/>
				<div class="fantasma">	
					<div class="vermas">
						<a href="#">Ver mas</a>
					</div>
				</div>
			</div>
			<div class="nombrepaquete col-md-12">
				<p>Andes</p>
			</div>
			<div class="descpaquete col-md-12">
				<div class="descripcion col-md-7">
					<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.</p>
				</div>
				<div class="precio col-md-5">
					<p class="final">Precio final</p>
					<p class="signo">$</p>
					<p class="dolares">110</p>
				</div>
			</div>
		</div>
		<!--Fin paquete2-->
		</div>
		<!--Fin paquete row1-->
		
		
		<!--Inicio paquete row2-->
		<div class="row">
		<!--Inicio paquete3-->
		<div class="col-md-6 paquete">
			<div class="imagenpaquete col-md-12">
				<img src="img/tours_home/foto_amazonia.png" class="img-responsive"/>
				<div class="fantasma">	
					<div class="vermas">
						<a href="#">Ver mas</a>
					</div>
				</div>
			</div>
			<div class="nombrepaquete col-md-12">
				<p>Amazonia</p>
			</div>
			<div class="descpaquete col-md-12">
				<div class="descripcion col-md-7">
					<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.</p>
				</div>
				<div class="precio col-md-5">
					<p class="final">Precio final</p>
					<p class="signo">$</p>
					<p class="dolares">87</p>
				</div>
			</div>
		</div>
		<!--Fin paquete3-->
		<!--Inicio paquete4-->
		<div class="col-md-6 paquete">
			<div class="imagenpaquete col-md-12">
				<img src="img/tours_home/foto_galapagos.png" class="img-responsive"/>
				<div class="fantasma">	
					<div class="vermas">
						<a href="#">Ver mas</a>
					</div>
				</div>
			</div>
			<div class="nombrepaquete col-md-12">
				<p>Islas Galápagos,</p>
			</div>
			<div class="descpaquete col-md-12">
				<div class="descripcion col-md-7">
					<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.</p>
				</div>
				<div class="precio col-md-5">
					<p class="final">Precio desde</p>
					<p class="signo">$</p>
					<p class="dolares">819</p>
				</div>
			</div>
		</div>
		<!--Fin paquete4-->
		</div>
		<!--Fin paquete row2-->
		
	</div>
	<!--Fin paquetes-->

</div>
<!--Fin Contanier-->


<?php include('footer.php'); ?>


<script src="js/acordeon.js"></script>
<script src="js/custom.js"></script>


</body>
</html>