<?php
$mysqli = new mysqli("localhost", "root", "60908700aA@", "estudiantes_db");

if ($mysqli->connect_errno) {
    die("Error de conexión: " . $mysqli->connect_error);
}

$mysqli->set_charset("utf8mb4");
?>
