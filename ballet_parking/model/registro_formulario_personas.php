<?php


    $query1 = "INSERT INTO tb_persona(cedula,nombre,apellido,correo,fecha_ven_licen,tipo_licencia,celular)
    VALUES('$input_cedula','$input_nombre','$input_apellido','$input_correo','$input_vnLicencia','$input_tpLicencia','$input_celular')";
    $resultado1 = Conexion::conectar()->prepare($query1);
   

    if( $resultado1->execute() )
    {

        echo "
        <script type='text/javascript'>

        $('body').overhang({
        type: 'success',
        message: 'Registro Exitoso',
        callback: function() 
        {

        window.location.href = 'control.php?seccion=2';

        }
        });

        </script>
        ";

    }
  


?>