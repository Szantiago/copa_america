<?php
	
	include('modelo/mtbciudadxgrupo.php');

	$ciudadxgrupo = new Mciuxgru();

	$idciuxgruedit 	= isset($_POST['idciuxgru']) ? $_POST['idciuxgru'] : NULL;
	$idciudad 		= isset($_POST['idciudad']) ? $_POST['idciudad'] : NULL;
	$idgrupo 		= isset($_POST['idgrupo']) ? $_POST['idgrupo'] : NULL;
	$idciuxgrueli 	= isset($_POST['idciuxgrueli']) ? $_POST['idciuxgrueli'] : NULL;
	$actu 			= isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idciuxgru		= isset($_GET['id']) ? $_GET['id'] : NULL;	
	
	$idciudad2		= $ciudadxgrupo->sel_ciudad();
	$idgrupo2		= $ciudadxgrupo->sel_grupo();
	
	// Insertar datos
	if ($idciudad && $idgrupo && !$actu) 
	{
		$ciudadxgrupo->insertar_ciugru($idciudad, $idgrupo);
	}
	// Actualizar datos
	if ($idciuxgruedit && $idciudad && $idgrupo && $actu) 
	{
		$ciudadxgrupo->actualizar_ciugru($idciuxgru, $idciudad, $idgrupo);
	}
	// Consulta datos
	if ($idciuxgru) 
	{
		$consultaciuxgru = $ciudadxgrupo->consultar_ciugru_id($idciuxgru);
	}
	// Eliminar datos
	if ($idciuxgrueli) 
	{
		$ciudadxgrupo->eliminar_ciugru($idciuxgrueli);
	}