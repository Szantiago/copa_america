<?php
	class conexion {
		var $link;
		var $resultado;
		
		function conexion() {} // Constructor para inicializar clase
		function conectarBD() {
			include("configuracion.php");
			$this -> link = mysql_connect ($serv_bd, $usu_bd, $pass_bd);
			if(!$this -> link) {
				die("<h4> No se logro conectar</h4>");
			}
			$bd2 = mysql_select_db($bd);
			if(!$bd2) {
				echo "No se puede conectar a la BD";
			}
			$acentos = mysql_query("SET NAMES 'utf8'");
		}
		function desconectarBD() {
			mysql_close($this -> link);
		}
		function ejeCon($con, $op) {
			$this -> resultado = mysql_query($con) or die("La consulta fallo: ". mysql_error());
			if($op == 0) {
				while ($linea = mysql_fetch_array($this -> resultado)) {
					$arrayResultado[] = $linea;
				}
			} else {
				$arrayResultado[] = 0;
			}
			$resarr = isset ($arrayResultado) ? $arrayResultado: NULL;
			if($resarr) {
				return $arrayResultado;
			}
		}
	}
?>