<?php 

include "Conexion.php";

session_start();
if (isset($_SESSION["usuario"]) && ($_SESSION["tipo_user"]=='Admin')) {
}else {
    header("Location:Login.php");

    exit();
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$pass = $_POST['password'];
$tipo_user = $_POST['tipo_user'];

$consulta = "INSERT INTO usuarios(nombre,apellidos,usuario,correo,password,tipo_user) VALUE('$nombre','$apellido','$usuario','$correo','$password','$tipo_user')";

$verificar_usuario = mysqli_query($Conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");


if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '<script>
          alert("El usuario ya se encuentra registrado");
          window.history.go(-1);
          </script>';
         exit; 
         
}

$verificar_correo = mysqli_query($Conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

if (mysqli_num_rows($verificar_correo) > 0) {
   echo '<script>
         alert("Este correo ya esta registrado, intenta con otro correo");
         window.history.go(-1);   
         </script>';
         exit;
}


$resultado = mysqli_query($Conexion, $consulta);

if ($resultado) {
   echo '<script>
         alert("Se insertaron los datos correctamente");
         window.location = "login.php";
         </script>
        ';
}else{
    echo '<script>
         alert("Intentalo de nuevo usuario no almacenado");
         window.location = "formulario_admin.php";
         </script>
        ';
}

mysqli_close($Conexion);

?>