<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
    <title>Conexion a BD</title> 
</head>   
<body>   
<?php 
    
    $db_host = 'localhost';
    $db_usuario = 'pelusa';
    $db_password = 'pelusa';
    $db_bd = 'informatica';

    
    $conexion = mysqli_connect($db_host,$db_usuario,$db_password,$db_bd);

    $consulta = "SELECT * FROM DATOSPERSONALES";

    $ejecucion = mysqli_query($conexion,$consulta);


    echo "<h3>MOSTRAMOS DATOS PERSONALES: </h3>";

    $fila = mysqli_fetch_row($ejecucion);


    echo "$fila[0]"; echo"&nbsp";
    echo "$fila[1]"; echo"&nbsp";
    echo "$fila[2]"; echo"&nbsp";
    echo "$fila[3]"; echo"&nbsp";
     

?>   
</body> 
</html>