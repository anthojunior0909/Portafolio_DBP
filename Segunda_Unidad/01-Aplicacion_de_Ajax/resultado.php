<?php
// Recibir y validar el parámetro
$variable = isset($_GET['variable']) ? htmlspecialchars($_GET['variable']) : 'Usuario';

// Base de datos simulada de usuarios
$usuarios = array(
    array('id' => 1, 'nombre' => 'Edwin', 'email' => 'edwin@example.com', 'rol' => 'Administrador'),
    array('id' => 2, 'nombre' => 'Jose', 'email' => 'jose@example.com', 'rol' => 'Editor'),
    array('id' => 3, 'nombre' => 'Anthony', 'email' => 'maria@example.com', 'rol' => 'Usuario'),
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados - AJAX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #5f678aff 0%, #afa5b9ff 100%); min-height: 100vh; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">� Bienvenido: <strong><?php echo $variable; ?></strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info" role="alert">
                            <strong>📌 Información:</strong> Se encontraron <strong><?php echo count($usuarios); ?></strong> registros en el sistema.
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead class="table-primary">
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th class="text-center">Rol</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($usuarios as $usuario): ?>
                                    <tr>
                                        <td class="text-center">
                                            <span class="badge bg-<?php 
                                                echo ($usuario['id'] == 1) ? 'success' : (($usuario['id'] == 2) ? 'info' : 'warning');
                                            ?>">
                                                <?php echo $usuario['id']; ?>
                                            </span>
                                        </td>
                                        <td><?php echo $usuario['nombre']; ?></td>
                                        <td><small class="text-muted"><?php echo $usuario['email']; ?></small></td>
                                        <td class="text-center">
                                            <span class="badge bg-<?php 
                                                echo ($usuario['rol'] == 'Administrador') ? 'danger' : (($usuario['rol'] == 'Editor') ? 'warning' : 'secondary');
                                            ?>">
                                                <?php echo $usuario['rol']; ?>
                                            </span>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-light d-flex justify-content-between">
                        <small class="text-muted">Total de registros: <?php echo count($usuarios); ?></small>
                        <small class="text-muted">Generado el: <?php echo date('d/m/Y H:i:s'); ?></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>