<?php
// Incluir solo el archivo controlador que ya incluye todo lo necesario
require_once 'BD/bdcontrolador.php';  // Incluye la clase bibliotecaBD

// Verificar si los datos del formulario han sido enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST['Nombre'];
    $correo = $_POST['Correo'];

    // Validar los datos (básicamente, para asegurarnos de que no están vacíos)
    if (empty($nombre) || empty($correo)) {
        // Si falta algún dato, redirigimos con un mensaje de error
        header("Location: index.php?error=1");
        exit;
    }

    // Validar el correo electrónico
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        // Si el correo es inválido, redirigimos con un mensaje de error
        header("Location: index.php?error=1");
        exit;
    }

    // Establecer la consulta SQL para insertar los datos
    $consulta = "INSERT INTO usuarios (nombre, email) VALUES (?, ?)";

    // Intentar insertar los datos en la base de datos
    if (bibliotecaBD::consultaInsercion($consulta, $nombre, $correo)) {
        // Si la inserción es exitosa, redirigimos con un mensaje de éxito
        header("Location: index.php?success=1");
    } else {
        // Si hay un error en la base de datos, redirigimos con un mensaje de error
        header("Location: index.php?error=1");
    }
}
?>
