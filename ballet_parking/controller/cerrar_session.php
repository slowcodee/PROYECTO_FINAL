<?php


    session_start();
    session_destroy();
    session_unset();

if($_GET['sep'] == 1)
{

    header('Location: control.php?seccion=1');

}else if($_GET['sep'] == 2){

    header('Location: control.php?seccion=10');

}

    



?>