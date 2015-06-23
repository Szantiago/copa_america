<?php
	/* 
		@author: Diego Armando Diaz y Andrea Liliana Socha
		@version: V1
	*/
	include ("controlador/conexion.php");
	include("functions.php");
	class Mciudad extends Funciones_generales {
	
		function Mciudad()
		{
		
		}
		/*
		 *función para el igreso de los datos de la tabla tbciudad
		 */
		function igresar_datos_ciudad($nombreciudad, $numerohab, $estadioprinc, $idciudad)
		{
			$sql = "INSERT INTO tbciudad (nombreciudad, numerohab, estadioprinc, idciudad)
						VALUES ('".$nombreciudad."','".$numerohab."','".$estadioprinc."','".$idciudad."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbciudad
		 */
		function  actu_ciudad ($nombreciudad, $numerohab, $estadioprinc, $idciudad)
		{
			$sql = "UPDATE tbciudad SET  nombreciudad = '".$nombreciudad."', numerohab = '".$numerohab."', estadioprinc = '".$estadioprinc."' WHERE idciudad = '".$idciudad."';";
			$this -> cons($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbciudad	
         */
		function ver_datos_ciudad($idciudad)
		{
			$sql = "SELECT nombreciudad, numerohab, estadioprinc FROM tbciudad WHERE idciudad = $idciudad";
			 return $this->SeleccionDatos($sql);
		}
	}
		
				


