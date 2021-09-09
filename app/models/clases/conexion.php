<?php 
    class conexion  
    {
        public static function EstablecerConexion(){
            $conexion = mysqli_connect('localhost','root','','chatjquery');

            if ($conexion->connect_errno) {
                echo 'lo sentimos, no se pudo conectar';
            }else {
                return $conexion;
            }
        }
    }
    

?>