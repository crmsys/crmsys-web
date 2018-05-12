<?php 
error_reporting(-1);
require("PHPMailer-FE_v4.11/_lib/class.phpmailer.php");

$mail = new PHPMailer();

$mail ->SMTPAuth   = true;
$mail ->SMTPSecure = "ssl";
$mail ->Host       = "smtp.gmail.com";
$mail ->Username   = "supp.crmsys@gmail.com";
$mail ->Password   = "sudoaptgetmoo";
$mail ->Port       = 465;
$mail ->CharSet = "UTF-8";

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
$mail ->AddAddress($para);
$mail ->Subject = $asunto;
$mail ->Body = $mensaje;

if ($mail ->Send()) { 
    echo " <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
		   <link rel='stylesheet' type='text/css' href='//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.css' />
		   <script src='//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.js'></script>
		   <script type='text/javascript'>$.jGrowl('Correo Enviado Correctamente',{theme : 'bien'});</script> 
		   <style type='text/css'>div.jGrowl div.bien {background-color: #77EF6A;color: #000;font-size:16px;}</style> "; 
}else{ 
    echo " <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
		   <link rel='stylesheet' type='text/css' href='//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.css' />
		   <script src='//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.js'></script>
		   <script type='text/javascript'>$.jGrowl('Correo Enviado Correctamente',{theme : 'bien'});</script> 
		   <style type='text/css'>div.jGrowl div.bien {background-color: #FE2E2E;color: #000;font-size:16px;}</style> "; 
}

header("Location:index.php");
?> 