<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $favcolor = "red";

    switch ($favcolor) {
    case "red":
        echo "Tu color favorito es el rojo!";
        break;
    case "blue":
        echo "Tu color favorito es el azul!";
        break;
    case "green":
        echo "Tu color favorito es el verde!";
        break;
    default:
        echo "Tu color favorito no es ni el rojo, ni el azul, ni el verde.!";
    }
    echo "<br>";
    $d = 4;

    switch ($d) {
    case 6:
        echo "Hoy es sábado";
        break;
    case 0:
        echo "Hoy es domingo";
        break;
    default:
        echo "Esperando con ansias el fin de semana";
    }
    echo "<br>";
    $d = 4;

    switch ($d) {
    default:
        echo "Esperando con ansias el fin de semana";
        break;
    case 6:
        echo "Hoy es sábado";
        break;
    case 0:
        echo "Hoy es domingo";
    }
    $d = 3;

    switch ($d) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:  
        echo "Las semanas se sienten tan largas!";
        break;
    case 6:
    case 0:
        echo "Los fines de semana son los mejores!";
        break;
    default:
        echo "algo salió mal";
    }
    ?>
</body>
</html>