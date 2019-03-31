<!DOCTYPE html > 
<head> 
    <meta charset="utf-8" /> 
    <style>
         body{
            background:black;
            color: pink;
        }
        
        th, td {
            padding: 15px;
        }
    </style>
    </head>

        <body>

 <?php

//Como en las practicas anteriores he usado la sentencia isset ya que en algunos casos no se mandaran todos los indices y asi evitarnos warning.

        //Aqui recogemos los valores que insertamos en el formulario
        $identifica = isset($_POST['identi']) ? $_POST['identi'] : '';
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
        $fechanacimiento = isset($_POST['fechadenacimiento']) ? $_POST['fechadenacimiento'] : '';
        $modulo = isset($_POST['modulo']) ? $_POST['modulo'] : '';
        $ciclos = isset($_POST['ciclo']) ? $_POST['ciclo'] : '';

        //Aqui recogemos los botones

        //Este boton da paso al IF de la consulta de alumnos del principio y tambien la consulta final cuando ya se han realizado las actualizaciones.
        $listado = isset($_POST['consulta']) ? $_POST['consulta'] : '';

        //Este boton envia los datos del formulario y da paso al IF correspondiente
        $envio = isset($_POST['envio']) ? $_POST['envio'] : '';

        //Este boton da paso al IF de la INSERCION que se quiera hacer.
        $inserta = isset($_POST['inser']) ? $_POST['inser'] : '';
        

        //Pasamos los datos de conexion de la BD.
        require("conexion.php");

        //He usado el usuario pelusa y contraseña pelusa el cual en mi gestor de base de datos tiene todos los privilegios.
        //Generamos la conexion con los datos correspondientes

        $conexion = mysqli_connect($db_host,$db_usuario,$db_password,$db_bd) or die ('No se ha establecido conexion.');

        //sigo la misma logica del UPDATE el primer IF hace una consulta que no es obligatoria pero esta de ayuda al usuario, el segundo IF ejecuta el insertado del alumno cuando se vuelva a cargar la pagina
        //activando el boton de envio definido al final del script


        //Este condicional se activa solo con el boton del formulario Principal 
        //luego se volvera a activar con la llamada del ultimo boton para comprobar que se ha insertado el usuario correctamente 
  
        //Si no esta vacio (Si se pulsa el boton lista de alumnos) y el value de ese boton es lista de alumnos entonces y solo entonces entraria en este condicional
        //Este es es practicamente igual que el del borrado y el update

         if ((isset($listado)) and ($listado == "Lista de alumnos")){

            //Definimos la consulta lista de alumnos en el que recogemos todos los campos para mostrarselos al usuario
            $comprueba = "SELECT IDENTIFICADOR,NOMBRE,APELLIDOS,MODULO,CICLOFORMATIVO,FECHANACIMIENTO FROM matriculados ORDER BY IDENTIFICADOR ASC";

                    //Damos la orden de ejecucion de la consulta
                     $ejecu = mysqli_query($conexion,$comprueba);
                        
                         //Permitimos uso de caracteres especiales
                          mysqli_set_charset($conexion,"utf-8");

                             //Para darle mas clase al ejercio he definido una tabla donde almacenar todo igual que en el update pero mas completa 
                              echo "<table align = 'center' bordercolor= 'black'>";
                              echo "<tr><td><h3>LA LISTA DE ALUMNOS ES LA SIGUIENTE: </td></tr></h3>";
                              echo "</table>";

                            //estilos y demas.
                                echo "<table border = '1' width='70%' border='1px' align='center' bordercolor = 'white'><tr><th>IDENTIFICADOR:</th><th>NOMBRE:</th><th>APELLIDOS:</th><th>FECHA DE NACIMIENTO:</th><th>MODULO:</th><th>CICLO FORMATIVO:</th></tr>";

                                    //Ahora recogemos los datos de la consulta en un array asociativo y lo almacenamos en las celdas y filas de la tabla definida
                                    while($fila = mysqli_fetch_array($ejecu,MYSQLI_ASSOC)){


                                        //Aqui recogemos los datos recorridos con el bucle while cada indice equivale al nombre de las filas en la base de datos
                                        echo "<tr><td>" . $fila['IDENTIFICADOR'] . "</td>";
                                        echo "<td>" . $fila['NOMBRE'] .  "</td>";
                                        echo "<td>" . $fila['APELLIDOS'] .  "</td>";
                                                    //Modificamos la salida de la fecha para que se muestre como nos pide la practica dia,mes y año.                                        
                                        echo "<td>" . date('d-m-Y', strtotime($fila['FECHANACIMIENTO'])) .  "</td>";
                                        echo "<td>" . $fila['MODULO'] .  "</td>";
                                        echo "<td>" . $fila['CICLOFORMATIVO'] .  "</td</tr>";

                                    }   
        
        
        
                                echo "</table>";
                                echo "</br>";
                                
                                  //He definido otra tabla con informacion para el usuario y el enlace para volver al formulario
                                  echo "<table border = '1' align = 'center' bordercolor= 'white'><tr><th>INFORMACION:</th><th>FORMULARIO:</th></tr>";
                                  echo "<tr><td>Por favor compruebe que el alumno a dar de alta no existe en la base de datos y haga click en el siguiente enlace para darle de alta.</td>";
                                  echo "<td><a href = '06InsertarAlumnosFormulario.html'> Volver al formulario.</td></tr></a>";
                                  echo "</table>";
       }

       //Este es el IF que ejecuta la inserccion que solo se activa una vez comprobado todo, en un principio pasa de largo
       //Una vez que los datos han sido comprobados y el usuario ha rellenado los datos de alumno a dar de alta, al pulsar el boton Dar de alta entraria este if que ejecutaria la insercion del alumno

       if ((isset($inserta)) and ($inserta == "Dar de alta")) {

        //Definimos la consulta de insercion
          $alta = "INSERT INTO matriculados (IDENTIFICADOR,NOMBRE,APELLIDOS,FECHANACIMIENTO,MODULO,CICLOFORMATIVO) VALUES ('$identifica','$nombre','$apellidos','$fechanacimiento','$modulo','$ciclos') ";

            //Ejecutamos la insercion
              mysqli_query($conexion,$alta);

                //Mostramos el mensaje de confirmacion

                echo "<table align = 'center' bordercolor= 'black'>";
                echo "<tr><td><h3>ALUMNO DADO DE ALTA CORRECTAMENTE: </h3></td></tr></table>";

                echo "<form action='06InsertarAlumnos.php' method='POST'>";
                echo "<table border ='1' align = 'center' bordercolor= 'white'><tr><th>INFORMACION:</th><th>LISTA DE ALUMNOS:</th></tr>";
                echo "<tr><td>Alumno dado de alta correctamente, pulse en el siguiente boton para comprobar que ha sido dado de alta correctamente.</td>";

                //Aqui he reutilizado el boton del formulario HTML puesto que no es necesario generar una nueva consulta, por eso este if y el anterior estan al principio
                //Como en un inicio esto pasa de largo en la primera ejecucion es mas logico ponerlo aqui para que en la segunda ejecucion si se cumplen las condiciones se pare y ejecute esto  
                echo "<td><input type='submit' name = 'consulta' value='Lista de alumnos' /></td></tr></form>";
                echo "</table>";

       }


        //si el boton envio no esta vacio y su value coincide con Enviar datos se pasa a comprobar 
           //que si alguno de los campos del formulario no han sido rellenados se muestre un mensaje de error al usuario

           if((isset($envio)) and ($envio == "Enviar Datos") and ($identifica == '' or $nombre == '' or $apellidos == '' or $fechanacimiento == '' or $modulo == '' or $ciclos == '')) {

            //Si alguno de estos campos estan vacios se muestra un mensaje de error y se da al usuario la opcion de volver al formulario principal 
            
                    //Creamos un par de tablas para mostrar bien los mensajes

                    echo "<table align = 'center' bordercolor= 'black'>";
                    echo "<tr><td><h3>ERROR AL INTRODUCIR LOS CAMPOS: </h3></td></tr></table>";

                     echo "<table border ='1' align = 'center' bordercolor= 'white'><tr><th>INFORMACION:</th><th>FORMULARIO:</th></tr>";
                     
                     echo "<tr><td>Por favor asegurese que rellena todos los campos.</td>";
                     echo "<td><a href = '06InsertarAlumnosFormulario.html'> Volver al formulario.</td></tr></a>";
                     echo "</table>";

          //La condicion contraria si todos sus campos estan rellenos y son iguales a los introducidos en el formulario entraria este IF en accion   
        } elseif ((isset($envio)) and ($envio == "Enviar Datos") and ($identifica == $identifica and $nombre == $nombre and $apellidos == $apellidos and $fechanacimiento == $fechanacimiento and $modulo == $modulo and $ciclos == $ciclos)){
               
            
                        //Buscamos por identificador ya que es lo unico que no se puede repetir
                         $consulta = "SELECT IDENTIFICADOR FROM matriculados WHERE IDENTIFICADOR LIKE '$identifica'";

                        //Ejecutamos la consulta
                          $ejecucion = mysqli_query($conexion,$consulta);

       

                //Si no devuelve ninguna fila la consulta es que el usuario no existe y por tanto se paso a este if.
                if  ($ejecucion->num_rows <= 0){


                     //Generamos una tabla para que el usuario vea los datos completos del alumno que se va a dar de alta.
                     echo "<table align = 'center' bordercolor= 'black'>";
                     echo "<h3><tr><td>DATOS DEL ALUMNO QUE SE VA A DAR DE ALTA: </td></tr></h3>";
                     echo "</table>";

                       //Abrimos la tabla con la cabecera y los datos del alumno a dar de alta
                       echo "<table border = '1' width='70%' border='1px' align='center'><tr><th>IDENTIFICADOR:</th><th>NOMBRE:</th><th>APELLIDOS:</th><th>FECHA DE NACIMIENTO:</th><th>MODULO:</th><th>CICLO FORMATIVO:</th><th>INFORMACION:</th><th>FORMULARIO:</th><th>DAR DE ALTA:</th></tr>";

                                  //Generamos la tabla para ver los datos, no modificables, si el usuario se equivoca debe volver la formulario para comprobar todo correctamente evitando fallos en el programa.

                                    echo "<form action= '06InsertarAlumnos.php' method = 'POST'>";

                                    echo "<tr><td><input type ='text' name ='identi' value ='" . $identifica ."' readonly ></td>";
                                    echo "<td><input type ='text' name ='nombre' value ='" . $nombre ."' readonly ></td>";
                                    echo "<td><input type ='text' name ='apellidos' value ='" . $apellidos ."' readonly ></td>";
                                    echo "<td><input type ='text' name ='fechadenacimiento' value ='" . $fechanacimiento ."' readonly ></td>";
                                    echo "<td><input type ='text' name ='modulo' value ='" . $modulo ."'  readonly ></td>";
                                    echo "<td><input type ='text' name ='ciclo' value ='" . $ciclos ."' readonly ></td>";
                                    echo "<td>¡IMPORTANTE! Si los datos no son correctos pulse para volver al formulario y rellene los datos correctamente. </td>";
                                    echo "<td><a href = '06InsertarAlumnosFormulario.html'> Volver al formulario.</a></td></br>";

                                    //Boton que vuelve al principio y realiza la consulta definida al principio del script
                                    echo "<td><input type ='submit' name ='inser' value ='Dar de alta'></td></tr>"; 
                                    echo "</form>"; 
                                    echo"<p/>";

                            

                       echo"</table>";
                   

                            
              } else {
                           
                                                            
                   //Por el contrario si se devuelve alguna fila en la consulta quiere decir que ese identificador ya esta registrado y por tanto no es posible su inserccion al estar definida
                   //en la BD como clave primaria.

                    echo "<table align = 'center' bordercolor= 'black'>";
                    echo "<h3><tr><td>FALLO EN LA CONSULTA: </td></tr></h3>";
                    echo "</table>";

                    echo "<table border = '1' width='70%' border='1px' align='center'><tr><th>INFORMACION:</th><th>FORMULARIO:</th></tr>";
                    echo "<tr><td>¡IMPORTANTE! El alumno existe en la base de datos, preste atencion y rellene el identificador correctamente.</td></br>";
                    echo "<td><a href = '06InsertarAlumnosFormulario.html'> Volver al formulario.</a></td></tr></table></br>";

    
                                    
                }
                
        
            }

        

            //Cerramos la conexion 
            mysqli_close($conexion);

 ?>
 
</body>
</html>