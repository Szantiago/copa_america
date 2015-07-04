<?php
	
	include('modelo/mtbnacionalidad.php');

	$nacionalidad = new Mnacionalidad();

	$idnacioedit 	= isset($_POST['idnacionalidad']) ? $_POST['idnacionalidad'] : NULL;
	$pais 			= isset($_POST['pais']) ? $_POST['pais'] : NULL;
	$nombrenacio 	= isset($_POST['nombrenacio']) ? $_POST['nombrenacio'] : NULL;
	$idnacioeli 	= isset($_POST['idnacioeli']) ? $_POST['idnacioeli'] : NULL;
	$actu 			= isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idnacionalidad = isset($_GET['id']) ? $_GET['id'] : NULL;	
	
	// Insertar datos
	if ($pais && $nombrenacio && !$actu) 
	{
		$nacionalidad->insertar_nacionalidad($pais, $nombrenacio);
	}
	// Actualizar datos
	if ($idnacioedit && $pais && $nombrenacio && $actu) 
	{
		$nacionalidad->actualizar_nacionalidad($idnacionalidad, $pais, $nombrenacio);
	}
	// Consulta datos
	if ($idnacionalidad) 
	{
		$consultanacioedit = $nacionalidad->consultar_nacionalidad_id($idnacionalidad);
	}
	// Eliminar datos
	if ($idnacioeli) 
	{
		$nacionalidad->eliminar_nacionalidad($idnacioeli);
	}