<?php

    if (isset($_POST['enviar'])) 
    {

        $correo = $_POST['ini_correo'];
        $contrasenas = $_POST['ini_contrasena'];


        if(empty($correo) || empty($contrasenas)) 
        {
            
            echo '<div class="alert alert-danger">Error: Llena todos los campos.</div>';

        }else{

            require_once('../model/iniciar_sesion_guardia.php');

        }
    }    


?>