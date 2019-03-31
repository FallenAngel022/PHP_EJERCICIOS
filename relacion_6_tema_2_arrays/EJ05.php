<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   
<?php 
    
    $coches = array(

        array("volvo",22,18),
        array("BMW",15,13),
        array("saab",5,2),
        array("land rover",17,15)
    );


    //apartado A individualmente

    echo $coches [0][0]. " :stock " .$coches[0][1]. " , vendidos: ". $coches[0][2] . "</br>";
    echo $coches [1][0]. " :stock " .$coches[1][1]. " , vendidos: ". $coches[1][2] . "</br>";
    echo $coches [2][0]. " :stock " .$coches[2][1]. " , vendidos: ". $coches[2][2] . "</br>";
    echo $coches [3][0]. " :stock " .$coches[3][1]. " , vendidos: ". $coches[3][2] . "</br>";
    
    //apartado B con el bucle for each

    for ($fila = 0; $fila < 4 ; $fila++) { 
        
        echo "<ul>";

            for ($columna = 0; $columna < 3 ; $columna++) { 
                echo "<li>" . $coches[$fila][$columna]. "</li>";

            }

            echo "</ul>";

    }

     

?>   
</body> 
</html>