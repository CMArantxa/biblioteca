<?php
class Libro {
    // Propiedades de la clase Libro
    private $titulo;
    private $autor;
    private $descripcion;
    private $portada;

    // Constructor
    public function __construct($titulo, $autor, $descripcion, $portada) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->descripcion = $descripcion;
        $this->portada = $portada;
    }

    // Métodos getter y setter para cada propiedad
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getPortada() {
        return $this->portada;
    }

    public function setPortada($portada) {
        $this->portada = $portada;
    }

    // Método para obtener un array con los datos del libro
    public function toArray() {
        return array(
            'titulo' => $this->titulo,
            'autor' => $this->autor,
            'descripcion' => $this->descripcion,
            'portada' => $this->portada
        );
    }
    public static function buscarTodos() {
        // Conectar a la base de datos
        $conexion = Database::conectar();
        
        // Consulta SQL para obtener todos los libros
        $consulta = "SELECT * FROM libros";
        
        // Preparar y ejecutar la consulta
        $stmt = $conexion->query($consulta);
        
        // Array para almacenar objetos Libro
        $libros = array();
        
        // Recorrer los resultados y crear objetos Libro
        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $libro = new Libro($fila['titulo'], $fila['autor'], $fila['descripcion'], $fila['portada']);
            $libros[] = $libro;
        }
        
        // Desconectar la base de datos
        Database::desconectar();
        
        // Devolver array de objetos Libro
        return $libros;
    }

public static function buscarLibrosPorTitulo($titulo) {
    // Conectar a la base de datos
    $conexion = Database::conectar();
    
    // Consulta SQL para buscar libros por título
    $consulta = "SELECT * FROM libros WHERE titulo LIKE ?";
    
    // Preparar la consulta
    $stmt = $conexion->prepare($consulta);
    
    // Bind de parámetro y ejecución de la consulta
    $stmt->execute(["%$titulo%"]);
    
    // Array para almacenar objetos Libro
    $libros = array();
    
    // Recorrer los resultados y crear objetos Libro
    while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $libro = new Libro($fila['titulo'], $fila['autor'], $fila['descripcion'], $fila['portada']);
        $libros[] = $libro;
    }
    
    // Desconectar la base de datos
    Database::desconectar();
    
    // Devolver array de objetos Libro
    return $libros;
}
}
?>
