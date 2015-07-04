<?php
	
	include('modelo/mgrupos.php');

	$grupos = new Mgrupos();

	$idgrupoedit = isset($_POST['idgrupo']) ? $_POST['idgrupo'] : NULL;
	$nombregrup = isset($_POST['nombregrup']) ? $_POST['nombregrup'] : NULL;
	$idgrupoeli = isset($_POST['idgrupoeli']) ? $_POST['idgrupoeli'] : NULL;

	$actu = isset($_POST['actu']) ? $_POST['actu'] : NULL;

	$idgrupo = isset($_GET['id']) ? $_GET['id'] : NULL;	
	echo $idgrupo;
	echo $nombregrup;
	if ($nombregrup &&  !$actu) 
	{
		$grupos->insertar_grupos($nombregrup);
	}

	if ($idgrupoedit && $nombregrup  && $actu) 
	{
		$grupos->actualizar_grupos($idgrupoedit, $nombregrup);
	}

	if ($idgrupo) 
	{
		$consultaedit = $grupos->consultar_grupos_id($idgrupo);
	}

	if ($idgrupoeli) 
	{
		$grupos->eliminar_grupos($idgrupoeli);
	}
