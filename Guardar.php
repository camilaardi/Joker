<?php

include "Conexion.php";

session_start();

if (isset($_SESSION["usuario"]) &&
($_SESSION["tipo_user"] == 'Admin')) {
	
}else{
	header("Location:Login.php");

	exit();
}

if (isset($_POST['guardar'])) {
	
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$insertar = "INSERT INTO usuarios(id, nombre, usuario, password) VALUES('$id', '$nombre', '$usuario', '$password')";

	$resultado = mysqli_query($Conexion, $insertar);

	if ($resultado) {
		echo '<script> alert("El usuario se registro correctamente");
		location.href = "formulario.php"
		</script>';

	}else{
		echo "Problemas al insertar registro";
	}
	mysqli_close($Conexion);
}

?>