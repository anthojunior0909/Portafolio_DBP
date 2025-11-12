<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 5;
    var_dump($x);
    echo "<br>";
    //cadena php
    $xx = "hola mundo";
    $yy = 'hola mundo';
    var_dump($xx);
    echo "<br>";
    var_dump($yy);
    //entero php
    $xa = 5985;
    var_dump($x);
    echo "<br>";
    $xb = 10.365;
    var_dump($x);
    echo "<br>";
    $x = true;
    var_dump($x);
    echo "<br>";
    $carros = array("Volvo", "BMW", "Toyota");
    var_dump($carros);
    echo "<br>";
    class carro{
        public $color;
        public $modelo;
        public function __constructor($color, $modelo)
        {
            $this->color = $color;
            $this->modelo = $modelo;
        }
        public function mensajez()
        {
            return "mi carro es un".$this->color." ".$this->modelo."!";
        }
    }
    $mycarro = new carro("Red", "Volvo");
    var_dump($mycarro);
    echo "<br>";
    $xc = "Hello world!";
    $xc = null;
    var_dump($xc);
    //cambiar el tipo de dato
    $x = 5;
    var_dump($x);
    echo "<br>";
    $x = "Hello";
    var_dump($x);
    $xd = 5;
    $xd = (string) $xd;
    var_dump($xd);
    ?>
</body>
</html>