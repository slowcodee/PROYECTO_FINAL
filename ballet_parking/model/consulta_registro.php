<?php


$query = "SELECT t1.id_persona, t1.cedula, t1.nombre, t1.apellido, t1.correo, t1.tipo_licencia, t1.fecha_ven_licen, t1.celular, t2.id_vehiculo, t2.matricula, t2.color, t2.modelo, t2.año, t2.marca, t2.kilometraje, t2.soat, t2.tecno_mecanica, t2.derechos_rodamiento, t3.estado, t3.codigo, t3.nivel_gasolina, t3.notas 
FROM tb_persona AS t1, tb_vehiculos AS t2, tb_formulario AS t3 
WHERE t1.cedula = t3.cedula AND t2.matricula = t3.matricula;";
$resultado = Conexion::conectar()->prepare($query);
$resultado->execute();

?>