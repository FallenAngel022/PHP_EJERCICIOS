<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   
<?php 

    //Recogemos el rango de numero a utilizar
    
    $digito1 = $_POST['numero1'];

    $digito2 = $_POST['numero2'];

    //Iniciamos el divisor a 1 para posteriores bucles

    $divisor = 1;


    //He usado el condicional IF ya que solo se puede dar una condicion a la vez


        //En el caso de que el primer numero sea menor

            if ($digito1 < $digito2){

                echo "<h3> TABLAS ENTRE EL NUMERO $digito1 Y EL NUMERO $digito2 ORDENADAS DE MENOR A MAYOR.</h3> </br>";

                //creamos un for para comprobar que el primer digito sea menor
                //y poder incrementarlo hasta el segundo numero 
                //donde se romperia la condicion y pararia

                //mientras $digito1 sea menor o igual que $digito2
                for ($digito1; $digito1 <= $digito2 ; $digito1++) { 

                    //creamos un segundo bucle para el divisor(1 a 10)
                    //inicializado en 1, mientras sea menor o igual que 10
                    //ejecuta la division dentro del bucle, cuando no se cumpla parara,
                    //pasara al primer for y comprobara si el $digito1 es menor que $digito2
                    //si no lo es ejecutara los bucles de nuevo hasta que se rompa la condicion
                
                    
                     for($divisor = 1;$divisor <= 10; $divisor++){

                         $calculo = $digito1 / $divisor;
                                                          //Redondeamos a 2 decimales
                         echo "$digito1 div $divisor = " . round($calculo,2) . "</br>";

                            
                         }

                             echo "</br>";

                         }

          } elseif ($digito2 < $digito1){

            //Aqui comtemplamos el caso en el que el $digito2 sea menor que $digito1
            //Es la misma logica salvo que invirtiendo el lugar de las variables y los signos

            echo "<h3> TABLAS ENTRE EL NUMERO $digito1 Y EL NUMERO $digito2 ORDENADAS DE MENOR A MAYOR.</h3> </br>";


                 for ($digito2; $digito2 <= $digito1 ; $digito2++) { 
                
                    
                     for($divisor = 1;$divisor <= 10; $divisor++){

                        $calculo = $digito2 / $divisor;
                                                         //redondeamos los decimales a 2
                        echo "$digito2 div $divisor = " . round($calculo,2) . "</br>";

                       
                          }

                             echo "</br>";

                          }

            } else {


                //En el caso que se introduzcan los numeros iguales 
                //solo se mostrara una tabla ya que solo hay un numero
                echo "<h3> TABLAS ENTRE EL NUMERO $digito1 Y EL NUMERO $digito2 ORDENADAS DE MENOR A MAYOR.</h3> </br>";

                echo "Mismo numero por tanto mostrando la unica tabla.</br>";
                echo "</br>";

                //Igual solo que con el bucle de la division ya que al haber un numero 
                //no es necesario comprobar nada mas

                for($divisor = 1;$divisor <= 10; $divisor++){

                    $calculo = $digito1 / $divisor;

                    echo "$digito1 div $divisor = " . round($calculo,2) . "</br>";

                }

            }

            echo "</br>";
            echo "<a href = '03_formulariodivisiones.html'> Volver al formulario.</a>";

     

?>   
</body> 
</html>