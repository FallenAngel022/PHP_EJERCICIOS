<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
    <title>OPERACIONES CON CADENA</title> 
    <style type="text/css">
  
    body{
	background:black;
    color: pink;
    
    }
</style>
</head>   
<body>   
<?php 


    //Recogemos la cadena con POST
    
    $cadena = $_POST['cadena'];

    //En el caso de no seleccionar operacion y no mandar indice 
    //Definimos esta sentencia para eliminar el warning

    $operacion = isset($_POST['opera']) ? $_POST['opera'] : '';

    //Utilizamos isset para que falle si esta vacia y comparamos que lo 
    //que nos llega en $operacion es elimina( que equivale a eliminar espacios)
    // si se cumplen ambas condiciones se realiza lo que hay dentro de este
    //condicional

    if ((isset($cadena)) and ($operacion == "elimina")){

    //creamos una funcion para reemplazar todos los espacios en blanco
    //Podriamos usar trim y sus variantes pero no eliminariamos los espacios
    //que hay en medio, por ello he decidido usar str_replace he indicarle
    //que hay que reemplazar que son los espacios por ningun espacio.

    function espaciosno ($cadena){
        $cadena = str_replace(' ', '', $cadena);
        return $cadena;
    }

    //Asignamos en una variable la llamada de la funcion

    $espaciosno = espaciosno ($cadena);

    //Imprimimos el resultado, creamos una tabla para ordenar la salida mucho mejor.

    echo "<table align='center'><tr><th>LA CADENA SIN ESPACIOS ES:</th></tr></table>";
    echo "</br>";
    echo "</br>";

    echo "<table border = '1' width='30%' border='1px' align='center' bordercolor = 'white'><tr><th>CADENA SIN ESPACIOS:</th><th>FORMULARIO:</th></tr>";
    echo "<tr align ='center'><td>$espaciosno</td>";
    echo "<td><a href = '01formulariocadena.html'> Volver al formulario.</td></tr></a>";
    echo "</table>";

    //La siguiente condicion es la de contar las palabras

    //Igual que en el anterior comprobamos que no este vacia y que la operacion que se manda en el formulario es 'cuenta'(equivale a contar palabras)

    } elseif ((isset($cadena)) and ($operacion == "cuenta")) {

        //Lo ordenamos en una tabla para que sea mas entendible y vistoso para el usuario

        echo "<table align ='center'><tr><td><h3>NUMERO DE OCURRENCIAS DE CADA PALABRA: </h3></tr></td></table>";

        //Utilizamos la sentencia explode para separar las palabras con espacios y poder contarlas mas adelante.


    $frase1 = explode(" ", $cadena);

    //forzamos la variable a array para poder trabajar mejor

    $frase =  (array) $frase1;

    //ahora mediante el uso de esta variable vemos que palabras hay y cuanto
    //se repiten dentro del array

    $frase = array_count_values($frase);

    //inicamos la tabla para mostrarlo mas vistoso

    echo "<table border = '1' align ='center'>";

    echo "<tr><th>PALABRA/S</th><th>OCURRENCIA/S</th></tr>";

    //Iniciamos el bucle para recorrer las palabras y las veces que se repiten en donde $palab equivale a las palabras que hay segun la cadena que hemos enviado 
    //Y $repe es el numero de veces que cada palabra a sido repetida.
    
    foreach ($frase as $palab => $repe ){

        //Lo separamos en celdas
        echo "<tr><td>$palab</td><td>$repe</td></tr>";

    
        }

    
        echo "<table>";

       


   //En esta contemplariamos el fallo de no seleccionar ninguna operacion
   //Mostrando al usuario asi un mensaje de error por si esta despistado

} else {

echo "<table align = 'center' bordercolor= 'black'>";
echo "<tr><td><h3>ERROR AL PROCESAR LA CADENA: </h3></td></tr></table>";

 echo "<table border ='1' align = 'center' bordercolor= 'white'><tr><th>INFORMACION:</th><th>FORMULARIO:</th></tr>";
 
 echo "<tr><td>No ha seleccionado ninguna operacion, asegurese que selecciona alguna antes de procesar la cadena.</td>";
 echo "<td><a href = '01formulariocadena.html'> Volver al formulario.</td></tr></a>";
 echo "</table>";


}


     

?>   
</body> 
</html>