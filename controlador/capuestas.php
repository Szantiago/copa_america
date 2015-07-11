<?php
    
    //Controller User
    include("modelo/mtbapuesta.php");
        
    $marcadorlocal  = isset($_POST['marcadorlocal']) ? $_POST['marcadorlocal'] : NULL;
    $marcadorvisit  = isset($_POST['marcadorvisit']) ? $_POST['marcadorvisit'] : NULL;
    $idpartido      = isset($_POST['idpartido']) ? $_POST['idpartido'] : NULL;
    $idusuario      = isset($_SESSION['idUsuario']) ? $_SESSION['idUsuario'] : NULL;
    $idedit         = isset($_GET['idedit']) ? $_GET['idedit'] : NULL;

    
    $apuesta = new ApuestaController($marcadorlocal, $marcadorvisit,$idpartido, $idusuario);

    if ($idpartido) 
    {
        $apuesta->InsertarApuesta();
    }

    if ($idedit) 
    {
        $consapuesta = $apuesta->ConsultarApuestaId($idapuesta);
    }
        
    class ApuestaController {
        
        private $apuesta;
            
        public function __construct($marcadorlocal, $marcadorvisit,$idpartido, $idusuario)
        {
            $this->apuesta = new Mapuesta($marcadorlocal, $marcadorvisit,$idpartido, $idusuario);         
        }
        
        public function InsertarApuesta()
        {
            $this->getApuesta()->insertar_apuesta();
        }

        public function ConsultarApuestaId($idapuesta)
        {
            $this->getApuesta()->consultar_apuesta_id($idapuesta);
        }
        
        public function getApuesta()
        {
            return $this->apuesta;
        }

        public function getPartidos()
        {
            return $this->getApuesta()->seleccionar_partido();
        }

        public function getResultApu()
        {
            return $this->getApuesta()->consultar_resultado_apuesta();
        }

        public function getResultApuTod()
        {
            return $this->getApuesta()->consultar_resultados_apuesta();
        }

        public function getResApu($resloc, $apuloc, $resvis, $apuvis)
        {
                if ($resloc == $apuloc && $resvis == $apuvis) 
                {
                    echo "Ha acertado";
                }
                else
                {
                    echo "No ha acertado";
                }

        }

    }

    
        
        

	