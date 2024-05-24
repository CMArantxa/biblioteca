<?php
session_start();

// Verificar si se envió el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se enviaron credenciales
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Aquí deberías validar las credenciales, por ejemplo, comparándolas con los registros en tu base de datos.
        // Por ahora, asumiremos que el inicio de sesión siempre es exitoso y redirigiremos al usuario.

        // Simulación de inicio de sesión exitoso
        $_SESSION["username"] = $_POST["username"];

        // Redireccionar al usuario a lista_libros.php
        header("Location: lista_libros.php");
        exit();
    } else {
        // Si no se enviaron credenciales, mostrar un mensaje de error
        echo "Error: Por favor, ingrese nombre de usuario y contraseña.";
    }
}
?>
