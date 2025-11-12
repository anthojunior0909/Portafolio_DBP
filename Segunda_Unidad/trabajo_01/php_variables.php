<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $o = 5;
    $n = "anth";
    $txt = "W3Schools.com";
    echo "I love $txt!<br>";
    $txt = "W3Schools.com";
    echo "I love " . $txt . "!<br>";
    $x = 5;
    $y = 4;
    echo $x + $y."<br>";
    var_dump($x);
    echo "<br>";
    var_dump(5);
    echo "<br>";
    var_dump("John");
    echo "<br>";
    var_dump(3.14);
    echo "<br>";
    var_dump(true);
    echo "<br>";
    var_dump([2, 3, 56]);
    echo "<br>";
    var_dump(NULL);
    echo "<br>";
    $a = $b = $c = "fruta";
    echo "a = ".$a."<br>";
    echo "b = ".$b."<br>";
    echo "c = ".$c."<br>";
    //ALCANCE DE LAS VARIABLES
    $xGlobal = 5;
    function mytest()
    {
        echo "<p>variable dentro de mi funcion(va generar un error): $xGlobal</p>";#esto va generar un error
    }
    mytest();
    echo "<p>variable fuera de la funcion: $xGlobal</p>";

    function myTest1()
    {
        $xa = 5; // varible dentro de la funcioon
        echo "<p>Variable xa dentro de la funcion es: $xa</p>";
    }
    myTest1();

    // aqui va generar un error por que no puede accceder a la varible de la funcion mytest1
    echo "<p>Variable xa fuera de la funcion es: $xa</p>";

    $xq = 5;
    $yq = 10;

    function myTest2()
    {
    global $xq, $yq;// aqui no importa que donde este, usando la palabra reservada global
    $yq = $xq + $yq;
    }

    myTest2();
    echo $yq."<br>"; // salida 15

    $xx = 55;
    $yy = 10;
    function mytest3()
    {
        $GLOBALS['yy'] = $GLOBALS['xx'] + $GLOBALS['yy'];
    }
    mytest3();
    echo $yy;

    echo "<br>";
    echo "<br>";
    function mytest4()
    {
        static $xd = 0;
        echo $xd;
        $xd++;
        echo "<br>";
    }
    mytest4();
    mytest4();
    mytest4();
    ?>
</body>
</html>