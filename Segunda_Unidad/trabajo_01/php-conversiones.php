<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // conversiones de tipos en PHP
    //convertir a string
    $a = 5;
    $b = 5.34;
    $c = "hello";
    $d = true;
    $e = NULL;

    $a = (string) $a;
    $b = (string) $b;
    $c = (string) $c;
    $d = (string) $d;
    $e = (string) $e;

    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";
    //convertir a int
    $aa = 5;
    $ba = 5.34;
    $ca = "25 kilometers";
    $da = "kilometers 25";
    $ea = "hello";
    $fa = true;
    $ga = NULL;

    $aa = (int) $aa;
    $ba = (int) $ba;
    $ca = (int) $ca;
    $da = (int) $da;
    $ea = (int) $ea;
    $fa = (int) $fa;
    $ga = (int) $ga;

    var_dump($aa);
    echo "<br>";
    var_dump($ba);
    echo "<br>";
    var_dump($ca);
    echo "<br>";
    var_dump($da);
    echo "<br>";
    var_dump($ea);
    echo "<br>";
    var_dump($fa);
    echo "<br>";
    var_dump($ga);
    echo "<br>";

//convertir a float
    $aa = (float) $aa;
    $ba = (float) $ba;
    $ca = (float) $ca;
    $da = (float) $da;
    $ea = (float) $ea;
    $fa = (float) $fa;
    $ga = (float) $ga;

    var_dump($aa);
    echo "<br>";
    var_dump($ba);
    echo "<br>";
    var_dump($ca);
    echo "<br>";
    var_dump($da);
    echo "<br>";
    var_dump($ea);
    echo "<br>";
    var_dump($fa);
    echo "<br>";
    var_dump($ga);
    echo "<br>";

//convertir a boolean

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = 0;       // Integer
    $d = -1;      // Integer
    $e = 0.1;     // Float
    $f = "hello"; // String
    $g = "";      // String
    $h = true;    // Boolean
    $i = NULL;    // NULL

    $a = (bool) $a;
    $b = (bool) $b;
    $c = (bool) $c;
    $d = (bool) $d;
    $e = (bool) $e;
    $f = (bool) $f;
    $g = (bool) $g;
    $h = (bool) $h;
    $i = (bool) $i;



    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";
    var_dump($f);
    echo "<br>";
    var_dump($g);
    echo "<br>";
    var_dump($h);
    echo "<br>";
    var_dump($i);
    echo "<br>";

    //convertir a array
    $a = 5;
    $b = 5.34;
    $c = "hello";
    $d = true;
    $e = NULL;
    $a = (array) $a;
    $b = (array) $b;
    $c = (array) $c;
    $d = (array) $d;
    $e = (array) $e;
    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";
    // convertir un objeto a array
    class Carro {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "Mi carro es un " . $this->color . " " . $this->model . "!";
    }
    }

    $micarrito = new Carro("rojo", "Volvo");

    $micarrito = (array) $micarrito;
    var_dump($micarrito);
    echo "<br>";
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL
    //convertir a objeto
    $a = (object) $a;
    $b = (object) $b;
    $c = (object) $c;
    $d = (object) $d;
    $e = (object) $e;

    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";

    $a = array("Volvo", "BMW", "Toyota"); // indexed array
    $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

    $a = (object) $a;
    $b = (object) $b;
    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";

    ?>
</body>
</html>