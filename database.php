<?php
require_once 'config.php';

class Database {
    private static $conexion;

    public static function conectar() {
        if (!isset(self::$conexion)) {
            try {
                // Crear una nueva conexión PDO
                self::$conexion = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
                // Habilitar el modo de errores PDO para que lance excepciones en lugar de advertencias
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                // Manejar errores de conexión
                die("Error de conexión a la base de datos: " . $e->getMessage());
            }
        }

        return self::$conexion;
    }

    public static function desconectar() {
        // Cerrar la conexión PDO
        self::$conexion = null;
    }
}
?>

