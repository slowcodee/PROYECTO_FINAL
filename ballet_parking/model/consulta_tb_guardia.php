<?php


    $query = "SELECT nombre, correo FROM tb_sub_guardia";
    $resultado = Conexion::conectar()->prepare($query);
    $resultado->execute();

?>