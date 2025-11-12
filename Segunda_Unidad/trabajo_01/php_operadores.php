<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Operadores Aritméticos
    $a = 10;
    $b = 5;
    echo $a + $b;
    echo "<br>";
    echo $a - $b;
    echo "<br>";
    echo $a * $b;
    echo "<br>";
    echo $a / $b;
    echo "<br>";
    echo $a % $b;
    echo "<br>";
    echo $a ** $b; //a^b
    //Operadores de asignacion
    $x = 10;  
    echo $x;
    echo "<br>";
    $x = 20;  
    $x += 100;
    echo $x;
    echo "<br>";
    $x = 50;
    $x -= 30;
    echo $x;
    echo "<br>";
    $x = 5;
    $x *= 6;
    echo $x;
    echo "<br>";
    $x = 10;
    $x /= 5;
    echo $x;
    echo "<br>";
    $xx = 15;
    $xx %= 4;
    echo $xx;
    echo "<br>";
    //operadores de comparacion
    $aa = 100;
    $ab = "100";
    var_dump($aa == $ab);//true si son verdaderos
    echo "<br>";
    $ac = 100;
    $ad = "100";
    var_dump($ac == $ad);//true si son verdaderos y su tipo de dato tambien
    echo "<br>";
    $x = 100;  
    $y = "100";
    var_dump($x != $y);
    echo "<br>";
    $x = 100;  
    $y = "100";
    var_dump($x <> $y);
    echo "<br>";
    $x = 100;  
    $y = "100";
    var_dump($x !== $y);
    echo "<br>";
    $x = 100;
    $y = 50;
    var_dump($x > $y);
    echo "<br>";
    $x = 10;
    $y = 50;
    var_dump($x < $y);
    echo "<br>";
    $x = 50;
    $y = 50;
    var_dump($x >= $y);
    echo "<br>";
    $x = 50;
    $y = 50;
    var_dump($x <= $y);
    echo "<br>";
    $x = 5;  
    $y = 10;
    echo ($x <=> $y); // returns -1 because $x es menor que $y
    echo "<br>";
    $x = 10;  
    $y = 10;
    echo ($x <=> $y); // returns 0 because los valores son iguales
    echo "<br>";
    $x = 15;  
    $y = 10;
    echo ($x <=> $y); // returns +1 because $x es mayor que $y
    echo "<br>";
    //operadores de incremento/decremento
    echo "<br>";
    $x = 10;  
    echo ++$x;
    echo "<br>";
    $x = 10;  
    echo $x++;
    echo "<br>";
    $x = 10;  
    echo --$x;
    echo "<br>";
    $x = 10;  
    echo $x--;
    echo "<br>";
    //operadores logicos
    $x = 100;  
    $y = 50;
    if ($x == 100 and $y == 50) {
        echo "Hello world!";
    }
    echo "<br>";
    $x = 100;  
    $y = 50;

    if ($x == 100 or $y == 80) {
        echo "Hello world!";
    }
    echo "<br>";
    $x = 100;  
    $y = 50;

    if ($x == 100 xor $y == 80) {//Verdadero si $x o $y son verdaderos, pero no ambos
        echo "Hello world!";
    }
    echo "<br>";
    $x = 100;  
    $y = 50;

    if ($x == 100 && $y == 50) {
        echo "Hello world!";
    }
    echo "<br>";
    $x = 100;  
    $y = 50;

    if ($x == 100 || $y == 80) {
        echo "Hello world!";
    }
    echo "<br>";
    $x = 100;  

    if (!($x == 90)) {
        echo "Hello world!";
    }
    echo "<br>";
    //operadores de cadena
    $txt1 = "Hello";
    $txt2 = " world!";
    echo $txt1 . $txt2;
    echo "<br>";
    $txt1 = "Hello";
    $txt2 = " world!";
    $txt1 .= $txt2;
    echo $txt1;
    echo "<br>";
    //operadores de matriz
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  
    print_r($x + $y); // union of $x and $y
    echo "<br>";
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  
    var_dump($x == $y);/*Devuelve verdadero si $x y $y tienen los mismos 
                        pares clave/valor*/
    echo "<br>";
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  
    /*Devuelve verdadero si $x y $y tienen los mismos pares clave/valor 
    en el mismo orden y de los mismos tipos */
    var_dump($x === $y);
    echo "<br>";
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x != $y);//Devuelve verdadera si $ x no es igual a $ y
    echo "<br>";
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x <> $y);//Devuelve verdadera si $ x no es igual a $ y
    echo "<br>";
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x !== $y);//Devuelve verdadera si $ x no es idéntica a $ y
    echo "<br>";
    // if empty($user) = TRUE, set $status = "anonymous"
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    echo("<br>");

    $user = "John Doe";
    // if empty($user) = FALSE, set $status = "logged in"
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    /*Devuelve el valor de $x.
        El valor de $x es expr2 si expr1 = VERDADERO.
        El valor de $x es expr3 si expr1 = FALSO. */
    echo "<br>";
    // variable $user is the value of $_GET['user']
    // and 'anonymous' if it does not exist
    echo $user = $_GET["user"] ?? "anonymous";
    echo("<br>");
    
    // variable $color is "red" if $color does not exist or is null
    echo $color = $color ?? "red";
    /* Devuelve el valor de $x.
        El valor de $x es expr1 si expr1 existe y no es nulo.
        Si expr1 no existe o es nulo, el valor de $x es expr2.
        Introducido en PHP 7*/
    ?>
</body>
</html>