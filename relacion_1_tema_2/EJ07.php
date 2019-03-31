<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   
<?php 
    
        $tipodevariable = 10;

        echo "El valor es " . gettype ($tipodevariable) . "<br/>";

        $tipodevariable = "pedo";

        echo "El valor es " . gettype ($tipodevariable) . "<br/>";

        $tipodevariable = 5.2;

        echo "El valor es " . gettype ($tipodevariable) . "<br/>";

        $tipodevariable = true;

        echo "El valor es " . gettype ($tipodevariable) . "<br/>";

        $tipodevariable = null ;

        echo "El valor es " . gettype ($tipodevariable) . "<br/>";


     

?>   
</body> 
</html>