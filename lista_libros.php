<?php
require_once 'database.php';
require_once 'libro.php';

// Obtener todos los libros de la base de datos
$libros = Libro::buscarTodos();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Libros</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Libros</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($libros as $libro): ?>
            <div class="col">
                <div class="card h-100">
                    <img src="<?php echo $libro->getPortada(); ?>" class="card-img-top" alt="<?php echo $libro->getTitulo(); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $libro->getTitulo(); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $libro->getAutor(); ?></h6>
                        <p class="card-text"><?php echo $libro->getDescripcion(); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
