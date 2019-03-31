<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   
<?php 
            echo "<h3> FUNCION PARA CALCULAR EL AREA Y EL PERIMETRO DE UN RECTANGULO</h3> </br>";
            

        $base = 3;

        $lado = 5;

        function arearectangulo ($base, $lado){
            $area = $base * $lado;

            return $area;
        }

        function perimetrorectangulo ($base, $lado){
            $perimetro = ($base + $lado)*2;

            return $perimetro;
        }

            
            $calculoarea = arearectangulo($base, $lado);

            $perimetro = perimetrorectangulo($base, $lado);

            echo "El area del rectangulo con longitud $base y lado $lado es: $calculoarea. </br>";

            echo "El area perimetro del rectangulo con longitud $base y lado $lado es: $perimetro.";
?>   
</body> 
</html>