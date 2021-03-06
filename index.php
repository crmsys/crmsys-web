<!DOCTYPE HTML>
<html>
	<head>
		<title>CRMSYS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	</head>
	<body>

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Inicio</a></li>
							<li><a href="#one">Quienes somos</a></li>
							<li><a href="#two">Servicios</a></li>
							<li><a href="#three">Productos</a></li>
							<li><a href="#four">Contacto</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<img src="images/logo.png" style="width: 40%;height: auto;"/><br>
							<h3>
							  <p class="typewrite" data-period="2000" data-type='[ "Hacemos que la gestión de tu negocio sea mas eficiente." ]'>
								<span class="wrap"></span>
							  </p>
							</h3>
							<div style="position:absolute; top:50%;left:45%;"><ul class="actions vertical">
								<li><a href="#one" class="button scrolly" style="bottom:-15em;"><span class="fa major fa-chevron-down"></span></a></li>			
							</ul></div>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a class="image"><img src="images/empresa.jpg" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Empresa</h2>
									<p>Somos una empresa nueva en el sector pero debido a que establecemos sólidas 
										relaciones con nuestros clientes y ofrecemos una calidad en nuestros servicios 
										excelente, esperamos ser una parte importante en este sector.
									</p>
									<ul class="actions">
										<li><a href="empresa.html" class="button">Leer Más</a></li>
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a class="image"><img src="images/fundadores.jpg" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Fundadores</h2>
									<p>Somos un grupo de estudiantes con mucha iniciativa 
									y con los conocimientos suficientes como para saber que es lo más eficaz en cada uno de los 
									proyectos que afrontamos y qué soluciones debemos aportar en cada uno de ellos.</p>
									<ul class="actions">
										<li><a href="fundadores.html" class="button">Leer Más</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Servicios</h2>
							<p>En nuestra empresa ofrecemos una serie de Servicios como los que les mostramos a continuación.</p>
							<div class="features">
								<section>
									<span class="icon major fa-line-chart"></span>
									<h3>Mantenimiento de Aplicación de análisis económico de la empresa</h3>
									<p>Duración según la contratación con el cliente.</p>
								</section>
								<section>
									<span class="icon major fa-wrench"></span>
									<h3>Mantenimiento y Gestión de la plataforma ODOO</h3>
									<p>Duración según la contratación con el cliente.</p>
								</section>
								<section>
									<span class="icon major fa-desktop"></span>
									<h3>Mantenimiento y Gestión de webs corporativas</h3>
									<p>Duración según la contratación con el cliente.</p>
								</section>
								<section>
									<span class="icon major fa-graduation-cap"></span>
									<h3>Curso de formación de nuestra plataforma</h3>
									<p>Se mostrara a los usuarios seleccionados por el cliente como usar la plataforma y el modulo creado.</p>
								</section>
							</div>
						</div>
					</section>
				
				<!-- Three -->
					<section id="three" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Productos</h2>
							<p>En nuestra empresa ofrecemos una serie de Productos como los que les mostramos a continuación.</p>
							<div class="features">
								<section>
									<span class="icon major fa-cog"></span>
									<h3>Instalación y configuración de la plataforma ODOO</h3>
									<p>Diseño según los requisitos del cliente, duración según la contratación con el cliente.</p>
								</section>
								<section>
									<span class="icon major fa-cog"></span>
									<h3>Creación de módulos personalizados en la plataforma ODOO</h3>
									<p>Diseño según los requisitos del cliente, duración según la contratación con el cliente.</p>
								</section>
								<section>
									<span class="icon major fa-desktop"></span>
									<h3>Creación de web corporativas</h3>
									<p>Diseño según los requisitos del cliente, duración según la contratación con el cliente.</p>
								</section>
								<section>
									<span class="icon major fa-line-chart"></span>
									<h3>Creación de Aplicación de análisis económico de la empresa</h3>
									<p>Diseño según los requisitos del cliente, duración según la contratación con el cliente.</p>
								</section>
							</div>
						</div>
					</section>

				<!-- Four -->
					<section id="four" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>¿CHARLAMOS?</h2>
							<p>Si desea ponerse en contacto con nosotros para poder facilitarle una informacion<br> mas detallada no dude en ponerse en contacto
							con nosotros a través de los<br> siguientes medios de comunicacion.</p>
							<div class="split style1">
								<section>
									<?php
										error_reporting(0);
										require("PHPMailer-FE_v4.11/_lib/class.phpmailer.php");
										if (isset($_POST['env'])){
											if (isset($_POST['captcha'])) {
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

												$mailEnv1 = $mail ->Send();
												
												//--------------
												
												$mail = new PHPMailer();

												$mail ->CharSet = "UTF-8";
												$mail ->IsHTML(true);

												$mail ->AddEmbeddedImage('images/logo.png', 'imagen');//cargar img
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

												$mailEnv2 = $mail ->Send();
												
												if($mailEnv1 && $mailEnv2){	
													echo " <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
														   <link rel='stylesheet' type='text/css' href='jGrowl-master/jquery.jgrowl.min.css' />
														   <script src='jGrowl-master/jquery.jgrowl.min.js'></script>
														   <script type='text/javascript'>$.jGrowl('Correo Enviado Correctamente',{theme : 'bien'});</script> 
														   <style type='text/css'>div.jGrowl div.bien {background-color: #77EF6A;color: #000;font-size:16px;margin:auto;margin-top:30%;margin-left: -3%;}</style> "; 
												}else{
													echo " <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
														   <link rel='stylesheet' type='text/css' href='jGrowl-master/jquery.jgrowl.min.css' />
														   <script src='jGrowl-master/jquery.jgrowl.min.js'></script>
														   <script type='text/javascript'>$.jGrowl('Correo NO Enviado Correctamente',{theme : 'bien'});</script> 
														   <style type='text/css'>div.jGrowl div.bien {background-color: #FE2E2E ;color: #000;font-size:16px;margin:auto;margin-top:30%;margin-left: -3%;} jGrowl-close {background-color: #77EF6A;}</style> ";	
												}
											}else{
												echo " <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
														<link rel='stylesheet' type='text/css' href='jGrowl-master/jquery.jgrowl.min.css' />
														<script src='jGrowl-master/jquery.jgrowl.min.js'></script>
														<script type='text/javascript'>$.jGrowl('No se a Validado el Captcha Correctamente',{theme : 'bien'});</script> 
														<style type='text/css'>div.jGrowl div.bien {background-color: #FE2E2E ;color: #000;font-size:16px;margin:auto;margin-top:30%;margin-left: -3%;} jGrowl-close {background-color: #77EF6A;}</style> ";	
											}
										}
										header("Location:index.php"); 
									?>
									<form action="index.php" method="post">
										<div class="field half first">
											<label for="name">Nombre y Apellidos *</label>
											<input type="text" name="apelnom" id="name" required="required"/>
										</div>
										<div class="field half">
											<label for="email">Email *</label>
											<input type="text" name="email" id="email" required="required"/>
										</div>
										<div class="field">
											<label for="message">Mensaje *</label>
											<textarea name="mensaje" id="message" rows="5" required="required"></textarea><br>
											<input type="checkbox" id="demo-human" name="captcha" required="required"><label for="demo-human">No soy un Robot *</label>
											<!--<div class="g-recaptcha" data-sitekey="6Le1aloUAAAAAPp8b2qY2Q__4jNQwO9rAzXfD-KC"></div>-->
										</div>
										<ul class="actions">
											<li><input type="submit" value="Enviar formulario" name="env"></li>
											<li><input type="Reset" value="Borrar datos"> </li>
										</ul>
										</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Dirección</h3>
											<span>Plaza Castilla, s/n, 28020 Madrid
												<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6070.7967633175795!2d-3.693057429060106!3d40.46645080763663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228555a4aa3f7%3A0x6d64814a101b07a7!2sTorres+Kio!5e0!3m2!1ses!2ses!4v1522591130506" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
											</span>
										</li>
										<li>
											<h3>Email</h3>
											supp.crmsys@gmail.com
										</li>
										<li>
											<h3>Telefono</h3>
											<span>(+34) 914521458</span>
										</li>
										<li>
											<h3>Redes Sociales</h3>
											<ul class="icons">
												<li><a href="https://twitter.com" class="fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="https://www.facebook.com" class="fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="https://github.com" class="fa-github"><span class="label">GitHub</span></a></li>
												<li><a href="https://www.linkedin.com" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; CRMSYS. All rights reserved.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>