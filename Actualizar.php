<?php

include "Conexion.php";

session_start();
if (isset($_SESSION['usuario']) && 
	($_SESSION['tipo_user']== 'Admin'))´{

}else{
	header("Location:Login.php");

	exit();
}

$codigo = $_POST['codigo'];

mysqli_query($Conexion, "UPDATE usuarios SET id= '$_POST[id]', nombre = '$_POST[nombre]',  usuario = '$_POST[usuario]', password = '$_POST[password]' WHERE id = $codigo") or die("Problemas en el select".mysqli_error($Conexion));

echo '<script>
      alert("Se actualizaron los datos correctamente");
      window.location = "Mostrar_usuarios.php";
      </script>';

?>