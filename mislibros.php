<?php
require_once 'database.php';
require_once 'libro.php';

// Obtener todos los libros de la base de datos
$libros = Libro::buscarLibrosPorUsuario();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Libros</title>
    <link rel="stylesheet" href="assets/css/mislibros.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Mis Libros</h2>
        <!-- Aquí mostrar la lista de libros del usuario -->
        <ul>
            <?php foreach ($libros as $libro): ?>
                <li>
                    <strong><?php echo $libro->getTitulo(); ?></strong> 
                    <!-- Botones de editar, crear y eliminar -->
                    <a href="editar_libro.php?id=<?php echo $libro->getId(); ?>" class="btn btn-primary">Editar</a>
                    <a href="eliminar_libro.php?id=<?php echo $libro->getId(); ?>" class="btn btn-danger">Eliminar</a>
                </li>
            <?php endforeach; ?>
        </ul>
        
        <!-- Botón para agregar un nuevo libro -->
        <a href="agregar_libro.php" class="btn btn-success">Agregar Nuevo Libro</a>
    </div>
</body>
</html>

