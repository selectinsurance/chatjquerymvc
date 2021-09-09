<?php 
require_once 'conexion.php';

    class crud  
    {
        public static function Create($query){
            return conexion::EstablecerConexion()->query($query);
        }

        public static function Read($query){
            return conexion::EstablecerConexion()->query($query);
        }

        public static function Update($query){
            conexion::EstablecerConexion()->query($query);
        }

        public static function Delete($query){
            conexion::EstablecerConexion()->query($query);
        }
    }
