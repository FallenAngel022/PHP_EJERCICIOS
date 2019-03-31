<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   
<?php

      //Si no esta vacio se presenta el formulario para rellenar

      if (!$_POST) {

?>

  <form action="#" method="POST">

    Nombre:  <input type="text" name="nombre"/> <br/>
    
    Contraseña:   <input type="password" name="contraseña"/> <br/>


      <input type="submit" value="Envio" />
      <input type="reset" value="Reiniciar" />
    
      <?php 

      } else {

          $nom = $_POST['nombre'];
          $con = $_POST['contraseña'];

          //simulamos la base de datos

        if ($nom != "pepe" || $con != "pepe"){

            echo "Usuario y contraseña incorrectos </br>";
            echo "<a href= '03formularioenviorecepcion.php'> Regresar al formulario inicial</a>";

        } else {


          echo "datos correctos";

        }


      }

      ?>
    
    

   </form>
  
  

</body> 
</html>