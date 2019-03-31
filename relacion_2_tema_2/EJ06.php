<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   
<?php 

        echo "<h3> Uso del bucle DO-WHILE</h3>";
    
        $consonantes = 'AEIOU';
        $contador = 0 ;

        do{

            echo "$consonantes ";

            $contador ++;

                

         } while ($contador <= 9);

         echo "<br/>";

         $contador1 = 0 ;

         echo "<br/>";
 
         do{
            
            
             echo "$contador1 ";
 
             $contador1 ++;
 
                 
 
          } while ($contador1 <= 9);

          echo "<br/>";

          echo "<ul>";

          $letras = 'k';
          $contador2 = 0 ;
          
  
          do{
  
              echo "  <li type = circle>Elemento $letras</li>";
  
              $contador2 ++;
              $letras ++;
                  
  
           } while ($contador2 <= 9);
  
 

           echo "</>";




     

?>   
</body> 
</html>