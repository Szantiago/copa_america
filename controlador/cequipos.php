<?php
	/* 	Elaborado por: Luis M Morales B
	Vers 2.0 
	30 jun 15
	*/
	include('modelo/mtbequipo.php');
	$equipos = new Mequipo();
	
	$idequipoedit 	= isset($_POST['idequipo']) ? $_POST['idequipo'] : NULL;
	$nomequi 		= isset($_POST['nomequi']) ? $_POST['nomequi'] : NULL;
	$fechafund 		= isset($_POST['fechafund']) ? $_POST['fechafund'] : NULL;
	$paginaweb 		= isset($_POST['paginaweb']) ? $_POST['paginaweb'] : NULL;
	$ciudadcap 		= isset($_POST['ciudadcap']) ? $_POST['ciudadcap'] : NULL;
	$grupo 			= isset($_POST['grupo']) ? $_POST['grupo'] : NULL;
	$idequipoeli	= isset($_POST['idequipoeli']) ? $_POST['idequipoeli'] : NULL;
	$actu 			= isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idequipo 		= isset($_GET['id']) ? $_GET['id'] : NULL;	
	
	$grupo2= $equipos->sel_grupo();
	
	// Insertar datos
	if ($nomequi && $fechafund && $paginaweb && $ciudadcap && $grupo && !$actu) 
	{
		$equipos->insertar_equipo($nomequi, $fechafund, $paginaweb, $ciudadcap, $grupo);
	}
	// Actualizar datos
	if ($idequipoedit && $nomequi && $fechafund && $paginaweb && $ciudadcap && $grupo && $actu) 
	{
		$equipos->actualizar_equipo($idequipo, $nomequi, $fechafund, $paginaweb, $ciudadcap, $grupo);
	}
	// Consulta datos
	if ($idequipo) 
	{
		$consultaequi = $equipos->consultar_equipo_id($idequipo);
	}
	// Eliminar datos
	if ($idequipoeli) 
	{
		$equipos->eliminar_equipo($idequipoeli);
	}