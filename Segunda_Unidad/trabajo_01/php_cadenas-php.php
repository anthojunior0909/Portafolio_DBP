<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "hola<br>";//procesan caracteres espefiales
    echo 'hola<br>';//estan no
    $n = "antho";
    echo "hola $n <br>";
    echo 'Hello $n<br>';//esta no
    echo "cantidad de caracteres usando strlen de 'hola mundo': ".strlen("Hola mundo")."<br>";
    echo "cantidad de palabras: ".str_word_count("Hola mundo")."<br>";
    echo strpos("Hola mundo", "mundo");#posicion en donde se encuentra
    $x = "hola mundo";
    echo "<br>";
    echo strtoupper($x);//hacer mayuscula
    $y = "HOLA MUNDO";
    echo "<br>";
    echo strtolower($x);//hacerlo minuscula
    echo "<br>";
    echo str_replace("mundo", "guey", $x);//remplazar
    echo "<br>";
    echo strrev($x);//invertir cadena
    echo "<br>";
    echo trim($x);# eliminar espacios en blanco
    $yy = explode(" ", $x);#converitr cadena en una matriz
    print_r($yy);
    $xb = "Hello";
    $yb = "World";
    $z = $xb . $yb;
    echo "<br>";
    echo $z;
    echo "<br>";
    $za = $xb." ".$yb;
    echo $za;
    echo "<br>";
    $zz = "$xb $yb";
    echo $zz;
    echo "<br>";
    $xd = "Hello World!";
    echo substr($xd, 6, 5);//cortar una parte empieza en indice 6 y 5 posicones mas tarde
    echo "<br>";
    echo substr($xd, 6);//empieza en el 6 hasta el final(corte)
    echo "<br>";
    echo substr($xd, -5, 3);//el ultimo caracter tiene indice -1. cortar desde el final
    echo "<br>";
    $x = "Hi, how are you?";/*A partir de la cadena "Hola, ¿cómo estás?",
                            obtén los caracteres comenzando desde el índice 5, y 
                            continúa hasta llegar al tercer carácter desde el
                            final (índice -3). */
    echo substr($x, 5, -3);
    echo "<br>";
    $xm = "We are the so-called \"Vikings\" from the north.";//caracteres de escape"\"
    $xm = 'We are the so-called \'Vikings\' from the north.';
    echo $xm;
    $fr = "este en ejemplo \$x";
    echo $fr;
    $xp = "Hello\nWorld";
    echo "<pre>$xp</pre><br>";/*Para preservar cualquier 
                                espacio en blanco o salto de línea, 
                                hemos envuelto el resultado en un elemento PRE*/
    $vj = "Hello\rWorld";
    echo "<pre>$vj</pre><br>";
    $gs = "Hello\tWorld";
    echo "<pre>$gs</pre><br>";
    $ga = "\110\145\154\154\157<br>";//base octal H E L L O
    echo $ga;
    $ge = "\x48\x65\x6c\x6c\x6f";// hexadecimal
    echo $ge;
    ?>
</body>
</html>