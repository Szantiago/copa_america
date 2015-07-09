<?php	
	/* 
		@author: Diego Armando Diaz y Andrea Liliana Socha
		@version: V1
	*/
	include ("controlador/conexion.php");
	include("functions.php");
	class Mgrupo extends Funciones{
		
		function Mgrupo()
		{
		
		}
		/*
		 *función para el ingreso de los datos de la tabla tbgrupo
		 */
		function insertar_grupo($nombregrup)
		{
			$sql = "INSERT INTO tbgrupo (nombregrup)
						VALUES ('".$nombregrup."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbgrupo
		 */
		function  actualizar_grupo($idgrupo, $nombregrup)
		{
			$sql = "UPDATE tbgrupo SET  nombregrup = '".$nombregrup."' WHERE idgrupo = '".$idgrupo."';";
			$this -> cons($sql);
		}
		/*
		 	Función para la eliminacion de los datos en la tabla
		 */
		function eliminar_grupo($idgrupo)
		{
			$sql = "DELETE FROM `tbgrupo` WHERE `idgrupo` = '$idgrupo'";
			$this -> cons($sql);
		}
/*
		 	Función para la consulta general en la tabla
		 */
		function consultar_grupo()
		{
			$sql = "SELECT * FROM tbgrupo";
			return $this -> SeleccionDatos($sql);
		}
		/*
		 	Función para la consulta especifica en la tabla
		 */
		function consultar_grupo_id($idgrupo)
		{
			$sql = "SELECT * FROM tbgrupo WHERE idgrupo = '$idgrupo' ";
			return $this -> SeleccionDatos($sql);
		}		
	}

	
	
	
	