<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //ejemplo
    if (5 > 3) {
    echo "ten un gran dia!";
    }
    echo "<br>";
    $t = 14;
    if ($t < 20) {
    echo "Que tenga un buen día!";
    }
    echo "<br>";
    $t = 14;

    if ($t == 14) {
    echo "Que tenga un buen día!";
    }
    echo "<br>";
    $x = 100;  
    $y = 100;

    if ($x == $y) {
    echo "$x is equal to $y";
    }
    echo "<br>";
    $x = 100;  
    $y = 100;

    if ($x === $y) {
    echo "$x Es idéntico a $y";
    }
    echo "<br>";
    $x = 100;  
    $y = 50;

    if ($x != $y) {
    echo "$x no es igual a $y";
    }
    echo "<br>";
    $x = 100;  
    $y = 50;

    if ($x <> $y) {
    echo "$x no es igual a $y";
    }
    echo "<br>";
    $x = 100;  
    $y = 50;

    if ($x !== $y) {
    echo "$x is not identical to $y";
    }
    echo "<br>";
    $x = 100;  
    $y = 50;

    if ($x > $y) {
    echo "$x es mayor que $y";
    }
    echo "<br>";
    $x = 100;  
    $y = 50;

    if ($y < $x) {
    echo "$y es menor que $x";
    }
    echo "<br>";
    $x = 100;  
    $y = 100;

    if ($x >= $y) {
    echo "$x es mayor que, or equal to $y";
    }
    echo "<br>";
    $x = 100;  
    $y = 100;

    if ($y <= $x) {
    echo "$y es menor que, or equal to $x";
    }
    echo "<br>";
    $a = 200;
    $b = 33;
    $c = 500;

    if ($a > $b && $a < $c ) {
    echo "Ambas condiciones son ciertas.";
    }
    echo "<br>";
    $x = 100;  
    $y = 50;

    if ($x == 100 and $y == 50) {
        echo "Hola Mundo!";
    }
    echo "<br>";
    $x = 100;  
    $y = 50;

    if ($x == 100 or $y == 80) {
        echo "Hola Mundo!";
    }
    echo "<br>";
    $x = 100;  
    $y = 50;

    if ($x == 100 xor $y == 80) {
        echo "Hola Mundo!";
    }
    echo "<br>";
    $x = 100;  

    if (!($x == 90)) {
        echo "Hola Mundo!";
    }
    echo "<br>";
    $a = 5;

    if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
    echo "$a is a number between 2 and 7";
    }
    echo "<br>";
    $t = date("H");

    if ($t < "20") {
    echo "Que tenga un buen día!";
    } else {
    echo "Qué tengas buenas noches!";
    }
    echo "<br>";
    $t = date("H");

    if ($t < "10") {
    echo "Que tengas buenos dias!";
    } elseif ($t < "20") {
    echo "Que tenga un buen día!";
    } else {
    echo "Qué tengas buenas noches!";
    }
    echo "<br>";
    $a = 5;

    if ($a < 10) $b = "Hola";

    echo $b;
    echo "<br>";
    $a = 13;

    $b = $a < 10 ? "Hola" : "Good Bye";

    echo $b;
    echo "<br>";
    $a = 13;

    if ($a > 10) {
    echo "Por encima de 10";
    if ($a > 20) {
        echo " y también arriba 20";
    } else {
        echo " pero no arriba 20";
    }
    }
    ?>
</body>
</html>