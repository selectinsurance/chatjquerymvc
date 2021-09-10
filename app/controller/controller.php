<?php
require_once 'app/models/app_autoload.php';
class controller
{
    public static function inicio()
    {
        require_once 'app/views/assets/header.phtml';
        $api = new ChatApi();
        $Mensajes = $api->MostrarMensaje();
        foreach ($Mensajes['messages'] as $mensaje) {
            crud::Create(query::InsertChat($mensaje['chatId'], $mensaje['author'], $mensaje['body']));
        }
        require_once 'app/views/modules/inicio.php';
        require_once 'app/views/assets/footer.phtml';
    }

    public static function Mensaje()
    {
        //Consumiendo api de whatsapp para enviar mensajes
        $api = new ChatApi();
        $RespuestaApi = $api->EnviarMensaje($_POST['telefono'], $_POST['mensaje']);

        if ($RespuestaApi !== false) {
            if ($RespuestaApi->send == 1) {
                echo "Mensaje Enviado";
            } else {
                $RespuestaApi->message;
            }
        }
        //


        // Consumiendo api para insertar en base de datos los mensajes entrantes

        //


        // insertando en base de datos
        $resultado = crud::Create(query::InsertChat($_POST['telefono'], $_POST['user'], $_POST['mensaje']));

        if ($resultado) {
            echo 'Registro Satisfactorio';
        }
        //
    }

    public static function Conversacion()
    {
        $Mensajes = crud::Read(query::SelectMensaje());
        require_once 'app/views/modules/function/chat.phtml';
    }
}
