<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //valor de pi
    $pi = pi();
    echo "El valor de pi es: ".$pi;
    echo "<br>";
    echo(min(0, 150, 30, 20, -8, -200));//encontrar el valor minimo
    echo "<br>";
    echo(max(0, 150, 30, 20, -8, -200));
    echo "<br>";
    echo(abs(-7.25));//valor absoluto
    echo "<br>";
    echo(sqrt(64));//raiz cuadrada
    echo "<br>";
    echo(round(0.60));//redondear
    echo "<br>";
    echo(round(0.49));
    echo "<br>";
    echo(rand());//numero aleatorio
    echo "<br>";
    echo(rand(10, 100));//numero aleatorio entre 10 y 100
    echo "<br>";
    
    ?>
</body>
</html>