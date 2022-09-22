<?php

  require_once("phpmailer/PHPMailer.php");
  require_once("phpmailer/Exception.php");
  $body='<center><div style="border: solid 3px orange ; color: #000; font-size: 10px; padding: 40px;">
  <h1>Hola: </h1><h1 style="color: #000">'.$correo.
  '</h1><br><h1>Su clave nueva de seguridad es: </<h1><br>'.$contra.'</div></center>';
  use PHPMailer\PHPMailer\PHPMailer;

  $mailer = new PHPMailer;

  $mailer->setFrom("SoporteBalletParking@gmail.com");
  $mailer->addAddress($correo);
  $mailer->CharSet = 'UTF-8';
  $mailer->Subject='Cambio de contraseña';
  $mailer->msgHTML($body);
  $mailer->AltBody = strip_tags($body);
  

  if($mailer->send())
  {

    require_once('../model/actualizacion_pass_admin.php');

  }else{

    
    echo "Algo anda mal";

  }


?>