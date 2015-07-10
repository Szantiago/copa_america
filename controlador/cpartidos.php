<?php
	
	include('modelo/mtbpartidos.php');

	$partidos = new Mpartidos();

	$idpartidoedit 	= isset($_POST['idpartido']) ? $_POST['idpartido'] : NULL;
	$idpartidoelim 	= isset($_POST['idpartidoelim']) ? $_POST['idpartidoelim'] : NULL;
	$equipolocal 	= isset($_POST['equipolocal']) ? $_POST['equipolocal'] : NULL;
	$equipovisit 	= isset($_POST['equipovisit']) ? $_POST['equipovisit'] : NULL;
	$horario 		= isset($_POST['horario']) ? $_POST['horario'] : NULL;
    $idciudadestadio= isset($_POST['idciudadestadio']) ? $_POST['idciudadestadio'] : NULL;
	$marcadorlocal	= isset($_POST['marcadorlocal']) ? $_POST['marcadorlocal'] : NULL;
	$marcadorvisit 	= isset($_POST['marcadorvisit']) ? $_POST['marcadorvisit'] : NULL;
	
	$actu 			= isset($_POST['actu']) ? $_POST['actu'] : NULL;

	$idpartido	 	= isset($_GET['id']) ? $_GET['id'] : NULL;	
	
	$equipo2		= $partidos->seleccionar_equipo();
	$ciudadestadio2	= $partidos->seleccionar_ciudad();

	//echo $equipolocal." ".$equipovisit." ".$horario." ".$idciudadestadio." ".$marcadorlocal." ".$marcadorvisit ;
	
	if ($equipolocal && $equipovisit && $horario && $idciudadestadio && !$actu) 
	{
		$partidos->insertar_partidos($equipolocal,$equipovisit,$horario,$idciudadestadio,$marcadorlocal,$marcadorvisit);
	}

	if ($idpartidoedit &&$equipolocal && $equipovisit && $horario && $idciudadestadio && $actu) 
	{
		$partidos->actualizar_partidos($idpartido,$equipolocal,$equipovisit,$horario,$idciudadestadio,$marcadorlocal,$marcadorvisit);
	}

	if ($idpartido) 
	{
		$consultaedit = $partidos->consultar_partidos_id($idpartido);
	}

	if ($idpartidoelim) 
	{
		$partidos->eliminar_partidos($idpartidoelim);
	}

	function nombre_equipo($idequipo, $partidos)
	{
		$nomequi = $partidos->seleccionar_equipo_id($idequipo);
		return $nomequi[0]['nomequi'];
	}
?>