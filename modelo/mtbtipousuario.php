<?php

	include('controlador/conexion.php');
	include('functions.php');

	class Mtipousuario extends Funciones
	{
		public function __construct()
		{

		}

		public function insertar_tipousuario($tipo)
		{
			$sql = "INSERT INTO `tbtipousuario`(`tipo`) VALUES (`$tipo`)";
			$this -> cons($sql);
		}

		public function actualizar_tipousuario($idtipousuario, $tipo)
		{
			$sql = "UPDATE `tbtipousuario` SET `tipo`='$tipo' WHERE `idtipousuario` = '$idtipousuario'";
			$this -> cons($sql);
		}	

		public function eliminar_tipousuario($idtipousuario)
		{
			$sql = "DELETE FROM `tbtipousuario` WHERE `idtipousuario` = '$idtipousuario'";
			$this -> cons($sql);
		}	

		public function consultar_tipousuario()
		{
			$sql = "SELECT * FROM tbtipousuario";
			return $this -> SeleccionDatos($sql);
		}

		public function consultar_tipousuario_id($idtipousuario)
		{
			$sql = "SELECT * FROM tbtipousuario WHERE idtipousuario = '$idtipousuario' ";
			return $this -> SeleccionDatos($sql);
		
		}		
	}