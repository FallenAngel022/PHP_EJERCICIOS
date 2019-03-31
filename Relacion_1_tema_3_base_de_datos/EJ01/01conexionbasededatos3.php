<!DOCTYPE html > 
<head> 
    <meta charset="utf-8" /> 
    <title>Conexion a BD</title> 
</head>   
<body>   
<?php 

    //Caracteres especiales

    
    
    $db_host = 'localhost';
    $db_usuario = 'pelusa';
    $db_password = 'pelusa';
    $db_bd = 'informatica';

    
    $conexion = mysqli_connect($db_host,$db_usuario,$db_password,$db_bd);

    $consulta = "SELECT * FROM DATOSPERSONALES";

    $ejecucion = mysqli_query($conexion,$consulta);

    mysqli_set_charset($conexion,"utf-8");

    echo "<h3>MOSTRAMOS DATOS PERSONALES: </h3>";

    echo "<table border = 1";

    while($fila = mysqli_fetch_row($ejecucion)){

    

    echo "<tr><td>$fila[0]</td>"; 
    echo "<td>$fila[1]</td>"; 
    echo "<td>$fila[2]</td>"; 
    echo "<td>$fila[3]</td></tr>"; 
     
    }

    echo "</table>";

?>   
</body> 
</html>