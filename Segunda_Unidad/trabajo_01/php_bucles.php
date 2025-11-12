<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $i = 1;
    while ($i < 6) {
    echo $i."&nbsp";
    $i++;
    }
    echo "<br>";

    $i = 1;
    while ($i < 6) {
    if ($i == 3) break;
    echo $i."&nbsp";
    $i++;
    }
    echo "<br>";

    $i = 0;
    while ($i < 6) {
    $i++;
    if ($i == 3) continue;
    echo $i."&nbsp";
    }
    echo "<br>";

    $i = 1;
    while ($i < 6):
    echo $i."&nbsp";
    $i++;
    endwhile;
    echo "<br>";

    $i = 0;
    while ($i < 100) {
    $i+=10;
    echo $i."&nbsp";
    }
    echo "<br>";

    $i = 1;
    do {
    echo $i."&nbsp";
    $i++;
    } while ($i < 6);
    echo "<br>";

    $i = 8;
    do {
    echo $i."&nbsp";
    $i++;
    } while ($i < 6);
    echo "<br>";

    $i = 1;
    do {
    if ($i == 3) break;
    echo $i."&nbsp";
    $i++;
    } while ($i < 6);
    echo "<br>";

    $i = 0;
    do {
    $i++;
    if ($i == 3) continue;
    echo $i."&nbsp";
    } while ($i < 6);
    echo "<br>";

    for ($x = 0; $x <= 10; $x++) {
        echo "El numero es: $x <br>";
    }
    echo "<br>";
    for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo "El numero es: $x <br>";
    }
    echo "<br>";
    for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) continue;
    echo "El numero es: $x <br>";
    }
    echo "<br>";
    for ($x = 0; $x <= 100; $x+=10) {
    echo "El numero es: $x <br>";
    }
    echo "<br>";
    $colors = array("rojo", "verde", "azul", "amarillo");

    foreach ($colors as $x) {
    echo "$x <br>";
    }
    echo "<br>";
    $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach ($members as $x => $y) {
    echo "$x : $y <br>";
    }
    echo "<br>";
    class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    }

    $myCar = new Car("rojo", "Volvo");

    foreach ($myCar as $x => $y) {
    echo "$x: $y <br>";
    }
    echo "<br>";
    $colors = array("rojo", "verde", "azul", "amarillo");

    foreach ($colors as $x) {
    if ($x == "azul") break;
    echo "$x <br>";
    }
    echo "<br>";
    $colors = array("rojo", "verde", "azul", "amarillo");

    foreach ($colors as $x) {
    if ($x == "azul") continue;
    echo "$x <br>";
    }
    echo "<br>";
    $colors = array("rojo", "verde", "azul", "amarillo");

    foreach ($colors as $x) {
    if ($x == "azul") $x = "pink";
    }

    var_dump($colors);
    echo "<br>";
    $colors = array("rojo", "verde", "azul", "amarillo");

    foreach ($colors as &$x) {
    if ($x == "azul") $x = "pink";
    }

    var_dump($colors);
    echo "<br>";
    $colors = array("rojo", "verde", "azul", "amarillo");

    foreach ($colors as $x) :
    echo "$x <br>";
    endforeach;
    echo "<br>";
    for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "el numero es: $x <br>";
    }
    echo "<br>";
    $x = 0;

    while($x < 10) {
    if ($x == 4) {
        break;
    }
    echo "el numero es: $x <br>";
    $x++;
    }
    echo "<br>";
    $i = 1;

    do {
    if ($i == 3) break;
    echo $i;
    $i++;
    } while ($i < 6);
    echo "<br>";
    $colors = array("rojo", "verde", "azul", "amarillo");

    foreach ($colors as $x) {
    if ($x == "azul") break;
    echo "$x <br>";
    }
    echo "<br>";
    for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "el numero es: $x <br>";
    }
    echo "<br>";
    $x = 0;

    while($x < 10) {
    if ($x == 4) {
        continue;
    }
    echo "el numero es: $x <br>";
    $x++;
    }
    echo "<br>";
    $i = 0;

    do {
    $i++;
    if ($i == 3) continue;
    echo $i;
    } while ($i < 6);
    echo "<br>";
    $colors = array("rojo", "verde", "azul", "amarillo");

    foreach ($colors as $x) {
    if ($x == "azul") continue;
    echo "$x <br>";
    }
    ?>
</body>
</html>