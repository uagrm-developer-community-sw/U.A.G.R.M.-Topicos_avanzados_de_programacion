<?php
$usuario_recibido   = $_SERVER['PHP_AUTH_USER'];
$pass_recibido      = $_SERVER['PHP_AUTH_PW'];
$inputJSON          = file_get_contents('php://input');
$input              = json_decode($inputJSON, TRUE);
$respuesta          = "";
$respuesta_texto    = "";
$respuesta_cards[]  = array();
$respuesta_images[] = array();
header('Content-Type: application/json;charset=utf-8');

/**********************************************************
                 FUNCIONES DE ENVIAR
**********************************************************/
//comprueba credenciales
function credenciales($usuario, $pass)
{
    global $usuario_recibido;
    global $pass_recibido;
    if (($usuario != $usuario_recibido) OR ($pass != $pass_recibido)) {
        echo "Acceso no autorizado";
        die();
    }
}

//graba en archivos debugs
function debug()
{
    global $input;
    $json_string = json_encode($input, JSON_PRETTY_PRINT);
    file_put_contents('json.js', $json_string);
    file_put_contents('credenciales_recibidas.js', "Usuario: " . $_SERVER['PHP_AUTH_USER'] . " Pass: " . $_SERVER['PHP_AUTH_PW']);
    file_put_contents('array.php', "<?php " . print_r($input, TRUE));
}

//graba en archivos debugs variable especifica
function debug_variable($variable)
{
    file_put_contents('debug_variable.js', $variable);
}

//comprueba intent recibido
function intent_recibido($nombre)
{
    global $input;
    if ($input["queryResult"]["intent"]["displayName"] == $nombre) {
        return true;
    } else {
        return false;
    }
}

/**********************************************************
                 FUNCIONES DE RECIBIR
**********************************************************/



//tan simple como pasarle el texto al devolver.
function enviar_texto($texto)
{
    echo '{"fulfillmentText": "' . $texto . '",
    "fulfillmentMessages": [
      {
        "text": {
          "text": [
            "' . $texto . '"
          ]
        }
      }
    ]}' . PHP_EOL;
}
