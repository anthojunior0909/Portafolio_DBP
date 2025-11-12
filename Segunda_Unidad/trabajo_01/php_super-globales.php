<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>
    <?php

    $x = 75;
  
    function myfunction1() {
    echo $GLOBALS['x'];
    }

    myfunction1();
    echo "<br>";
    /*ERROR:$x = 75;
    function myfunction() {
    echo $x;
    }

    myfunction() */
    $x = 75;
  
    function myfunction0() {
    global $x;
    echo $x;
    }

    myfunction0();

    echo "<br>";
    //crear variable global
    $x = 100;

    echo $GLOBALS["x"];
    echo $x;
    echo "<br>";
    function myfunction2() {
    $GLOBALS["x"] = 100;
    }

    myfunction2();

    echo $GLOBALS["x"];
    echo $x;
    echo "<br>";
    // Devuelve el nombre del archivo del script que se está ejecutando actualmente
    echo $_SERVER['PHP_SELF'] . "<br>";

    // Devuelve la versión del Common Gateway Interface (CGI) que usa el servidor
    echo $_SERVER['GATEWAY_INTERFACE'] . "<br>";

    // Devuelve la dirección IP del servidor host
    echo $_SERVER['SERVER_ADDR'] . "<br>";

    // Devuelve el nombre del servidor host (por ejemplo: www.ejemplo.com)
    echo $_SERVER['SERVER_NAME'] . "<br>";

    // Devuelve la cadena de identificación del servidor (por ejemplo: Apache/2.4.41)
    echo $_SERVER['SERVER_SOFTWARE'] . "<br>";

    // Devuelve el nombre y la versión del protocolo de información (por ejemplo: HTTP/1.1)
    echo $_SERVER['SERVER_PROTOCOL'] . "<br>";

    // Devuelve el método de solicitud usado para acceder a la página (GET, POST, etc.)
    echo $_SERVER['REQUEST_METHOD'] . "<br>";

    // Devuelve la marca de tiempo del inicio de la solicitud
    echo $_SERVER['REQUEST_TIME'] . "<br>";

    // Devuelve la cadena de consulta si la página fue accedida con una query string
    echo $_SERVER['QUERY_STRING'] . "<br>";

    // Devuelve el encabezado "Accept" de la solicitud actual
    echo $_SERVER['HTTP_ACCEPT'] . "<br>";

    // Devuelve el encabezado "Accept-Charset" (por ejemplo: utf-8,ISO-8859-1)
    echo $_SERVER['HTTP_ACCEPT_CHARSET'] . "<br>";

    // Devuelve el encabezado "Host" de la solicitud actual
    echo $_SERVER['HTTP_HOST'] . "<br>";

    // Devuelve la URL completa de la página actual (si el navegador la envía)
    echo $_SERVER['HTTP_REFERER'] . "<br>";

    // Indica si la conexión es HTTPS (segura)
    echo $_SERVER['HTTPS'] . "<br>";

    // Devuelve la IP desde donde el usuario accede a la página
    echo $_SERVER['REMOTE_ADDR'] . "<br>";

    // Devuelve el nombre del host del usuario (si está disponible)
    echo $_SERVER['REMOTE_HOST'] . "<br>";

    // Devuelve el puerto del usuario usado para comunicarse con el servidor
    echo $_SERVER['REMOTE_PORT'] . "<br>";

    // Devuelve la ruta absoluta del script que se está ejecutando
    echo $_SERVER['SCRIPT_FILENAME'] . "<br>";

    // Devuelve el correo definido en la configuración del servidor (SERVER_ADMIN)
    echo $_SERVER['SERVER_ADMIN'] . "<br>";

    // Devuelve el puerto que usa el servidor (por ejemplo: 80)
    echo $_SERVER['SERVER_PORT'] . "<br>";

    // Devuelve la firma del servidor (versión e información del host virtual)
    echo $_SERVER['SERVER_SIGNATURE'] . "<br>";

    // Devuelve la ruta del sistema de archivos hacia el script actual
    echo $_SERVER['PATH_TRANSLATED'] . "<br>";

    // Devuelve la ruta del script actual (por ejemplo: /index.php)
    echo $_SERVER['SCRIPT_NAME'] . "<br>";

    // Devuelve la URI de la página actual
    echo $_SERVER['SCRIPT_URI'] . "<br>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
    }
    echo "<br>";
    
    ?>
</body>
</html>