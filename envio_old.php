<?php 
error_reporting(0); 
$apelnombre = $_POST['apelnom']; 
$correo_electronico= $_POST['email']; 
$texto = $_POST['mensaje'];
$para = 'supp.crmsys@gmail.com'; 
$asunto = 'Correo Contacto'; 
 
$header = 'From: ' . $correo_electronico ."\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/html;charset=UTF-8\r\n";

$mensaje = "<b>Este mensaje fue enviado por: </b>" . $apelnombre . "<br>"; 
$mensaje .= "<b>Su e-mail es: </b>" . $correo_electronico . "<br>";
$mensaje .= "<b>Su mensaje es: </b>" . $texto . "<br>"; 
$mensaje .= "<b>Enviado el: </b>" . date('d/m/Y', time()); 

$mail = mail($para, $asunto,utf8_decode($mensaje),$header); 
if ($mail) { 
    echo " <html><head></head><body>
		   <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
		   <link rel='stylesheet' type='text/css' href='//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.css' />
		   <script src='//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.js'></script>
		   <script type='text/javascript'>$.jGrowl('Correo Enviado Correctamente',{theme : 'bien'});</script> 
		   <style type='text/css'>div.jGrowl div.bien {background-color: #77EF6A;color: #000;font-size:16px;}</style></body></html> ";
}else{ 
    echo " <html><head></head><body> 
		   <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
		   <link rel='stylesheet' type='text/css' href='//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.css' />
		   <script src='//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.js'></script>
		   <script type='text/javascript'>$.jGrowl('Correo NO Enviado Correctamente',{theme : 'bien'});</script> 
		   <style type='text/css'>div.jGrowl div.bien {background-color: #FE2E2E;color: #000;font-size:16px;}</style></body></html> ";
}

$header="";
$header = 'From: ' . $para ."\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain;charset=UTF-8\r\n";

$mensaje="";
$mensaje = "Este mensaje fue enviado por " . $apelnombre . " \r\n"; 
$mensaje .= "Su e-mail es: " . $correo_electronico . " \r\n";
$mensaje .= "Su mensaje es: " . $texto . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time(). " \r\nGRACIAS");
$mensaje .= "GRACIAS\r\n"; 

$mail=null;
$mail = mail($correo_electronico, $asunto,utf8_decode($mensaje),$header); 
if ($mail) { 
    echo " <html><head></head><body>
		   <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
		   <link rel='stylesheet' type='text/css' href='//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.css' />
		   <script src='//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.js'></script>
		   <script type='text/javascript'>$.jGrowl('Correo Enviado Correctamente',{theme : 'bien'});</script> 
		   <style type='text/css'>div.jGrowl div.bien {background-color: #77EF6A;color: #000;font-size:16px;}</style></body></html> ";
}else{ 
    echo " <html><head></head><body> 
		   <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
		   <link rel='stylesheet' type='text/css' href='//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.css' />
		   <script src='//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.js'></script>
		   <script type='text/javascript'>$.jGrowl('Correo NO Enviado Correctamente',{theme : 'bien'});</script> 
		   <style type='text/css'>div.jGrowl div.bien {background-color: #FE2E2E;color: #000;font-size:16px;}</style></body></html> ";
}
header("Location:index.php");
?> 