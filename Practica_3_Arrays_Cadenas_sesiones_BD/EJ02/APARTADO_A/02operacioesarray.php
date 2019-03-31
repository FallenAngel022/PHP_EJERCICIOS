<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>OPERACIONES CON ARRAYS</title> 
    <style type="text/css">
    h3{
        color: royalblue;

    }
    body{
	background:black;
    color: pink;
    
    }
</style>
</head>   
<body>   
<?php 

    //como son operaciones secuenciales voy a ir mostrandolo todo en tablas para ver el proceso que se sigue

    //Definimos el array con el que vamos a trabajar.

    $modulos = array("FCT","SRI","ASO","IAW","SAD","EIE","ASGBD","HLC","PASIR","GBD");

    echo "<h3>OPERACIONES CON ARRAYS.</H3>";

    echo "Poseemos incialmente el siguiente array: ";
    echo "</br>";
    echo "</br>";
   
    echo "<table border ='1'>";

    echo "<tr><th>ASIGNATURA/S</th><th>CLAVE/S</th></tr>";
    
    //Recorremos el array para mostrar como está inicialmente
    foreach($modulos as $clave => $asignaturas){

        echo "<tr><td>$asignaturas</td><td>$clave</td></tr>";

    }

    echo "</table>";

    echo "</br>";

    echo "Lo muestro ademas de manera normal para ver los indices: ";
    echo "</br>";
    echo "</br>";
    
    print_r ($modulos);

    echo "</br>";
    echo "</br>";


    //AÑADE EL ELEMENTO "GBD" EN LA POSICION 7 DEL ARRAY
    //Como en esa posicion ya disponemos del elemento HLC hay que remplazarlo
    //Para realizar esta operacion voy a usar la operacion array_replace

    //Almaceno en una variable la clave a reemplazar y su valor

    $cambio = array(7 => "GBD");

    //Ahora usamos la variable anterior $cambio y $modulos en una nueva 
    //para realizar el cambio, que vamos a llamar $modulosnuevos uso una
    //nueva variable con el array anterior para evitar conflictos a la hora
    //de operar con ellos, pero es el mismo array del principio

    $modulosnuevos = array_replace($modulos,$cambio);

    //Ahora mostramos el contenido en una tabla nueva despues se realizar la operacion

    echo "<h3>AÑADIMOS GBD A LA POSICION 7.</H3>";

    echo "Despues de añadir GBD en la posicion 7 tenemos el siguiente array: ";
    echo "</br>";
    echo "</br>";



    echo "<table border ='1'>";

    echo "<tr><th>ASIGNATURA/S</th><th>CLAVE/S</th></tr>";
    
    //Volvemos a recorrer el array con la operacion para mostrarlo en donde $clave1 es el indice y $asginaturasnuevas los modulos.
    foreach($modulosnuevos as $clave1 => $asignaturasnuevas){

        echo "<tr><td>$asignaturasnuevas</td><td>$clave1</td></tr>";

    }

    echo "</table>";

    echo "</br>";

    echo "Lo muestro ademas de manera normal para ver los indices: ";
    echo "</br>";
    echo "</br>";
    
    print_r ($modulosnuevos);

    echo "</br>";
    echo "</br>";

    //añade dos elementos consecutivos “HLC”, “ASGBD” 
    //en la misma operación en la posición 3 del array
    //Como no es posible tener el mismo indice en este tipo de array
    //Añadiremos estos elementos desde la posicion 3 y 4 del array 
    //quedando de esta manera 3 => HLC y 4 =>ASGBD .

    //Genero la variable con los modulos a introducir

    $repetidos = array(3 => "HLC", 4 => "ASGBD");

    //Ahora genero la nueva variable que contendra el array con los valores repetidos

                                    //usamos la variable en la que cambiamos el valor del indice 7 (GBD)
    $modulosrepetidos = array_replace($modulosnuevos, $repetidos);

    //Ahora mostramos los cambios

    echo "<h3>REEMPLAZAR VALORES (HLC Y ASGBD) DESDE LA POSICION 3.</H3>";

    echo "Despues de reemplazar por los valores repetidos en la posicion 3 y 4 tenemos: ";
    echo "</br>";
    echo "</br>";



    echo "<table border ='1'>";

    echo "<tr><th>ASIGNATURA/S</th><th>CLAVE/S</th></tr>";
    
    //Volvemos a recorrer el array con la operacion para mostrarlo en donde $clave2 es el indice y $asginaturasrepetidas los modulos.
    foreach($modulosrepetidos as $clave2 => $asignaturasrepetidas){

        echo "<tr><td>$asignaturasrepetidas</td><td>$clave2</td></tr>";

    }

    echo "</table>";

    echo "</br>";

    echo "Lo muestro ademas de manera normal para ver los indices: ";
    echo "</br>";
    echo "</br>";
    
    print_r ($modulosrepetidos);

    echo "</br>";
    echo "</br>";

    //elimina los 2 elementos que acabamos de introducir 
    //que están repetidos y finalmente reindexa el array

    //Como sabemos que los elementos ocupan la posicion 3 y 4 vamos a usar
    //la funcion UNSET 

    //usamos la variable $modulosrepetidos que es la contiene 
    //Los valores iniciales con los que hemos ido trabajando mientras añadiamos
    //los nuevos elementos y repetidos

    unset($modulosrepetidos[3],$modulosrepetidos[4]);

    //Ahora mostramos el contenido en una tabla nueva

    echo "<h3>ELIMINAMOS LOS VALORES HLC Y ASGBD CON INDICE 3 Y 4.</H3>";

    echo "Despues de eliminar los elementos repetidos con indices 3 y 4 tenemos el siguiente array: ";
    echo "</br>";
    echo "</br>";



    echo "<table border ='1'>";

    echo "<tr><th>ASIGNATURA/S</th><th>CLAVE/S</th></tr>";

    //Volvemos a recorrer el array con la operacion para mostrarlo en donde $clave3 es el indice y $asginaturasborradas los modulos.
    foreach($modulosrepetidos as $clave3 => $asignaturasborradas){

        echo "<tr><td>$asignaturasborradas</td><td>$clave3</td></tr>";

    }

    echo "</table>";

    echo "</br>";

    echo "Lo muestro ademas de manera normal para ver los indices: ";
    echo "</br>";
    echo "</br>";
    
    print_r ($modulosrepetidos);

    echo "</br>";
    echo "</br>";

    //Ahora reindexamos el array con la funcion array_values 

    $modulosrepetidos = array_values($modulosrepetidos);

    //Mostramos la tabla para ver que han reindexado correctamente 

    echo "<h3>REINDEXAMOS EL ARRAY Y LO MOSTRAMOS.</H3>";

    echo "Array reindexado correctamente: ";
    echo "</br>";
    echo "</br>";



    echo "<table border ='1'>";

    echo "<tr><th>ASIGNATURA/S</th><th>CLAVE/S</th></tr>";
    
    foreach($modulosrepetidos as $clave3 => $asignaturasborradas){

        echo "<tr><td>$asignaturasborradas</td><td>$clave3</td></tr>";

    }

    echo "</table>";

    echo "</br>";

    echo "Lo muestro ademas de manera normal para ver los indices: ";
    echo "</br>";
    echo "</br>";
    
    print_r ($modulosrepetidos);

    echo "</br>";
    echo "</br>";



    //Aunque las variables hayan sido distintas a la inicial $modulos 
    //He usado nuevas variables para evitar conflictos a la hora de operar


    
?>   
</body> 
</html>