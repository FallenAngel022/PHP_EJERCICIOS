<!DOCTYPE html > 
<head> 
    <meta charset="utf-8" /> 
        <style>
            table{

                width: 1000 px;
                border: 1 px dotted #F00;
                margin: left  

            }

        </style>
        
    <title>Conexion a BD</title> 
</head>   
<body>   
<?php 

    require("/opt/lampp/htdocs/php/DATOS_CONEXION_PHP/conexion.php");

    
    $conexion = mysqli_connect($db_host,$db_usuario,$db_password,$db_bd) or die ("NO se ha establecido conexion. ");

    $consulta = "SELECT * FROM PRODUCTOS WHERE PAISDEORIGEN ='España'";

    $ejecucion = mysqli_query($conexion,$consulta);

    echo "<h3>Mostrar los productos de España. </h3>";

    echo "<table border = '1'>";

    echo "<tr><th>CODIGO</th>";

    echo "</table>";

    while ($fila = mysqli_fetch_row($ejecucion)){



        echo "<table><tr><td>";
        echo $fila[0] . "</td><td>";
        echo $fila[1] . "</td><td>";
        echo $fila[2] . "</td><td>";
        echo $fila[3] . "</td><td>";
        echo $fila[4] . "</td><td>";
        echo $fila[5] . "</td><td>";
        echo $fila[6] . "</td><td>";
        echo $fila[7] . "</td><td></tr></table>";


    }

    mysqli_close($conexion);

    

?>   
</body> 
</html>