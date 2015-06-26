<?php
	class Funciones {
        
		function functions() { }
		
		/*
         * Función de utilidad para las sentencias SQL de inserción (INSERT), actualización (UPDATE) y eliminación (DELETE) 
         */

        function cons ($sentencia_sql) 
        {
                $conexionBD = new conexion();
                $conexionBD -> conectarBD();
                $conexionBD -> ejeCon($sentencia_sql, 1);
        }
        
        /*
         * Función de utilidad para la sentencia de consulta SQL (SELECT)
         */
        
        function SeleccionDatos($consulta)
        {
                $conexionBD = new conexion();
                $conexionBD -> conectarBD();
                $datos = $conexionBD -> ejeCon($consulta, 0);
                return $datos;
        }
		   
}
