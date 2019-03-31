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
    
    //Generamos el array que se nos pide en la practica
    $modulosaso = array("FCT" =>370, "SRI" => 126, "ASO" => 126, "GBD" =>192, "IAW" => 04, "SAD" => 04,
    "EIE" => 84, "PAR" => 192, "LMSGI" => 128, "ASGBD" => 63, "HLC" => 63, "PASIR" => 40);

    echo "<h3>OPERACIONES CON ARRAYS.</H3>";

    echo "Poseemos incialmente el siguiente array: ";
    echo "</br>";
    echo "</br>";
   
    echo "<table border ='1'>";

    echo "<tr><th>ASIGNATURA/S</th><th>VALOR/ES</th></tr>";
    
    //Volvemos a recorrer el array como en el apartado A para mostrarlo inicialmente, $valores son los modulos y $clave los valores que contienen.
    foreach($modulosaso as $valores => $clave){

        echo "<tr><td>$valores</td><td>$clave</td></tr>";

    }

    echo "</table>";

    echo "</br>";

    echo "Lo muestro ademas de manera normal para ver los indices: ";
    echo "</br>";
    echo "</br>";
    
    print_r ($modulosaso);

    echo "</br>";
    echo "</br>";

    //Elimina el elemento con clave “GBD”
    //Como en el ejercicio anterior voy a usar la sentencia unset

    unset($modulosaso['GBD']);

    //Ahora mostramos el array sin el elemento

    echo "<h3>ELIMINANDO LA CLAVE GBD.</H3>";

    echo "El array sin el elemento GBD quedaria asi: ";
    echo "</br>";
    echo "</br>";
   
    echo "<table border ='1'>";

    echo "<tr><th>ASIGNATURA/S</th><th>VALOR/ES</th></tr>";
    
    //Reccorremos para mostrar correctamente en una tabla
    foreach($modulosaso as $valores => $clave){

        echo "<tr><td>$valores</td><td>$clave</td></tr>";

    }

    echo "</table>";

    echo "</br>";

    echo "Lo muestro ademas de manera normal para ver los indices: ";
    echo "</br>";
    echo "</br>";
    
    print_r ($modulosaso);

    echo "</br>";
    echo "</br>";

    //después en una sola operación elimina los elementos con clave “PAR” y “LMSGI”

    //Como hemos echo antes lo haremos con unset e indicando el indice:

    unset($modulosaso['PAR'],$modulosaso['LMSGI']);

    //Ahora mostramos el array sin los elementos:

    echo "<h3>ELIMINAR ELEMENTOS CON CLAVE PAR Y LMSGI.</H3>";

    echo "El array sin los elementos PAR y LMSGI (ademas de GBD eliminado anteriormente): ";
    echo "</br>";
    echo "</br>";
   
    echo "<table border ='1'>";

    echo "<tr><th>ASIGNATURA/S</th><th>VALOR/ES</th></tr>";
    
    //Recorremos y mostramos en una tabla.
    foreach($modulosaso as $valores => $clave){

        echo "<tr><td>$valores</td><td>$clave</td></tr>";

    }

    echo "</table>";

    echo "</br>";

    echo "Lo muestro ademas de manera normal para ver los indices: ";
    echo "</br>";
    echo "</br>";
    
    print_r ($modulosaso);

    echo "</br>";
    echo "</br>";


    //seguidamente reordena el vector por dichas claves
    //Para ordenarlas por clave usaremos la funcion ksort


    ksort($modulosaso);

    //Ahora mostramos el array ordenado por clave (alfabeticamente)

    echo "<h3>ORDENAR ARRAY POR CLAVE.</H3>";

    echo "El array ordenado por clave quedaria asi: ";
    echo "</br>";
    echo "</br>";
   
    echo "<table border ='1'>";

    echo "<tr><th>ASIGNATURA/S</th><th>VALOR/ES</th></tr>";
    
    //Recorremos para mostrar.
    foreach($modulosaso as $valores => $clave){

        echo "<tr><td>$valores</td><td>$clave</td></tr>";

    }

    echo "</table>";

    echo "</br>";

    echo "Lo muestro ademas de manera normal para ver los indices: ";
    echo "</br>";
    echo "</br>";
    
    print_r ($modulosaso);

    echo "</br>";
    echo "</br>";

    //finalmente reordena el vector por sus valores en orden ascendente.
    //Para ordenar de menor a mayor usaremos la funcion asort.

    asort($modulosaso);

    //Ahora mostramos el array ordenado de menor a mayor.

    echo "<h3>ORDENAR ARRAY ASCENDENTEMENTE.</H3>";

    echo "El array ordenado de menor a mayor quedaria asi: ";
    echo "</br>";
    echo "</br>";
   
    echo "<table border ='1'>";

    echo "<tr><th>ASIGNATURA/S</th><th>VALOR/ES</th></tr>";
    
    //Recorremos el array para ver si se ha aplicado correctamente
    foreach($modulosaso as $valores => $clave){

        echo "<tr><td>$valores</td><td>$clave</td></tr>";

    }

    echo "</table>";

    echo "</br>";

    echo "Lo muestro ademas de manera normal para ver los indices: ";
    echo "</br>";
    echo "</br>";
    
    print_r ($modulosaso);

    echo "</br>";
    echo "</br>";
    








     

?>   
</body> 
</html>