<?php
// datos para la conexion a mysql
define('DB_SERVER','localhost');
define('DB_USER','usuario');
define('DB_PASS','usuario');
define('DB_NAME','basededatos');
$conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
mysqli_select_db($conexion, DB_NAME) or die ("Base de datos no localizada");
?>