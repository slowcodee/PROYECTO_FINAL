<?php

    $query = "UPDATE tb_formulario
    SET estado = 1
    WHERE codigo = $vart;";
    $resultado = Conexion::conectar()->prepare($query);
      
    if( $resultado->execute()  )
    {

        echo "
        <script type='text/javascript'>

        $('body').overhang({
        type: 'success',
        message: 'Ha Salido Un Vehiculo',
        callback: function() 
        {

        window.location.href = 'control.php?seccion=2';

        }
        });

        </script>
        ";

    }
?>