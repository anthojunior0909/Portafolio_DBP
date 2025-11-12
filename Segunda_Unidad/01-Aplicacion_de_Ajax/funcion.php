<?php
// Capturamos el parámetro "nombre" que viene desde la URL
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Invitado';

// Devolvemos una respuesta personalizada
echo "¡Hola, $nombre! Esta respuesta viene desde funcion.php";
?>
<table border=1>
    <tr>
        <th>Orden</th>
        <th>Nombres</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Edwin</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Jose</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Maria</td>
    </tr>
</table>
