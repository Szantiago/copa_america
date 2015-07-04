<?php
	include("controlador/conexion.php");
	include("functions.php");

	class resultado extends Funciones {

		private $marcadorlocal = "";
		private $marcadorvisit = "";

		public function __construct($marcadorlocal, $marcadorvisit)
		{
                    $this->marcadorlocal = $marcadorlocal;
                    $this->marcadorvisit = $marcadorvisit;
		}
                
                public function ActualizarResultado($idpartido)
                {
                    $sql = "UPDATE `tbpartidos` SET marcadorlocal = '$this->marcadorlocal', marcadorvisit = '$this->marcadorvisit'WHERE idpartido = '$idpartido'";
                    $this->cons($sql);
                }
                
                public function ConsultaResultado($idpartido) 
                {
                    $sql = "SELECT marcadorlocal, marcadorvisit FROM `tbpartidos` WHERE `idpartido` = '$idpartido'";
                    return $this->SeleccionDatos($sql);
                }
	}