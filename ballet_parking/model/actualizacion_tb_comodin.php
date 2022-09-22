<?php

    $query = "UPDATE tb_formulario
    SET notas = '$notas', nivel_gasolina = '$nivel_gasolina'
    WHERE codigo = $codigo;";
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
        window.location.href = 'control.php?seccion=6';
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
        window.location.href = 'control.php?seccion=6';
        }
        });
        </script>
        ";

    }

?>