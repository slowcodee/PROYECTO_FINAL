<?php
/**
* control.php
* Cerebro del sistema. 
* 
*/
    session_start();
    //Permite la conexion con la BD
    include "../model/Conexion.php";

    //Valida la seccion
    if(!isset($_GET['seccion']))
    {

        echo 'Nop es permitido ingresar';

    }else{

        
        //capturamos la seccion en una bariable
        $sentencia = $_GET['seccion'];
        
        /**
         * control
         * Gestiona todo el control interno del sistema, tanto las validaciones por GET y POST
         * Controla las secciones y vistas
         * @param  mixed $sentencia
         * @return mixed $sentencia
         */
        function control($sentencia) 
        {

            if($sentencia==1)
            {
    
                //Trae la vista del login rol super ADMIN
                require_once('../view/plantillas/login_guardia.phtml');
    
                //$_GET['dictadura'] una validacion para el ingreso de secion por URL
                $dictadura = isset($_GET['dictadura']);

                if($sentencia==1 && $dictadura==1)
                {
                    //captura datos por POST
                    require_once('iniciar_sesion_guardia.php');

                }
               

            }
    
            //Capturamos la sesion
            if(isset($_SESSION['nombres']))
            {

                //Consulta general de todos los datos de la tb_vehiculo, tb_persona, tb_formulario
                $consulta = require_once('../model/consulta_registro.php');
                


                if($sentencia==2)
                {
                    
                    require_once('../view/plantillas/cpanel_guardia.phtml');
                    $consulta;
                    //contenido visual de la variable $consulta
                    $tab = require_once('../view/tabs/seccion_2.phtml');


                    if(isset($_REQUEST['enviarComodin']))
                    {

                        if($sentencia==2 && $_GET['register']==1)
                        {
    
                            //recivimos datos por post
                            require_once('registro_formulario.php');
                            //ejecuta la validacion
                            require_once('../model/registro_formulario.php');
         
                        }

                    }
                    //Valida registro de tb_persona
                    if(isset($_REQUEST['enviarPersona']))
                    {

                        if($sentencia==2 && $_GET['regis']==2)
                        {
    
                            //recivimos datos por post
                            require_once('registro_formulario_persona.php');
                            //ejecuta la validacion
                            require_once('../model/registro_formulario_personas.php');
         
                        }

                    }
                    //Valida registro de tb_vehiculo
                    if(isset($_REQUEST['enviarVehiculo']))
                    {

                        if($sentencia==2 && $_GET['re']==3)
                        {
    
                            //recivimos datos por post
                            require_once('registro_formulario_vehiculo.php');
                            //ejecuta la validacion
                            require_once('../model/registro_formulario_vehiculos.php');
         
                        }

                    }

                    
        
                }
            //Validacion de servidor si no hay conexion arroja error 500
            }else if(!isset($_SESSION['nombres']) && $sentencia==2){

                require_once('../view/plantillas/error_500.phtml');

            }

    
            if(isset($_SESSION['nombres'])){
                
                if($sentencia==3)
                {

                    require_once('../view/plantillas/cpanel_guardia.phtml');
                    if(isset($_POST['fase1']))
                    {
            
                        require_once('../view/tabs/formu_persona.phtml'); 

                    }
                    //contenido visual de la variable $consulta
                    require_once('../model/consulta_personas.php');
                    $tab = require_once('../view/tabs/seccion_3.phtml');

                    //Permite la actualizacion de la tb_personas
                    if(isset($_GET['registro_p']))
                    {
                        if($sentencia == 3 && $_GET['registro_p'] == 1)
                        {
                            //recivimos datos por post
                            require_once('actualizar_tb_personas.php');
                            //ejecuta la validacion
                            require_once('../model/actualizacion_tb_persona.php');

                        }
                    }


        
                }
            }else if(!isset($_SESSION['nombres']) && $sentencia==3){

                require_once('../view/plantillas/error_500.phtml');

            }

            if(isset($_SESSION['nombres'])){
                
                if($sentencia==4)
                {
        
                    require_once('../view/plantillas/cpanel_guardia.phtml');
                    if(isset($_POST['valor']))
                    {
            
                        require_once('../view/tabs/formu_vehiculo.phtml');

                    }
                    //contenido visual de la variable $consulta
                    require_once('../model/consulta_vehiculos.php');
                    $tab = require_once('../view/tabs/seccion_4.phtml');

                    //Permite la actualizacion de la tb_personas
                    if(isset($_GET['registro_p']))
                    {
                        if($sentencia == 4 && $_GET['registro_p'] == 2)
                        {
                            //recivimos datos por post
                            require_once('actualizar_tb_vehiculo.php');
                            require_once('../model/actualizacion_tb_vehiculo.php');
                            //ejecuta la validacion

                        }
                    }

                    
        
                }
            //Validacion de servidor si no hay conexion arroja error 500
            }else if(!isset($_SESSION['nombres']) && $sentencia==4){

                require_once('../view/plantillas/error_500.phtml');

            }

            if(isset($_SESSION['nombres'])){
                
                if($sentencia==5)
                {
        
                    require_once('../view/plantillas/cpanel_guardia.phtml');
                    //contenido visual de la variable $consulta
                    $tab = require_once('../view/tabs/seccion_5.phtml');

                    $dic = isset($_GET['dic']);


                    //Permite el correcto funcionamiento del registro de un guardia
                    if($sentencia==5 && $dic==1)
                    {
    
                        if(isset($_REQUEST['enviar']))
                        {
                            //Validacion de datos del guardia
                            if($_POST['reg_contrasena'] == $_POST['con_contrasena'])
                            {

                                //recivimos datos por post
                                require_once('registro_guardia.php');
                                //ejecuta la validacion
                                require_once('../model/registro_guardia.php'); 

                            }else{

                                echo '<div class="alert alert-danger">Error: Contraseñas incorrectas</div>';

                            }



                        }
    

                    }

        
                }
            //Validacion de servidor si no hay conexion arroja error 500
            }else if(!isset($_SESSION['nombres']) && $sentencia==5){

                require_once('../view/plantillas/error_500.phtml');

            }

                
            if($sentencia==6)
            {

                //Validacion y registro de rol super ADMIN
                if(isset($_REQUEST['enviar']))
                {
                    if($_POST['reg_contrasena'] == $_POST['con_contrasena'])
                    {

                        //recivimos datos por post
                        require_once('registro_super.php');
                        //ejecuta la validacion
                        require_once('../model/registro_super.php'); 

                    }else{

                        echo '<div class="alert alert-danger">Error: Contraseñas incorrectas</div>';

                    }



                }
                //contenido visual de la variable $consulta
                $tab = require_once('../view/tabs/seccion_6.phtml');

    
            }


            if(isset($_SESSION['nombres'])){

                if($sentencia==7)
                {
                    require_once('../view/plantillas/cpanel_guardia.phtml');
                    //ejecuta la validacion
                    require_once('../model/consulta_tb_guardia.php');
                    //contenido visual de la variable $consulta
                    $tab = require_once('../view/tabs/seccion_7.phtml');

        
                }
            //Validacion de servidor si no hay conexion arroja error 500
            }else if(!isset($_SESSION['nombres']) && $sentencia==7){

                require_once('../view/plantillas/error_500.phtml');

            }

            if($sentencia==8)
            {

                //Validacion y cambio de contraseña de rol super ADMIN
                if (isset($_POST['enviar'])) 
                {
            
                    //recivimos datos por post
                    $correo = $_POST['correo'];
                    $cofita = $_POST['conf_contra'];
                    $contra = $_POST['contrasena'];
                    //encriptamos la contraseña
                    $encrip = password_hash($contra, PASSWORD_DEFAULT);
                    
                    if($contra == $cofita)
                    {

                        //ejecuta la validacion
                        require_once('../model/PassMailSuperAdmin.php');

                    }else{

                        echo '<div class="alert alert-danger">Error: Contraseñas incorrectas</div>';

                    }
                    

                }
                //contenido visual de la variable $consulta  
                $tab = require_once('../view/tabs/seccion_8.phtml');

            }

            if($sentencia==9)
            {

                //Validacion y cambio de contraseña de rol guardia
                if (isset($_POST['enviars'])) 
                {
            
                    //recivimos datos por post
                    $correo = $_POST['correo'];
                    $cofita = $_POST['conf_contra'];
                    $contra = $_POST['contrasena'];
                    //encriptacion de contraseña
                    $encrip = password_hash($contra, PASSWORD_DEFAULT);
                    
                    if($contra == $cofita)
                    {

                        //ejecuta la validacion
                        require_once('../model/PassMailGuardia.php');

                    }else{

                        echo '<div class="alert alert-danger">Error: Contraseñas incorrectas</div>';

                    }
                    

                } 
                //contenido visual de la variable $consulta 
                $tab = require_once('../view/tabs/seccion_9.phtml');

            }

            if($sentencia==10)
            {
 
                //Trae la vista del login rol super ADMIN
                require_once('../view/plantillas/login_sub_guardia.phtml');
                //recivimos datos por post
                require_once('iniciar_sesion_sub_guardia.php');
               // require_once('../view/plantillas/cpanel_sub_guardia.phtml');
    
            }

            //Despliega formularion y parte visual de rol guardia
            if($sentencia==11)
            {

                if(isset($_SESSION['nombre']))
                {

                    require_once('../view/plantillas/cpanel_sub_guardia.phtml');

                     

                    if(isset($_GET['vitacora']) == 1)
                    {

                        //recivimos datos por post
                        require_once('../controller/registro_sub_formulario.php');
                        //ejecuta la validacion
                        require_once('../model/registro_sub_formulario.php');

                    }
                //Validacion de servidor si no hay conexion arroja error 500
                }else if(!isset($_SESSION['nombre']) && $sentencia==11){

                    require_once('../view/plantillas/error_500.phtml');
    
                }

            }

            //Validacion de servidor si no hay conexion arroja error 500
            if($sentencia >=12){

                require_once('../view/plantillas/error_500.phtml');

            }


            return $sentencia;

        }


    }
    require_once('../view/control.phtml');
?>