<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo2.css">
	<title> REGISTRO USUARIO </title>
	<link rel="short icon" type="text/css" href="IMG/jk.png">
</head>
<body>

	<a href="Inicio.php"></a>
	<h1><center> REGISTRO USUARIO </center></h1>

<div class="formulario_registro">
	<div class="form">
		<form method="post" action="Registro_user.php">
			<p> NOMBRE 
			<input type="text" name="nombre" placeholder="Nombre" class="field"></p>

			<p> APELLIDOS
			<input type="text" name="apellido" placeholder="Apellidos" class="field"></p>

			<p> USUARIO 
			<input type="text" name="usuario" placeholder="Usuario" class="field"></p>

			<p> CORREO 
			<input type="email" name="correo" placeholder="correo" class="field"></p>

			<p> CONTRASEÑA 
			<input type="password" name="password" placeholder="Contraseña" class="field"></p><br>

			<input type="submit" name="" value="Registrar" class="btn-green"><br>

			<center><a href="Login.php"> Ya tengo una cuenta? 
			</b></a></a></center>



		</form>





	</div>
</div>
</body>
</html>