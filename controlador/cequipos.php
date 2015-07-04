<?php
	/* 	Elaborado por: Luis M Morales B
	Vers 2.0 
	30 jun 15
	*/
	include('modelo/mequipos.php');
	$equipos = new Mequipos();
	$idequipoedit = isset($_POST['idequipo']) ? $_POST['idequipo'] : NULL;
	$nombreequipo = isset($_POST['nombreequipo']) ? $_POST['nombreequipo'] : NULL;
	$idequipoeli = isset($_POST['idequipoeli']) ? $_POST['idequipoeli'] : NULL;
	$actu = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idequipo = isset($_GET['id']) ? $_GET['id'] : NULL;	
	echo $idequipo;
	echo $nombreequipo;
	if ($nombreequipo &&  !$actu) 
	{
		$equipos->insertar_equipos($nombreequipo);
	}
	if ($idequipoedit && $nombreequipo  && $actu) 
	{
		$equipos->actualizar_equipos($idequipoedit, $nombreequipo);
	}
	if ($idequipo) 
	{
		$consultaedit = $equipos->consultar_equipos_id($idequipo);
	}
	if ($idequipoeli) 
	{
		$equipos->eliminar_equipos($idequipoeli);
	}