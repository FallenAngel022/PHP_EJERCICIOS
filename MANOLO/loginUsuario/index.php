<?php
// Se crea una sesion 
session_start();
include_once "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head> <title>Registrar Usuario</title>
 	<meta charset = "utf-8">
 	<link rel="stylesheet" type="text/css" href="estilos.css" />
</head>
<body>
 <h3>Registrar usuario en una Base de datos:</h3>
<form class='registro' action='index.php' method='POST'>
    <div><label>Usuario:</label>
    	<input type='text' name='usuario' value=''></div>
    <div><label>Clave:</label>
    	<input type='password' name='password' value=''></div>
    <div><label>Repetir clave:</label>
    	<input type='password' name='repitepassword' value=''></div>
    <div><input type='submit' name="enviar" value='Registrar usuarios'></div>
</form>
<?php
if(isset($_POST['enviar'])) {
	if($_POST['usuario'] == '' or $_POST['password'] == '' or $_POST['repitepassword'] == '') {
		echo 'Por favor rellena todos los campos.';
	}
	else {	
		$consulta = 'SELECT * FROM usuarios';
		$resultado = mysqli_query($conexion, $consulta);
		// Si el valor 0 el usuario no existe y se registras y Si vale 1 el usuario ya existe y no se registra
		$verificar_usuario = 0;

		while($result = mysqli_fetch_object($resultado))	{
			if($result->usuario == $_POST['usuario']) {
				$verificar_usuario = 1;
			}
		}

		if($verificar_usuario ==0) {
			if($_POST['password'] == $_POST['repitepassword']) {
				$usuario = $_POST['usuario'];
				$password = $_POST['password'];
				$sql = "INSERT INTO usuarios (usuario,password) VALUES ('$usuario','$password')";
				mysqli_query($conexion, $consulta);

				echo "<br />Usted se ha registrado correctamente.";	
			}
			else {
				echo "<br />Las claves no son iguales, intente nuevamente.";	
			}
		}
		else {
			echo "<br />Este usuario ya existia en la base de datos.";	
		}
	}
}

?>
 </body>
</html>