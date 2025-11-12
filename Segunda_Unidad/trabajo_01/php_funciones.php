<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function myMessage() {
    echo "Hello world!";
    }
    echo "<br>";
    myMessage();
    echo "<br>";
    function familyName($fname) {
    echo "$fname Refsnes.<br>";
    }

    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");
    echo "<br>";
    function familyName1($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
    }

    familyName1("Hege", "1975");
    familyName1("Stale", "1978");
    familyName1("Kai Jim", "1983");
    echo "<br>";
    function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
    }

    setHeight(350);
    setHeight(); // will use the default value of 50
    setHeight(135);
    setHeight(80);
    echo "<br>";
    function sum($x, $y) {
    $z = $x + $y;
    return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4);
    echo "<br>";
    function add_five(&$value) {
    $value += 5;
    }

    $num = 2;
    add_five($num);
    echo $num;
    echo "<br>";
    function sumMyNumbers(...$x) {//no sabe cuantos elementos recibira
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
        $n += $x[$i];
    }
    return $n;
    }

    $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
    echo $a;
    echo "<br>";
    function myFamily($lastname, ...$firstname) {
    $txt = "";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
        $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
    }

    $a = myFamily("Doe", "Jane", "John", "Joey");
    echo $a;
    echo "<br>";
    function addNumbers0(int $a, string $b) { // si fuera $b un int seria un error
    return $a + (int)$b;
    }
    echo addNumbers0(5, "5 days");
    // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
    ?>
<?php /*declare(strict_types=1); // strict requirement
    function addNumbers3(float $a, float $b) : float {
    return $a + $b;
    }
    echo addNumbers3(1.2, 5.2);
    ?>
    <?php declare(strict_types=1); // strict requirement
    function addNumbers1(float $a, float $b) : int {
    return (int)($a + $b);
    }
    echo addNumbers1(1.2, 5.2);
    */?>
    
</body>
</html>