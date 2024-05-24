
<?php

if (isset($_POST["username"])) {
    include("conexion.php");
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

  
            $sql = "insert into user (username,email,password) values (?,?,?)";
            $stm = $conn->prepare($sql);
            $stm->bindParam(1, $username);
            $stm->bindParam(2, $email);
            $stm->bindParam(3, $password);
            $stm->execute();
            if ($stm->rowCount() > 0) {
                $msg = "Usuario creado correctamente";
            } else {
                $msg = "Error al crear el Usuario";
            }
        }
?>
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
<div class="container row container-register">
    <form class="form register col-md-8 col-sm-12" action="" method="post" enctype="multipart/form-data">
        <input class="form-control" type="text" name="username" id="" placeholder="username">
        <input class="form-control" type="email" name="email" placeholder="email">
        <input class="form-control" type="password" name="password" placeholder="password">
        <button class="btn btn-success btn-large" type="submit">New user</button>
    </form>
</div>
