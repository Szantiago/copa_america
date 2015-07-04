<?php
	
	//Controller User
	include("modelo/mtbapuesta.php");
        
        $marcadorlocal 	= isset($_POST['marcadorlocal']) ? $_POST['marcadorlocal'] : NULL;
        $marcadorvisit	= isset($_POST['marcadorvisit']) ? $_POST['marcadorvisit'] : NULL;
        $idpartido 	= isset($_POST['idpartido']) ? $_POST['idpartido'] : NULL;
        $idusuario		= isset($_POST['idusuario']) ? $_POST['idusuario'] : NULL;
        
        $usuario1 = new UsuarioController($marcadorlocal, $marcadorvisit,$idpartido, $idusuario);
        
        if ($insert && !$actu) 
        {
            $usuario1->InsertarUsuario();
        }
        
        if ($idedit) 
        {
            $usuactu = $usuario1->getUsuario()->ConsultaUsuario($idedit);
        }
        
        if ($actu && !$insert) 
        {
            $usuario1->getUsuario()->ActualizarUsuario($idusuario);
        }


	class UsuarioController {
		
            private $usuario;
                
            public function __construct($marcadorlocal, $marcadorvisit,$idpartido, $idusuario)
            {
                $this->usuario = new usuario($marcadorlocal, $marcadorvisit,$idpartido, $idusuario);         
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

	
        
        

	