<?php

    $query2 = "UPDATE tb_guardia
    SET contrasena = '$encrip'
    WHERE correo = '$correo'";
    $resultado2 = Conexion::conectar()->prepare($query2);
      
    if( $resultado2->execute()  )
    {

        echo "
        <script type='text/javascript'>

        $('body').overhang({
        type: 'success',
        message: 'Se ha cambiado la contraseña, ve y verifica tu correo',
        callback: function() 
        {

        window.location.href = 'control.php?seccion=1';

        }
        });

        </script>
        ";

    }
?>