<?php
	
	include('modelo/mtbgrupo.php');

	$grupos = new Mgrupo();

	$idgrupoedit 	= isset($_POST['idgrupo']) ? $_POST['idgrupo'] : NULL;
	$nombregrup 	= isset($_POST['nombregrup']) ? $_POST['nombregrup'] : NULL;
	$idgrupoeli 	= isset($_POST['idgrupoeli']) ? $_POST['idgrupoeli'] : NULL;
	$actu 			= isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idgrupo		= isset($_GET['id']) ? $_GET['id'] : NULL;	
	
	// Insertar datos
	if ($nombregrup && !$actu) 
	{
		$grupos->insertar_grupo($nombregrup);
	}
	// Actualizar datos
	if ($idgrupoedit && $nombregrup  && $actu) 
	{
		$grupos->actualizar_grupo($idgrupo, $nombregrup);
	}
	// Consulta datos
	if ($idgrupo) 
	{
		$consultagrupoedit = $grupos->consultar_grupo_id($idgrupo);
	}
	// Eliminar datos
	if ($idgrupoeli) 
	{
		$grupos->eliminar_grupo($idgrupoeli);
	}
