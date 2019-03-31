<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   
<?php 
    
    function calculadescuento ($pre, $desc){

        $diferencia = ($pre * $desc) * 0.01;

        $rebaja = $pre - $diferencia;

        return $rebaja ;

         }

            $precio = $_POST['precio'];

            $descuento = $_POST['descuento'];

                $preciorebajado = calculadescuento($precio, $descuento);

        echo "El precio, el descuento y el precio rebajado son: </br>";
        
        echo "El precio es $precio </br>";

        echo "El descuento es $descuento </br>";

        echo "El precio rebajado es $preciorebajado </br>"
     

?>   
</body> 
</html>