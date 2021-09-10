$(document).ready(function () {

    EnviarMensaje();//Enviar mensajes del formulario
    $.ajaxSetup({ "cache": false });//Manejo de cache
    setInterval("MostrarMensajes()", 500);//Refresco cada medio segundo

});



//Enviar mensajes
var EnviarMensaje = function () {
    $('#btnEnviar').click(function (e) {
        e.preventDefault();

        var formMensaje = $('#frmEnviar').serialize();
        $.ajax({
            type: "POST",
            url: "Mensaje",
            data: formMensaje,
            success: function (respuesta) {
                console.log(respuesta);
            }
        });
        $('#mensaje').val('');
    });
}



//Mostrar mensajes
var MostrarMensajes = function () {
    $.ajax({
        type: "POST",
        url: "Conversacion",
        success: function (info) {
            $('#Conversacion').html(info);
        }
    });
}

