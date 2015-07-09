<?php
	
	include('modelo/mtbequipodirigido.php');

	$equipodirigido = new Mequipodir();

	$idequipodiredit= isset($_POST['idequipodir']) ? $_POST['idequipodir'] : NULL;
	$equipodir 		= isset($_POST['equipodir']) ? $_POST['equipodir'] : NULL;
	$iddt 			= isset($_POST['iddt']) ? $_POST['iddt'] : NULL;
	$fechaini 		= isset($_POST['fechaini']) ? $_POST['fechaini'] : NULL;
	$fechafin 		= isset($_POST['fechafin']) ? $_POST['fechafin'] : NULL;
	$idequipodireli = isset($_POST['idequipodireli']) ? $_POST['idequipodireli'] : NULL;
	$actu 			= isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idequipodir	= isset($_GET['id']) ? $_GET['id'] : NULL;	
	
	$equipodir2		= $equipodirigido->sel_equipo();
	$iddt2			= $equipodirigido->sel_dt();
	
	// Insertar datos
	if ($equipodir && $iddt && $fechaini &&!$actu) 
	{
		$equipodirigido->insertar_equipodir($equipodir, $iddt, $fechaini, $fechafin);
	}
	// Actualizar datos
	if ($idequipodiredit && $equipodir && $iddt && $fechaini && $actu) 
	{
		$equipodirigido->actualizar_equipodir($idequipodir, $equipodir, $iddt, $fechaini, $fechafin);
	}
	// Consulta datos
	if ($idequipodir) 
	{
		$consultaequipodir = $equipodirigido->consultar_equipodir_id($idequipodir);
	}
	// Eliminar datos
	if ($idequipodireli) 
	{
		$equipodirigido->eliminar_equipodir($idequipodireli);
	}