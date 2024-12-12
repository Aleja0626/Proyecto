<?php
class bibliotecaBD {
    private static $conexion = null;

    // Crear la conexión a la base de datos
    private static function conexionBD() {
        $config = parse_ini_file(__DIR__ . "/../config.ini"); // Corregimos la ruta del archivo de configuración
        if (self::$conexion === null) {
            self::$conexion = new mysqli($config['server'], $config['user'], $config['password'], $config['bd']);
            
            // Verificar si hubo un error en la conexión
            if (self::$conexion->connect_error) {
                die("Error en la conexión: " . self::$conexion->connect_error); 
            }

            // Establecer el conjunto de caracteres para evitar problemas con caracteres especiales
            self::$conexion->set_charset('utf8');
        }
        return self::$conexion;
    }

    // Método para cerrar la conexión
    public static function cerrarConexion() {
        if (self::$conexion !== null) {
            self::$conexion->close();
            self::$conexion = null;
        }
    }
}
?>
