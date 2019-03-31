<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   
<?php 
    
    // Declara array asociativo con numeros enteros, reales y cadenas
    // muestra el nº de elementos, recorrido del vector y añade 2 elementos mas

    echo "<h3>EJEMPLO ARRAY ESCALAR</h3>";

    $fueravariable = "furullo";

        $escalar = array (1 , 2 , 3 ," casa ", $fueravariable , 6.5);

           foreach ($escalar as &$recorrido) {

            print_r($recorrido);
               
           }

           echo "</br>";
           echo "</br>";
           echo "</br>";

           echo "$escalar[2] $escalar[5]";

           echo "</br>";
           echo "</br>";
           echo "</br>";

           print_r($escalar);

           echo "</br>";
           echo "</br>";
           echo "</br>";

           var_dump($escalar);
     

?>   
</body> 
</html>