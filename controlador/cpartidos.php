<?php
	
	include('modelo/mtbpartidos.php');

	$partidos = new Mpartidos();

	$idpartidoedit = isset($_POST['idpartidoedit']) ? $_POST['idpartidoedit'] : NULL;
	$idpartidoelim = isset($_POST['idpartidoelim']) ? $_POST['idpartidoelim'] : NULL;
	$equipolocal = isset($_POST['equipolocal']) ? $_POST['equipolocal'] : NULL;
	$equipovisit = isset($_POST['equipovisit']) ? $_POST['equipovisit'] : NULL;
	$horario = isset($_POST['horario']) ? $_POST['horario'] : NULL;
    $idciudadestadio = isset($_POST['idciudadestadio']) ? $_POST['idciudadestadio'] : NULL;
	$marcadorlocal = isset($_POST['marcadorlocal']) ? $_POST['marcadorlocal'] : NULL;
	$marcadorvisit = isset($_POST['marcadorvisit']) ? $_POST['marcadorvisit'] : NULL;
	
	$actu = isset($_POST['actu']) ? $_POST['actu'] : NULL;

	$idpartidos = isset($_GET['id']) ? $_GET['id'] : NULL;	

	if ($equipolocal && $equipovisit && $horario && $idciudadestadio && $marcadorlocal && $marcadorvisit && !$actu) 
	{
		$partidos->insertar_partidos($equipolocal,$equipovisit,$horario,$idciudadestadio,$marcadorlocal,$marcadorvisit);
	}

	if ($idpartidoedit &&$equipolocal && $equipovisit && $horario && $idciudadestadio && $marcadorlocal && $marcadorvisit  && $actu) 
	{
		$partidos->actualizar_partidos($equipolocal,$equipovisit,$horario,$idciudadestadio,$marcadorlocal,$marcadorvisit);
	}

	if ($idpartidos) 
	{
		$consultaedit = $partidos->consultar_partidos_id($idpartidos);
	}

	if ($idpartidoelim) 
	{
		$partidos->eliminar_partidos($idpartidoelim);
	}
?>