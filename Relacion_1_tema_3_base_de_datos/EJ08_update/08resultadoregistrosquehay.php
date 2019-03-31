<!DOCTYPE html > 
<head> 
    <meta charset="utf-8" /> 
    <title>Conexion a BD</title> 
</head>   
<body>   
<?php

    $busqueda = $_POST['buscar'];


    require("/opt/lampp/htdocs/php/DATOS_CONEXION_PHP/conexion.php");

    
    $conexion = mysqli_connect($db_host,$db_usuario,$db_password) or die ("NO se ha establecido conexion. ");

    if(mysqli_connect_errno()){

        echo "la base de datos no ha sido localizada";

    }

    //mysqli_connect_db para mayor comprobacion con mensaje de error, no poner en mysqli_connect

    mysqli_select_db($conexion,$db_bd) or die ("No se ha encontrado la BD."); 
    
    mysqli_set_charset($conexion,"utf-8");

    $consulta = "SELECT * FROM PRODUCTOS WHERE NOMBREARTICULO LIKE '%$busqueda%' ";


    $ejecucion = mysqli_query($conexion,$consulta);

    echo "<h2>DATOS QUE CONTIENEN LOS REGISTROS</h2>";

    //Guardamos la consulta en un array

        while($fila = mysqli_fetch_array($ejecucion, MYSQLI_ASSOC)){

            //Generamos el formulario para actualizar

            echo "<form action= '08resultadoactualizacion.php' method = 'POST'>";

            echo "<input type ='text' name ='c_art' value ='" . $fila['CODIGOARTICULO'] ."' > </br>";
            echo "<input type ='text' name ='categoria' value ='" . $fila['CATEGORIA'] ."' > </br>";
            echo "<input type ='text' name ='n_art' value ='" . $fila['NOMBREARTICULO'] ."' > </br>";
            echo "<input type ='text' name ='precio' value ='" . $fila['PRECIO'] ."' > </br>";
            echo "<input type ='text' name ='fecha' value ='" . $fila['FECHA'] ."' > </br>";
            echo "<input type ='text' name ='importado' value ='" . $fila['IMPORTADO'] ."' > </br>";
            echo "<input type ='text' name ='pais' value ='" . $fila['PAISDEORIGEN'] ."' > </br>";

            echo "<input type ='submit' name ='enviar' value ='Actualizar regisro'>"; echo "</form>"; echo"<p/>";
            


        }





   


  ?>  

