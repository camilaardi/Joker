<?php

session_start();
if (isset($_SESSION["usuario"]) &&
($_SESSION["tipo_user"]== 'Admin')) {
	
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
	<link rel="stylesheet" type="text/css" href="css/estilo6.css">
	<title> BUSCAR USUARIO</title>
</head>
<body>
<div class="search">
	<form action="" method="post">
		<input type="search" name="dato" placeholder="Búsqueda por usuario" class="text">

		<input type="submit" name="Buscar" value="Buscar" class="button">
	</form>
</div>

<table class="table-container">
	<thead>
		<tr class="rows">
			<td> ID </td>
			<td> NOMBRE </td>
			<td> USUARIO </td>
			<td> TIPO DE USUARIO </td>
		</tr>
	</thead>

<?php

include "Conexion.php";

if (isset($_POST['Buscar'])) {
 	$Buscar = $_POST['dato'];

 	if (empty($Buscar)) {
 		echo "Ingrese un dato,el campo está vacío";
 	}else{
 		$consulta = "SELECT * FROM usuarios WHERE usuario LIKE '%".$Buscar."%''";

 		$mostrar = mysqli_query($Conexion, $consulta);

 		$var_total = mysqli_num_rows($mostrar);

 		if ($rows = mysqli_fetch_array($mostrar)) {
 			echo "Los resultados de la búsqueda fueron: $Buscar";
 			echo "<br>";

 			echo "El total de los datos encontrados fueron: $var_total";

 			echo "<br>";
 			echo "<br>";
 			echo "<br>";

 			do{
 				?>

 	<tr>
 	<td><?php echo $rows['id']?></td>; 

 	<td><?php echo $rows['nombre']?></td>; 

 	<td><?php echo $rows['usuario']?></td>; 

 	<td><?php echo $rows['tipo_user']?></td>; 
 	</tr>

 	<?php
 			}

 	while ($rows = mysqli_fetch_array($mostrar)) ; {
 	}else{
 		echo "No se encontraron datos para esta búsqueda";
 		}
 	}
 } 


?>



</table>

</body>
</html>