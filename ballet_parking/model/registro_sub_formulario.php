<?php

    $query_consul1 = "INSERT INTO tb_persona(cedula,nombre,apellido,correo,tipo_licencia,celular)
    VALUES('$input_cedula','','','','','')";
    $resultado_consul1 = Conexion::conectar()->prepare($query_consul1);
    $resultado_consul1->execute();


    $query_consul2 = "INSERT INTO tb_vehiculos(matricula,color,modelo,año,marca,kilometraje,soat,tecno_mecanica,derechos_rodamiento)
    VALUES('$input_matricula','','','','','','','','')";
    $resultado_consul2 = Conexion::conectar()->prepare($query_consul2);
    $resultado_consul2->execute();

    $query = "INSERT INTO tb_formulario(cedula,matricula,nivel_gasolina,kilometraje,notas,estado)
    VALUES('$input_cedula','$input_matricula','$input_nivelGasolina','$input_kilom','$input_nota','$estado');";
    $resultado = Conexion::conectar()->prepare($query);

    if( $resultado->execute() )
    {

        echo "
        <script type='text/javascript'>

        $('body').overhang({
        type: 'success',
        message: 'Registro Exitoso',
        callback: function() 
        {

        window.location.href = 'control.php?seccion=11';

        }
        });

        </script>
        ";

    }
  


?>