<?php
	include("controlador/conexion.php");
	include("functions.php");

	class usuario extends Funciones {

		private $nombre = "";
		private $apellido = "";
		private $email = "";
		private $username = "";
		private $numdoc = "";
		private $tipouser = "";
        private $password = "";

		public function __construct($numdoc, $nombre, $apellido, $email, $username, $password, $tipouser)
		{
                    $this->numdoc = $numdoc;
                    $this->nombre = $nombre;
					$this->apellido = $apellido;
                    $this->email = $email;
                    $this->username = $username;
                    $this->tipouser = $tipouser;
                    $this->password = hash('sha256', $password);
		}

		public function getNombre()
		{
            return $this->nombre_completo;
		}
                
        public function getPassword()
        {
            return $this->password;
        }

        public function InsertarUsuario()
        {
            $sql = "INSERT INTO tbusuario(numdoc, nombre, apellido, email, password, username, tipouser) VALUES ('$this->numdoc','$this->nombre','$this->apellido','$this->email','$this->password' , '$this->username', '$this->tipouser')";
            $this -> cons($sql);
        }
        public function ConsultarUsuarios()
        {
            $sql = "SELECT * FROM tbusuario";
            return $this->SeleccionDatos($sql);
        }
        
        public function ActualizarUsuario($idusuario)
        {
            $sql = "UPDATE `tbusuario` SET numdoc = '$this->numdoc', nombre = '$this->nombre', apellido = '$this->apellido', email = '$this->email' , password = '$this->password', username = '$this->username', tipouser = '$this->tipouser' WHERE idusuario = '$idusuario'";
            $this->cons($sql);
        }
        
        public function ConsultaUsuario($idusuario) 
        {
            $sql = "SELECT * FROM `tbusuario` WHERE `idusuario` = '$idusuario'";
            return $this->SeleccionDatos($sql);
        }

        public function ConsultaTipoUsuario() 
        {
            $sql = "SELECT * FROM tbtipousuario";
            return $this->SeleccionDatos($sql);
        }        
	}