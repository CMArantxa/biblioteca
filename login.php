<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                  <form id="search-form" class="d-flex">
                    <input id="search-input" class="form-control me-2" type="search" placeholder="Buscar por titulo" aria-label="Search" name="nombre_libro">
                    <button id="search-button" class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
              </div>
              <div class="d-flex">
    <a href="login.php" class="btn btn-outline-primary me-2">Login</a>
</div>

            </div>
          </nav>
    </header>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Iniciar Sesión
                    </div>
                    <div class="card-body">
                        <form action="process_login.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                            <div class="card-footer text-muted">
                        ¿No tienes una cuenta? <a href="register.php">Regístrate aquí</a>.
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
