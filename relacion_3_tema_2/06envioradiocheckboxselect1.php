<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   
<?php 
    
        $nombre = $_REQUEST['nombre'];

            echo "Nombre: $nombre";

            //Manolada
                         //este mod va en el name del boton de envio
            if (array_key_exists('mod', $_GET)){
                $matriculo = join (',',$_GET['Modulos']);
                echo "<br/>";
                echo "Los mudulos son: ($matriculo).<br/>" ;

            }


     

?>   
</body> 
</html>