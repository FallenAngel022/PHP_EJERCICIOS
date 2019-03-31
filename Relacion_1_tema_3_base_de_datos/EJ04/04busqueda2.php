
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

    <body>

 <?php
 
        require('/opt/lampp/htdocs/php/DATOS_CONEXION_PHP/conexion.php');

        $busqueda = $_POST['busqueda'];

        $conexion = mysqli_connect($db_host,$db_usuario,$db_password,$db_bd) or die ('No se ha establecido conexion.');


        $consulta = "SELECT * FROM PRODUCTOS WHERE NOMBREARTICULO LIKE '%$busqueda' ";

        $ejecucion = mysqli_query($conexion,$consulta);

        mysqli_set_charset($conexion,"utf-8");

        echo "<table border = '1'><tr><th>NOMBRE</th><th>CATEGORIA</th><th>PRECIO</th><th>PAIS</th></tr></table>";

        while($fila = mysqli_fetch_array($ejecucion,MYSQLI_ASSOC)){


 
            echo "<table border = '1'> <tr><td> ";

            echo $fila['NOMBREARTICULO'] . "</td><td>";
            echo $fila['CATEGORIA'] .  "</td><td>";
            echo $fila['PRECIO'] .  "</td><td>";
            echo $fila['PAISDEORIGEN'] .  "</td></tr></table>";



        }   

        echo "</table>";

            mysqli_close($conexion);


           ?>
           
    </body>
    
    