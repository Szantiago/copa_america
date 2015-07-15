<?php include('modelo/mseguridad.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Apuestas Copa América</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/micss.css" />
		<link href='http://fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<div class="container">
		<div class="row-fluid">
			<h1 class="letratitul">Apuestas Copa América</h1>
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
						include("vista/vdetalleapuestas.php");
				?>			
				<!--FORMULARIO DE EJEMPLO--> 
				
				<!--FIN FORMULARIO DE EJEMPLO-->
				<?php
					}
					else
					{
				?> 
				 <?php
					// tabla usuario
					if ($variable==1) {
						include("vista/vlistusuario.php");
					}
					if ($variable==2) {
						include("vista/vactutbusuario.php");
					}
					// tabla apuesta
					if ($variable==3) {
						include("vista/vapuestas.php");
					}
					if ($variable==4) {
						include("vista/vactutbapuesta.php");
					}
					// tabla ciudad
					if ($variable==5) {
						include("vista/vciudad.php");
					}
					if ($variable==6) {
						include("vista/vactuciudad.php");
					}
					// tabla ciudad x grupo
					if ($variable==7) {
						include("vista/vciudadxgrupo.php");
					}
					if ($variable==8) {
						include("vista/vactuciudadxgrupo.php");
					}
					// tabla entrenador
					if ($variable==9) {
						include("vista/ventrenadores.php");
					}
					if ($variable==10) {
						include("vista/vactuentrenadores.php");
					}
					// tabla equipo
					if ($variable==11) {
						include("vista/vequipos.php");
					}
					if ($variable==12) {
						include("vista/vactuequipo.php");
					}
					// tabla equipo dirigido
					if ($variable==13) {
						include("vista/vequipodirigido.php");
					}
					if ($variable==14) {
						include("vista/vactuequipodirigido.php");
					}
					// tabla grupo
					if ($variable==15) {
						include("vista/vgrupos.php");
					}
					if ($variable==16) {
						include("vista/vactugrupos.php");
					}
					// tabla nacionalidad
					if ($variable==17) {
						include("vista/vtbnacionalidad.php");
					}
					if ($variable==18) {
						include("vista/vactutbnacionalidad.php");
					}
					// tabla partidos
					if ($variable==19) {
						include("vista/vpartidos.php");
					}
					if ($variable==20) {
						include("vista/vactupartidos.php");
					}
					// tabla tipo de usuario
					if ($variable==21) {
						
					}
					if ($variable==22) {
						
					}
					// tabla titulo del entrenador
					if ($variable==23) {
						include("vista/vtitulo.php");
					}
					if ($variable==24) {
						include("vista/vactutitulo.php");
					}
					//Ingreso usuario
					if ($variable==25) {
						include("vista/vusuario.php");
					}
					if ($variable==26) {
						include("vista/vdetallepartidos.php");
					}
					if ($variable==27) {
						include("vista/vdetalleapuestas.php");
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