<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Titulo del documento</title>
	<style>
		table {
			width: 700px;
			border: 1px dotted #00FF00;
			margin: left;
		}
</style>
</head>
<body>
<?php
	// Variable que guarda el texto escrito por el usuario el name=buscar
	$busqueda=$_GET['buscar'];
	require("02Datos_Conexion.php");

	// conexion a la BD metodo procedimental sin la BD
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contrasenia);
	// Condicional mysqli_connect_errno, se ejecuta si no hay exito en la conexion a la BD
	if (mysqli_connect_errno()){
		echo "Se ha producido un fallo al conectar con la BD";
		exit();
	}
	// Comprobacion de BBDD
	mysqli_select_db($conexion, $db_nombre) or die ("No localizada la BD");
	// Caracteres especiales como tildes
	mysqli_set_charset($conexion, "utf-8");
	// Consulta
	$consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTICULO LIKE '%$busqueda%'";
	// Ahora ejecutar esta consulta: nos pide la conexion y la consulta
	$resultado=mysqli_query($conexion, $consulta);
	// Consulta guardada en ResultSet (Tabla virtual en memoria donde hemos cargado toda la informacion que nos devuelve la sentencia SQL)
	// Mirar la informacion dentro de ese ResultSet de la tabla virtual
	echo "<h2>Datos de los registros</h2>";
	while ($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
		// echo "<table><tr><td>";
		// formulario en action se indica la pagina a la que se dirigira cuando pulsemos el boton de actualziar o enviar
		echo "<form action='Pagina_Actualizar_Registro.php' method='GET'>";
		// echo $fila['CÓDIGOARTÍCULO'] . "</td><td> ";
		// obtenemos el valor del array asociativo de la busqueda realizada previamente
		echo "<input type='text' name='c_art' value='" . $fila['CODIGOARTICULO'] . "' readonly><br>";
		echo "<input type='text' name='n_art' value='" . $fila['NOMBREARTICULO'] . " '><br>";
		echo "<input type='text' name='categoria' value='" . $fila['CATEGORIA'] . "'><br>";
		echo "<input type='text' name='precio' value='" . $fila['PRECIO'] . "'><br>";
		echo "<input type='text' name='fecha' value='" . $fila['FECHA']. "'><br>";
		echo "<input type='text' name='importado' value='" . $fila['IMPORTADO'] . "'><br>";
		echo "<input type='text' name='p_origen' value='" . $fila['PAISDEORIGEN'] . "'><br>";
		echo "<input type='submit' name='enviar' value='Actualización'>";
		echo "</form>";echo "<br />";

	}
	// Cerramos la conexion que hemos utilizado, caso de que haya varias
	mysqli_close($conexion);
?>
</body>
</html>
