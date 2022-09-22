<?php

    $query2 = "UPDATE tb_formulario
    SET estado = 2
    WHERE codigo = $vart;";
    $resultado2 = Conexion::conectar()->prepare($query2);
      
    if( $resultado2->execute()  )
    {

        echo "
        <script type='text/javascript'>

        $('body').overhang({
        type: 'success',
        message: 'Ha Ingresado Un Vehiculo',
        callback: function() 
        {

        window.location.href = 'control.php?seccion=2';

        }
        });

        </script>
        ";

    }
?>