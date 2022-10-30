<?php 
	session_start();
	if(isset($_SESSION['usuarioValido'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Proyecto de HTML5">
	<meta name="Keywords" content="HTML5, CSS3, Javascript">
	<link rel="icon" href="../../img/img.png" type="image/png" />
	<title>index</title>
	<link rel="stylesheet" href="../../css/cssIndex.css">
	<link rel="stylesheet" href="../../css/cssMenu.css">
	<link rel="stylesheet" href="../../vendor/fontawesome-free-6.2.0-web/css/all.css">
</head>

<body>
	<div id="contenedorPrincipal">
		<header id="encabezado">
			<h1>Mi Pagina Web</h1>
		</header>
		<nav id="menu1">
			<ul id="menu">
				<li><a href="../inicio.html" class="active" id="inicio" target="iframeContenido"><i class="fa-solid fa-house"></i> Inicio</a></li>
				<li><a href="../acercade.html" id="about" target="iframeContenido"><i class="fa-solid fa-paper-plane"></i> Acerca de</a></li>
				<li>
				<div class="dropdown">
						<button class="dropbtn"><i class="fa-sharp fa-solid fa-truck"></i> Formularios</button>
						<div class="dropdown-content">
							<a href="../formulariosUsuarios/indexFormUsuarios.html" target="iframeContenido"><i class="fa-sharp fa-solid fa-user"></i> Usuarios</a>
							<a href="../formulariosRoles/indexFormularioRol.html" target="iframeContenido"><i class="fa-sharp fa-solid fa-key"></i> Roles</a>
							<a href="../formulariosLogins/indexLoginUsuario.html" target="iframeContenido"><i class="fa-sharp fa-solid fa-lock"></i> Logins</a>
						</div>
					</div>
				</li>
				<li id="mPerfil">
					<!--<div>
						<h4>Bienvenido: 
							
					</div>-->
					<div class="dropdown">
						<button class="dropbtn"><i class="fa-solid fa-gear"></i> <?php 
							echo''.$_SESSION['usuarioValido'] ?></h4></button>
						<div class="dropdown-content">
							<a href="#"><i class="fa-solid fa-folder-open"></i> Datos</a>
							<a href="../login.html" target="iframeContenido"><i class="fa-solid fa-handshake"></i> Iniciar sesión</a>
							<a href="cerrarSesion.php"><i class="fa-solid fa-right-to-bracket"></i> Salir</a>
						</div>
					</div>
				</li>
			</ul>
		</nav>
		<section id="contenido">
			<iframe img id="iframeContenido" name="iframeContenido" src="../inicio.html" frameborder="0">
				
			</iframe>
		</section>
		<footer id="piePagina">Derechos Reservados © 2022-2023</footer>
	</div>
</body>
</html>
<?php
	}else{
		echo 'Debes iniciar Sesion';
		echo '<br>';
		echo '<a href="../../../index.html">Iniciar Session</a>';
	}
?>