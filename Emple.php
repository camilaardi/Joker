<?php

session_start();
if (isset($_SESSION["nombre"])) {
	//si no existe va a la pagina de autenticacion
	//echo $_SESSION["Nombre"];
}else{
	header("Location:Login.php");
	//salimos de este script
exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="">
	<title>BIENVENIDO</title>
</head>
<body>

	<header class="header">
		<div class="container">
			<div class="logo">
				<h1>JOKER GAMES</h1>
			</div>
	<nav  class="menu">
		<ul>
		<li><a href="#">INICIO</a></li>
		<li><a href="#">EMPLEADOS <i class="icon-abajo2"></i></a>
			<ul class="submenu">
				<li><a href="#">Camila</a></li>
				<li><a href="#">Ardila</a></li>
			</ul>
			</li>
		<li><a href="#">SERVICIOS</a></li>
		<li><a href="#">PERFIL <i class="icon-abajo2"></i></a>

		<ul class="submenu">
		<li><a href="Cambiarpass.php"> Cambiar Contraseña</a></li>

		<li><a href="frm_Buscar_usuario.php"> Buscar Usuarios</a></li>
		<li><a href="Cerrar_sesion.php"> Cerrar Sesion</a></li>
		</ul>

		</li>
		</ul>
	</nav>
		</div>
	</header>

<br>
<br>
<br>
<br>
<br>
<br>

 <h1>Bienvenido(a), <?php echo $_SESSION['nombre']; ?>
 <br>
 <h2> MEDICO </h2>
 <?php

 echo $_SESSION['usuario'];
 echo "<br>";
 echo "Es MEDICO";
 echo "<br>";
 echo "<br>";
 echo "<br>";

 ?>
 </h1>
</body>
</html>