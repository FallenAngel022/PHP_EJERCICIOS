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

        //Como en las practicas anteriores he usadado la sentencia isset ya que en algunos casos no se mandaran todos los indices y asi evitarnos warning.

        //Aqui recogemos los valores que insertamos en el formulario
        $modulo = isset($_POST['modulo']) ? $_POST['modulo'] : '';
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';

        //Aqui recogemos los botones

        //Este boton da paso al IF de la consulta de alumnos del principio y tambien la consulta final cuando ya se han realizado las actualizaciones.
        $listado = isset($_POST['consulta']) ? $_POST['consulta'] : '';

        //Este boton envia los datos del formulario y da paso al IF correspondiente
        $envio = isset($_POST['envio']) ? $_POST['envio'] : '';

        //Este boton da paso al IF del UPDATE que se quiera hacer.
        $actualizacion = isset($_POST['actualiza']) ? $_POST['actualiza'] : '';
        

        //Pasamos los datos de conexion de la BD.
        require("conexion.php");

        //He usado el usuario pelusa y contraseña pelusa el cual en mi gestor de base de datos tiene todos los privilegios.
        //Generamos la conexion con los datos correspondientes

        $conexion = mysqli_connect($db_host,$db_usuario,$db_password,$db_bd) or die ('No se ha establecido conexion.');

        //Estos dos IF definidos a continuacion van separados de los demas puesto que en el primero se realiza una consulta de ayuda al usuario y no es obligatoria que la realice, el segundo 
        //IF lo he tenido que separar porque al reutilizar el boton de consulta del primer IF no muestra nada si lo pones al final, por tanto he decidido separar ambos IF 
        //Ya que al ejecutarse de manera secuencial todo y segun como lo he planteado yo es mejor ponerlo al principio.


        //Este condicional se activa solo con el boton del formulario Principal 
        //(Mas adelante se vuelve a activar pero cuando se haya realizado la inserccion y se pulse el boton corrrespondiente) 
  
        //Si no esta vacio (Si se pulsa el boton lista de alumnos) y el value de ese boton es lista de alumnos entonces y solo entonces entraria en este condicional

         if ((isset($listado)) and ($listado == "Lista de alumnos")){

            //Definimos la consulta lista de alumnos
            $comprueba = "SELECT NOMBRE,APELLIDOS,MODULO FROM matriculados";

                    //Damos la orden de ejecucion de la consulta
                     $ejecucion = mysqli_query($conexion,$comprueba);
                        
                         //Permitimos uso de caracteres especiales
                          mysqli_set_charset($conexion,"utf-8");

                             //Para darle mas clase al ejercio he definido una tabla donde almacenar todo
                              echo "<table align = 'center' bordercolor= 'black'>";
                              echo "<tr><td><h3>LA BASE DE DATOS CONTIENE ESTOS REGISTROS: </td></tr></h3>";
                              echo "</table>";

                            //estilos y demas.
                                echo "<table border = '1' width='70%' border='1px' align='center' bordercolor = 'white'><tr><th>NOMBRE:</th><th>APELLIDOS:</th><th>MODULO:</th></tr>";

                                    //Ahora recogemos los datos de la consulta en un array asociativo y lo almacenamos en las celdas y filas de la tabla definida
                                    while($fila = mysqli_fetch_array($ejecucion,MYSQLI_ASSOC)){


                                        //Aqui recogemos los datos recorridos con el bucle while cada indice equivale al nombre de las filas en la base de datos
                                        echo "<tr><td>" . $fila['NOMBRE'] . "</td>";
                                        echo "<td>" . $fila['APELLIDOS'] .  "</td>";
                                        echo "<td>" . $fila['MODULO'] .  "</td</tr>";

                                    }   
        
        
        
                                echo "</table>";
                                echo "</br>";
                                
                                  //He definido otra tabla con informacion para el usuario y el enlace para volver al formulario
                                  echo "<table border = '1' align = 'center' bordercolor= 'white'><tr><th>INFORMACION:</th><th>FORMULARIO:</th></tr>";
                                  echo "<tr><td>Apunte los datos del alumno que desea actualizar y haga click en el siguiente enlace.</td>";
                                  echo "<td><a href = '04ActualizaModulo.html'> Volver al formulario.</td></tr></a>";
                                  echo "</table>";


        //Este IF seria el ultimo en ejecutarse en la actualizacion permitiendo la consulta del listado de alumnos para comprobar si el modulo en cuestion se ha actualizado.
        //Si el boton del formulario no esta vacio y el value enviado coincide con Actualizar registro entonces entra.
       } if ((isset($actualizacion)) and ($actualizacion == "Actualizar registro")) {

            //Definimos la consulta de actualizacion
              $actu = "UPDATE matriculados SET MODULO = '".$modulo."' where NOMBRE = '".$nombre."' AND APELLIDOS = '".$apellidos."'";

                //Ejecutamos la actualizacion
                  mysqli_query($conexion,$actu);

                    //Mostramos el mensaje de confirmacion

                    echo "<table align = 'center' bordercolor= 'black'>";
                    echo "<tr><td><h3>DATOS ACTUALIZADOS CORRECTAMENTE: </h3></td></tr></table>";

                    echo "<form action='04ActualizaModulo.php' method='POST'>";
                    echo "<table border ='1' align = 'center' bordercolor= 'white'><tr><th>INFORMACION:</th><th>LISTA DE ALUMNOS:</th></tr>";
                    echo "<tr><td>Datos actualizados, pulse en el siguiente boton para comprobar su correcta actualizacion.</td>";

                    //Aqui he reutilizado el boton del formulario HTML puesto que no es necesario generar una nueva consulta, por eso este if y el anterior estan al principio
                    //Como en un inicio esto pasa de largo en la primera ejecucion es mas logico ponerlo aqui para que en la segunda ejecucion si se cumplen las condiciones se pare y ejecute esto  
                    echo "<td><input type='submit' name = 'consulta' value='Lista de alumnos' /></td></tr></form>";
                    echo "</table>";
                     
    }
            //si el boton envio no esta vacio y su value coincide con Actualizar modulo se pasa a comprobar 
           //que tanto el nombre los apellidos y el modulo no esten vacios de no ser asi se mostraria el mensaje de error correspondiente.

        if((isset($envio)) and ($envio == "Actualizar modulo") and ($nombre == '' or $apellidos == '' or $modulo == '')) {

            //Si alguno de estos campos estan vacios se muestra un mensaje de error y se da al usuario la opcion de volver al formulario principal 
            
                    //Creamos un par de tablas para mostrar bien los mensajes

                    echo "<table align = 'center' bordercolor= 'black'>";
                    echo "<tr><td><h3>ERROR AL INTRODUCIR LOS CAMPOS: </h3></td></tr></table>";

                     echo "<table border ='1' align = 'center' bordercolor= 'white'><tr><th>INFORMACION:</th><th>FORMULARIO:</th></tr>";
                     
                     echo "<tr><td>Por favor asegurese que rellena todos los campos y que sean correctos.</td>";
                     echo "<td><a href = '04ActualizaModulo.html'> Volver al formulario.</td></tr></a>";
                     echo "</table>";

          //La condicion contraria si todos sus campos estan rellenos y son iguales a los introducidos en el formulario entraria este IF en accion   
        } elseif ((isset($envio)) and ($envio == "Actualizar modulo") and ($nombre == $nombre and $apellidos == $apellidos and $modulo == $modulo))  {
               
                        //Para evitar errores innecesarios definimos una consulta muy completa: que coincida lo introducido en el formulario con lo que hay en la base de datos
                        //apunte: busca coincidencias no palabras completas es una busqueda compleja pero no exacta por inicial de nombre tambien buscaria ademas de por la palabra exacta.
                         $consulta = "SELECT NOMBRE,APELLIDOS,MODULO FROM matriculados WHERE MODULO LIKE '%$modulo%' AND NOMBRE LIKE '%$nombre%' AND APELLIDOS LIKE '%$apellidos%' ";

                        //Ejecutamos la consulta
                          $ejecucion = mysqli_query($conexion,$consulta);

        

                //Como ya hemos comprobado que los campos se pasan rellenos completamente, comprobamos con este condicional que si la consulta devuelve como minimo 1 fila en la consulta se ejecutaria lo de dentro de este IF.
                if  ($ejecucion->num_rows > 0){

                            //Una vez dentro de este IF mostramos al usuario en una tabla ordenada el usuario requerido con nombre y apellidos y el campo modulo vacio para que se rellene y cambien en la base de datos
                              echo "<table align = 'center' bordercolor= 'black'>";
                              echo "<h3><tr><td>INTRODUZCA EL MODULO DE ALTA: </td></tr></h3>";
                              echo "</table>";

                            //Abrimos la tabla fuera por si se devuelve mas de un alumno evitando repetir la cabecera muchas veces
                                echo "<table border = '1' width='70%' border='1px' align='center'><tr><th>NOMBRE:</th><th>APELLIDOS:</th><th>MODULO:</th><th>INFORMACION:</th><th>FORMULARIO:</th><th>ACTUALIZAR:</th></tr>";
    
                                  //Guardamos la consulta en un array para recorrer todos sus datos en un bucle while, definiendo este como un array asociativo
    
                                    while($fila = mysqli_fetch_array($ejecucion, MYSQLI_ASSOC)){
    
                                            //Generamos el formulario para que muestre el nombre y apellidos del alumno que no es posible modificar y el campo modulo vacio para introducir el modulo que se quiere dar de alta

                                             echo "<form action= '04ActualizaModulo.php' method = 'POST'>";

                                             echo "<tr><td><input type ='text' name ='nombre' value ='" . $fila['NOMBRE'] ."' readonly ></td>";
                                             echo "<td><input type ='text' name ='apellidos' value ='" . $fila['APELLIDOS'] ."' readonly ></td>";
                                             echo "<td><input type ='text' name ='modulo'  required ></td>";
                                             echo "<td>¡IMPORTANTE! Asegurese de cambiar el modulo. </td>";
                                             echo "<td><a href = '04ActualizaModulo.html'> Volver al formulario.</a></td></br>";

                                             //Boton que vuelve al principio y realiza la consulta definida al principio
                                             echo "<td><input type ='submit' name ='actualiza' value ='Actualizar registro'></td></tr>"; 
                                             echo "</form>"; 
                                             echo"<p/>";

                                    } 

                                echo"</table>";

              } else {
                            //Por el contrario si la consulta no devuelve ninguna fila es que no hay coincidencias en la base de datos y por tanto se le permite al usuario 
                            //volver al principio del formulario y consultar la base de datos de nuevo para introducir los datos correctamente.

                              echo "<table align = 'center' bordercolor= 'black'>";
                              echo "<h3><tr><td>FALLO EN LA CONSULTA: </td></tr></h3>";
                              echo "</table>";
    
                              echo "<table border = '1' width='70%' border='1px' align='center'><tr><th>INFORMACION:</th><th>FORMULARIO:</th></tr>";
                              echo "<tr><td>¡IMPORTANTE! El modulo introducido no existe o el usuario no esta registrado, vuelva al formulario y pulse lista de alumnos.</td></br>";
                              echo "<td><a href = '04ActualizaModulo.html'> Volver al formulario.</a></td></tr></table></br>";
                                                            
                                       
    
                                    
                }
                
        
            }

            //Cerramos la conexion 
            mysqli_close($conexion);


           ?>
           
    </body>
    </html>
    