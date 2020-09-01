<?php

  include('libreria_developer/sautomotorbot.php');
  credenciales ('segurosautomotorbot','123456789');
  include('../connection.php');

    if(intent_recibido("datos_cliente")){
        $sql = "SELECT * FROM tbl_record";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            while($row = mysqli_fetch_assoc($result)){

                $_id = $row['id'];
                $_firstname = $row['firstname'];
                $_lastname = $row['lastname'];
                $_address = $row['address'];
                $_skills = $row['skills'];
                //$_designation = $row['designation'];
                enviar_texto("Nombre: $_firstname Apellido: $_lastname Direccion: $_address Especialidad: $_skills");
        }
        }else{
            echo "<script> alert('No Record Found webhooks');</script>";
        }
            
    }
?>

