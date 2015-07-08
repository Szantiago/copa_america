<?php include('modelo/mseguridad.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Apuestas Copa America</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/micss.css" />
		<link href='http://fonts.googleapis.com/css?family=Chicle' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<div id="contenedor">		
			<header>
				<img class="logo" src="img/logo.png" align="left">				
			</header>
			<br>			
			<div class="row-fluid parrafo">
			<p >Bienvenido a Apuestas Copa América un lugar en el que ademas de disfrutar de la emoción 
			del principal torneo de fútbol en Sudamérica, se podrá divertir  apostando a su equipo favorito.</p>	
			</div>			
		<!--inicio banner-->
		<div class="row-fluid banner">		
				<div class='csslider1 autoplay '>
				<input name="cs_anchor1" id='cs_slide1_0' type="radio" class='cs_anchor slide' >
				<input name="cs_anchor1" id='cs_slide1_1' type="radio" class='cs_anchor slide' >
				<input name="cs_anchor1" id='cs_slide1_2' type="radio" class='cs_anchor slide' >
				<input name="cs_anchor1" id='cs_slide1_3' type="radio" class='cs_anchor slide' >
				<input name="cs_anchor1" id='cs_play1' type="radio" class='cs_anchor' checked>
				<input name="cs_anchor1" id='cs_pause1' type="radio" class='cs_anchor' >
				<ul>
					<div style="width: 100%; visibility: hidden; font-size: 0px; line-height: 0;">
						<img src="img/images/01.jpg" style="width: 100%;">
					</div>
					<li class='num0 img'>
						<img src='img/images/01.jpg' alt='Disfruta con la emoción' title='Disfruta con la emoción' />
					</li>
					<li class='num1 img'>
						<img src='img/images/02.jpg' alt='Apoya a tu equipo' title='Apoya a tu equipo' />
					</li>
					<li class='num2 img'>
						<img src='img/images/03.jpg' alt='Pronostica los resultados' title='Pronostica los resultados' />
					</li>
					<li class='num3 img'>
						<img src='img/images/04.jpg' alt='Vive la fiesta del fútbol' title='Vive la fiesta del fútbol' />
					</li>
				
				</ul>
				<a class="cs_lnk" href="http://cssslider.com">image slider</a>
				<div class='cs_description'>
					<label class='num0'>
						<span class="cs_title"><span class="cs_wrapper">Disfruta con la emoción</span></span>
						
					</label>
					<label class='num1'>
						<span class="cs_title"><span class="cs_wrapper">Apoya a tu equipo</span></span>
						
					</label>
					<label class='num2'>
						<span class="cs_title"><span class="cs_wrapper">Pronostica los resultados</span></span>
						
					</label>
					<label class='num3'>
						<span class="cs_title"><span class="cs_wrapper">Vive la fiesta del fútbol</span></span>
						
					</label>
				</div>
				
				<div class='cs_arrowprev'>
					<label class='num0' for='cs_slide1_0'></label>
					<label class='num1' for='cs_slide1_1'></label>
					<label class='num2' for='cs_slide1_2'></label>
					<label class='num3' for='cs_slide1_3'></label>
				</div>
				<div class='cs_arrownext'>
					<label class='num0' for='cs_slide1_0'></label>
					<label class='num1' for='cs_slide1_1'></label>
					<label class='num2' for='cs_slide1_2'></label>
					<label class='num3' for='cs_slide1_3'></label>
				</div>
				
				<div class='cs_bullets'>
					<label class='num0' for='cs_slide1_0'>
						<span class='cs_point'></span>
						<span class='cs_thumb'><img src='img/tooltips/01.jpg' alt='Disfruta con la emoción' title='Disfruta con la emoción' /></span>
					</label>
					<label class='num1' for='cs_slide1_1'>
						<span class='cs_point'></span>
						<span class='cs_thumb'><img src='img/tooltips/02.jpg' alt='Apoya a tu equipo' title='Apoya a tu equipo' /></span>
					</label>
					<label class='num2' for='cs_slide1_2'>
						<span class='cs_point'></span>
						<span class='cs_thumb'><img src='img/tooltips/03.jpg' alt='Pronostica los resultados' title='Pronostica los resultados' /></span>
					</label>
					<label class='num3' for='cs_slide1_3'>
						<span class='cs_point'></span>
						<span class='cs_thumb'><img src='img/tooltips/04.jpg' alt='Vive la fiesta del fútbol' title='Vive la fiesta del fútbol' /></span>
					</label>
				</div>
				
				</div>
		</div>
		<!--fin banner-->	
			<div class="row-fluid">			
				<div class="col-md-12">
					<form action="modelo/mcontrol.php" method="POST">					
						<div class="form-group col-md-4">
							<label>Usuario:</label>
							<input name="usuario" type="text" class="form-control">
						</div>
						<div class="form-group col-md-4">				
							<label>Contraseña:</label>
							<input name="password" type="password" class="form-control">				
						</div>
						<div class="form-group col-md-2"><br>
						<input type="submit" value="INGRESAR" class="btn btn-success">
						</div>
					</form>
				<div class="col-md-2 menuarrib">
				<a href="home.php?var=1" class="btn btn-primary btn-md">
				<span class="glyphicon glyphicon-pencil"></span>&nbsp;
				REGISTRARSE</a>
			</div>
				</div>
				
			</div>
			<div class="row-fluid banner">		
				<img src="img/afi.png"  width="90%" align="center">
				<img src="img/equipos.png"  width="90%" align="center">
			</div>	
			
	</div>
	
	<footer>
		<p>texto pie pagina texto pie pagina texto pie pagina texto pie pagina texto pie pagina
		texto pie pagina texto pie pagina texto pie pagina texto pie pagina texto pie pagina
		texto pie pagina texto pie pagina texto pie pagina texto pie pagina texto pie pagina</p>
	</footer>
</html>