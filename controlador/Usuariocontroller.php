<?php
	
	//Controller User
	include("modelo/musuario.php");
        
        $idusuario 	= isset($_POST['idusuario']) ? $_POST['idusuario'] : NULL;
        $numdoc 	= isset($_POST['numdoc']) ? $_POST['numdoc'] : NULL;
        $nombre 	= isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
		$apellido 	= isset($_POST['apellido']) ? $_POST['apellido'] : NULL;
        $email 		= isset($_POST['email']) ? $_POST['email'] : NULL;
        $tipouser 	= isset($_POST['tipouser']) ? $_POST['tipouser'] : NULL;
    	$username	= isset($_POST['username']) ? $_POST['username'] : NULL;
    	$password	= isset($_POST['pass']) ? $_POST['pass'] : NULL;
        $insert         = isset($_POST['insert']) ? $_POST['insert'] : NULL;
        $actu           = isset($_POST['actu']) ? $_POST['actu'] : NULL;
        $idedit         = isset($_GET['idedit']) ? $_GET['idedit'] : NULL;
        
        
        
        $usuario1 = new UsuarioController($numdoc, $nombre, $apellido, $email, $username, $password, $tipouser);
        
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
                
            public function __construct($numdoc, $nombre, $apellido, $email, $username, $password, $tipouser)
            {
                $this->usuario = new usuario($numdoc, $nombre, $apellido, $email, $username, $password, $tipouser);         
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

	
        
        

	