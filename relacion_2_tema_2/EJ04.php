<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   
<?php 
    
    $edad = 65;

    switch($edad) {

        case 15:
            echo "no puedes salir eres menor.";
            break;


        case 16:
            echo "Debes tener carnet naranja.";
            break;


        case 17:
            echo "debes tener el carnet naranja.";
            break;


        case 18:
            echo "debes tener el carnet naranja.";
            break;

        case 19:
            echo "debes tener el carnet verde."; 
            break;

        default:
            echo "No puedes estar matriculado.";

    }

     

?>   
</body> 
</html>