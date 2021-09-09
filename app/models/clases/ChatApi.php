<?php
class ChatApi
{
    private $Url;
    private $Token;

    public function __construct()
    {
        $this->Url = 'https://api.chat-api.com/instance333383/';
        $this->Token = 'ynl8zv2yqabydbnq';
    }

    public function EnviarMensaje($telefono, $mensaje)
    {

        //datos ingresados en el parametro, telefono del whatsapp y el cuerpo del mensaje
        $datos = [
            'phone' => $telefono,
            'body' => $mensaje
        ];

        $DatosJson = json_encode($datos); //Convirtiendo en json
        $Url = $this->Url . 'sendMessage?token=' . $this->Token; //Uniendo url del accesweb token



        //Tipo de peticion enviando el json al servidor del api
        $Peticion = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => 'Content-type: application/json',
                'content' => $DatosJson
            ]
        ]);


        //Almacenando respuesta de la url y del metodo utilizado en la peticion http
        $resultado = file_get_contents($Url, false, $Peticion);

        if ($resultado) return json_decode($resultado);
        return false;
    }
}
