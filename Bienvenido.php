<?php
session_start();
if (isset($_SESSION["usuario"])) {
//si no existe, va a la página de autenticacion
//echo $_SESSION["Nombre"];
}else{
  header("Location:Login.php");
//salimos de este script
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title> BIENVENIDO </title>
  <meta charset="utf-8">
   <link rel="stylesheet" href="css/estilo4.css">
   <link rel="icon" href="imagenes/NA.png">
 <link rel="short icon" type="text/css" href="IMG/jk.png">
<link rel="stylesheet" type="text/css" href="css/style8.css">
    <link rel="short icon" type="text/css" href="IMG/jk.png">
</head>
<body>

 <header class="header">

  

  <div class="container">
    
           <nav class="menu">
                 <ul>
                   <li><a href="Inicio.php">Inicio</a></li>
                   <li><a href="#"> Perfil <i class="icon-abajo2"></i></a>
                   <ul class="submenu">
                       <li><a href="Cerrar_sesion.php"> Cerrar sesion </a></li>
                        <li><a href="Emuladores.php"> Emuladores </a></li>
                   </ul>
               </ul>
           </nav>
  </div>

</header>

</header>
<br>

   <center>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1 style="font-size: 90px; color: purple;"> Bienvenido(a), <?php echo $_SESSION['usuario']; ?> <br>
    <h3 style="font-size: 70px; color: purple;"> ¿Qué deseas jugar hoy? </h2>
     <br><br><br>




    
    
    <!--<a href="cerrar_sesion.php" class="cerrar">Cerrar Sesion</a>-->
    </center>

    <main class="product container">
        <h2> JUEGOS </h2>

        <div class="product-content">

            <div class="product-1">
                <img src="imagee/ajedrez.jpg" alt="">
                <div class="product-text">
                    <h3>AJEDREZ</h3>
                    <a href="JUEGOS/AJEDREZ/ajedrez.html" class="btn-2"> Jugar </a>
                </div>
            </div>

            <div class="product-1">
                <img src="imagee/carro.jpg" alt="">
                <div class="product-text">
                    <h3>CARRERA</h3>
                    <a href="JUEGOS/CARRO/carro.html" class="btn-2"> Jugar </a>
                </div>
            </div>

            <div class="product-1">
                <img src="imagee/galaxy.png" alt="">
                <div class="product-text">
                    <h3> GALAXY ATTACK</h3>
                    <a href="JUEGOS/GALAXY ATTACK/index.html" class="btn-2"> Jugar </a>
                </div>
            </div>


            <div class="product-1">
                <img src="imagee/flappy.png" alt="">
                <div class="product-text">
                    <h3>FLAPPY BIRD</h3>
                    <a href="JUEGOS/PAJARO/index.html" class="btn-2"> Jugar </a>
                </div>
            </div>

            <div class="product-1">
                <img src="imagee/pong.png" alt="">
                <div class="product-text">
                    <h3>PIN PONG</h3>
                    <a href="JUEGOS/PONG/index.html" class="btn-2"> Jugar </a>
                </div>
            </div>

            <div class="product-1">
                <img src="imagee/sna.jpg" alt="">
                <div class="product-text">
                    <h3>JUEGO DE SERPIENTE</h3>
                    <a href="JUEGOS/SERPIENTE/index.html" class="btn-2"> Jugar </a>
                </div>
            </div>

            <div class="product-1">
                <img src="imagee/pac.jpg" alt="">
                <div class="product-text">
                    <h3>PACMAN</h3>
                    <a href="JUEGOS/PACMAN/pacman.html" class="btn-2"> Jugar </a>
                </div>
            </div>

            <div class="product-1">
                <img src="imagee/tetris.jpg" alt="">
                <div class="product-text">
                    <h3>TETRIS</h3>
                    <a href="JUEGOS/TETRIS/index.html" class="btn-2"> Jugar </a>
                </div>
            </div>

            <div class="product-1">
                <img src="imagee/batalla.jpg" alt="">
                <div class="product-text">
                    <h3>BATALLA</h3>
                    <a href="JUEGOS/BATALLA/index.html" class="btn-2"> Jugar </a>
                </div>
            </div>
        </div>

        

        </div>
        
    </main>

    <section class="contact container">
        
        <div class="contact-content">
            <h3> Suscribete a nuestra pagina</h3>
            <form>
                <input type="email" placeholder="Escribe tu correo" >
                <input type="submit" class="btn-3" value="Enviar">
            </form>
        </div>
    </section>

    

</body>
</html>