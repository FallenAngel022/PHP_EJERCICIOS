<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>
    <pre>   
<?php 
    
    $nombre = $_POST['nombre'] ;
    $apellido = $_POST['apellidos'] ;
    $direccion = $_POST['direccion'] ;
    $telefonofijo = $_POST['telefonofijo'] ;
    $telefonomovil = $_POST['telefonomovil'] ;

    echo "El nombre es <b>$nombre $apellido</b> vive en <b>$direccion</b> y sus telefonos son <b>$telefonofijo</b> y <b>$telefonomovil</b> .</br>";
    echo "</br>";
    print_r ($_POST);
     

?>   

</pre>
</body> 
</html>