<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //hay tres tipos numericos integer,float,numbre strings
    $a = 5;
    $b = 5.34;
    $c = "25";
    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    $x = 5921;
    var_dump(is_int($x));//verificar si es entero
    echo "<br>";
    $x = 59.21;
    var_dump(is_float($x)); //true si es flotante
    echo "<br>";
    $x = 1.9e411;
    var_dump(is_finite($x));//verifica si un valor es finito o no
    echo "<br>";
    $x = acos(8);
    var_dump($x);//NaN significa No es un número.
    //verifica si es un numero
    echo "<br>";
    $x = 5985;
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "5985";
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "hola";
    var_dump(is_numeric($x));
    echo "<br>";
    // folat a int
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;

    echo "<br>";

    // string a int
    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;
    ?>
</body>
</html>