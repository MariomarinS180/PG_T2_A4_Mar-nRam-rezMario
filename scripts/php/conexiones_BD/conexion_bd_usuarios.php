<?php
    class ConexionBDUsuarios{
        private $conexion;
        private $host = 'sql104.byethost4.com';
        private $usuario = 'b4_30347328'; //MySQL
        private $contraseña = '03082000s'; //MySQL
        private $bd = 'b4_30347328_Usuarios';

        public function __construct(){
            //Java this.conexion =
            $this->conexion = mysqli_connect($this->host, $this->usuario, $this->contraseña, $this->bd);
            if(!$this->conexion)
                die("Error en conexion con MySQL" . mysqli_connect_error() . mysqli_connect_errno() );
            else
                echo "<h1>Exito!</h1>";
        }

        public function getConexion(){
            return $this->conexion;
        }
    }
?>