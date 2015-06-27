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
			$sql = "INSERT INTO `tbequipo`(`nomequi`, `fechafund`, `paginaweb`, `ciudadcap`, `grupo`) VALUES (`$nomequi`, `$fechafund`, `$paginaweb`, `$ciudadcap`, `$grupo`)";
			$this -> cons($sql);
		}

		public function actualizar_equipo($idequipo, $nomequi, $fechafund, $paginaweb, $ciudadcap, $grupo)
		{
			$sql = "UPDATE `tbequipo` SET `nomequipo`='$nomequipo',`fechafund`='$fechafund',`paginaweb`='$paginaweb',`ciudadcap`='$ciudadcap',`grupo`='$grupo' WHERE `idequipo` = '$idequipo'";
			$this -> cons($sql);
		}	

		public function eliminar_grupos($idequipo)
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
			
		public function seleccionar_ciudadcap(){
			$sql = "SELECT * FROM tbciudad;";
			return $this->SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccionar los datos de la ciudad
		 */
		public function seleccionar_ciudadcap_id($val_ciudad){
			$sql = "SELECT idciudad, nombreciudad, numerohab, estadioprinc FROM tbciudad WHERE idciudad='".$val_ciudad."';";
			return $this->SeleccionDatos($sql);	
			
		public function seleccionar_grupo(){
			$sql = "SELECT * FROM tbgrupo;";
			return $this->SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccionar los datos del grupo
		 */
		public function seleccionar_grupo_id($val_grupo){
			$sql = "SELECT idgrupo, nombregrup FROM tbgrupo WHERE idgrupo='".$val_grupo."';";
			return $this->SeleccionDatos($sql);		
		}		
	}
