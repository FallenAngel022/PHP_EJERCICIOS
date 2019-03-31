<!DOCTYPE html > 
<head> 
    <meta charset="utf-8" /> 
    <title>Conexion a BD</title> 
</head>   
<body>   
<?php

$codigo = $_POST['c_art'];


    require("/opt/lampp/htdocs/php/DATOS_CONEXION_PHP/conexion.php");

    
    $conexion = mysqli_connect($db_host,$db_usuario,$db_password,$db_bd) or die ("NO se ha establecido conexion. ");


    //mysqli_connect_db para mayor comprobacion con mensaje de error, no poner en mysqli_connect

    mysqli_set_charset($conexion,"utf-8");

    $consulta = "DELETE FROM PRODUCTOS WHERE CODIGOARTICULO ='$codigo'";

    $ejecucion = mysqli_query($conexion,$consulta);

    if($ejecucion == false){


        echo "Error en el borrado.";

    } else {

        if (mysqli_fetch_row($ejecucion == 0)){

            echo "No hay registros que eliminar con este criterio.";
        } else {

            echo "Se han borrado". mysqli_fetch_row($ejecucion). " registros de la tabla productos.";

        }

    }
    


    mysqli_close($conexion);


  ?>  

</body>
</html>
