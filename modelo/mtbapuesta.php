<?php
	/* 
		@author: Diego Monroy
		@version: V1
	*/
	include('controlador/conexion.php');
	include('functions.php');

	class Mapuesta extends Funciones
	{

		private $marcadorlocal 	= "";
		private $marcadorvisit 	= "";
		private $idpartido		= "";
		private $idusuario		= "";

		public function __construct($marcadorlocal, $marcadorvisit, $idpartido, $idusuario)
		{
			$this->marcadorlocal = $marcadorlocal;
			$this->marcadorvisit = $marcadorvisit;
			$this->idpartido = $idpartido;
			$this->idusuario = $idusuario; 	
		}	
		
		/*
		 	Función para la insercion de los datos de la apuesta
		 */

		function insertar_apuesta()
		{
			$sql = "INSERT INTO tbapuesta(marcadorlocal, marcadorvisit, idpartido, idusuario) VALUES ('$this->marcadorlocal','$this->marcadorvisit','$this->idpartido','$this->idusuario')";
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
		function seleccionar_partido()
		{
			$sql = "SELECT tbp.idpartido, tbe.nomequi as equilo, tbe1.nomequi as equivi, tbp.horario FROM tbpartidos as tbp 
						INNER JOIN tbequipo as tbe ON tbe.idequipo = tbp.equipolocal 
						INNER JOIN tbequipo as tbe1 ON tbe1.idequipo = tbp.equipovisit 
					WHERE NOW() < tbp.horario;";
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