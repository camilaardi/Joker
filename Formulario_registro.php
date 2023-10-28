<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> REGISTRO USUARIO </title>
	<link rel="stylesheet" type="text/css" href="css/estilo2.css">
	<link rel="short icon"  href="IMG/jk.png">
	 <style type="text/css">
            .imag{
              position: absolute;
              left: 500px;
              top: 110px;

            }

      </style>
</head>
<body>

	<a href="Inicio.php"></a>
		<h1> <center> REGISTRO USUARIO</center> </h1>

<div class="formulario_registro">
	<div class="form">
				
	   <form method="post" action="Registrar_roles.php">
	   	<p>
	   	Nombre 	
	   	<input type="text" name="nombre" placeholder="Nombre" class="field">	
	   	</p>
	   	<p>
	   	Apellidos
	   	<input type="text" name="apellido" placeholder="Apellidos" class="field">	
	   	</p>
	   	<p>
	   	Usuario 
	   	<input type="text" name="usuario" placeholder="Usuario" class="field">	
	   	</p>
	   	<p>
	   	Correo
	   	<input type="email" name="correo" placeholder="Ingresar correo" class="field">
	    </p>	
	   	<p>
	   	Contraseña
	   	<input type="password" name="pass" placeholder="Contraseña" class="field">	
	   	</p>
	   	<center><select name="tipo_user" id="tipo_user">


            <option value="user"> Usuario </option>
            <option value="Admin"> Administrador </option>
         </select></center>
         <br><br><br>
	     <input type="submit" name="" value="Registrar" class="btn-green"> <br>
	   	<center><a href="Login.php"> Ya tengo una cuenta? </b></a></center>
	   </form>
       <br>
       
  </div>
</div>



</body>
</html>