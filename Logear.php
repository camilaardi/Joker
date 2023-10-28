<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

</body>
<header>
	<p><img src="Img/joker.png" width="300px" height=""></p>
</header>

</html>
<?Php 


include "conexion.php";

$usuario = $_POST['usuario'];
$pass = $_POST['password'];


$admin=mysqli_query($conexion,"select * from usuarios where usuario='$usuario' && password='$pass' && tipo_user='Admin'");
$usu=mysqli_query($conexion,"select * from usuarios where usuario='$usuario' && password='$pass' && tipo_user='user'");
$medico=mysqli_query($conexion,"select * from usuarios where usuario='$usuario' && password='$pass' && tipo_user='emple'");

if (mysqli_num_rows($admin)>0){
	$fila=mysqli_fetch_row($admin);
	$ced= $fila[0];
	$name= $fila[1];
	$apellido= $fila[2];
	$usuario= $fila[3];
	$tipo_user= $fila[7];
	session_start();
	$_SESSION['id']="$id";
	$_SESSION['nombre']= "$name";
	$_SESSION['apellidos']="$apellido";
	$_SESSION['correo']="$correo";
	$_SESSION['tipo_user']="$tipo_user";
	$_SESSION['usuario']="$usuario";


    header("Location:administrador.php");

}elseif (mysqli_num_rows($medico)>0){
	$fila=mysqli_fetch_row($medico);
	$ced= $fila[0];
	$name= $fila[1];
	session_start();
	$_SESSION['id']="$id";
	$_SESSION['nombre']= "$name";
	$_SESSION['usuario']="$usuario";


	header("Location:emple.php");
}elseif (mysqli_num_rows($usu)>0){
	$fila=mysqli_fetch_row($usu);
	$name= $fila[1];
	session_start();
	$_SESSION['nombre']= "$name";
	$_SESSION['usuario']="$usuario";

	header("Location:bienvenido.php");
}else{
	echo '<script language="javascript">alert("Error de autenticación");window.location.href="login.html"</script>';
	//header("location: index.html");
}




?>
