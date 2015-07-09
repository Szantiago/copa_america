<?php
	
	include('modelo/mtbtitulo.php');

	$titulodt = new Mtitulo();

	$idtituloedit	= isset($_POST['idtitulo']) ? $_POST['idtitulo'] : NULL;
	$titulo 		= isset($_POST['titulo']) ? $_POST['titulo'] : NULL;
	$iddt 			= isset($_POST['iddt']) ? $_POST['iddt'] : NULL;
	$descripcion 	= isset($_POST['descripcion']) ? $_POST['descripcion'] : NULL;
	$idtituloreli 	= isset($_POST['idtituloreli']) ? $_POST['idtituloreli'] : NULL;
	$actu 			= isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idtitulo		= isset($_GET['id']) ? $_GET['id'] : NULL;	
	
	$iddt2			= $titulodt->sel_dt();
	
	// Insertar datos
	if ($titulo && $iddt && $descripcion && !$actu) 
	{
		$titulodt->insertar_titulo($titulo, $iddt, $descripcion);
	}
	// Actualizar datos
	if ($idtituloedit && $titulo && $iddt && $descripcion && $actu) 
	{
		$titulodt->actualizar_titulo($idtitulo, $titulo, $iddt, $descripcion);
	}
	// Consulta datos
	if ($idtitulo) 
	{
		$consultatituloedit = $titulodt->consultar_titulo_id($idtitulo);
	}
	// Eliminar datos
	if ($idtituloreli) 
	{
		$titulodt->eliminar_titulo($idtituloreli);
	}