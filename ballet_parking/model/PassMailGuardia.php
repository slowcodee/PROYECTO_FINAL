<?php 


	$query = "SELECT id_guardia,nombre,correo,contrasena FROM tb_sub_guardia WHERE correo = :correo";


	$resultado = Conexion::conectar()->prepare($query);

	$resultado->bindParam(":correo",$correo);

	$resultado->execute();

	if($resultado->rowCount()>0)
	{

        require_once('../controller/PassMailGuardia.php');

	}else{

		echo '<div class="alert alert-danger">Error: Correo no registrado.</div>';

	}
		

?>