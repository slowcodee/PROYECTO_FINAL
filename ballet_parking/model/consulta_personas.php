<?php


$query = "SELECT id_persona, cedula, nombre, apellido, correo, tipo_licencia, fecha_ven_licen, celular 
FROM tb_persona;";
$resultado = Conexion::conectar()->prepare($query);
$resultado->execute();

?>