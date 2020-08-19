<?php
/* ====================================================================================================== */
include_once "../developercs/dcs_libreria_dialogflow.php"; //incluyendo 
credenciales ('sautomotorbot','123456789');
debug();
/*======================================================================================================  */

    if (intent_recibido("hola_mundo")){
      enviar_texto("Hola mundo");
    }

?>

