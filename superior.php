
<!--Inicio Superior-->
<div id="superior" class="col-md-12">
	<!--Inicio MenuSup-->
	<div id="menusup" class="col-md-12">
		<!--Inicio ROW-->
		<div id="row1" class="row">
			<!--Inicio Top1-->
			<div id="top1" class="col-md-10">
				<!--Inicio Perfil-->
				<div id="perfil" class="col-md-5">
					<ul class="nav navbar-nav">
					
						<li id= item_perfil class="active"><a href="#">MI PERFIL<span class="sr-only">(current)</span></a></li>
						<li id= item_perfil ><a href="#">MIS RESERVAS</a></li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CARRITO DE COMPRAS <img src="img/btn_carrito.png" /> <span class="caret"></span></a>
						  <ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						  </ul>
						</li>
					</ul>
				</div>
				<!--Fin Perfil-->
				<!--Inicio Social-->
				<div id="social" class="col-md-7 col-xlg-4 col-xlg-offset-2">
					<form class="navbar-form" role="search">
						<div class="input-group">
							<input  id="buscador_menu_top" type="text" class="form-control" placeholder="" name="q">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							</div>
						</div>
						
						<a href="#"><img src="img/btn_facebook.png" /> </a>
						<a href="#"><img src="img/btn_twitter.png" /> </a>
						<a href="#"><img src="img/btn_skype.png" /> </a>
						<a href="#"><img src="img/btn_whatsapp.png" /> </a>
						<a href="#"><img src="img/btn_instagram.png" /></a>
						<a href="#"><img src="img/btn_chat_online.png" /></a>
						
					</form>
				</div>
				<!--Fin Social-->
			</div>
			<!--Fin Top1-->
		</div>
		<!--fin ROW1-->
		<!--Inicio ROW2-->
		<div id="row2" class="row">
			<!--Inicio Top2-->
			<div id="top2" class="col-md-10">
				<!--Inicio logos-->
				<div id="logos" class="col-md-4">
					<img  class="img-responsive" src="./img/logo-home.png"/>
				</div>
				<!--Fin logos-->
				<!--Inicio menu-->
				<div id="menu" class="col-md-8 col-xlg-5 col-xlg-offset-3">
					<nav class="navbar">
					  <div class="container-fluid  navbar-inverse">
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>                        
					      </button>
					      <!--<a class="navbar-brand" href="#">WebSiteName</a>-->
					    </div>
					    <div class="collapse navbar-collapse" id="myNavbar">
					      <ul class="nav navbar-nav">
					      	<li class="active"><a href="#">INICIO<span class="sr-only">(current)</span></a></li>
					      	<li><a href="#">ACERCA DE ECUADOR</a></li>
							<li><a href="#">ACERCA DEL EVENTO</a></li>
							<li><a href="#">AEREOS</a></li>
							<li><a href="#">TRASLADOS</a></li>
							<li><a href="#">HOTELES</a></li>
							<li><a href="#">TOURS</a></li>
							<li><a href="#">GALERIA</a></li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">IDIOMA<span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="#">Español</a></li>
								<li><a href="#">English</a></li>
								<li><a href="#">Francais</a></li>
							  </ul>
							</li>
					      </ul>
					      
					    </div>
					  </div>
					</nav>
					
				</div>
				<!--Fin menu-->
			</div>
			<!--Fin Top2-->
		</div>
		<!--Fin ROW2-->
	</div>
	<!--Fin MenuSup-->
	<!--Inicio Slider-->
	<div id="slider" class="row">
		

		<!--Inicio stage-->
		<div id="slideshow">
			<ul id="exampleSlider">
			    <li>
			    	<?php if($page == "home"){?>
			    	<div class="descslide">
				    	<p class="underline">ECUADOR</p><h2>VOLCÁN CHIMBORAZO</h2>
				    	<p>El Chimborazo es el volcan y montaña mas alta de  eduador y el<br/>
				    	punto mas alejado del centro de la tierra, es decir el punto mas <br/>
				    	cercano al espacio exterior,razón por la cual es llamado como <br/>el punto más cercano al sol, debido a que el diametro terrestre</p>
				    </div>
				    <?php } ?>
				    <img src="img/rotadores/<?php echo $page;?>/1.png" alt="">
			    </li>
			    <li>
			    	<?php if($page == "home"){?>
			    	<div class="descslide">
				    	<p class="underline">ECUADOR</p><h2>PLAZA GRANDE</h2>
				    	<p>Ubicada en el centro historico de quito<br/>
				    	punto mas alejado del centro de la tierra, es decir el punto mas <br/>
				    	cercano al espacio exterior,razón por la cual es llamado como <br/>el punto más cercano al sol, debido a que el diametro terrestre</p>
				    </div>
				    <?php } ?>
		      		<img src="img/rotadores/<?php echo $page;?>/2.png" alt="">
		      	</li>
			</ul>

		</div>
		<!--Fin stage-->
		<?php if($page == "home"){?>
		<!--Inicio buscador-->
		<div id="buscador" class="col-md-10">
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
						Buscador viaje
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
		<?php }?>
		
	</div>
	<!--Fin Slider-->
</div>
<!--Fin Superior-->