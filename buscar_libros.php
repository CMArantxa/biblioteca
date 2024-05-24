<?php
// Incluir el archivo de la clase Libro y la configuración de la base de datos
require_once 'libro.php';
require_once 'database.php';

// Inicializar el array de resultados
$resultados = array();

// Verificar si se ha enviado un término de búsqueda
if (isset($_GET['titulo'])) {
    // Obtener el término de búsqueda desde la URL
    $titulo = $_GET['titulo'];

    // Realizar la búsqueda en la base de datos
    $libros = Libro::buscarLibrosPorTitulo($titulo);

    // Si se encontraron resultados
    if ($libros) {
        // Agregar los resultados al array
        foreach ($libros as $libro) {
            $resultado = array(
                'titulo' => $libro->getTitulo(),
                'autor' => $libro->getAutor(),
                'descripcion' => $libro->getDescripcion(),
                'portada' => $libro->getPortada()
            );
            $resultados[] = $resultado;
        }
    }
}

// Enviar los resultados como JSON
header('Content-Type: application/json');
echo json_encode($resultados);
?>
