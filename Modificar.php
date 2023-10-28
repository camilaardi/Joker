<?php

include "Conexion.php";

session_start();
if (isset($_SESSION["usuario"]) && 
($_SESSION["tipo_user"]== 'Admin')) {
	
}else{
	header("Location:Login.php");

	exit();
}

$edit = $_GET['edit'];

echo $edit;

$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id = '$edit'") or die("Problemas en el select".mysqli_error($conexion));

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="short icon" type="text/css" href="IMG/jk.png">
	<link rel="stylesheet" type="text/css" href="css/estilo5.css">
	<title> MODIFICAR </title>
</head>
<body>
 
 <nav>
 	<center><h1 style="color: #E7E7E7 ;"> Actualizar los datos del usuario </h1><br><br><br>
 	</center>
 </nav>

 <form method="post" action="Actualizar.php">
 	
 	<?php
 	while ($row = mysqli_fetch_arra($resultado)) {
 		echo "<div align =center><label> Nombre </label>";

 		echo "<div align=center><input type='text' name='nombre' value='$row[nombre]'></div> <br>";


 		echo "<div align =center><label> Apellido </label>";

 		echo "<div align=center><input type='text' name='Apellido' value='$row[apellidos]'></div> <br>";


 		echo "<div align =center><label> Usuario </label>";

 		echo "<div align=center><input type='text' name='usuario' value='$row[usuario]'></div> <br>";


 		echo "<div align =center><label> Password </label>";

 		echo "<div align=center><input type='text' name='Password' value='$row[password]'></div> <br>";


 		echo "<div align =center><label> Tipo de Usuario </label>";

 		echo "<div align=center><input type='text' name='tipo_user' value='$row[tipo_user]'></div> <br>";
 	}


 	?>
 </form>

 <input type="hidden" name="codigo" value="<?php echo $edit; ?>">

 <input type="submit" name="" value="Aceptar" class="edit_btn">

 <button class="del_btn"><a href="Mostrar_usuarios.php">Cancelar</a></button>


</body>
</html>