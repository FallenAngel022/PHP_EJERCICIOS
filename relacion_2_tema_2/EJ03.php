<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   
<?php 
    
    $nota = rand(0,10);

    switch ($nota) {

        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        echo "nota muy baja";
        break;

        case 6:
        case 7:
        echo "nota aceptable";
        break;

        case 8:
        case 9:
        echo "buena nota";
        break;

        case 10:
        echo "nota excelente";
        break;
     
    }


?>   
</body> 
</html>