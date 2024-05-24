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
    <link rel="stylesheet" href="assets/css/libros.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Lista de Libros</title>
</head>
<body>
<header>
        <img src="assets/img/logo.jpg" alt="logo">
        <h1 id="nombre">BIBLIOGUAY</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="lista_libros.php">Libros</a>
                </li>
            </ul>
            <!-- Botón para ir a la página 'mislibros.php' -->
            <a class="btn btn-primary" href="mislibros.php">Mis Libros</a>
            <form id="search-form" class="d-flex">
                <input id="search-input" class="form-control me-2" type="search" placeholder="Buscar por título" aria-label="Search" name="nombre_libro">
                <button id="search-button" class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>

    </header>
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
