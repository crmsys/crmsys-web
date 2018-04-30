<?php 
error_reporting(-1);
require("PHPMailer-FE_v4.11/_lib/class.phpmailer.php");
$mail = new PHPMailer();

$apelnombre = $_POST['apelnom']; 
$correo_electronico= $_POST['email']; 
$texto = $_POST['mensaje'];

$mensaje = "Este mensaje fue enviado por " . $apelnombre . " \r\n"; 
$mensaje .= "Su e-mail es: " . $correo_electronico . " \r\n";
$mensaje .= "Su mensaje es: " . $texto . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'supp.crmsys@gmail.com'; 
$asunto = 'Correo Contacto'; 

$mail ->From = $para;
$mail ->AddAddress($correo_electronico);
$mail ->Subject = $asunto;
$mail ->Body = $mensaje;

$mail ->Send();

header("Location:index.php");
?> 