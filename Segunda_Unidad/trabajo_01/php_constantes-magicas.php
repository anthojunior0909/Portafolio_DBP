<?php
namespace miarea;
function mifuncion3(){
        return __NAMESPACE__;//Mostrar el espacio de nombres actual
    }
# trait
class Frutas3{
    public function mivalor3(){
        return Frutas3::class;//Mostrar el nombre completo de la clase actual con su espacio de nombres
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Frutas{
        public function mivalor(){
            return __CLASS__;//Mostar el nombre de la clase actual
        }
    }
    $kiwi = new Frutas();
    echo $kiwi->mivalor();
    echo "<br>";

    echo __DIR__;//Mostrar el directorio actual
    echo "<br>";
    
    echo __FILE__;//Mostrar la ruta completa del archivo
    echo "<br>";
    function mivalor(){
        return __FUNCTION__;//Mostrar el nombre de la función actual
    }
    echo mivalor();
    echo "<br>";
    echo __LINE__;//Mostrar el número de línea actual
    ECHO "<br>";
    class frutas2{
        public function mivalor2(){
            return __METHOD__;//Mostrar el nombre del método actual
        }
    }
    $kiwi2 = new frutas2();
    echo $kiwi2->mivalor2();
    echo "<br>";
    #-------------------------------
    echo mifuncion3();
    #-------------------------------
    trait mensaje1{
        public function msg1(){
            echo __TRAIT__;//Mostrar el nombre del trait actual
        }
    }
    class welcome{
        use mensaje1;
    }
    $obj = new welcome();
    $obj->msg1();
    echo "<br>";
    $kiwi = new Frutas3();
    echo $kiwi->mivalor3();
    ?>
</body>
</html>