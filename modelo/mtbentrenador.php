<?php	
	/* 
		@author: Diego Armando Diaz y Andrea Liliana Socha
		@version: V1
	*/
	include ("controlador/conexion.php");
	include("functions.php");
	class Mentrenador extends Funciones {
		
		function Mentrenador()
		{
		
		}
		/*
		 *función para el ingreso de los datos de la tabla tbentrenador
		 */
		function insertar_entrenador($nombredt, $apellidodt, $nacionalidaddt, $fechanacdt)
		{
			$sql = "INSERT INTO tbentrenador (nombredt, apellidodt, nacionalidaddt, fechanacdt)
						VALUES ('".$nombredt."','".$apellidodt."','".$nacionalidaddt."','".$fechanacdt."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbentrenador
		 */
		function  actualizar_entrenador ($iddt, $nombredt, $apellidodt, $nacionalidaddt, $fechanacdt)
		{
			$sql = "UPDATE tbentrenador SET  nombredt = '".$nombredt."', apellidodt = '".$apellidodt."', nacionalidaddt = '".$nacionalidaddt."' ,fechanacdt = '".$fechanacdt."' WHERE iddt = '".$iddt."';";
			$this -> cons($sql);
		}
		
		function eliminar_entrenador($iddt)
		{
			$sql = "DELETE FROM `tbentrenador` WHERE iddt = '".$iddt."';";
			$this -> cons($sql);
		}	
		
		function consultar_entrenador()
		{
			$sql = "SELECT * FROM tbentrenador";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbentrenador	
         */
		function consultar_entrenador_id($iddt)
		{
			$sql = "SELECT nombredt, apellidodt, nacionalidaddt, fechanacdt FROM tbentrenador WHERE iddt = '".$iddt."';";
			 return $this->SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccion general de los datos de la tabla nacionalidad
		 */
		function sel_nacionalidad(){
			$sql = "SELECT idnacionalidad, pais, nombrenacio FROM tbnacionalidad;";
			return $this->SeleccionDatos($sql);
		}
		/*
		 	Función para la seleccion especifica de los datos de la tabla nacionalidad
		 */
		function sel_nacionalidad1($nacio){
			$sql = "SELECT idnacionalidad, pais, nombrenacio FROM tbnacionalidad WHERE idnacionalidad='".$nacio."';";
			return $this->SeleccionDatos($sql);
		}
	}

	
	
	
	