<?php
	
	//Controller User
	include("modelo/mtbapuesta.php");
        
    $marcadorlocal 	= isset($_POST['marcadorlocal']) ? $_POST['marcadorlocal'] : NULL;
    $marcadorvisit	= isset($_POST['marcadorvisit']) ? $_POST['marcadorvisit'] : NULL;
    $idpartido 	    = isset($_POST['idpartido']) ? $_POST['idpartido'] : NULL;
    $idusuario		= isset($_POST['idusuario']) ? $_POST['idusuario'] : NULL;
    $idedit         = isset($_GET['idedit']) ? $_GET['idedit'] : NULL;
    
    $apuesta = new ApuestaController($marcadorlocal, $marcadorvisit,$idpartido, $idusuario);

    if ($idedit) 
    {
        $usuactu = $usuario1->getUsuario()->ConsultaUsuario($idedit);
    }
        
	class ApuestaController {
		
        private $apuesta;
            
        public function __construct($marcadorlocal, $marcadorvisit,$idpartido, $idusuario)
        {
            $this->apuesta = new Mapuesta($marcadorlocal, $marcadorvisit,$idpartido, $idusuario);         
        }
        
        public function MostrarNombre()
        {
            echo $this->usuario->getNombre();
        }
        
        public function InsertarUsuario()
        {
            $this->usuario->InsertarUsuario();
        }
        
        public function getUsuario()
        {
            return $this->usuario;
        }
        
        public function Usuarios()
        {
            return $this->usuario->ConsultarUsuarios();
        }

	}

	
        
        

	