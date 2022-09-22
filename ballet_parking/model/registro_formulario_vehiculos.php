<?php


    $query_consul2 = "INSERT INTO tb_vehiculos(matricula,color,modelo,año,marca,kilometraje,soat,tecno_mecanica,derechos_rodamiento)
    VALUES('$input_matricula','$input_color','$input_modelo','$input_año','$input_marca','$input_kilometraje','$input_soat','$input_tecnomecanica','$input_derechosRodamiento')";
    $resultado_consul2 = Conexion::conectar()->prepare($query_consul2);

    if( $resultado_consul2->execute() )
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