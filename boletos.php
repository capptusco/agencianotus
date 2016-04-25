<html>
<head>
<?php 
$page='boletos';
include('incluidos.php'); 
?>
</head>
<body>

<?php 
$page='boletos';
include('superior.php'); ?>

<!--Inicio Container-->
<div id="container" class="col-md-9">
	<p>Inicio > <b>Boletos aereos de Miami a quito</b></p>
	</br>
	<!--Inicio Pasos-->
	<div id="pasos" class="col-md-12">
		<ul class="nav nav-pills">
			<li role="presentation" class="pasoactivo"><i class="" >1</i><a href="#" >SELECCIONA<br>TU VUELO</a></li>
			<li role="presentation"><i class="" >2</i><a href="#" >INFORMACION DE<br>PASAJERO(S)</a></li>
			<li role="presentation"><i class="" >3</i><a href="#" >VERIFIQUE SU<br>TICKET</a></li>
			<li role="presentation"><i class="" >4</i><a href="#" style="padding-top: 10px;" >PAGO</a></li>
		</ul>
	</div>
	<!--Fin Pasos-->
	<!--Inicio datosvuelo-->
	<div id="datosvuelo" class="row">
		<form class="form-inline">
			<!--Inicio tipovuelo-->
			<div id="tipovuelo" class="col-md-12">
				<input type="radio" name="gender" value="idavuelta" checked> Ida y Vuelta
				<input type="radio" name="gender" value="ida"> Ida
			</div>
			<!--Fin tipovuelo-->
			<!--Inicio fechasvuelo-->
			<div id="fechasvuelo" class="col-md-12">
				<div class="form-group">
					<input type="text" name="origen" class="form-control" placeholder="Origen">
					<input type="text" name="destino" class="form-control" placeholder="Destino">
				
						<div class="form-group">
							<div class='input-group date' id='datetimepicker6'>
								<input type='text' class="form-control" />
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
					
						<div class="form-group">
							<div class='input-group date' id='datetimepicker7'>
								<input type='text' class="form-control" />
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
			
					<input type="submit" value="Buscar" class="btn btn-success">
				</div>
			</div>
			<!--Fin fechasvuelo-->
		</form>
	</div>
	<!--Fin datosvuelo-->
	<!--Inicio Pasajeros-->
	<div id="pasajeros" class="col-md-12">
		<p>1 Pasajero, Clase Economica</p>
	</div>
	<!--Fin Pasajeros-->
	<!--Inicio Vuelos-->
	<div id="vuelos" class="col-md-10">
		<!--Inicio filtros-->
		<div id="filtros" class="col-md-3 col-md-offset-9">
			<form >
				<select name="orden" class="form-control">
				  <option value="preciomenor">Precio(menor)</option>
				  <option value="preciomayor">Precio(mayor)</option>
				  <option value="az">A-Z</option>
				  <option value="za">Z-A</option>
				</select>
			</form>
		</div>
		<!--Fin filtros-->
		<!--Inicio vuelo-->
		<div class="col-md-12 vuelo">
			<!--Inicio horarios-->
			<div class="col-md-8 horarios">	
				<!--Inicio horarioida-->
				<div class="col-md-12 col-xs-6 horaida form-inline">
					<div class="form-group col-md-1" >
					  <label><input type="checkbox" value=""></label>
					</div>
					<img src="./img/aa.png" class="col-md-2"/>
					<div class="form-group col-md-5">
					  <label>8:00 am - 16:05 pm</label></br>
					  <label class="blanco">American Airlines</label>
					</div>
					<div class="form-group col-md-3">
					  <label>8h 4 min</label></br>
					  <label class="blanco">UIO-MIA</label>
					</div>
					<div class="form-group col-md-1">
					  <label>Directo</label>
					</div>
				</div>
				<!--Fin horarioida-->
				<!--Inicio horavuelta-->
				<div class="col-md-12 horavuelta form-inline">
					<div class="form-group col-md-1" >
					  <label><input type="checkbox" value=""></label>
					</div>
					<img src="./img/aa.png" class="col-md-2"/>
					<div class="form-group col-md-5">
					  <label>8:00 am - 16:05 pm</label></br>
					  <label class="blanco">American Airlines</label>
					</div>
					<div class="form-group col-md-3">
					  <label>8h 4 min</label></br>
					  <label class="blanco">UIO-MIA</label>
					</div>
					<div class="form-group col-md-1">
					  <label>Directo</label>
					</div>
				</div>
				<!--Fin horavuelta-->
			</div>
			<!--Fin horarios-->
			<!--Inicio Botones-->
			<div class="col-md-3 botones">	
				<!--Inicio precio-->
				<div class="col-md-12 precio_boleto">
					<b><p>479<sup>.39</sup></p></b>
				</div>
				<!--Fin precio-->
				<!--Inicio seleccionar-->
				<div class="col-md-12 seleccionar">
					<input type="submit" value="Seleccionar" class="btn btn-success">
				</div>
				<!--Fin seleccionar-->
			</div>
			<!--Fin botones-->
		</div>
		<!--Fin vuelo-->
		<!--Inicio vuelo-->
		<div class="col-md-12 vuelo">
			<!--Inicio horarios-->
			<div class="col-md-8 horarios">	
				<!--Inicio horarioida-->
				<div class="col-md-12 col-xs-6 horaida form-inline">
					<div class="form-group col-md-1" >
					  <label><input type="checkbox" value=""></label>
					</div>
					<img src="./img/aa.png" class="col-md-2"/>
					<div class="form-group col-md-5">
					  <label>8:00 am - 16:05 pm</label></br>
					  <label class="blanco">American Airlines</label>
					</div>
					<div class="form-group col-md-3">
					  <label>8h 4 min</label></br>
					  <label class="blanco">UIO-MIA</label>
					</div>
					<div class="form-group col-md-1">
					  <label>Directo</label>
					</div>
				</div>
				<!--Fin horarioida-->
				<!--Inicio horavuelta-->
				<div class="col-md-12 horavuelta form-inline">
					<div class="form-group col-md-1" >
					  <label><input type="checkbox" value=""></label>
					</div>
					<img src="./img/aa.png" class="col-md-2"/>
					<div class="form-group col-md-5">
					  <label>8:00 am - 16:05 pm</label></br>
					  <label class="blanco">American Airlines</label>
					</div>
					<div class="form-group col-md-3">
					  <label>8h 4 min</label></br>
					  <label class="blanco">UIO-MIA</label>
					</div>
					<div class="form-group col-md-1">
					  <label>Directo</label>
					</div>
				</div>
				<!--Fin horavuelta-->
			</div>
			<!--Fin horarios-->
			<!--Inicio Botones-->
			<div class="col-md-3 botones">	
				<!--Inicio precio-->
				<div class="col-md-12 precio_boleto">
					<b><p>479<sup>.39</sup></p></b>
				</div>
				<!--Fin precio-->
				<!--Inicio seleccionar-->
				<div class="col-md-12 seleccionar">
					<input type="submit" value="Seleccionar" class="btn btn-success">
				</div>
				<!--Fin seleccionar-->
			</div>
			<!--Fin botones-->
		</div>
		<!--Fin vuelo-->
	</div>
	<!--Fin Vuelos-->
	<div id="paginacion" class="col-md-4 col-md-offset-5">		
				
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
<!--Fin Contanier-->
<?php include('footer.php'); ?>

<script src="js/custom.js"></script>

</body>
</html>