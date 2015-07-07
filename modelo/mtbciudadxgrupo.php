<?php
	/* 
		@author: Diego Monroy
		@version: V1
	*/
	include('controlador/conexion.php');
	include('functions.php');

	class Mciuxgru extends Funciones
	{
		function __construct(){}
		
		/*
		 	Función para la insercion en la tabla
		 */
		function insertar_ciugru($idciudad, $idgrupo)
		{
			$sql = "INSERT INTO `tbciudadxgrupo`(`idciudad`, `idgrupo`) VALUES ('$idciudad','$idgrupo')";
			$this -> cons($sql);
		}
		/*
		 	Función para la actualización en la tabla
		 */
		function actualizar_ciugru($idciuxgru, $idciudad, $idgrupo)
		{
			$sql = "UPDATE `tbciudadxgrupo` SET `idciudad`='$idciudad',`idgrupo`='$idgrupo' WHERE `idciuxgru` = '$idciuxgru'";
			$this -> cons($sql);
		}	
		/*
		 	Función para la eliminacion de los datos en la tabla
		 */
		function eliminar_ciugru($idciuxgru)
		{
			$sql = "DELETE FROM `tbciudadxgrupo` WHERE `idciuxgru` = '$idciuxgru'";
			$this -> cons($sql);
		}	
		/*
		 	Función para la consulta general en la tabla
		 */
		function consultar_ciugru()
		{
			$sql = "SELECT * FROM tbciudadxgrupo";
			return $this -> SeleccionDatos($sql);
		}
		/*
		 	Función para la consulta especifica en la tabla
		 */
		function consultar_ciugru_id($idciuxgru)
		{
			$sql = "SELECT * FROM tbciudadxgrupo WHERE idciuxgru = '$idciuxgru' ";
			return $this -> SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccion general de los datos de la tabla ciudad
		 */
		function sel_ciudad(){
			$sql = "SELECT idciudad, nombreciudad, numerohab, estadioprinc FROM tbciudad;";
			return $this->SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccion especifica de los datos de la ciudad
		 */
		function sel_ciudad1($ciu){
			$sql = "SELECT idciudad, nombreciudad, numerohab, estadioprinc FROM tbciudad WHERE idciudad='".$ciu."';";
			return $this->SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccion general de los datos de la tabla grupo
		 */
		function sel_grupo(){
			$sql = "SELECT idgrupo, nombregrup FROM tbgrupo;";
			return $this->SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccion especifica de los datos del grupo
		 */
		function sel_grupo1($gru){
			$sql = "SELECT idgrupo, nombregrup FROM tbgrupo WHERE idgrupo='".$gru."';";
			return $this->SeleccionDatos($sql);
		}
	}