<?php

session_start():
if (isset($_SESSION['nombre'])) {

}else{
	header("Location:Login.php");

	exit();
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> BIENVENIDO </title>
</head>
<body>

<h1> Bienvenido(a), <?php echo $_SESSION['nombre']; ?>
<br>

    <h2> USUARIO </h2>

    <?php
    echo $_SESSION['usuario'];
    echo "<br>";
    echo "Es Ususario";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    ?>
</h1>

<header class="header">
	<div class="container">
		<div class="logo">
			<h1>JOKER</h1>
		</div>
	<nav class="menu">
		<ul>
		<li><a href="Inicio.html">INICIO</a></li>
		<li><a href="">SERVICIOS </a></li>
		<li><a href=""> PERFIL <i class="icon-abajo2"></i></a>

		<ul class="submenu">
			<li><a href="Cerrar_sesion.php"> Cerrar Sesion</a></li>
		</ul>

			</li>
		</ul>
	</nav>
	</div>
</header>


</body>
</html>