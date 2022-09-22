<?php

    $query = "UPDATE tb_persona
    SET nombre = '$name', apellido = '$apelli', correo = '$correo', tipo_licencia = '$licencia', fecha_ven_licen = '$ven_licencia', celular = '$celu'
    WHERE id_persona = $id_tb_persona;";
    $resultado = Conexion::conectar()->prepare($query);
    
    if( $resultado->execute()  )
    {

        echo "
        <script type='text/javascript'>
        $('body').overhang({
        type: 'success',
        message: 'Actualización Exitosa',
        callback: function() 
        {
        window.location.href = 'control.php?seccion=3';
        }
        });
        </script>
        ";

    }else{

        echo "
        <script type='text/javascript'>
        $('body').overhang({
        type: 'danger',
        message: 'Error',
        callback: function() 
        {
        window.location.href = 'control.php?seccion=3';
        }
        });
        </script>
        ";

    }

?>