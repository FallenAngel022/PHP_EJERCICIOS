<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>Titulo de la pagina HTML5</title> 
</head>   
<body>   
<?php 
    
    //creo una funcion para comprobar si un numero es octal puesto que no 
    //existe nada en php para comprobar si un numero es octal. referencia: http://php.net/manual/en/function.octdec.php

    function compruebaoctal($octal) {
      return decoct(octdec($octal)) == $octal;
              }

    //misma funcion para numero binario

    function compruebabinario($binario) {
      return decbin(bindec($binario)) == $binario;

  
              }

    //Otra funcion mas para ver que realmente se pasa un numero hexadecimal

    function compruebahexadecimal($hexadecimal) {
      return dechex(hexdec($hexadecimal)) == $hexadecimal;

  
              }

       //Aqui recogemos el numero a convertir       
    
      $numerobase = $_POST['numero'];


      //En el caso de que no se seleccionen ambas bases, solo una o el formato sea incorrecto
      //utilizamos la sentencia isset para que si ocurre esto no nos salga un error de indice 
      //debido a que no se ha seleccionado nada en el radio del formulario y por tanto no recibes nada.

      $baseactual = isset($_POST['base']) ? $_POST['base'] : '';

      

      $conversion = isset($_POST['conversion']) ? $_POST['conversion'] : '';
      


          //caso decimal

          //Definimos la doble condicion de que sea numerico y decimal

              if ((is_numeric($numerobase)) and ($baseactual == "decimal")){
                
              //He definido un switch para contemplar los 4 casos (Decimal,octal,binario y hexadecimal)
              //He complementado los bucles con las funciones de conversion de php
              //como no se prohibe en el ejercicio las he usado, ademas que hacerlo a mano seria 
              //añadir muchisimas mas lineas de codigo junto con muchos bucles que complicarian todo

              switch ($conversion) {

                case "decimal":

                //misma base por tanto se muestra el mensaje
                  
                  echo "El numero ya se encuentra en esta base, selecciona otra.";


                  echo "<br/>";
                  echo "<br/>";
                  echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";

                  break;
                
                case "octal":

                //pasamos de decimal a octal con decoct

                echo "<h3>CAMBIAR UN NUMERO DE UNA BASE A OTRA</h3>";
                  
                    echo "El numero a convertir es el numero $numerobase dado en base 10 <br/>";
                    echo "vamos a transformarlo a base 8 <br/>";
                    echo "<br/>";
                    echo "El resultado es: " . decoct($numerobase).".";


                    echo "<br/>";
                    echo "<br/>";
                    echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";


                  break;

                case "binario":

                //pasamos de decimal a binario con decbin

                echo "<h3>CAMBIAR UN NUMERO DE UNA BASE A OTRA</h3>";
                  
                echo "El numero a convertir es el numero $numerobase dado en base 10 <br/>";
                echo "vamos a transformarlo a base 2 <br/>";
                echo "<br/>";
                echo "El resultado es: " . decbin($numerobase).".";

                echo "<br/>";
                echo "<br/>";
                echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";

                break;

                case "hexadecimal":

                //pasamos de decimal a hexadecimal con dechex

                echo "<h3>CAMBIAR UN NUMERO DE UNA BASE A OTRA</h3>";
                  
                echo "El numero a convertir es el numero $numerobase dado en base 8 <br/>";
                echo "vamos a transformarlo a base 16 <br/>";
                echo "<br/>";
                echo "El resultado es: " . dechex($numerobase).".";
                echo "<br/>";
                echo "<br/>";

                echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";
                
                break;

                default:

                //Mensaje de error si olvidas la base a convertir

                  echo "No ha elegido la base a la que quiere convertir el numero.";

                  echo "<br/>";
                  echo "<br/>";
                  echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";

                  
                  break;
              }

            }
              //Cuando el numero es octal

              //llamamos la funcion creada (justo al principio) para asegurarnos que es octal
              //mismo procedimiento que con el decimal

              elseif ((compruebaoctal($numerobase)) and ($baseactual == "octal")){
              
                //misma logica que con el decimal

              switch ($conversion) {

                case "decimal":

                //convertimos de octal a decimal con la funcion octdec
                  
                echo "<h3>CAMBIAR UN NUMERO DE UNA BASE A OTRA</h3>";
                  
                echo "El numero a convertir es el numero $numerobase dado en base 8 <br/>";
                echo "vamos a transformarlo a base 10 <br/>";
                echo "<br/>";
                echo "El resultado es: " . octdec($numerobase).".";


                echo "<br/>";
                echo "<br/>";
                echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";

                  break;
                
                case "octal":

                //misma base por tanto mensaje

                echo "El numero ya se encuentra en esta base, selecciona otra.";


                  echo "<br/>";
                  echo "<br/>";
                  echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";


                  break;

                case "binario":

                //De manera mas "bruta" creo una variable pasando de octal a decimal 
                //y machaco en otra de decimal a binario como se pasa realmente

               $converuno = octdec($numerobase);

               $converdos = decbin($converuno);
                


                echo "<h3>CAMBIAR UN NUMERO DE UNA BASE A OTRA</h3>";
                  
                echo "El numero a convertir es el numero $numerobase dado en base 8 <br/>";
                echo "vamos a transformarlo a base 2 <br/>";
                echo "<br/>";
                echo "El resultado es: " . $converdos.".";

                echo "<br/>";
                echo "<br/>";
                echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";

                break;

                case "hexadecimal":

                //mismo procedimiento que con el binario

                $converuno = octdec($numerobase);
                $converdos = dechex($converuno);

                echo "<h3>CAMBIAR UN NUMERO DE UNA BASE A OTRA</h3>";
                  
                echo "El numero a convertir es el numero $numerobase dado en base 10 <br/>";
                echo "vamos a transformarlo a base 16 <br/>";
                echo "<br/>";
                echo "El resultado es: " . $converdos. ".";
                echo "<br/>";
                echo "<br/>";

                echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";
                
                break;

                default:

                //mensaje de error de no seleccionar la base a convertir

                  echo "No ha elegido la base a la que quiere convertir el numero.";

                  echo "<br/>";
                  echo "<br/>";
                  echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";

                  
                  break;
              }

                //Calculo binario
                //LLamamos la funcion de comprobar si es binario (creada al principio)

            }  elseif ((compruebabinario($numerobase)) and ($baseactual == "binario")){
              
              //misma logica que con el decimal y octal

                switch ($conversion) {

                  case "decimal":

                  //pasamos de binario a decimal con bindec
                    
                  echo "<h3>CAMBIAR UN NUMERO DE UNA BASE A OTRA</h3>";
                    
                  echo "El numero a convertir es el numero $numerobase dado en base 2 <br/>";
                  echo "vamos a transformarlo a base 10 <br/>";
                  echo "<br/>";
                  echo "El resultado es: " . bindec($numerobase) . ".";
  
                  echo "<br/>";
                  echo "<br/>";
                  echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";
  
                    break;
                  
                  case "octal":

                  //Aqui conbinamos ambas funciones, es una manera mas sencilla de hacerlo sin usar
                  //tantas variables como lo he echo en el caso de la base octal
                  //he usado como referencia el manual
  
                  echo "<h3>CAMBIAR UN NUMERO DE UNA BASE A OTRA</h3>";
                    
                      echo "El numero a convertir es el numero $numerobase dado en base 2 <br/>";
                      echo "vamos a transformarlo a base 8 <br/>";
                      echo "<br/>";
                      echo "El resultado es: " . bindec(decoct($numerobase)). ".";
  
  
                      echo "<br/>";
                      echo "<br/>";
                      echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";
  
  
                    break;
  
                  case "binario":

                  //misma base por tanto mensaje
  
                  echo "El numero ya se encuentra en esta base, selecciona otra.";
  
  
                    echo "<br/>";
                    echo "<br/>";
                    echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";
  
                  break;
  
                  case "hexadecimal":

                  //pequeña conversion para hacerlo mas facil jugando con los formatos
                  //Es la equivalencia de las anteriores pero usando una variable, he cambiado aqui puesto
                  //que al hacerlo igual que antes no me convertia la base correctamente.

                  $binhex = dechex(bindec($numerobase));
  
                  echo "<h3>CAMBIAR UN NUMERO DE UNA BASE A OTRA</h3>";
                    
                  echo "El numero a convertir es el numero $numerobase dado en base 2 <br/>";
                  echo "vamos a transformarlo a base 16 <br/>";
                  echo "<br/>";
                  echo "El resultado es: " . $binhex.".";
                  echo "<br/>";
                  echo "<br/>";
  
                  echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";
                  
                  break;
  
                  default:

                  //fallo de no seleccionar la base de conversion
  
                    echo "No ha elegido la base a la que quiere convertir el numero.";
  
                    echo "<br/>";
                    echo "<br/>";
                    echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";
  
                    
                    break;
                }

                //caso hexadecimal
                //LLamamos a la funcion del principio para comprobar que es hexadecimal
                //doble condicion para que no haya ningun fallo

            } elseif ((compruebahexadecimal($numerobase)) and ($baseactual == "hexadecimal")){
              
              //misma logica como en el decimal, octal y binario

              switch ($conversion) {

                case "decimal":

                //hacemos la operacion de hexadecimal a decimal con hexdec
                  
                echo "<h3>CAMBIAR UN NUMERO DE UNA BASE A OTRA</h3>";
                  
                echo "El numero a convertir es el numero $numerobase dado en base 16 <br/>";
                echo "vamos a transformarlo a base 10 <br/>";
                echo "<br/>";
                echo "El resultado es: " . hexdec($numerobase).".";
                echo "<br/>";
                echo "<br/>";

                echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";
                  
                  break;
                
                case "octal":

                //usamos la conbinacion de ambas funciones como hemos hecho con anterioridad

                echo "<h3>CAMBIAR UN NUMERO DE UNA BASE A OTRA</h3>";
                  
                    echo "El numero a convertir es el numero $numerobase dado en base 16 <br/>";
                    echo "vamos a transformarlo a base 8 <br/>";
                    echo "<br/>";
                    echo "El resultado es: " . hexdec(decoct($numerobase)). ".";


                    echo "<br/>";
                    echo "<br/>";
                    echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";


                  break;

                case "binario":

                //igual que en caso anterior facilitamos la conversion 
                //para usar una sola variable en los multiples casos que pueda haber

                $hexabin = decbin(hexdec($numerobase));

                echo "<h3>CAMBIAR UN NUMERO DE UNA BASE A OTRA</h3>";
                  
                echo "El numero a convertir es el numero $numerobase dado en base 16 <br/>";
                echo "vamos a transformarlo a base 2 <br/>";
                echo "<br/>";
                echo "El resultado es: " . $hexabin. ".";

                echo "<br/>";
                echo "<br/>";
                echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";

                break;

                case "hexadecimal":

                //misma base por tanto mensaje

                echo "El numero ya se encuentra en esta base, selecciona otra.";


                  echo "<br/>";
                  echo "<br/>";
                  echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";

                
                break;

                default:

                //mensaje en caso de no elegir la base a convertir

                  echo "No ha elegido la base a la que quiere convertir el numero.";

                  echo "<br/>";
                  echo "<br/>";
                  echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";

                  
                  break;
              }

            }
            
            else {

              //El mensaje de error si no elegimos el formato incorrecto o no completamos las bases.
              //Este mensaje se muestra sin ningun if es validado


                echo "Formato incorrecto, numero equivocado o bases no seleccionadas.";

                echo "<br/>";
                echo "<br/>";
                echo "<a href = '02_formularioconversion.html'> Volver al formulario.</a>";

           
            }

          
    
?>   
</body> 
</html>