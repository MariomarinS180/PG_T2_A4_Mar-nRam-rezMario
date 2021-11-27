<?php
    class ConexionBDEscuela{
        private $conexion;
        private $host = 'localhost';
        private $usuario = 'root'; //MySQL
        private $contraseña = '1234'; //MySQL
        private $bd = 'bd_escuela';

        public function __construct(){
            //Java this.conexion =
            $this->conexion = mysqli_connect($this->host, $this->usuario, $this->contraseña, $this->bd);
            if(!$this->conexion)
                die("Error en conexion con MySQL" . mysqli_connect_error() . mysqli_connect_errno() );
            else
                echo "Modificación Correcta ";
        }
        public function getConexion(){
            return $this->conexion;
        }
    }
?>