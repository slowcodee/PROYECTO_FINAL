<?php

    $query_consul3 = "INSERT INTO tb_formulario(cedula,matricula,nivel_gasolina,kilometraje,notas,estado)
    VALUES('','','$input_nivelGasolina','$input_kilom','$input_nota','1')";
    $resultado_consul3 = Conexion::conectar()->prepare($query_consul3);

    if( $resultado_consul3->execute() )
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