<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //sintaxis para definir constantes
    define("nombre_de_constante","valor de la constante");
    echo nombre_de_constante;
    echo "<br>";
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING;
    echo "<br>";
    const MYCAR = "Volvo";
    echo MYCAR;
    echo "<br>";
    define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
    ]);
    echo cars[0];
    echo "<br>";
    //constantes globales
    //define("GREETING", "Welcome to W3Schools.com!");

    function myTest() {
    echo GREETING;
    }

    myTest();
    ?>
</body>
</html>