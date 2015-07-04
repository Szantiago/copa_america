<?php
	/* 
		@author: Diego Armando Diaz y Andrea Liliana Socha
		@version: V1
	*/
	include ("controlador/conexion.php");
	include("functions.php");
	class Mciudad extends Funciones{
	
		function Mciudad()
		{
		
		}
		/*
		 *función para el ingreso de los datos de la tabla tbciudad
		 */
		function insertar_ciudades($nombreciudad, $numerohab, $estadioprinc)
		{
			$sql = "INSERT INTO tbciudad (nombreciudad, numerohab, estadioprinc)
						VALUES ('".$nombreciudad."','".$numerohab."','".$estadioprinc."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbciudad
		 */
		function  actualizar_ciudades ($idciudad, $nombreciudad, $numerohab, $estadioprinc)
		{
			$sql = "UPDATE tbciudad SET  nombreciudad = '".$nombreciudad."', numerohab = '".$numerohab."', estadioprinc = '".$estadioprinc."' WHERE idciudad = '".$idciudad."';";
			$this -> cons($sql);
		}
		
		function eliminar_ciudades($idciudad)
		{
			$sql = "DELETE FROM `tbciudad` WHERE `idciudad` = '$idciudad'";
			$this -> cons($sql);
		}	
		
		function consultar_ciudades()
		{
			$sql = "SELECT * FROM tbciudad";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbciudad	
         */
		function consultar_ciudades_id($idciudad)
		{
			$sql = "SELECT nombreciudad, numerohab, estadioprinc FROM tbciudad WHERE idciudad = $idciudad";
			 return $this->SeleccionDatos($sql);
		}
	}
		
				


