<?php

    define('DB_SERVER','localhost');
    define('DB_USUARIO','pelusa');
    define('DB_CONTRASEÑA','pelusa');
    define('DB_BASEDATOS','basedatos');

    $conexion = mysqli_connect(DB_SERVER,DB_USUARIO,DB_CONTRASEÑA,DB_BASEDATOS) or die ("culo.");

    

    ?>

    