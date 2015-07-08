<?php
	/* 
		@author: Diego Monroy
		@version: V1
	*/
	include('controlador/conexion.php');
	include('functions.php');

	class Mequipodir extends Funciones
	{
		function __construct(){}
		
		/*
		 	Función para la insercion en la tabla
		 */
		function insertar_equipodir($equipodir, $iddt, $fechaini, $fechafin)
		{
			$sql = "INSERT INTO `tbequipodirigido`(`equipodir`, `iddt`,`fechaini`, `fechafin`) VALUES ('$equipodir','$iddt','$fechaini','$fechafin')";
			$this -> cons($sql);
		}
		/*
		 	Función para la actualización en la tabla
		 */
		function actualizar_equipodir($idequipodir, $equipodir, $iddt, $fechaini, $fechafin)
		{
			$sql = "UPDATE `tbequipodirigido` SET `equipodir`='$equipodir',`iddt`='$iddt',`fechaini`='$fechaini',`fechafin`='$fechafin' WHERE `idequipodir` = '$idequipodir'";
			$this -> cons($sql);
		}	
		/*
		 	Función para la eliminacion de los datos en la tabla
		 */
		function eliminar_equipodir($idequipodir)
		{
			$sql = "DELETE FROM `tbequipodirigido` WHERE `idequipodir` = '$idequipodir'";
			$this -> cons($sql);
		}	
		/*
		 	Función para la consulta general en la tabla
		 */
		function consultar_equipodir()
		{
			$sql = "SELECT * FROM tbequipodirigido";
			return $this -> SeleccionDatos($sql);
		}
		/*
		 	Función para la consulta especifica en la tabla
		 */
		function consultar_equipodir_id($idequipodir)
		{
			$sql = "SELECT * FROM tbequipodirigido WHERE idequipodir = '$idequipodir' ";
			return $this -> SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccion general de los datos del equipo
		 */
		function sel_equipo(){
			$sql = "SELECT idequipo, nomequi, fechafund, paginaweb, ciudadcap, grupo FROM tbequipo;";
			return $this->SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccion especifica de los datos del equipo
		 */
		function sel_equipo1($equi){
			$sql = "SELECT idequipo, nomequi, fechafund, paginaweb, ciudadcap, grupo FROM tbequipo WHERE idequipo='".$equi."';";
			return $this->SeleccionDatos($sql);
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