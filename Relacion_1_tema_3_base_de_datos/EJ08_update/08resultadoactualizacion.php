<!DOCTYPE html > 
<head> 
    <meta charset="utf-8" /> 
    <title>Conexion a BD</title> 
        <style>
            table{

                border: 1px;
                margin: left;
                width: 700px;
                border-style: dotted;

            }

        </style>   

</head>   
<body>   
<?php

    $codigo = $_POST['c_art'];
    $catego = $_POST['categoria'];
    $nombre = $_POST['n_art'];
    $dinero = $_POST['precio'];
    $fechas = $_POST['fecha'];
    $importados = $_POST['importado'];
    $paisorigen = $_POST['pais'];

    require("/opt/lampp/htdocs/php/DATOS_CONEXION_PHP/conexion.php");

    
    $conexion = mysqli_connect($db_host,$db_usuario,$db_password,$db_bd) or die ("NO se ha establecido conexion. ");

    if(mysqli_connect_errno()){

        echo "la base de datos no ha sido localizada"; 

    }

    //mysqli_connect_db para mayor comprobacion con mensaje de error, no poner en mysqli_connect

    
    
    mysqli_set_charset($conexion,"utf-8");

    $consulta = "UPDATE 'PRODUCTOS' SET 'CODIGOARTICULO' = '$codigo', 
    'CATEGORIA' = '$catego', 'NOMBREARTICULO' = '$nombre', 'PRECIO' = '$dinero', 'FECHA' ='$fechas',
    'IMPORTADO' = '$importados', 'PAIS' = '$paisorigen' WHERE 'CODIGOARTICULO' ='$codigo'";

    $resultado = mysqli_query($conexion,$consulta); 

    if ($resultado == false){

        echo "Error en la actualizacion.";

    }   else {

        echo "<h3>REGISTRO ACTUALIZADO EN LA TABLA PRODUCTOS</h3>";

        echo "<table border ='1'><tr><td>$codigo</td></tr>";
        echo "<tr><td>$catego</td></tr>";
        echo "<tr><td>$nombre</td></tr>";
        echo "<tr><td>$dinero</td></tr>";
        echo "<tr><td>$fecha</td></tr>";
        echo "<tr><td>$importados</td></tr>";
        echo "<tr><td>$paisorigen</td></tr></table>";

    }



    mysqli_close($conexion);

?>

</body>


