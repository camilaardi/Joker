<?php

include "Conexion.php";

session_start();
if (isset($_SESSION['usuario']) &&
($_SESSION['tipo_user']== 'Admin')) {
	
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
	<link rel="stylesheet" type="text/css" href="">
	<title> MOSTRAR USUARIOS </title>
</head>
<body>
	<center>
		<nav>
			<h2> MOSTRAR USUARIOS </h2>
		</nav>

		<div class="main-container">
		<table>
			<tr>
				<th> ID </th>
				<th> NOMBRE </th>
				<th> APELLIDO </th>
				<th> USUARIO </th>
				<th> CONTRASEÑA </th>
				<th> TIPO DE USUARIO </th>
				<th colspan="2">BOTONES DE ACCION</th>
			</tr>

<?php

$consulta = "SELECT * FROM usuarios";
$resultado = mysqli_query($Conexion, $consulta);

while ($mostrar = mysqli_fetch_array($resultado)) {
?>

<tr>
	<td><?php echo $mostrar['id']; ?></td>

	<td><?php echo $mostrar['nombre']; ?></td>

	<td><?php echo $mostrar['apellidos']; ?></td>

	<td><?php echo $mostrar['usuario']; ?></td>

	<td><?php echo $mostrar['password']; ?></td>

	<td><?php echo $mostrar['tipo_user']; ?></td>

	<td><a href="Modificar.php?edit=<?php echo $mostrar['id'] ?>" class="edit_btn"> ACTUALIZAR </a>

	<a href="Eliminar.php?del=<?php echo $mostrar['id'];?>" class="del_btn"> ELIMINAR r</a></td>
</tr>

}






?>
		</table> 
		</div>
	</center>

</body>
</html>