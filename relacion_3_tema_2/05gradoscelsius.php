<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   

<?php

      if(!$_POST){

?>




  <form action="#" method="POST">

    Grados Fahrenheit a convertir:  <input type="text" name="grados"/> <br/>
    

      <input type="submit" value="Envio" />
      <input type="reset" value="Reiniciar" />


<?php

      } else {

         $grados = $_POST['grados'];
         
          $conversion = ($grados - 32) * 5 / 9;

              echo "Los grados pasados a celsius son: $conversion ";

      }
    
  ?>  
    

   </form>
  
  

</body> 
</html>