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
$page='hoteles';
include('superior.php'); 
?>

<!--Inicio Container-->
<div id="container" class="col-md-11">
	<p>Inicio > Hoteles > Hoteles en Ecuador > <b>Hoteles en Quito</b></p>
	</br>
	<!--Inicio Acordeones-->
	<div id="colizq" class="col-md-3">	
		<h2>Filtros de busqueda</h2>
		<form>
			<h3>Nombre del Hotel</h3>
			<input type="text" placeholder="Nombre Hotel" name="nombrehotel" id="nombrehotel" />
		</form>

		<form>
			<h3>Categoria</h3>
			<div class="from-control">
				<label class="radio-inline"><input type="radio" value="1es" name="estrellas" id="estrellas" ><img src="img/aa.png"></label>
			</div>
			<div class="from-control">
				<label class="radio-inline"><input type="radio" value="1es" name="estrellas" id="estrellas" ><img src="img/aa.png"></label>
			</div>
			<div class="from-control">
				<label class="radio-inline"><input type="radio" value="1es" name="estrellas" id="estrellas" ><img src="img/aa.png"></label>
			</div>
			<div class="from-control">
				<label class="radio-inline"><input type="radio" value="1es" name="estrellas" id="estrellas" ><img src="img/aa.png"></label>
			</div>
			<div class="from-control">
				<label class="radio-inline"><input type="radio" value="1es" name="estrellas" id="estrellas" ><img src="img/aa.png"></label>
			</div>
			<h3>Alimentacion</h3>
			<div class="from-control">
				<label class="radio-inline"><input type="radio" value="1es" name="estrellas" id="estrellas" >Solo Habitacion</label>
			</div>
			<div class="from-control">
				<label class="radio-inline"><input type="radio" value="1es" name="estrellas" id="estrellas" >Alojamiento y desayuno</label>
			</div>
			<h3>Precio</h3>
			<div class="from-control">
				<input type="text" placeholder="Minimo" name="preciominimo" id="preciominimo" />
				<input type="text" placeholder="Maximo" name="preciomaximo" id="preciomaximo" />
			</div>
			<div class="from-control">
				<input type="submit" value="Filtrar" name="filtrar" id="filtrar" />
				<input type="submit" value="Borrar filtro" name="borrar" id="borrar" />
			</div>
		</form>
	</div>
	<!--Fin Acordeones-->
	
	
	<!--Inicio paquetes-->
	<div id="colder" class="col-md-9">	
		<!--Inicio paquete-->
		<div class="row busquedas">
			<!--Inicio buscador-->
			<div id="buscadorhoteles" class="col-md-6">
				<!--Inicio tipobusqueda-->
				<div id="tipobusqueda" class="row">
					 <ul class="nav nav-tabs">
					    <li class="active"><a data-toggle="tab" href="#aereos"><i class="fa fa-plane" aria-hidden="true"></i><p>Boletos Aereos</p></a></li>
					    <li><a data-toggle="tab" href="#traslados"><i class="fa fa-car" aria-hidden="true"></i><p>Traslados</p></a></li>
					    <li><a data-toggle="tab" href="#hoteles"><i class="fa fa-building" aria-hidden="true"></i><p>Hoteles</p></a></li>
					    <li><a data-toggle="tab" href="#tours"><i class="fa fa-road" aria-hidden="true"></i><p>Tours</p></a></li>
					  </ul>
				</div>
				<!--Fin tipobusqueda-->

				<div class="tab-content">
				    <div id="aereos" class="tab-pane fade in active">
				    	<!--Inicio tipoviaje-->
						<div id="tipoviaje" class="row">
							buscador viaje
						</div>
						<!--Fin tipoviaje-->
						<!--Inicio filtros-->
						<div id="filtrosaereos" class="col-md-9">
							
						</div>
						<!--Fin filtros-->
						<!--Inicio botonbuscar-->
						<div id="buscaraereos" class="col-md-3">
							
						</div>
						<!--Fin botonbuscar-->
				    </div>
				    <div id="traslados" class="tab-pane fade">
				    	<!--Inicio tipoviaje-->
						<div id="tiposervicio" class="row">
							buscador servicio
						</div>
						<!--Fin tipoviaje-->
						<!--Inicio filtros-->
						<div id="filtrosservicio" class="col-md-9">
							
						</div>
						<!--Fin filtros-->
						<!--Inicio botonbuscar-->
						<div id="buscarservicios" class="col-md-3">
							
						</div>
						<!--Fin botonbuscar-->
				    </div>
					<div id="hoteles" class="tab-pane fade">
						<!--Inicio filtros-->
						<div id="filtroshoteles" class="col-md-9">
							buscador hoteles
						</div>
						<!--Fin filtros-->
						<!--Inicio botonbuscar-->
						<div id="buscarhoteles" class="col-md-3">
							
						</div>
						<!--Fin botonbuscar-->
				    </div>
					<div id="hoteles" class="tab-pane fade">
						<!--Inicio filtros-->
						<div id="filtrostours" class="col-md-9">
							
						</div>
						<!--Fin filtros-->
						<!--Inicio botonbuscar-->
						<div id="buscartours" class="col-md-3">
							
						</div>
						<!--Fin botonbuscar-->
				    </div>
			  	</div>
			</div>
			<!--Fin buscador-->
		</div>
		<!--Fin paquete-->

		<!--Inicio Hoteles-->
		<div id="hoteles" class="row">
			<!--Inicio contenedorhotel-->
			<div class="contenedorhotel col-md-4">
				<!--Inicio Hotel-->
				<div class="col-md-12 hotel">
					<!--Inicio NombreHotel-->
					<div class="nombrehotel" class="col-md-12">
						<p>Gran Hotel</br>Finlandia Quito</p>
					</div>
					<!--Fin Nombrehotel-->
					<!--Inicio imagenhotel-->
					<div class="imagenhotel" class="col-md-12">
						<img src="img/foto_hotel.png" class="img-responsive">
					</div>
					<!--Fin imagenhotel-->
					<!--Inicio precioshotel-->
					<div class="precioshotel" class="col-md-12">
						<p class="col-md-8 centrar negro desde">PRECIO DESDE</p>
						<div class="valor col-md-8 centrar negro preciomoneda">
							<p class="moneda">USD</p><p class="valorhotel">120</p>
						</div>
						<p class="disponibles col-md-11">2 Habitaciones disponibles</p>
					</div>
					<!--Fin precioshotel-->
				</div>
				<!--Fin Hotel-->
			</div>
			<!--Fin Contenedorhotel-->
			<!--Inicio contenedorhotel-->
			<div class="contenedorhotel col-md-4">
				<!--Inicio Hotel-->
				<div class="col-md-12 hotel">
					<!--Inicio NombreHotel-->
					<div class="nombrehotel" class="col-md-12">
						<p>Gran Hotel</br>Finlandia Quito</p>
					</div>
					<!--Fin Nombrehotel-->
					<!--Inicio imagenhotel-->
					<div class="imagenhotel" class="col-md-12">
						<img src="img/foto_hotel.png" class="img-responsive">
					</div>
					<!--Fin imagenhotel-->
					<!--Inicio precioshotel-->
					<div class="precioshotel" class="col-md-12">
						<p class="col-md-8 centrar negro desde">PRECIO DESDE</p>
						<div class="valor col-md-8 centrar negro preciomoneda">
							<p class="moneda">USD</p><p class="valorhotel">120</p>
						</div>
						<p class="disponibles col-md-11">2 Habitaciones disponibles</p>
					</div>
					<!--Fin precioshotel-->
				</div>
				<!--Fin Hotel-->
			</div>
			<!--Fin Contenedorhotel-->
			<!--Inicio contenedorhotel-->
			<div class="contenedorhotel col-md-4">
				<!--Inicio Hotel-->
				<div class="col-md-12 hotel">
					<!--Inicio NombreHotel-->
					<div class="nombrehotel" class="col-md-12">
						<p>Gran Hotel</br>Finlandia Quito</p>
					</div>
					<!--Fin Nombrehotel-->
					<!--Inicio imagenhotel-->
					<div class="imagenhotel" class="col-md-12">
						<img src="img/foto_hotel.png" class="img-responsive">
					</div>
					<!--Fin imagenhotel-->
					<!--Inicio precioshotel-->
					<div class="precioshotel" class="col-md-12">
						<p class="col-md-8 centrar negro desde">PRECIO DESDE</p>
						<div class="valor col-md-8 centrar negro preciomoneda">
							<p class="moneda">USD</p><p class="valorhotel">120</p>
						</div>
						<p class="disponibles col-md-11">2 Habitaciones disponibles</p>
					</div>
					<!--Fin precioshotel-->
				</div>
				<!--Fin Hotel-->
			</div>
			<!--Fin Contenedorhotel-->
			<!--Inicio contenedorhotel-->
			<div class="contenedorhotel col-md-4">
				<!--Inicio Hotel-->
				<div class="col-md-12 hotel">
					<!--Inicio NombreHotel-->
					<div class="nombrehotel" class="col-md-12">
						<p>Gran Hotel</br>Finlandia Quito</p>
					</div>
					<!--Fin Nombrehotel-->
					<!--Inicio imagenhotel-->
					<div class="imagenhotel" class="col-md-12">
						<img src="img/foto_hotel.png" class="img-responsive">
					</div>
					<!--Fin imagenhotel-->
					<!--Inicio precioshotel-->
					<div class="precioshotel" class="col-md-12">
						<p class="col-md-8 centrar negro desde">PRECIO DESDE</p>
						<div class="valor col-md-8 centrar negro preciomoneda">
							<p class="moneda">USD</p><p class="valorhotel">120</p>
						</div>
						<p class="disponibles col-md-11">2 Habitaciones disponibles</p>
					</div>
					<!--Fin precioshotel-->
				</div>
				<!--Fin Hotel-->
			</div>
			<!--Fin Contenedorhotel-->
			<!--Inicio contenedorhotel-->
			<div class="contenedorhotel col-md-4">
				<!--Inicio Hotel-->
				<div class="col-md-12 hotel">
					<!--Inicio NombreHotel-->
					<div class="nombrehotel" class="col-md-12">
						<p>Gran Hotel</br>Finlandia Quito</p>
					</div>
					<!--Fin Nombrehotel-->
					<!--Inicio imagenhotel-->
					<div class="imagenhotel" class="col-md-12">
						<img src="img/foto_hotel.png" class="img-responsive">
					</div>
					<!--Fin imagenhotel-->
					<!--Inicio precioshotel-->
					<div class="precioshotel" class="col-md-12">
						<p class="col-md-8 centrar negro desde">PRECIO DESDE</p>
						<div class="valor col-md-8 centrar negro preciomoneda">
							<p class="moneda">USD</p><p class="valorhotel">120</p>
						</div>
						<p class="disponibles col-md-11">2 Habitaciones disponibles</p>
					</div>
					<!--Fin precioshotel-->
				</div>
				<!--Fin Hotel-->
			</div>
			<!--Fin Contenedorhotel-->
			<!--Inicio contenedorhotel-->
			<div class="contenedorhotel col-md-4">
				<!--Inicio Hotel-->
				<div class="col-md-12 hotel">
					<!--Inicio NombreHotel-->
					<div class="nombrehotel" class="col-md-12">
						<p>Gran Hotel</br>Finlandia Quito</p>
					</div>
					<!--Fin Nombrehotel-->
					<!--Inicio imagenhotel-->
					<div class="imagenhotel" class="col-md-12">
						<img src="img/foto_hotel.png" class="img-responsive">
					</div>
					<!--Fin imagenhotel-->
					<!--Inicio precioshotel-->
					<div class="precioshotel" class="col-md-12">
						<p class="col-md-8 centrar negro desde">PRECIO DESDE</p>
						<div class="valor col-md-8 centrar negro preciomoneda">
							<p class="moneda">USD</p><p class="valorhotel">120</p>
						</div>
						<p class="disponibles col-md-11">2 Habitaciones disponibles</p>
					</div>
					<!--Fin precioshotel-->
				</div>
				<!--Fin Hotel-->
			</div>
			<!--Fin Contenedorhotel-->
			<!--Inicio contenedorhotel-->
			<div class="contenedorhotel col-md-4">
				<!--Inicio Hotel-->
				<div class="col-md-12 hotel">
					<!--Inicio NombreHotel-->
					<div class="nombrehotel" class="col-md-12">
						<p>Gran Hotel</br>Finlandia Quito</p>
					</div>
					<!--Fin Nombrehotel-->
					<!--Inicio imagenhotel-->
					<div class="imagenhotel" class="col-md-12">
						<img src="img/foto_hotel.png" class="img-responsive">
					</div>
					<!--Fin imagenhotel-->
					<!--Inicio precioshotel-->
					<div class="precioshotel" class="col-md-12">
						<p class="col-md-8 centrar negro desde">PRECIO DESDE</p>
						<div class="valor col-md-8 centrar negro preciomoneda">
							<p class="moneda">USD</p><p class="valorhotel">120</p>
						</div>
						<p class="disponibles col-md-11">2 Habitaciones disponibles</p>
					</div>
					<!--Fin precioshotel-->
				</div>
				<!--Fin Hotel-->
			</div>
			<!--Fin Contenedorhotel-->
			<!--Inicio contenedorhotel-->
			<div class="contenedorhotel col-md-4">
				<!--Inicio Hotel-->
				<div class="col-md-12 hotel">
					<!--Inicio NombreHotel-->
					<div class="nombrehotel" class="col-md-12">
						<p>Gran Hotel</br>Finlandia Quito</p>
					</div>
					<!--Fin Nombrehotel-->
					<!--Inicio imagenhotel-->
					<div class="imagenhotel" class="col-md-12">
						<img src="img/foto_hotel.png" class="img-responsive">
					</div>
					<!--Fin imagenhotel-->
					<!--Inicio precioshotel-->
					<div class="precioshotel" class="col-md-12">
						<p class="col-md-8 centrar negro desde">PRECIO DESDE</p>
						<div class="valor col-md-8 centrar negro preciomoneda">
							<p class="moneda">USD</p><p class="valorhotel">120</p>
						</div>
						<p class="disponibles col-md-11">2 Habitaciones disponibles</p>
					</div>
					<!--Fin precioshotel-->
				</div>
				<!--Fin Hotel-->
			</div>
			<!--Fin Contenedorhotel-->
			<!--Inicio contenedorhotel-->
			<div class="contenedorhotel col-md-4">
				<!--Inicio Hotel-->
				<div class="col-md-12 hotel">
					<!--Inicio NombreHotel-->
					<div class="nombrehotel" class="col-md-12">
						<p>Gran Hotel</br>Finlandia Quito</p>
					</div>
					<!--Fin Nombrehotel-->
					<!--Inicio imagenhotel-->
					<div class="imagenhotel" class="col-md-12">
						<img src="img/foto_hotel.png" class="img-responsive">
					</div>
					<!--Fin imagenhotel-->
					<!--Inicio precioshotel-->
					<div class="precioshotel" class="col-md-12">
						<p class="col-md-8 centrar negro desde">PRECIO DESDE</p>
						<div class="valor col-md-8 centrar negro preciomoneda">
							<p class="moneda">USD</p><p class="valorhotel">120</p>
						</div>
						<p class="disponibles col-md-11">2 Habitaciones disponibles</p>
					</div>
					<!--Fin precioshotel-->
				</div>
				<!--Fin Hotel-->
			</div>
			<!--Fin Contenedorhotel-->
		</div>
		<!--Fin Hoteles-->
	<div id="paginacion" class="col-md-6 col-md-offset-3">		
				
		<ul class="pagination">
		  <li><a href="#">1</a></li>
		  <li class="active"><a href="#">2</a></li>
		  <li><a href="#">3</a></li>
		  <li><a href="#">4</a></li>
		  <li><a href="#">5</a></li>
		  <li><a href="#">Siguiente</a></li>
		</ul>
				
	</div>

		
		
	</div>
	<!--Fin paquetes-->

</div>
<!--Fin Contanier-->

<?php include('footer.php'); ?>


<script src="js/custom.js"></script>
<script src="js/acordeon.js"></script>

</body>
</html>