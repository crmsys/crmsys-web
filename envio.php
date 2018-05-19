<?php 
error_reporting(-1);
require("PHPMailer-FE_v4.11/_lib/class.phpmailer.php");

$mail = new PHPMailer();

$mail ->CharSet = "UTF-8";
$mail ->IsHTML(true); 

$apelnombre = $_POST['apelnom']; 
$correo_electronico= $_POST['email']; 
$texto = $_POST['mensaje'];

$mensaje = "<b>Este mensaje fue enviado por: </b>" . $apelnombre . "<br>"; 
$mensaje .= "<b>Su e-mail es: </b>" . $correo_electronico . "<br>";
$mensaje .= "<b>Su mensaje es: </b>" . $texto . "<br>"; 
$mensaje .= "<b>Enviado el: </b>" . date('d/m/Y', time()); 

$para = 'supp.crmsys@gmail.com'; 

$mail ->From = $para;
$mail ->FromName = "CRMSYS";
$mail ->AddAddress($para,"Nuevo Comentario");
$mail ->Subject = 'Nueva Consulta (WEB)';
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

$mail = new PHPMailer();

$mail ->CharSet = "UTF-8";
$mail ->IsHTML(true);

$mail ->AddEmbeddedImage('images/logo.png', 'imagen');
$rcss = "assets/css/email.css";
$fcss = fopen ($rcss, "r");//abrir archivo css
$scss = fread ($fcss, filesize ($rcss));//leer contenido de css
fclose ($fcss);
$shtml = file_get_contents('email.html');
$cuerpo  = str_replace('<style id="estilo"></style>',"<style>$scss</style>",$shtml); 

$mail ->From = $para;
$mail ->FromName = "CRMSYS";
$mail ->AddAddress($correo_electronico,$apelnombre);
$mail ->Subject = 'Bienvenid@ a CRMSYS';
$mail ->Body = $cuerpo;

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