<?php 


	$query = "SELECT id_guardia,nombre,correo,contrasena FROM tb_sub_guardia WHERE correo = :correo";


	$resultado = Conexion::conectar()->prepare($query);

	$resultado->bindParam(":correo",$correo);

	$resultado->execute();

	if($resultado->rowCount()>0)
	{

		$filas = $resultado->fetch();

		$pass1 = $filas['contrasena'];

		$_SESSION['nombre'] = $filas['nombre'];


		if(password_verify($contrasenas, $pass1)) 
		{

			echo "
			<script type='text/javascript'>

			$('body').overhang({
			type: 'success',
			message: 'Acceso permitido',
			callback: function() 
			{

			window.location.href = 'control.php?seccion=11';

			}
			});

			</script>
			";

		}else{

			echo '<div class="alert alert-danger">Error: Contraseña o usuario incorrectos.</div>';

		}
	}else{

		echo '<div class="alert alert-danger">Error: Contraseña o usuario incorrectos.</div>';

	}
		

?>