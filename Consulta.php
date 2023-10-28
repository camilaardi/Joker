<?php

include('Conexion.php');

    $respuesta = $_POST["repassword"];
     $consulta = "select * from 'tabla' where 'campo'= '$respuesta'  LIMIT 1";

    $result = mysql_query($consulta);
   if(mysql_num_rows($result)>0):

         /*
          * si la respuesta es correcta le puede enviar una nueva contraseña o darsela en el   
          * momento que solo dure unas pocas horas para que solo entre y cambie la contraseña
          *
          */
   echo "Respuesta Correcta";

   else:

   
   echo "Respuesta incorrecta";

   endif;


   ?>
