<?php
	/* 
		@author: Diego Monroy
		@version: V1
	*/
	include('controlador/conexion.php');
	include('functions.php');

	class Mapuesta extends Funciones
	{
		function __construct(){}
		
		/*
		 	Función para la insercion de los datos de la apuesta
		 */
		function insertar_apuesta($marcadorlocal, $marcadorvisit, $idpartido, $idusuario)
		{
			$sql = "INSERT INTO `tbapuesta`(`marcadorlocal`, `marcadorvisit`, `idpartido`, `idusuario`) VALUES ('$marcadorlocal','$marcadorvisit','$idpartido','$idusuario')";
			$this -> cons($sql);
		}
		/*
		 	Función para la actualización de los datos de la apuesta
		 */
		function actualizar_apuesta($idapuesta, $marcadorlocal, $marcadorvisit, $idpartido, $idusuario)
		{
			$sql = "UPDATE `tbapuesta` SET `marcadorlocal`='$marcadorlocal',`marcadorvisit`='$marcadorvisit',`idpartido`='$idpartido',`idusuario`='$idusuario' WHERE `idapuesta` = '$idapuesta'";
			$this -> cons($sql);
		}	
		/*
		 	Función para la eliminacion de los datos de la apuesta
		 */
		function eliminar_apuesta($idapuesta)
		{
			$sql = "DELETE FROM `tbapuesta` WHERE `idapuesta` = '$idapuesta'";
			$this -> cons($sql);
		}	
		/*
		 	Función para la consulta de los datos de las apuestas
		 */
		function consultar_apuesta()
		{
			$sql = "SELECT * FROM tbapuesta";
			return $this -> SeleccionDatos($sql);
		}
		/*
		 	Función para la consulta de los datos de la apuesta
		 */
		function consultar_apuesta_id($idapuesta)
		{
			$sql = "SELECT * FROM tbapuesta WHERE idapuesta = '$idapuesta' ";
			return $this -> SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccionar los datos de los equipos
		 */
		function seleccionar_partido(){
			$sql = "SELECT * FROM tbpartidos;";
			return $this->SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccionar los datos del equipo
		 */
		function seleccionar_partido_id($val_partido){
			$sql = "SELECT idpartido, equipolocal, equipovisit, horario, idciudadestadio, marcadorlocal, marcadorvisit FROM tbpartidos WHERE idpartido='".$val_partido."';";
			return $this->SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccionar los datos de la apuesta segun el usuario
		 */
		function consultar_apuesta_id2($idusuario) {
			$sql = "SELECT * FROM tbapuesta WHERE idusuario= '".$idusuario."';";
			return $this->SeleccionDatos($sql);
		}
	}