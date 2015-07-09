<?php
	/* 
		@author: Diego Monroy
		@version: V1
	*/
	include('controlador/conexion.php');
	include('functions.php');

	class Mtitulo extends Funciones
	{
		function __construct(){}
		
		/*
		 	Función para la insercion en la tabla
		 */
		function insertar_titulo($titulo, $iddt, $descripcion)
		{
			$sql = "INSERT INTO `tbtitulo`(`titulo`, `iddt`,`descripcion`) VALUES ('$titulo','$iddt','$descripcion')";
			$this -> cons($sql);
		}
		/*
		 	Función para la actualización en la tabla
		 */
		function actualizar_titulo($idtitulo, $titulo, $iddt, $descripcion)
		{
			$sql = "UPDATE `tbtitulo` SET `titulo`='$titulo',`iddt`='$iddt',`descripcion`='$descripcion' WHERE `idtitulo` = '$idtitulo'";
			$this -> cons($sql);
		}	
		/*
		 	Función para la eliminacion de los datos en la tabla
		 */
		function eliminar_titulo($idtitulo)
		{
			$sql = "DELETE FROM `tbtitulo` WHERE `idtitulo` = '$idtitulo'";
			$this -> cons($sql);
		}	
		/*
		 	Función para la consulta general en la tabla
		 */
		function consultar_titulo()
		{
			$sql = "SELECT * FROM tbtitulo";
			return $this -> SeleccionDatos($sql);
		}
		/*
		 	Función para la consulta especifica en la tabla
		 */
		function consultar_titulo_id($idtitulo)
		{
			$sql = "SELECT * FROM tbtitulo WHERE idtitulo = '$idtitulo' ";
			return $this -> SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccion general de los datos de la tabla dt
		 */
		function sel_dt(){
			$sql = "SELECT iddt, nombredt, apellidodt, nacionalidaddt, fechanacdt FROM tbentrenador;";
			return $this->SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccion especifica de los datos del dt
		 */
		function sel_dt1($dt){
			$sql = "SELECT iddt, nombredt, apellidodt, nacionalidaddt, fechanacdt FROM tbentrenador WHERE iddt='".$dt."';";
			return $this->SeleccionDatos($sql);
		}
	}