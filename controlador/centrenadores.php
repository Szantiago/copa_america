<?php
	
	include('modelo/mtbentrenador.php');

	$entrenador = new Mentrenador();

	$iddtedit 		= isset($_POST['iddt']) ? $_POST['iddt'] : NULL;
	$nombredt 		= isset($_POST['nombredt']) ? $_POST['nombredt'] : NULL;
	$apellidodt 	= isset($_POST['apellidodt']) ? $_POST['apellidodt'] : NULL;
	$nacionalidaddt = isset($_POST['nacionalidaddt']) ? $_POST['nacionalidaddt'] : NULL;
	$fechanacdt 	= isset($_POST['fechanacdt']) ? $_POST['fechanacdt'] : NULL;
	$iddteli 		= isset($_POST['iddteli']) ? $_POST['iddteli'] : NULL;
	$actu 			= isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$iddt 	= isset($_GET['id']) ? $_GET['id'] : NULL;	

	$nacionalidaddt2= $entrenador->sel_nacionalidad();
	
	// Insertar datos
	if ($nombredt && $apellidodt && $nacionalidaddt && $fechanacdt && !$actu) 
	{
		$entrenador->insertar_entrenador($nombredt, $apellidodt, $nacionalidaddt, $fechanacdt);
	}
	// Actualizar datos
	if ($iddtedit && $nombredt && $apellidodt && $nacionalidaddt && $fechanacdt && $actu) 
	{
		$entrenador->actualizar_entrenador($iddt, $nombredt, $apellidodt, $nacionalidaddt, $fechanacdt);
	}
	// Consulta datos
	if ($iddt) 
	{
		$consultadt = $entrenador->consultar_entrenador_id($iddt);
	}
	// Eliminar datos
	if ($iddteli) 
	{
		$entrenador->eliminar_entrenador($iddteli);
	}
