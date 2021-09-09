<?php 
class query  
{
    public static function InsertChat($telefono, $user, $mensaje){
        return "INSERT INTO chat(telefono, user, mensaje) VALUES('$telefono','$user','$mensaje')";
    }

    public static function SelectMensaje(){
        return "SELECT telefono, user, mensaje FROM chat ORDER BY idchat DESC";
    }
}



?>