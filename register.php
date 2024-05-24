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
<?php include("header.php"); ?>
<div class="container row container-register">
    <form class="form register col-md-8 col-sm-12" action="" method="post" enctype="multipart/form-data">
        <input class="form-control" type="text" name="username" id="" placeholder="username">
        <input class="form-control" type="email" name="email" placeholder="email">
        <input class="form-control" type="password" name="password" placeholder="password">
        <button class="btn btn-success btn-large" type="submit">New user</button>
    </form>
</div>
<?php include("footer.php"); ?>