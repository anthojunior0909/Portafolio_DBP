<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function myFunction(){}
    $cars = array("Volvo", "BMW", "Toyota");
    //$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);
    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars);
    echo "<br>";
    //matrices indexadas
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    echo $cars[0];
    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    $cars[1] = "Ford";
    var_dump($cars);
    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    foreach ($cars as $x) {
    echo "$x <br>";
    }
    echo "<br>";
    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";
    echo "<br>";
    array_push($cars, "Ford");
    var_dump($cars);
    $cars[5] = "Volvo";
    $cars[7] = "BMW";
    $cars[14] = "Toyota";
    echo "<br>";
    array_push($cars, "Ford");
    var_dump($cars);
    echo "<br>";
    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
    var_dump($car);
    echo "<br>";
    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
    echo $car["model"];
    echo "<br>";
    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
    $car["year"] = 2024;
    var_dump($car);
    echo "<br>";
    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

    foreach ($car as $x => $y) {
    echo "$x: $y <br>";
    }
    //formas de declarar
    $cars = array("Volvo", "BMW", "Toyota");
    $cars = ["Volvo", "BMW", "Toyota"];
    $cars = [
    "Volvo",
    "BMW",
    "Toyota"
    ];
    $cars = [
    "Volvo",
    "BMW",
    "Toyota",
    ];
    $cars = [
    0 => "Volvo",
    1 => "BMW",
    2 =>"Toyota"
    ];
    $myCar = [
    "brand" => "Ford",
    "model" => "Mustang",
    "year" => 1964
    ];
    //matriz vacia
    $cars = [];
    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";
    $myCar = [];
    $myCar["brand"] = "Ford";
    $myCar["model"] = "Mustang";
    $myCar["year"] = 1964;
    $myArr = [];
    $myArr[0] = "apples";
    $myArr[1] = "bananas";
    $myArr["fruit"] = "cherries";
    echo "<br>";
    //acceso al elemento de matriz
    $cars = array("Volvo", "BMW", "Toyota");
    echo $cars[2];
    echo "<br>";
    //array asociativo
    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    echo $cars["year"];
    echo "<br>";
    echo $cars["model"];
    echo $cars['model'];
    echo "<br>";
    function myFunction0(){
    echo "I come from a function0!";
    }
    $myArr = array("Volvo", 15, "myFunction0");
    $myArr[2]();
    echo "<br>";
    function myFunction11() {
    echo "I come from a function1!";
    }
    $myArr = array("car" => "Volvo", "age" => 15, "message" => "myFunction11");
    $myArr["message"]();
    echo "<br>";
    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
    foreach ($car as $x => $y) {
    echo "$x: $y <br>";
    }
    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    foreach ($cars as $x) {
    echo "$x <br>";
    }
    echo "<br>";
    //elementos de la matriz de actualizacion 
    $cars = array("Volvo", "BMW", "Toyota");
    $cars[1] = "Ford";
    echo "<br>";
    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    $cars["year"] = 2024;
    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    foreach ($cars as &$x) {
    $x = "Ford";
    }
    unset($x);//eliminar el valor
    var_dump($cars);
    echo "<br>";
    //agregar elementos de matriz
    $fruits = array("Apple", "Banana", "Cherry");
    $fruits[] = "Orange";//agregar un elemneto mas
    echo "<br>";
    //matrices asociativas
    $cars = array("brand" => "Ford", "model" => "Mustang");
    $cars["color"] = "Red";
    echo "<br>";
    $fruits = array("Apple", "Banana", "Cherry");
    array_push($fruits, "Orange", "Kiwi", "Lemon");//agregar varios elemntos al array
    echo "<br>";
    $cars = array("brand" => "Ford", "model" => "Mustang");
    $cars += ["color" => "red", "year" => 1964];
    echo "<br>";
    //Eliminar elemento de la matriz
    $cars = array("Volvo", "BMW", "Toyota");
    array_splice($cars, 1, 1);//elimina donde empezar y cuntos elementos quieres eliminar
    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    unset($cars[1]);//eliminar
    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    array_splice($cars, 1, 2);
    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    unset($cars[0], $cars[1]);
    echo "<br>";
    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    unset($cars["model"]);
    echo "<br>";
    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    $newarray = array_diff($cars, ["Mustang", 1964]);/*Esta función devuelve 
                                                    una nueva matriz, sin los elementos 
                                                    especificados. */
    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    array_pop($cars);//eliminar el ultimo elemento
    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    array_shift($cars);//quitar el primer elemento
    echo "<br>";
    //ORDENACION DE MATRICES
    //ordenar matrices en orden ascendente
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);
    $numbers = array(4, 6, 2, 22, 11);
    sort($numbers);
    echo "<br>";
    //ordenar matrices en orden descendente
    $cars = array("Volvo", "BMW", "Toyota");
    rsort($cars);
    $numbers = array(4, 6, 2, 22, 11);
    rsort($numbers);
    echo "<br>";
    //ordenar matrices asociativas en orden ascendente, según el valor
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    asort($age);
    echo "<br>";
    //ordenar matrices asociativas en orden ascendente, según la clave
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    ksort($age);
    echo "<br>";
    //ordenar matrices asociativas en orden descendente, según el valor
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    arsort($age);
    echo "<br>";
    //Ordenar los arrays asociativos en orden descendente, según la clave
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    krsort($age);
    echo "<br>";
    //Matrices multidimensionales
    $cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
    );
    echo "<br>";
    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
    echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
    echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
    echo "<br>";
    for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
        }
    echo "</ul>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>
</body>
</html>