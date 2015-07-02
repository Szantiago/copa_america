<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Apuestas Copa America</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/micss.css" />
		<link href='http://fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<div class="container">
		<div class="row-fluid">
			<h1 class="letratitul">Apuestas copa america</h1>
			<br />			
			<div id="encabezado" class="menuarrib">				
				<?php include("menu.php"); ?><!--AQUI SE INCLUYE EL PHP DEL MENU-->
			</div>		
		</div>		
		<?php
			$variable = isset($_GET['var']) ? $_GET['var']:NULL;
		?>
		<div class="row-fluid">
			<div id="formularios" class="col-md-12"><!--DIV QUE VA A CARGAR LOS FORMULARIOS-->
				 <?php
					if ($variable==null) {
				?>			
				<!--FORMULARIO DE EJEMPLO--> 
				<h2>Registar Equipo</h1>
				<br />
				<form role="form" name="form1" method="POST" action="">		
					<div class="form-group col-md-6">
						<label>Nombre:</label><br />
						<input name="nombre" type="text" class="form-control">
						<br />
						<label>Fecha de fundación:</label><br />
						<input name="apellido" type="date" class="form-control">
						<br />
						<label>Pagina web:</label><br />
						<input name="telefono" type="text" class="form-control">
						<br />
					</div>
					<div class="form-group col-md-6">				
						<label>Ciudad capital:</label><br />
						<input name="direccion" type="text" class="form-control">
						<br />
						<label>Grupo:</label><br />
						<input name="nacimiento" type="text" class="form-control">
						<br />				
						<input type="submit" value="Enviar" class="btn btn-success">
					</div>
				</form>
				<!--FIN FORMULARIO DE EJEMPLO-->
				<?php
					}
					else
					{
				?> 
				 <?php
					if ($variable==2) {
						include("vista/v.php");
					}
					if ($variable==3) {
						include("vista/v2.php");
					}
				?> 
				<?php
					}
				?>
			</div>
		</div>
	</div>
	<footer>
			<img src="img/equipos.png"  width="80%" align="center">
			<p>"Proyecto COPA AMÉRICA Chile 2015" Desarrolado por Grupo ICETEX - ENID<BR>
			Escuela Nacional de Innovación y Desarrollo en Liderazgo</p>
			
	</footer>
</html>