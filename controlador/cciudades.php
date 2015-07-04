<?php
	
	include('modelo/mtbciudad.php');

	$ciudad = new Mciudad();

	$idciudadedit = isset($_POST['idciudad']) ? $_POST['idciudad'] : NULL;
	$nombreciudad = isset($_POST['nombreciudad']) ? $_POST['nombreciudad'] : NULL;
	$numerohab = isset($_POST['numerohab']) ? $_POST['numerohab'] : NULL;
	$estadioprinc = isset($_POST['estadioprinc']) ? $_POST['estadioprinc'] : NULL;
	$idciudadeli = isset($_POST['idciudadeli']) ? $_POST['idciudadeli'] : NULL;

	$actu = isset($_POST['actu']) ? $_POST['actu'] : NULL;

	$idciudad = isset($_GET['id']) ? $_GET['id'] : NULL;	

	if ($nombreciudad &&  !$actu) 
	{
		$ciudad->insertar_ciudades($nombreciudad, $numerohab, $estadioprinc);
	}

	if ($idciudadedit && $nombreciudad && $numerohab && $estadioprinc  && $actu) 
	{
		$ciudad->actualizar_ciudades($idciudadedit, $nombreciudad,$numerohab, $estadioprinc);
	}

	if ($idciudad) 
	{
		$consultaedit = $ciudad->consultar_ciudades_id($idciudad);
	}

	if ($idciudadeli) 
	{
		$ciudad->eliminar_ciudades($idciudadeli);
	}
