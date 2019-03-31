<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   
<?php 
  
        $tipodevariable = "Hola estoy concatenado";

        //Con las comillas simples es necesario concatenar puesto que no 
        //lee el contenido de la variable como tal, es decir no la interpreta 
        //y por tanto 
        //muestra el nombre de la variable como si de una palabra se tratara

        echo 'Concatenado con comillas simples -->  ' . $tipodevariable . "<br/>";

        //Con las comillas dobles no es necesario concatenar.

        echo "Concatenado con comillas dobles --> $tipodevariable . <br/>";



     

?>   
</body> 
</html>