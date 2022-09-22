<?php


$query = "SELECT t2.id_vehiculo, t2.matricula, t2.color, t2.modelo, t2.año, t2.marca, t2.kilometraje, t2.soat, t2.tecno_mecanica, t2.derechos_rodamiento
FROM tb_vehiculos AS t2";
$resultado = Conexion::conectar()->prepare($query);
$resultado->execute();

?>