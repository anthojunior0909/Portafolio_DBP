<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = "Visit W3Schools";
    $pattern = "/w3schools/i";
    echo preg_match($pattern, $str);
    echo "<br>";
    $str = "The rain in SPAIN falls mainly on the plains.";
    $pattern = "/ain/i";
    echo preg_match_all($pattern, $str);
    echo "<br>";
    $str = "Visit Microsoft!";
    $pattern = "/microsoft/i";
    echo preg_replace($pattern, "W3Schools", $str);
    echo "<br>";
    //modificadores de expresiones regulares
    $txt = "W3Schools";
    $pattern = "/s/i";
    echo preg_match_all($pattern, $txt);
    echo "<br>";
    echo preg_replace($pattern, "#", $txt);
    echo "<br>";
    $txt = "you are better than\nyou think";
    $pattern = "/^you/m";
    echo preg_match_all($pattern, $txt);
    echo "<br>";
    echo preg_replace($pattern, "#", $txt);
    echo "<br>";
    //patrones de expresiones regulares
    $txt = "W3Schools.com";
    $pattern = "/[co]/";
    echo preg_match_all($pattern, $txt);
    echo "<br>";
    echo preg_replace($pattern, "#", $txt);
    echo "<br>";
    $txt = "Welcome";
    $pattern = "/[^eo]/";
    echo preg_match_all($pattern, $txt);
    echo "<br>";
    echo preg_replace($pattern, "#", $txt);
    echo "<br>";
    $txt = "Welcome";
    $pattern = "/[e-o]/";
    echo preg_match_all($pattern, $txt);
    echo "<br>";
    echo preg_replace($pattern, "#", $txt);
    echo "<br>";
    $txt = "Welcome to W3Schools";
    $pattern = "/[T-e]/";
    echo preg_match_all($pattern, $txt);
    echo "<br>";
    echo preg_replace($pattern, "#", $txt);
    echo "<br>";
    $txt = "Welcome to W3Schools";
    $pattern = "/[A-Z]/";
    echo preg_match_all($pattern, $txt);
    echo "<br>";
    echo preg_replace($pattern, "#", $txt);
    echo "<br>";
    $txt = "W3Schools has been live since 1999";
    $pattern = "/[123]/";
    echo preg_match_all($pattern, $txt);
    echo "<br>";
    echo preg_replace($pattern, "#", $txt);
    echo "<br>";
    $txt = "Call 555-2368";
    $pattern = "/[0-5]/";
    echo preg_match_all($pattern, $txt);
    echo "<br>";
    echo preg_replace($pattern, "#", $txt);
    echo "<br>";
    $txt = "W3Schools has been live since 1999";
    $pattern = "/[0-9]/";
    echo preg_match_all($pattern, $txt);
    echo "<br>";
    echo preg_replace($pattern, "#", $txt);
    echo "<br>";
    // METACARACTERES

    // |  Encuentra una coincidencia con cualquiera de los patrones separados por |
    // Ejemplo: busca "cat", "dog" o "fish"
    $pattern = "/cat|dog|fish/";
    $string = "I have a dog";
    echo preg_match($pattern, $string) . " // | busca cualquiera de los tres <br>";

    // .  Coincide con cualquier carácter
    $pattern = "/c.t/";
    $string = "cat";
    echo preg_match($pattern, $string) . " // . encuentra cualquier carácter entre c y t <br>";

    // ^  Coincide al comienzo de una cadena
    $pattern = "/^Hello/";
    $string = "Hello world!";
    echo preg_match($pattern, $string) . " // ^ busca al inicio de la cadena <br>";

    // $  Coincide al final de una cadena
    $pattern = "/world!$/";
    $string = "Hello world!";
    echo preg_match($pattern, $string) . " // $ busca al final de la cadena <br>";

    // \d  Coincide con cualquier dígito
    $pattern = "/\d/";
    $string = "My code is 1234";
    echo preg_match($pattern, $string) . " // \\d busca dígitos <br>";

    // \D  Coincide con cualquier carácter que no sea un dígito
    $pattern = "/\D/";
    $string = "123abc";
    echo preg_match($pattern, $string) . " // \\D busca no dígitos <br>";

    // \s  Coincide con cualquier carácter de espacio en blanco
    $pattern = "/\s/";
    $string = "Hello world";
    echo preg_match($pattern, $string) . " // \\s busca espacio en blanco <br>";

    // \S  Coincide con cualquier carácter que no sea espacio en blanco
    $pattern = "/\S/";
    $string = " ";
    echo preg_match($pattern, $string) . " // \\S busca no espacios <br>";

    // \w  Coincide con letras y números (a-z, A-Z, 0-9, _)
    $pattern = "/\w/";
    $string = "PHP_8";
    echo preg_match($pattern, $string) . " // \\w busca caracteres alfanuméricos <br>";

    // \W  Coincide con cualquier carácter que no sea alfanumérico
    $pattern = "/\W/";
    $string = "Hola!";
    echo preg_match($pattern, $string) . " // \\W busca símbolos o signos <br>";

    // \b  Coincide al inicio o final de una palabra
    $pattern = "/\bPHP\b/";
    $string = "I love PHP programming";
    echo preg_match($pattern, $string) . " // \\b busca palabra completa PHP <br>";

    // \xhh  (en Unicode se usa \x o \u) Coincide con el carácter hexadecimal o Unicode
    $pattern = "/\x48/"; // 48 en hex = 'H'
    $string = "Hello";
    echo preg_match($pattern, $string) . " // \\xhh busca el carácter Unicode o hexadecimal <br>";

    // CUANTIFICADORES

    // n+  Al menos una ocurrencia
    $pattern = "/a+/";
    $string = "caaat";
    echo preg_match($pattern, $string) . " // n+ busca una o más 'a' <br>";

    // n*  Cero o más ocurrencias
    $pattern = "/bo*/";
    $string = "booo";
    echo preg_match($pattern, $string) . " // n* busca cero o más 'o' después de b <br>";

    // n?  Cero o una ocurrencia
    $pattern = "/colou?r/";
    $string = "color";
    echo preg_match($pattern, $string) . " // n? permite una 'u' opcional <br>";

    // n{3}  Exactamente tres ocurrencias
    $pattern = "/a{3}/";
    $string = "caaaaar";
    echo preg_match($pattern, $string) . " // n{3} busca tres 'a' seguidas <br>";

    // n{2,5}  Entre 2 y 5 ocurrencias
    $pattern = "/a{2,5}/";
    $string = "aaaaa";
    echo preg_match($pattern, $string) . " // n{2,5} busca de 2 a 5 'a' <br>";

    // n{3,}  Al menos 3 ocurrencias
    $pattern = "/a{3,}/";
    $string = "aaaaaa";
    echo preg_match($pattern, $string) . " // n{3,} busca tres o más 'a' <br>";
    echo "<br>";
    $str = "Apples and bananas.";
    $pattern = "/ba(na){2}/i";
    echo preg_match($pattern, $str);
    ?>
</body>
</html>