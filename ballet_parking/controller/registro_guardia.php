<?php

    $reg_contrasena = $_POST['reg_contrasena'];
    $reg_nombre = $_POST['reg_nombre'];
    $reg_correo = $_POST['reg_correo'];
    $reg_contrasena = password_hash($reg_contrasena, PASSWORD_DEFAULT);
    
?>