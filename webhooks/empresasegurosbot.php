<?php 
include_once "../somosioticos/somosioticos_dialogflow.php";
credenciales('empresasegurosbot','123456789');


if (intent_recibido("calculadora")){
    $valor1 = obtener_variables()['numero1'];
    $valor2 = obtener_variables()['numero2'];
    $resultado = $valor1 + $valor2;
    enviar_texto("Luego de sumar los valores te digo que el resultado es $resultado");
}

if (intent_recibido("Ofrecer_Servicios")){
    enviar_texto("Nuestro Servicios:    
    \n* Asistencia de grúa en casos de siniestro o avería
    \n* Auxilio mecánico en casos de avería o accidente.
    \n* Auto Reemplazo en casos de siniestro.
    \n* Extraterritorialidad.
    \n* Atención las 24 horas del día, los 365 dás del año.
    \n* Servicio de procuraduría personal y especializado.");
}
?>