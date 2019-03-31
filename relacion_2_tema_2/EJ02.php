<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   
<?php 
    
    ini_set('date.timezone','Europe/Madrid'); 
    $hora = date("g:i A");

        if ($hora > 6 && $hora < 12) {

            echo "buenos dias";

         } elseif ($hora > 12 && $hora < 21) {

                    echo "buenas tardes" ;

          } else {
         
          echo "buenas noches" ;
        
         }

?>   
</body> 
</html>