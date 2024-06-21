<?php
session_start();
require ('../php/conexion.php');

// Obtener todos los usuarios de la base de datos
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

//Verificar si hay un mensaje en la URL
$mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : '';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table {
            font-size: 13px;
        }
        th {
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Lista de usuarios</h1>
        </div>
        <?php if ($mensaje): ?>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <?php echo $mensaje; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre completo</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Tipo de usuario</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['usuario_id']; ?></td>
                            <td><?php echo $row['nombre_usuario']; ?></td>
                            <td><?php echo $row['nombre_completo']; ?></td>
                            <td><?php echo $row['correo']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                            <td><?php echo $row['direccion']; ?></td>
                            <td><?php echo $row['tipo_usuario']; ?></td>
                            <td><img src="<?php echo $row['imagen']; ?>" alt="Imagen" width="50"></td>
                            <td>
                                <a href="../layout/edit_usuario.php?id=<?php echo $row['usuario_id']; ?>"
                                    class="btn btn-warning btn-sm">Editar</a>
                                <a href="../tools/eliminar_usuario.php?id=<?php echo $row['usuario_id']; ?>"
                                    class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de que desea eliminar este usuario?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9">No hay usuarios registrados.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
$conn->close();
?>