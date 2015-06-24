<?php	
	/* 
		@author: Diego Armando Diaz y Andrea Liliana Socha
		@version: V1
	*/
	include ("controlador/conexion.php");
	include("functions.php");
	class Mentrenador extends Funciones_generales {
		
		function Mentrenador()
		{
		
		}
		/*
		 *función para el ingreso de los datos de la tabla tbentrenador
		 */
		function igresar_datos_entrenador($nombredt, $apellidodt, $nacionalidaddt, $fechanacdt, $iddt)
		{
			$sql = "INSERT INTO tbentrenador (nombredt, apellidodt, nacionalidaddt, fechanacdt, iddt)
						VALUES ('".$nombredt."','".$apellidodt."','".$nacionalidaddt."','".$fechanacdt."','".$iddt."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbentrenador
		 */
		function  actu_entrenador ($nombredt, $apellidodt, $nacionalidaddt, $fechanacdt, $iddt)
		{
			$sql = "UPDATE tbentrenador SET  nombredt = '".$nombredt."', apellidodt = '".$apellidodt."', nacionalidaddt = '".$nacionalidaddt."' fechanacdt = '".$fechanacdt."' WHERE iddt = '".$iddt."';";
			$this -> cons($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbentrenador	
         */
		function ver_datos_entrenador($iddt)
		{
			$sql = "SELECT nombredt, apellidodt, nacionalidaddt, fechanacdt FROM tbentrenador WHERE iddt = $iddt";
			 return $this->SeleccionDatos($sql);
		}
	}

	
	
	
	