<?php 
	$perfil  = isset($_SESSION['perfil']) ? $_SESSION['perfil'] : NULL;
?>
	<div class="btn-group">
		<?php if ($perfil==1): ?>	
			<a href="home.php?var=11" class="btn btn-success btn-md">Equipos</a>
			<a href="home.php?var=15" class="btn btn-success btn-md">Grupos</a>
			<a href="home.php?var=9" class="btn btn-success btn-md">Entrenadores</a>
			<a href="home.php?var=5" class="btn btn-success btn-md">Ciudades</a>
			<a href="home.php?var=19" class="btn btn-success btn-md">Partidos</a>
			<a href="home.php?var=7" class="btn btn-success btn-md">Ciudades y Grupos</a>
			<a href="home.php?var=17" class="btn btn-success btn-md">Nacionalidades</a>	
			<a href="home.php?var=1" class="btn btn-success btn-md">Usuarios</a>							  
		<?php endif ?>
		<?php if ($perfil==1 || $perfil==2): ?>		
			<a href="home.php?var=3" class="btn btn-success btn-md">Apuestas</a>
			<a href="home.php?var=27" class="btn btn-success btn-md">Mis apuestas</a>
			<a href="home.php?var=26" class="btn btn-success btn-md">Resultados</a>
			<a href="vista/salir.php" class="btn btn-success btn-md">Salir</a>
		<?php endif ?>
	</div>
