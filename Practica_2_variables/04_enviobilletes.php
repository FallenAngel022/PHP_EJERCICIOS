<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   
<?php 
    
    //Aqui recogemos el dinero a desglosar
    
    $dinero = $_POST['dinero'];

    //Estas son las variables que he definido para almacenar el resto de 
    //de la division (calculado con el %) que seria la cantidad de dinero
    //que tendriamos para ir desglosando hasta llegar a 0 euros

    $numeronuevo = 0;
    $numeronuevo2 = 0;
    $numeronuevo3 = 0;
    $numeronuevo4 = 0;
    $numeronuevo5 = 0;
    $numeronuevo6 = 0;
    $numeronuevo7 = 0;
    $numeronuevo8 = 0;
    $numeronuevo9 = 0;
    $numeronuevo10 = 0;
    $numeronuevo11 = 0;
    $numeronuevo12 = 0;
    $numeronuevo13 = 0;
    $numeronuevo14 = 0;
    $numeronuevo15 = 0;

    //Aqui definimos los billetes que podemos tener


    $billete1 = 500;
    $billete2 = 200;
    $billete3 = 100;
    $billete4 = 50;
    $billete5 = 20;
    $billete6 = 10;
    $billete7 = 5;

    // Aqui definimos las monedas que podemos tener

    $moneda1 = 2;
    $moneda2 = 1;
    $moneda3 = 0.5;
    $moneda4 = 0.2;
    $moneda5 = 0.1;


    echo "<h3>Desglosar dinero en billetes y monedas</h3>";
    echo "El cambio de la cantidad de $dinero es: </br>";
    echo "</br>";
    
    //He decidido ir usando condicionales IF 
    //Si el cociente de la division 
    //es mayor que 0 (Equivaldria al numero de billetes) 
    //entonces entras dentro del IF

    if ($dinero / $billete1 > 0){

        // Definimos la division 
        //y el $cociente equivale a los billetes que tenemos de esa cantidad

        $cociente = $dinero / $billete1;

                     //floor para evitarnos decimales

        echo "Hay: " . floor($cociente) . " billete(s) de: $billete1. </br>";

        //Con esta operacion hayamos 
        //la siguiente cantidad con la que trabajar

        $numeronuevo = $dinero % $billete1;
        

    }

    //A partir de aqui hariamos lo mismo salvo que almacenando
    //el dinero con el que trabajar en las variables definidas al principio

    if ($numeronuevo / $billete2 > 0 ){

        $cociente = $numeronuevo / $billete2;

        echo "Hay: " . floor($cociente) . " billete(s) de: $billete2. </br>";

        $numeronuevo2 = $numeronuevo % $billete2;

    }        
    
    if ($numeronuevo2 / $billete3 > 0 ){

        $cociente = $numeronuevo2 / $billete3;

        echo "Hay: " . floor($cociente) . " billete(s) de: $billete3. </br>";

        $numeronuevo3 = $numeronuevo2 % $billete3;

        
    }        

    if ($numeronuevo3 / $billete4 > 0 ){

        $cociente = $numeronuevo3 / $billete4;

        echo "Hay: " . floor($cociente) . " billete(s) de: $billete4. </br>";

        $numeronuevo4 = $numeronuevo3 % $billete4;

    }
    
    if ($numeronuevo4 / $billete5 > 0 ){

        $cociente = $numeronuevo4 / $billete5;

        echo "Hay: " . floor($cociente) . " billete(s) de: $billete5. </br>";

        $numeronuevo5 = $numeronuevo4 % $billete5;

    }

    if ($numeronuevo5 / $billete6 > 0 ){

        $cociente = $numeronuevo5 / $billete6;

        echo "Hay: " . floor($cociente) . " billete(s) de: $billete6. </br>";

        $numeronuevo6 = $numeronuevo5 % $billete6;

    }

    if ($numeronuevo6 / $billete7 > 0 ){

        $cociente = $numeronuevo6 / $billete7;

        echo "Hay: " . floor($cociente) . " billete(s) de: $billete7. </br>";

        $numeronuevo7 = $numeronuevo6 % $billete7;

    }        
    
    //Si hay monedas de 1 y 2 € hacemos lo mismo

     if ($numeronuevo7 / $moneda1 > 0 ){

         $cociente = $numeronuevo7 / $moneda1;

         echo "Hay: " . floor($cociente) . " moneda(s) de: $moneda1. </br>";

         $numeronuevo8 = $numeronuevo7 % $moneda1;

                
    }
            
     if ($numeronuevo8 / $moneda2 > 0 ){

          $cociente = $numeronuevo8 / $moneda2;

                echo "Hay: " . floor($cociente) . " moneda(s) de: $moneda2. </br>";

                $numeronuevo9 = $numeronuevo8 % $moneda2;

               
            }

    //Desde aqui hayamos las monedas (si las hay) restando al dinero enviado
    //al principio su cantidad sin decimales, si no es 0 se ejecutara el switch
    
    
    //forzamos a sacar la parte entera para poder sacar los centimos

            $entera = (int) $dinero;

            //Restamos al dinero la parte entera
           
            $numerodecimal = $dinero - $entera;

            //Aqui redondeamos los centimos

            $monedas = round($numerodecimal * 100)/100;
            
            // Pasariamos al switch como no es posible usar arrays
            // He definido la cantidad de centimos yo mismo

            switch ($monedas) {

                    case 0.9:
                        
                        echo "Hay 1 Monedas de 0.5. ";
                        echo"</br>";
                        echo "Hay 2 Monedas de 0.2. ";


                       break;

                    case 0.8:
                        
                        echo "Hay 1 Monedas de 0.5. ";
                        echo"</br>";
                        echo "Hay 1 Monedas de 0.2. ";
                        echo"</br>";
                        echo "Hay 1 Monedas de 0.1. ";

                       break;

                    case 0.7:
                        
                     echo "Hay 1 Monedas de 0.5. ";
                     echo"</br>";
                     echo "Hay 1 Monedas de 0.2. ";

                     
                      break;

                    case 0.6:
                        
                        echo "Hay 1 Monedas de 0.5. ";
                        echo"</br>";
                        echo "Hay 1 Monedas de 0.1. ";

                      break;

                    case 0.5:
                        
                        echo "Hay 1 Monedas de 0.5. ";

                       break;

                    case 0.4:
                        
                        echo "Hay 2 Monedas de 0.2. ";

                       break;

                    case 0.3:
                    
                        echo "Hay 1 moneda de 0.2.";
                        echo"</br>";
                        echo "Hay 1 moneda de 0.1.";

                        break;

                    case 0.2:
                    
                        echo "Hay 1 moneda de 0.2.";

                       break;

                    case 0.1:
                        
                        echo "Hay 1 moneda de 0.1.";

                       break;
                    
                    default:

                        echo "</br>";
                        echo "No tienes monedas sueltas.";

                        break;
                

            }

            echo "</br>";
            echo "</br>";
            echo "<a href = '04_formulariobilletes.html'> Volver al formulario.</a>";
            
?>   
</body> 
</html>