<?php
	
	include('modelo/mtbentrenador.php');

	$entrenador = new Mentrenador();

	$iddtedit = isset($_POST['iddt']) ? $_POST['iddt'] : NULL;
	$nombredt = isset($_POST['nombredt']) ? $_POST['nombredt'] : NULL;
	$apellidodt = isset($_POST['apellidodt']) ? $_POST['apellidodt'] : NULL;
	$nacionalidaddt = isset($_POST['nacionalidaddt']) ? $_POST['nacionalidaddt'] : NULL;
	$fechanacdt = isset($_POST['fechanacdt']) ? $_POST['fechanacdt'] : NULL;
	$iddteli = isset($_POST['iddteli']) ? $_POST['iddteli'] : NULL;

	$actu = isset($_POST['actu']) ? $_POST['actu'] : NULL;

	$identrenador = isset($_GET['id']) ? $_GET['id'] : NULL;	

	if ($nombredt && $apellidodt && $nacionalidaddt && $fechanacdt && !$actu) 
	{
		$entrenador->insertar_entrenador($nombredt, $apellidodt, $nacionalidaddt, $fechanacdt);
	}

	if ($iddtedit && $nombredt && $apellidodt && $nacionalidaddt && $fechanacdt && $actu) 
	{
		$entrenador->actualizar_entrenador($iddtedit, $nombredt, $apellidodt, $nacionalidaddt, $fechanacdt);
	}

	if ($identrenador) 
	{
		$consultaedit = $entrenador->consultar_entrenador_id($identrenador);
	}

	if ($iddteli) 
	{
		$entrenador->eliminar_entrenador($iddteli);
	}
	
	function nombrepais($idnacionalidad, $entrenador)
	{
		$nompais = $entrenador->consultar_nacionalidad_id($idnacionalidad);
		echo $nompais[0]['pais'];
	}
