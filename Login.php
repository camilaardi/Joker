<!DOCTYPE html>
<html>
<head>
	<title> LOGIN </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo1.css">
      
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="short icon"  href="IMG/jk.png">
      
</head>
<body>
    <a href="Inicio.php"><i class='bx bx-arrow-back'></i></a>

 <div class="formularios">
	<form method="post" action="Logear.php">

		<h1 class="title">Iniciar Sesion </h1>
              <p> USUARIO </p>
                  <i class="fa-solid fa-user fa-lg" aria-hidden="true"></i> 
                  <input type="text" name="usuario" placeholder="Ingresar usuario" class="field">
                  <p> PASSWORD </p> 
                  <i class="fa fa-key fa-lg" aria-hidden="true"></i>
                  <input type="password" name="password" placeholder="********" class="field">
                  <br><br>
                  <p class="center-content">
                  <input type="submit" name="" value="Iniciar Sesion" class="btn btn-green">
                  <br><br>
             <a href="Formulario_registro.php">Olvidaste tu cuenta</a>
             <b>|</b>
             <a href="Formulario_user.php"> Registrar cuenta </a>

            </p>
      </form>
			
 </div>
</body>
</html>


