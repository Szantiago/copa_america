<?php
	/* 
		@author: Diego Monroy
		@version: V1
	*/
	include('controlador/conexion.php');
	include('functions.php');

	class Mpartidos extends Funciones
	{
		function __construct(){}
		
		/*
		 	Función para la insercion de los datos de los partidos
		 */
		function insertar_partidos($equipolocal, $equipovisit, $horario, $idciudadestadio, $marcadorlocal, $marcadorvisit)
		{
			$sql = "INSERT INTO `tbpartidos`(`equipolocal`, `equipovisit`, `horario`, `idciudadestadio`, `marcadorlocal`, `marcadorvisit`) VALUES ('$equipolocal','$equipovisit','$horario','$idciudadestadio','$marcadorlocal','$marcadorvisit')";
			$this -> cons($sql);
		}
		/*
		 	Función para la actualización de los datos de los partidos
		 */
		function actualizar_partidos($idpartido, $equipolocal, $equipovisit, $horario, $idciudadestadio, $marcadorlocal, $marcadorvisit)
		{
			$sql = "UPDATE `tbpartidos` SET `equipolocal`='$equipolocal',`equipovisit`='$equipovisit',`horario`='$horario',`idciudadestadio`='$idciudadestadio',`marcadorlocal`='$marcadorlocal',`marcadorvisit`='$marcadorvisit' WHERE `idpartido` = '$idpartido'";
			$this -> cons($sql);
		}	
		/*
		 	Función para la eliminacion de los datos de los partidos
		 */
		function eliminar_partidos($idpartido)
		{
			$sql = "DELETE FROM `tbpartidos` WHERE `idpartido` = '$idpartido'";
			$this -> cons($sql);
		}	
		/*
		 	Función para la consulta de los datos de todos los partidos
		 */
		function consultar_partidos()
		{
			$sql = "SELECT * FROM tbpartidos";
			return $this -> SeleccionDatos($sql);
		}
		/*
		 	Función para la consulta de los datos de el partido
		 */
		function consultar_partidos_id($idpartido)
		{
			$sql = "SELECT * FROM tbpartidos WHERE idpartido = '$idpartido' ";
			return $this -> SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccionar los datos de los equipos
		 */
		function seleccionar_equipo(){
			$sql = "SELECT * FROM tbequipo;";
			return $this->SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccionar los datos del equipo
		 */
		function seleccionar_equipo_id($val_equipo){
			$sql = "SELECT idequipo, nomequi, fechafund, paginaweb, ciudadcap, grupo FROM tbequipo WHERE idequipo='".$val_equipo."';";
			return $this->SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccionar los datos de las ciudades
		 */
		function seleccionar_ciudad(){
			$sql = "SELECT * FROM tbciudad;";
			return $this->SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccionar los datos de la ciudad
		 */
		function seleccionar_ciudad_id($val_ciudad){
			$sql = "SELECT idciudad, nombreciudad, numerohab, estadioprinc FROM tbciudad WHERE idciudad='".$val_ciudad."';";
			return $this->SeleccionDatos($sql);
		}
	}