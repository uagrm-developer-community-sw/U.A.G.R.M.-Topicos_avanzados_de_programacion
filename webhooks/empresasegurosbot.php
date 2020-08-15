<?php 
include_once "../somosioticos/somosioticos_dialogflow.php";
credenciales('empresasegurosbot','123456789');
debug();

$mysqli=mysqli_connect("us-cdbr-east-02.cleardb.com","b5a3a74f1e967e","2e3a7c4b","heroku_d1f63ac6b823fab"); 

if (!$mysqli){
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    die();
}


if (intent_recibido("consultar_precio")){
    $resultado = $mysqli->query("SELECT * FROM `precios` WHERE 1");
    $precios = mysqli_fetch_assoc($resultado);
    $p_robo = $precios['robo'];
    $p_accidente = $precios['accidente'];
    $p_culpapropia = $precios['culpapropia'];
    enviar_texto(las de carne cuestan $p_robo las arabes cuestan $p_accidente y las de choclo cuestan $p_culpapropia);
}

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