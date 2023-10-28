<?php

session_star();

if (isset($_SESSION["usuario"]) && 
($_SESSION["tipo_user"] == 'Admin')) {

}else{
	header("Location:Login.php");

	exit();
}

include "Conexion.php";
$del = $_GET['del'];

if (!empty($_POST)) {
	$codusuario = $_POST['codi'];

	$query_borrar = mysqli_query($Conexion, "DELETE FROM usuarios WHERE id = '$codusuario'");

	if ($query_borrar) {
		echo '<script> 
		alert("Se eliminaron los datos correctamente");
		window.location = "Mostrar_usuarios.php";
		</script>';

	}else{
		echo "Error al eliminar";
	}
}

$resultado = mysqli_query($Conexion, "SELECT * FROM usuarios WHERE id = '$del'")or die("Problemas en el select".mysqli_error($conexion));

while ($row = mysqli_fetch_arra($resultado)) {
	$codigo = $row['id'];
	$nombre = $row['nombre'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo1.css">
	<title> ELIMINAR DATOS</title>
</head>
<body>

	<center><h2 style="color:white;"> Estas seguro que deseas eliminar el usuario? 

<?php echo "Cuyo ID es ".$codigo." y nombre es ".$nombre."?"; ?>
	</h2></center>
	<br>

	<form method="post" action="">
		<input type="hidden" name="codi" value="<?php echo "$del"; ?>">

		<input type="submit" name="" value="Aceptar">
		<a href="Mostrar_usuarios.php"><input type="button" name="" value="Cancelar"></a>
	</form>









</body>
</html>