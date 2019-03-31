<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario de Busqueda</title>
	<style>	</style>
</head>
<body>
	<!-- En action indicar la pagina a visitar para mostrar resultados -->
	<h3> Buscar por nombre de producto</h3>
	<form action="Pagina_Actualizacion_Resultado.php" method="GET">

		<label>Busqueda: <input type="text" name="buscar"></label>
		<input type="submit" name="enviando" value="Pulsar para buscar">
	</form>
</body>
</html>