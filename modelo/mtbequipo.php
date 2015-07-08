<?php

	include('controlador/conexion.php');
	include('functions.php');

	class Mequipo extends Funciones
	{
		public function __construct()
		{

		}

		public function insertar_equipo($nomequi, $fechafund, $paginaweb, $ciudadcap, $grupo)
		{
			$sql = "INSERT INTO `tbequipo`(`nomequi`, `fechafund`, `paginaweb`, `ciudadcap`, `grupo`) VALUES ('$nomequi', '$fechafund', '$paginaweb', '$ciudadcap', '$grupo')";
			$this -> cons($sql);
		}

		public function actualizar_equipo($idequipo, $nomequi, $fechafund, $paginaweb, $ciudadcap, $grupo)
		{
			$sql = "UPDATE `tbequipo` SET `nomequi`='$nomequi',`fechafund`='$fechafund',`paginaweb`='$paginaweb',`ciudadcap`='$ciudadcap',`grupo`='$grupo' WHERE `idequipo` = '$idequipo'";
			$this -> cons($sql);
		}	

		public function eliminar_equipo($idequipo)
		{
			$sql = "DELETE FROM `tbequipo` WHERE `idequipo` = '$idequipo'";
			$this -> cons($sql);
		}	

		public function consultar_equipo()
		{
			$sql = "SELECT * FROM tbequipo";
			return $this -> SeleccionDatos($sql);
		}

		public function consultar_equipo_id($idequipo)
		{
			$sql = "SELECT * FROM tbequipo WHERE idequipo = '$idequipo' ";
			return $this -> SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccionar los datos del grupo
		 */
		public function sel_grupo(){
			$sql = "SELECT * FROM tbgrupo;";
			return $this->SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccionar los datos especificos de un grupo
		 */
		public function sel_grupo1($grup){
			$sql = "SELECT idgrupo, nombregrup FROM tbgrupo WHERE idgrupo='".$grup."';";
			return $this->SeleccionDatos($sql);		
		}		
	}
