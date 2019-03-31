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

//Recogemos el boton del formulario que da paso al listado de alumnos, combinamos con ISSET para evitarnos warnning, realmente nunca va a llegar sin indice pero no esta de mas ponerlo.
$listado = isset($_POST['consulta']) ? $_POST['consulta'] : '';

//Pasamos los datos de conexion de la BD.
require("conexion.php");

//He usado el usuario pelusa y contraseña pelusa el cual en mi gestor de base de datos tiene todos los privilegios.
//Generamos la conexion con los datos correspondientes

$conexion = mysqli_connect($db_host,$db_usuario,$db_password,$db_bd) or die ('No se ha establecido conexion.');

//Comprobamos que se pulsa el boton correspondiente y se envia Lista de alumnos dentro de ese boton de ser asi, entramos en el if

 if ((isset($listado)) and ($listado == "Lista de alumnos")){

    //Definimos la consulta lista de alumnos en el que recogemos todos los campos para mostrarselos al usuario
    $comprueba = "SELECT IDENTIFICADOR,NOMBRE,APELLIDOS,MODULO,CICLOFORMATIVO,FECHANACIMIENTO FROM matriculados ORDER BY IDENTIFICADOR ASC";

            //Damos la orden de ejecucion de la consulta
             $ejecu = mysqli_query($conexion,$comprueba);
                
                 //Permitimos uso de caracteres especiales
                  mysqli_set_charset($conexion,"utf-8");

                  //Si la consulta devuelve alguna fila quiere decir que hay registros y por tanto entra en este if y muestra los registros de la Base de datos.

                  if($ejecu->num_rows >0){

                     //Para darle mas clase al ejercio he definido una tabla donde almacenar todo igual que en el update pero mas completa 
                      echo "<table align = 'center' bordercolor= 'black'>";
                      echo "<tr><td><h3>LA LISTA DE ALUMNOS ES LA SIGUIENTE: </td></tr></h3>";
                      echo "</table>";

                    //estilos y demas.
                        echo "<table border = '1' width='70%' border='1px' align='center' bordercolor = 'white'><tr><th>IDENTIFICADOR:</th><th>NOMBRE:</th><th>APELLIDOS:</th><th>FECHA DE NACIMIENTO:</th><th>MODULO:</th><th>CICLO FORMATIVO:</th></tr>";

                            //Ahora recogemos los datos de la consulta en un array asociativo y lo almacenamos en las celdas y filas de la tabla definida
                            while($fila = mysqli_fetch_array($ejecu,MYSQLI_ASSOC)){


                                //Aqui recogemos los datos recorridos con el bucle while, cada indice equivale al nombre de las filas en la base de datos
                                echo "<tr><td>" . $fila['IDENTIFICADOR'] . "</td>";
                                echo "<td>" . $fila['NOMBRE'] .  "</td>";
                                echo "<td>" . $fila['APELLIDOS'] .  "</td>";
                                            //Modificamos la salida de la fecha para que se muestre como nos pide la practica dia,mes y año.                                        
                                echo "<td>" . date('d-m-Y', strtotime($fila['FECHANACIMIENTO'])) .  "</td>";
                                echo "<td>" . $fila['MODULO'] .  "</td>";
                                echo "<td>" . $fila['CICLOFORMATIVO'] .  "</td</tr>";

                            }

                            //Si no devuelve ninguna fila no hay registros y por tanto definimos un mensaje de error con una solucion al usuario
                            //Borra todos los registros y deja la base vacia para que salte este error.

                        } else {

                            echo "<table align = 'center' bordercolor= 'black'>";
                              echo "<tr><td><h3>ERROR EN LA CONSULTA: </td></tr></h3>";
                              echo "</table>";

                            echo "<table border = '1' align = 'center' bordercolor= 'white'><tr><th>INFORMACION:</th><th>FORMULARIO:</th></tr>";
                            echo "<tr><td>No existen registros en la Base de datos MatriculadosCiclos, por favor inserte algun registro y vuelva a intentarlo.</td>";
                            echo "<td><a href = '07FormularioListarAlumnos.html'> Volver al formulario.</td></tr></a>";
                            echo "</table>";


                        }

                    }
?>

</body>
</html>