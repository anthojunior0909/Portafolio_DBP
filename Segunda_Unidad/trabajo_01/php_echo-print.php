<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "hola<br>";
        echo ("hola<br>");
        echo "<h2>PHP es diveertido</h2>";
        echo "hello world<br>";
        echo "I'm about to learn PHP<br>";
        echo "este ", " string ", "fue ", "hecho ", "con multiples parametros.<br>";
        $txt1 = "aprender PHP";
        $txt2 = "w3schools.com";
        echo "<h2>$txt1</h2>";
        echo "<p>estudio php en $txt2</p>";
        //uso de comillas
        echo "usando comillas simples<br>";
        echo '<h2>'.$txt1.'</h2>';
        echo '<p>estudio php en '.$txt2.'</p>';
        print "hola usando print";
        print("hola usanod print<br>");
        print "<h2>PHP is Fun!</h2>";
        print "Hello world!<br>";
        print "I'm about to learn PHP!";
        print "<h2>$txt1</h2>";
        print "<p>Study PHP at $txt2</p>";
        //Uso de comillas simples
        print '<h2>' . $txt1 . '</h2>';
        print '<p>Study PHP at ' . $txt2 . '</p>';
        ?>
</body>
</html>