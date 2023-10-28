<?php

include "Conexion.php";


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$tipo_user = "user";

$consulta = "INSERT INTO usuarios(nombre,apellidos,usuario,correo,password,tipo_user) VALUE('$nombre', '$apellido', '$usuario', '$correo', '$password', '$tipo_user')";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

if (mysqli_num_rows($verificar_usuario) > 0) {
	echo '<script> 
	alert("El usuario ya se encuentra registrado");
	window.history.go(-1);
	</script>';
	exit();
}

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

if (mysqli_num_rows($verificar_correo) > 0 ) {
	echo '<script>
	alert("Este correo ya esta registrado,intenta con otro correo");
	window.history.go(-1);
	</script>';
	exit();
}

$resultado = mysqli_query($conexion, $consulta);

if ($resultado){
	echo '<script> 
	alert ("Se insertaron los datos correctamente");
	window.location = "Login.php";
	</script>';

}else{
	echo '<script>
	alert("Intentalo de nuevo, usuario no almacenado");
	window.location = "formulario_user.php";
	</script>';
}

mysqli_close($conexion);

?>