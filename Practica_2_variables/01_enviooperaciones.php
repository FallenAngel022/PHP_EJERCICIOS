<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Operaciones con dos numeros.</title> 
</head>   
<body>   
<?php 
    
    //Por aqui recogemos los numeros
    
    $digito1 = $_POST['digito1'];

    $digito2 = $_POST['digito2'];

    //Por aqui pasamos la operacion a realizar combinado con isset 
    //Por si no se selcciona ninguna base, se esta manera como no se
    //envia el indice del radio no saltara un error

    $operacion = isset($_POST['calculo']) ? $_POST['calculo'] : '';


    //He decidido usar el bucle switch para cada operacion que se requiera hacer ( suma, resta,...)
    //Dentro de cada case he definido una operacion para cada situacion que recogeremos en el post
    //En las operaciones mayor y menor de dos numeros he usado ademas el bucle IF para comparar los digitos y mostrar el correcto


    //Aqui recogemos la operacion y se busca el caso correcto para realizarlo

        switch ($operacion){

            case "suma":

            //Por cada operación he definido una funcion (menos en la comparacion menor Y mayor)

        function sumapeteporica ($digito1, $digito2 ){

                    //Definimos la operacion suma
        
                    $calculo = $digito1 + $digito2;
                    
                    return $calculo;


                    }

                    //Almacenamos la operacion en una variable que mostraria el resultado
                    //De la operacion

            $calculosuma = sumapeteporica ($digito1, $digito2);

            // Aqui se mostrarian los resultados

            echo "<h2>Realizar operaciones con 2 numeros.</h2>";
            echo "<h3>Numeros introducidos</h3>";

     
            echo "Primer numero: $digito1. </br>";
            echo "Segundo numero: $digito2.</br>";
            echo "Resultado de la operacion: $digito1 mas $digito2 =  $calculosuma.";


            echo"</br>";
            echo"</br>";
            echo "<a href = '01_formulariooperaciones.html'> Volver al formulario</a>";

            break;


            //Igual en el caso de la resta

            case "resta":

            function restapeteporica ($digito1, $digito2 ){


        
                $calculo = $digito1 - $digito2;
                
                return $calculo;


                }

        $calculoresta = restapeteporica ($digito1, $digito2);

        echo "<h2>Realizar operaciones con 2 numeros.</h2>";
        echo "<h3>Numeros introducidos</h3>";
 

            echo "Primer numero: $digito1. </br>";
            echo "Segundo numero: $digito2.</br>";
            echo "Resultado de la operacion: $digito1 menos $digito2 = $calculoresta.";

            echo"</br>";
            echo"</br>";
            echo "<a href = '01_formulariooperaciones.html'> Volver al formulario</a>";

            break;

            //Igual en el caso del producto

            case "producto":

            function productopeteporica ($digito1, $digito2 ){


        
                $calculo = $digito1 * $digito2;
                
                return $calculo;


                }

        $calculoproducto = productopeteporica ($digito1, $digito2);

        echo "<h2>Realizar operaciones con 2 numeros.</h2>";
        echo "<h3>Numeros introducidos</h3>";
 

        echo "Primer numero: $digito1. </br>";
        echo "Segundo numero: $digito2.</br>";
        echo "Resultado de la operacion: $digito1 por $digito2 = $calculoproducto.";

        echo"</br>";
        echo"</br>";
        echo "<a href = '01_formulariooperaciones.html'> Volver al formulario</a>";

            break;

            //Igual en el caso de la division

            case "division":

            function divisionpeteporica ($digito1, $digito2 ){


        
                $calculo = $digito1 / $digito2;
                
                return $calculo;


                }

        $calculodivision = divisionpeteporica ($digito1, $digito2);

        echo "<h2>Realizar operaciones con 2 numeros.</h2>";
        echo "<h3>Numeros introducidos</h3>";
 

        echo "Primer numero: $digito1. </br>";
        echo "Segundo numero: $digito2.</br>";
        echo "Resultado de la operacion: $digito1 entre $digito2 = $calculodivision.";


        echo"</br>";
        echo"</br>";
        echo "<a href = '01_formulariooperaciones.html'> Volver al formulario</a>";

            break;

            //Igual en el caso del resto de la division

            case "resto division":

            function restoapeteporica ($digito1, $digito2 ){


        
                $calculo = $digito1 % $digito2;
                
                return $calculo;


                }

        $calculoresto = restoapeteporica ($digito1, $digito2);

        echo "<h2>Realizar operaciones con 2 numeros.</h2>";
        echo "<h3>Numeros introducidos</h3>";
 

            echo "Primer numero: $digito1. </br>";
            echo "Segundo numero: $digito2.</br>";
            echo "Resultado de la operacion: $digito1 entre $digito2 da como resto = $calculoresto.";

            echo"</br>";
            echo"</br>";
            echo "<a href = '01_formulariooperaciones.html'> Volver al formulario</a>";

            break;

            //Aqui he implementado un if dentro de la funcion para contemplar los dos casos posibles
            //Que sea mayor o igual

            case "mayor":

            function mayorapeteporica ($digito1, $digito2 ){

                
               if ($digito1 > $digito2){

                     $mayor = $digito1;
                 
                         return $mayor; 

                } elseif ($digito1 == $digito2) {
                    
                    $mayor = " Error Ambos numeros son iguales.";

                        return $mayor;

               } else {

                     $mayor = $digito2;
                
                    return $mayor;
                }
                
            }

        $mayor = mayorapeteporica ($digito1, $digito2);

        echo "<h2>Realizar operaciones con 2 numeros.</h2>";
        echo "<h3>Numeros introducidos</h3>";
 

            echo "Primer numero: $digito1. </br>";
            echo "Segundo numero: $digito2.</br>";
            echo "Resultado de la operacion: El mayor de $digito1 y $digito2 es: $mayor.";


            echo"</br>";
            echo"</br>";
            echo "<a href = '01_formulariooperaciones.html'> Volver al formulario</a>";

            break;

            case "menor":

            //Igual que el anterior pero cambiando el signo a menor (caso contrario)

            function menorapeteporica ($digito1, $digito2 ){


        
                if ($digito1 < $digito2){

                    $menor = $digito1;
                
                        return $menor; 

               } elseif ($digito1 == $digito2) {
                   
                $menor = " Error Ambos numeros son iguales.";

                    return $menor;
                  
              } else {

                    $menor = $digito2;
               
                   return $menor;
               }


                }

        $calculomenor = menorapeteporica ($digito1, $digito2);

        echo "<h2>Realizar operaciones con 2 numeros.</h2>";
        echo "<h3>Numeros introducidos</h3>";
 

            echo "Primer numero: $digito1. </br>";
            echo "Segundo numero: $digito2.</br>";
            echo "Resultado de la operacion: El menor de $digito1 y $digito2 es $calculomenor.";


            echo"</br>";
            echo"</br>";
            echo "<a href = '01_formulariooperaciones.html'> Volver al formulario</a>";

            break;

            //Igual que las funciones suma, resta..

            case "potencia":

            function potenciapeteporica ($digito1, $digito2 ){


        
                $calculo = $digito1 ** $digito2;
                
                return $calculo;


                }

        $calculopotencia = potenciapeteporica ($digito1, $digito2);
 
        echo "<h2>Realizar operaciones con 2 numeros.</h2>";
        echo "<h3>Numeros introducidos</h3>";

            echo "Primer numero: $digito1. </br>";
            echo "Segundo numero: $digito2.</br>";
            echo "Resultado de la operacion: $digito1 elevado a $digito2 = $calculopotencia.";

            echo"</br>";
            echo"</br>";
            echo "<a href = '01_formulariooperaciones.html'> Volver al formulario</a>";

            break;

            default:
            
            echo "No has seleccionado ninguna operacion.";
        
        
        
         }

     

?>   
</body> 
</html>