<html>

    <head>

            <title>EJEMPLO EN PHP</title>


    <body>

            <h3>script para el navegador</h3>

        <b>


    <?php

    echo "informacion del SO y del navegador<br />";
    echo $_SERVER["HTTP_USER_AGENT"]. "<p />";
    echo "lenguaje del navegador<br />";
    echo $_SERVER["HTTP_ACCEPT_LANGUAGE"]. "<p />";
    echo "ip del cliente<br />";
    echo $_SERVER["REMOTE_ADDR"]. "<p />";
    echo "ruta fisica de la pagina consultada<br />";
    echo $_SERVER["DOCUMENT_ROOT"]. "<p />";
    echo "url del cliente que hace el acceso<br />";
    echo $_SERVER["HTTP_REFERER"]. "<p />";

    ?>

    </b>

    </body>
    </head>
    </html>


