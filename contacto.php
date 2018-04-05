<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Home Perfil profecional y personal</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="#"></a></h1>
				<nav id="nav">
					<ul>
						
						<li><a href="index.html" class="button special">Atras</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>Datos Ingresados</h2>
					
					
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<?php
					$nombre=$_POST['nombre'];
					$apellido=$_POST['apellido'];
					$telefono=$_POST['telefono'];
					$direccion=$_POST['direccion'];
					$asunto=$_POST['asunto'];



					if (empty($nombre)) {
						echo "el campo nombre debe de estar lleno";
					}else if(empty($apellido)){
						echo "el campo apellido debe de estar lleno";
					}
					else if(empty($telefono)){
						echo "el campo telefono debe de estar lleno";
					}else if(empty($direccion)){
						echo "el campo direccion debe de estar lleno";
					}else if(empty($asunto)){
						echo "el campo asunto debe de estar lleno";

					}else if(is_numeric($telefono)){
						echo "el campo telefono debe de tener numeros";
					}else if (filter_var($direccion)) {
						echo "el campo direccion debe de tener cun correo valido";
					}else{

					echo "<section id='three' class='wrapper style1'>
				<div class='container'>
					<div class='row'>
						<div class='8u'>
							<section>";
					echo "<h2>Nombre: </h2>".$nombre."<h2>Apellido: </h2>".$apellido."<h2>Telefono:</h2> ".$telefono."<h2>Dirección: </h2>".$direccion."<h2>Asunto:</h2>".$asunto;
					echo "</div>
					</section>
							
						</div>
					</div>
				</div>
			</section>		";
				}
				?>
			</section>
			
		
			
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row double">
						<div class="6u">
							<div class="row collapse-at-2">
								<div class="6u">
								<h3>Contactos</h3>
						
							<ul class="icons">
								
								<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>Harold Estiben M.B<br>
								<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>harold_marin95<br>
							</ul>
						</div>
					</div>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>