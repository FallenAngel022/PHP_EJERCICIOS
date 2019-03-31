<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Titulo del documento</title>
	<style>

	</style>
</head>
<body>
<?php
	// 1. Variables que guardan los valores provenientes del formulario
	$cod = $_GET["c_art"];
	$cat = $_GET["categoria"];
	$nom = $_GET["n_art"];
	$pre = $_GET["precio"];
	$fec = $_GET["fecha"];
	$imp = $_GET["importado"];
	$pai = $_GET["p_origen"];	
	// $busqueda=$_GET['buscar']; 
	require("02Datos_Conexion.php");
	// conexion a la BD metodo procedimental sin la BD
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contrasenia);
	// Condicion mysqli_connect_errno, se ejecuta si no hay exito en la conexion a la BD
	if (mysqli_connect_errno()){
		echo "Se ha producido un error al conectar con la BD";
		exit();
	}
	// Comprobacion de BBDD
	mysqli_select_db($conexion, $db_nombre) or die ("No localizada la BD");
	// Caracteres especiales como tildes
	mysqli_set_charset($conexion, "utf-8");
	// 2. Modificar la instruccion INSERT para introducir en todos los campos y usar los valores de las varaibles utilizadas al principio
	$consulta="UPDATE PRODUCTOS SET CODIGOARTICULO='$cod', CATEGORIA='$cat', NOMBREARTICULO='$nom', PRECIO='$pre', FECHA='$fec', IMPORTADO='$imp', PAISDEORIGEN='$pai' WHERE  CODIGOARTICULO='$cod'";
	// Ahora ejecutar esta consulta: nos pide la conexion y la consulta
	$resultado=mysqli_query($conexion, $consulta);

	// 3. Informar del exito o no de la insercion
	if ($resultado==false){
		echo "Error en la consulta realizada";
	}
	else {
		echo "<h3>Registro actualizado en la tabla</h3>";
		echo "<table><tr><td>$cod</td></tr>";
		echo "<tr><td>$cat</td></tr>";	
		echo "<tr><td>$nom</td></tr>";
		echo "<tr><td>$pre</td></tr>";	
		echo "<tr><td>$fec</td></tr>";	
		echo "<tr><td>$imp</td></tr>";	
		echo "<tr><td>$pai</td></tr></table>";	
	}
	// Cerrar la conexion tilizada, caso de que haya varias
	mysqli_close($conexion);
?>

</body>
</html>