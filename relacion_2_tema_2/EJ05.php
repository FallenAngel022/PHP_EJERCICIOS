<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   
<?php 

        echo "<h3> Uso del bucle WHILE</h3>";

        echo "<br/>";
        echo "<br/>";
    
    $letras = 1;

        while ($letras <= 10):
            
            echo "abc ";

            $letras ++;

        endwhile;

        echo "<br/>";
        echo "<br/>";
     

        


     $numeros = 1;
     
        while ($numeros <= 10):

            echo " $numeros ";

            $numeros ++;

        endwhile;
     

?>   
</body> 
</html>