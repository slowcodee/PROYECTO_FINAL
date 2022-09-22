<?php


$query = "INSERT INTO tb_sub_guardia(nombre,contrasena,correo)
VALUES('$reg_nombre','$reg_contrasena','$reg_correo')";
$resultado = Conexion::conectar()->prepare($query);




if( $resultado->execute())
{

    echo "
    <script type='text/javascript'>

    $('body').overhang({
    type: 'success',
    message: 'Registro Exitoso',
    callback: function() 
    {

    window.location.href = 'control.php?seccion=5';

    }
    });

    </script>
    ";

}    

?>