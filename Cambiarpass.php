<?php

include "Conexion.php";

session_start();

$id = $_SESSION['id'];
if (isset($_SESSION['usuario'])) {
	
}else{
	header("Location:Login.php");
	exit();
}

$pass1 = $_POST['clave1'];
$pass2 = $_POST['clave2'];

if ($pass1 == $pass2) {
	mysqli_query($Conexion, "UPDATE usuarios SET password = '$pass2' WHERE id = '$id'") or die (mysqli_error());

header("Location:Login.php");
}else{
	header("Location:Cambiar_password.php");
}

?>