<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>home</title>
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
    <main>
        <br>
        <br>
        <h1 id="well">BIENVENIDO A TU BIBLIOTECA VIRTUAL</h1>
        <br>
        <div class="parallax"></div>
        <br>
        <p id="frase">Disfruta de tus mejores momentos con la compañía de un gran libro.</p>
        <br>
        <br>
    </main>
    <footer>
       
            <div class="footer-container">
                <div class="contact-info">
                    <h2>Contacto</h2>
                    <p><strong>Dirección:</strong> Calle Falsa 123, Ciudad, País</p>
                    <p><strong>Teléfono:</strong> +123 456 7890</p>
                    <p><strong>Email:</strong> contacto@ejemplo.com</p>
                </div>
                <div class="social-media">
                    <h2>Síguenos</h2>
                    <a href="#" class="social-icon"><img src="assets/img/facebook.jpg" alt="Facebook"></a>
                    <a href="#" class="social-icon"><img src="assets/img/twiter.png" alt="Twitter"></a>
                    <a href="#" class="social-icon"><img src="assets/img/insta.jpg" alt="Instagram"></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 ARCA DESIGNERS. Todos los derechos reservados.</p>
            </div>
    </footer>

</body>
</html>
