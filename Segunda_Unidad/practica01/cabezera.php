<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Práctica 01 - Portafolio. Ejemplos de contenido para la unidad.">
        <?php
        // Permite sobrescribir el título desde la página que incluye esta cabecera
        $title = isset($title) && trim($title) !== '' ? $title : 'Mi web';
        ?>
        <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>

        <!-- Bootstrap CSS (ruta relativa desde esta carpeta) -->
        <link rel="stylesheet" href="../../bootstrap-5.3.8-dist/css/bootstrap.min.css">

        <style>
        /* Pequeña mejora para el link de salto (accesibilidad) */
        .skip-link{position:absolute;left:-10000px;top:auto;width:1px;height:1px;overflow:hidden}
        .skip-link:focus{position:static;width:auto;height:auto;}
        </style>
</head>
<body>
        <a class="skip-link" href="#main">Saltar al contenido</a>

        <?php
        // Nombre del script actual para marcar el enlace activo
        $current = basename($_SERVER['PHP_SELF']);
        function is_active($name, $current){
                return $current === $name ? ' active' : '';
        }
        ?>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="index.php"><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Alternar navegación">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link<?php echo is_active('contenido1.php', $current); ?>" href="contenido1.php">Contenido 01</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?php echo is_active('contenido2.php', $current); ?>" href="contenido2.php">Contenido 02</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?php echo is_active('contenido3.php', $current); ?>" href="contenido3.php">Contenido 03</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?php echo is_active('contenido4.php', $current); ?>" href="contenido4.php">Contenido 04</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main id="main" class="container mt-4">
        <!-- Contenido de la página (cerrado por la plantilla footer o el archivo que incluya esta cabecera) -->