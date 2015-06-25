<?php	
	/* 
		@author: Diego Armando Diaz y Andrea Liliana Socha
		@version: V1
	*/
	include ("controlador/conexion.php");
	include("functions.php");
	class Mgrupo extends Funciones_generales {
		
		function Mgrupo()
		{
		
		}
		/*
		 *función para el ingreso de los datos de la tabla tbgrupo
		 */
		function igresar_datos_grupo($nombregrup, $idgrupo)
		{
			$sql = "INSERT INTO tbgrupo (nombregrup,idgrupo)
						VALUES ('".$nombregrup."','".$idgrupo."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbgrupo
		 */
		function  actu_grupo ($nombregrup, $idgrupo)
		{
			$sql = "UPDATE tbgrupo SET  nombregrup = '".$nombregrup."' WHERE idgrupo = '".$idgrupo."';";
			$this -> cons($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbgrupo	
         */
		function ver_datos_grupo($idgrupo)
		{
			$sql = "SELECT nombregrup  FROM tbgrupo WHERE idgrupo = $idgrupo";
			 return $this->SeleccionDatos($sql);
		}
	}

	
	
	
	