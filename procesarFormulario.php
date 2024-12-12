<?php
// Incluir solo el archivo controlador que ya incluye todo lo necesario
require_once 'BD/bdcontrolador.php';  // Incluye la clase bibliotecaBD

// Incluir las clases de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Función para enviar emails a todos los clientes
function enviarEmailsClientes($subject, $body) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'blog-un-mundo-de-princesas@martatrendyhair.com';
        $mail->Password = 'Gchoque*97';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('blog-un-mundo-de-princesas@martatrendyhair.com', 'Un mundo de princesas');

        $consulta = "SELECT email FROM usuarios";
        $resultado = bibliotecaBD::consulta($consulta);

        while ($fila = $resultado->fetch_assoc()) {
            $mail->addAddress($fila['email']);
        }

        $mail->isHTML(true);
        

        $mail->Subject = $subject;

        
        
        $mail->Body = $body;

        $mail->send();
        echo 'Emails enviados correctamente';
    } catch (Exception $e) {
        echo "No se pudo enviar el email. Error: {$mail->ErrorInfo}";
    }
}

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
        // Enviar emails a todos los clientes
        $file=fopen("PHPMailer/noticias.html","r");
		$str=fread($file,filesize("PHPMailer/noticias.html"));
		$str =trim($str);
		fclose($file);
        enviarEmailsClientes('Noticias',$str);

        // Si la inserción es exitosa, redirigimos con un mensaje de éxito
        header("Location: index.php?success=1");
    } else {
        // Si hay un error en la base de datos, redirigimos con un mensaje de error
        header("Location: index.php?error=1");
    }
}
?>
