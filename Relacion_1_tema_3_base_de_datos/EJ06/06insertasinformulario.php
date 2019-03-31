<!DOCTYPE html > 
<head> 
    <meta charset="utf-8" /> 
    <title>Conexion a BD</title> 
</head>   
<body>   
<?php

    require("/opt/lampp/htdocs/php/DATOS_CONEXION_PHP/conexion.php");

    
    $conexion = mysqli_connect($db_host,$db_usuario,$db_password,$db_bd) or die ("NO se ha establecido conexion. ");


    //mysqli_connect_db para mayor comprobacion con mensaje de error, no poner en mysqli_connect

    mysqli_set_charset($conexion,"utf-8");


    $insercion = "INSERT into PRODUCTOS (CODIGOARTICULO,CATEGORIA,NOMBREARTICULO,PRECIO,IMPORTADO,PAISDEORIGEN) VALUES ('0101PRO','RATON','MMM208','200','FALSO','PEPITORIA')";

    $ejecutar = mysqli_query($conexion,$insercion);

    mysqli_close($conexion);

    echo "Datos insertados";


  ?>  