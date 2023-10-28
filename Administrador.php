<?php 

session_start();
if (isset($_SESSION["usuario"]) && ($_SESSION["tipo_user"]=='Admin')) {
}else {
    header("Location:Login.php");

    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> BIENVENIDOS <?php echo $_SESSION['nombre']; ?></title>
    <link rel="stylesheet" href="CSS/estilo3.css">
    <link rel="icon" href="Img/jk.png">
    <link rel="short icon"  href="Img/joker.png">
</head>
<body>

<header class="header">
  <div class="container">
           <div class="logo">
              <img src="Img/pl.png" width="300px" height="">
           </div>
           <nav class="menu">
                 <ul>
                   <li><a href="Inicio.html"> INCIO </a></li>
                   <li><a href="#"> Perfil <i class="icon-abajo2"></i></a>
                   <ul class="submenu">
                       <li><a href="cambiar_password.php"> Cambiar Contraseña  </a></li>
                       <li><a href="Buscar_usuario.php"> Buscar Usuarios </a></li>
                       <li><a href="Mostrar_usuarios.php"> Ver Usuario </a></li>
                       <l1><a href="Formulario_registro.php">Ingresar Usuario</a></l1>
                       <li><a href="Cerrar_sesion.php"> Cerrar Sesion </a></li>
                       
                   </ul>
                   </li>
                   
               </ul>
           </nav>
  </div>

</header>
    <center>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h1 style="font-size: 100px; color: greenyellow;">  Les doy la Bienvenida  <?php echo $_SESSION['nombre']; ?> <br>
    <h2 style="font-size: 100px; color: greenyellow;"> a este mundo nuevo. </h2>
    <br><br>
    
    <div class="slider-container">  
   

 <a href="play_station.php"><img 
    class="slider-item"
    src="Img/plays.jpg"
    width="300px"
     
    /></a>
<a href="nintendo.php"><img

    class="slider-item"
    src="Img/ni.jpg"
    width="300px"
     
  /></a>
  
<a href="xbox.php"><img
    class="slider-item"
    src="Img/xbo.jpg"
    width="300px"
     
  /></a>


</div>  



    </h1>
    
    <!--<a href="cerrar_sesion.php" class="cerrar">Cerrar Sesion</a>-->
    </center>
</body>
</html>