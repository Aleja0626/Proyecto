<?php
// Incluir el archivo para la conexión a la base de datos
  // Asegúrate de que mysql.php contiene la conexión correcta

class bibliotecaBD {
    private static $conexion = null;

    // Crear la conexión a la base de datos
    private static function conexionBD() {
        $config = parse_ini_file(__DIR__ . "/../config.ini");
        if (self::$conexion === null) {
            self::$conexion = new mysqli($config['server'], $config['user'], $config['password'], $config['bd']);
            if (self::$conexion->connect_error) {
                die("Error en la conexión: " . self::$conexion->connect_error);
            }
            self::$conexion->set_charset('utf8');
        }
        return self::$conexion;
    }

    // Método para insertar los datos
    public static function consultaInsercion($consulta, ...$parametros) {
        $conexion = self::conexionBD();
        $preparacion = self::preparar($conexion, $consulta, ...$parametros);
        if ($preparacion->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Método para ejecutar consultas y devolver resultados
    public static function consulta($consulta) {
        $conexion = self::conexionBD();
        $resultado = $conexion->query($consulta);
        if ($resultado === false) {
            die("Error en la consulta: " . $conexion->error);
        }
        return $resultado;
    }

    private static function preparar($conexion, $consulta, ...$parametros) {
        $preparacion = $conexion->prepare($consulta);
        if ($parametros) {
            $tipos = '';
            foreach ($parametros as $parametro) {
                $tipos .= is_int($parametro) ? 'i' : 's';
            }
            $preparacion->bind_param($tipos, ...$parametros);
        }
        return $preparacion;
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
