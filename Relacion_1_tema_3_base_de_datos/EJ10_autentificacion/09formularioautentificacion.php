<?php

    session_start();

    include_once "/opt/lampp/htdocs/php/DATOS_CONEXION_PHP/conexion1.php";



  ?>  

<!DOCTYPE html > 
<head> 
    <meta charset="utf-8" /> 
    <title>Conexion a BD</title> 
    <style type="text/css">
  
        body{
            background:black;
            color: pink;
        }
        </style>  
    
</head>   
<body>   

  <form action="09formularioautentificacion.php" method="POST">

    <fieldset>

    <legend><h3>SISTEMA DE AUTENTIFICACION BASICO: </h3></legend>

    <table>
    
    <tr>
        <td>
            
     USUARIO:  
     
     <br/>
    <input type="text" name="usuario" required /> 
    <br/>
    <br/>

    CONTRASEÑA:

    <br/>
    <input type="password" name="contrasenia" required /> 
    <br/>
    <br/>

    REPITE LA CONTRASEÑA:
    
    <br/>
    <input type="password" name="repitecontrasenia" required /> 
    <br/>
    <br/>


    </td>
    </tr>
    
    
    </table>
    <input type="submit" name="enviar" value="Autenticarse" /> 
    </fieldset>
       

 </form>

 <?php

        if (isset($_POST['enviar'])){
            
            $consulta = "SELECT * FROM usuarios";
            $resultado = mysqli_query($conexion,$consulta);

            //si es 0 no se inserta si es 1 si

            $verificar_usuario = 0;

            while($result=mysqli_fetch_object($resultado)){

                //comparamos si lo que se envia en el formulario y lo que hay
                //en la base de datos existe

                if($result->usuario==$_POST['usuario']){

                    $verificar_usuario = 1;

                }

            }    
                
                
                
                if($verificar_usuario==0){

                    if(($_POST['contrasenia']==$_POST['repitecontrasenia'])){

                        $usuario = $_POST['usuario'];
                        $contrasenia = $_POST['contrasenia'];
                        
                        $insercion = "INSERT INTO usuarios(usuario,contrasenia) 
                                      VALUES('$usuario','$contrasenia')";

                        mysqli_query($conexion,$insercion);

                        echo "Se ha registrado correctamente </br>";

                    } else {

                        echo"Las contraseñas no son iguales </br>";

                         }
                
                } else {

                    echo "El usuario ya existe en la BD";

                }

        }


    ?>    
 
 </body>

 </html>