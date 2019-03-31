<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   
<?php 
    
        echo "<h3> USO DEL BUCLE FOR</h3>";

        for ($numero = 1; $numero <= 9; $numero++){

            echo " $numero ";

        }

        echo "</br>";
        echo "</br>";
        echo "</br>";
        

        $letra = "A";

        for($lista = 1; $lista <= 9; $lista++){
            
            
           

            echo "$lista .Elemento $letra </br>";

            $letra ++;
            

        }


     

?>   
</body> 
</html>