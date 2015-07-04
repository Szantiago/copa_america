<?php
	/* 
		@author: Diego Monroy
		@version: V1
	*/
	include('controlador/conexion.php');
	include('functions.php');

	class Mnacionalidad extends Funciones
	{
		function __construct(){}
		
		/*
		 	Función para la insercion de los datos de la nacionalidad
		 */
		function insertar_nacionalidad($pais, $nombrenacio)
		{
			$sql = "INSERT INTO `tbnacionalidad`(`pais`, `nombrenacio`) VALUES ('$pais','$nombrenacio')";
			$this -> cons($sql);
		}
		/*
		 	Función para la actualización de los datos de la nacionalidad
		 */
		function actualizar_nacionalidad($idnacionalidad, $pais, $nombrenacio)
		{
			$sql = "UPDATE `tbnacionalidad` SET `pais`='$pais',`nombrenacio`='$nombrenacio' WHERE `idnacionalidad` = '$idnacionalidad'";
			$this -> cons($sql);
		}	
		/*
		 	Función para la eliminacion de los datos de la nacionalidad
		 */
		function eliminar_nacionalidad($idnacionalidad)
		{
			$sql = "DELETE FROM `tbnacionalidad` WHERE `idnacionalidad` = '$idnacionalidad'";
			$this -> cons($sql);
		}	
		/*
		 	Función para la consulta de los datos de las nacionalidades
		 */
		function consultar_nacionalidad()
		{
			$sql = "SELECT * FROM tbnacionalidad";
			return $this -> SeleccionDatos($sql);
		}
		/*
		 	Función para la consulta de los datos de la nacionalidad
		 */
		function consultar_nacionalidad_id($idnacionalidad)
		{
			$sql = "SELECT * FROM tbnacionalidad WHERE idnacionalidad = '$idnacionalidad' ";
			return $this -> SeleccionDatos($sql);
		}
	}