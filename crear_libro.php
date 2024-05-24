<?php
require_once 'Database.php';

// Procesamos el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $descripcion = $_POST['descripcion'];

    // Manejamos la carga de la portada
    if ($_FILES['portada']['error'] === UPLOAD_ERR_OK) {
        $nombreArchivo = $_FILES['portada']['name'];
        $rutaTemporal = $_FILES['portada']['tmp_name'];
        $rutaDestino = 'assets/img/' . $nombreArchivo; // Ruta donde guardar la imagen
        move_uploaded_file($rutaTemporal, $rutaDestino);
        $portada = $rutaDestino;
    } else {
        // Si no se subió ninguna imagen, asignamos una portada por defecto o mostramos un mensaje de error
        $portada = 'assets/img/logo.jpg';
    }

    // Insertamos el libro en la base de datos
    $conexion = Database::conectar();
    // Preparamos y ejecutamos la consulta SQL para insertar el libro con la ruta de la portada
    $sql = "INSERT INTO libros (titulo, autor, descripcion, portada) VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('ssss', $titulo, $autor, $descripcion, $portada);
    $stmt->execute();
    $stmt->close();
    Database::desconectar();

    // Redireccionamos a alguna página o mostramos un mensaje de éxito
    header("Location: registro_libro.php?mensaje=Libro agregado correctamente");
    exit();
}
?>

