<!DOCTYPE html > 
<head> 
    <meta charset="utf-8" /> 
    <title>Conexion a BD</title> 
</head>   
<body>   
<?php

    $codigo = $_POST['c_art'];

    $categoria = $_POST['categoria'];

    $nombre = $_POST['n_art'];

    $precio = $_POST['precio'];

    $fecha = $_POST['fecha'];

    $importado = $_POST['importado'];

    $pais = $_POST['pais'];


    
    require("/opt/lampp/htdocs/php/DATOS_CONEXION_PHP/conexion.php");

    
    $conexion = mysqli_connect($db_host,$db_usuario,$db_password,$db_bd)  or die ("NO se ha establecido conexion. ");

    //mysqli_connect_db para mayor comprobacion con mensaje de error, no poner en mysqli_connect

    mysqli_set_charset($conexion,"utf-8");


    $insercion = "INSERT INTO PRODUCTOS (CODIGOARTICULO,CATEGORIA,NOMBREARTICULO,PRECIO,FECHA,IMPORTADO,PAISDEORIGEN) VALUES('$codigo','$categoria','$nombre','$precio','$fecha','$importado','$pais')";


    $ejecutar = mysqli_query($conexion,$insercion);

    //errores

   if ($ejecutar == false){

    echo "Error al insertar los datos";

     } else {


        echo "<h3>REGISTRO ALMACENADO EN LA TABLA </h3>";

        echo "<table border ='1'><tr><td>$codigo</td></tr>";
        echo "<tr><td>$categoria</td></tr>";
        echo "<tr><td>$nombre</td></tr>";
        echo "<tr><td>$precio</td></tr>";
        echo "<tr><td>$fecha</td></tr>";
        echo "<tr><td>$importado</td></tr>";
        echo "<tr><td>$pais</td></tr></table>";

   }


    mysqli_close($conexion);


  ?>  

</body>

