<?php

    $query = "UPDATE tb_vehiculos
    SET color = '$color', modelo = '$modelo', año = '$año', marca = '$marca', kilometraje = '$kilometraje', soat = '$soat', tecno_mecanica = '$tecno_mecanica', derechos_rodamiento = '$derechos_rodamiento'
    WHERE id_vehiculo = $id_vehiculo;";
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
        window.location.href = 'control.php?seccion=4';
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
        window.location.href = 'control.php?seccion=4';
        }
        });
        </script>
        ";

    }

?>