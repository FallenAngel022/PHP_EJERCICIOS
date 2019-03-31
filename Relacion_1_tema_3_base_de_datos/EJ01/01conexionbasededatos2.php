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

    while($fila = mysqli_fetch_row($ejecucion)){

    

    echo "$fila[0]"; echo"</br>";
    echo "$fila[1]"; echo"</br>";
    echo "$fila[2]"; echo"</br>";
    echo "$fila[3]"; echo"</br>";
     
    }

?>   
</body> 
</html>