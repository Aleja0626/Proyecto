<?php
define('BASE_URL', 'http://localhost/Proyecto/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>articulos</title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>CSS/style.css">
    
</head>
<body>
    <header>
        <?php include 'views/includes/header.php'; ?>
    </header>
    <div class="container">

            <div id="titPoliticas">
                <h1 >Politicas de cookies</h1>
            </div>
            
        <div class="txtPoliticas">
            
            <br>
            
            <h2>¿Qué son las cookies?</h2>
            <p>Una cookie es un pequeño fragmento de texto que los sitios web que visita envían al navegador y que permite que el sitio web recuerde información sobre su visita, como su idioma preferido y otras opciones, con el fin de facilitar su próxima visita y hacer que el sitio le resulte más útil. Las cookies desempeñan un papel muy importante y contribuyen a tener una mejor experiencia de navegación para el usuario.</p>
            
            <h2>Tipos de cookies</h2>
            <p>Según quién sea la entidad que gestione el dominio desde dónde se envían las cookies y se traten los datos que se obtengan, se pueden distinguir dos tipos: cookies propias y cookies de terceros.</p>
            <p>Existe también una segunda clasificación según el plazo de tiempo que permanecen almacenadas en el navegador del cliente, pudiendo tratarse de cookies de sesión o cookies persistentes.</p>
            <p>Por último, existe otra clasificación con cinco tipos de cookies según la finalidad para la que se traten los datos obtenidos: cookies técnicas, cookies de personalización, cookies de análisis, cookies publicitarias y cookies de publicidad comportamental.</p>
            <p>Para más información a este respecto puede consultar la <a href="https://www.aepd.es/es/guias-y-herramientas/guias/uso-cookies" target="_blank">Guía sobre el uso de las cookies de la Agencia Española de Protección de Datos</a>.</p>

            <h2>Cookies utilizadas en la web</h2>
            <p>A continuación se identifican las cookies que están siendo utilizadas en este portal así como su tipología y función:</p>
            <ul>
                <li><strong>Google Analytics</strong>: Un servicio de analítica web desarrollado por Google que permite la medición y análisis de la navegación en las páginas web. En su navegador podrá observar cookies de este servicio. Según la tipología anterior se trata de cookies propias, de sesión y de análisis.</li>
                <li>Las cookies de Google Analytics recopilan información sobre el número de usuarios que acceden a la web, el número de páginas vistas, la frecuencia y repetición de las visitas, su duración, el navegador utilizado, el operador que presta el servicio, el idioma, el terminal que utiliza y la ciudad a la que está asignada su dirección IP.</li>
                <li>Google convertirá su información en anónima truncando la dirección IP antes de almacenarla, de forma que Google Analytics no se usa para localizar o recabar información personal identificable de los visitantes del sitio.</li>
                <li>Google solo podrá enviar la información recabada por Google Analytics a terceros cuando esté legalmente obligado a ello. Con arreglo a las condiciones de prestación del servicio de Google Analytics, Google no asociará su dirección IP a ningún otro dato conservado por Google.</li>
                <li><strong>show_cookies</strong>: Una cookie propia, de tipo técnico y de sesión, que gestiona el consentimiento del usuario para el uso de las cookies en la página web, recordando si un usuario ha aceptado las cookies, para no mostrar el aviso nuevamente.</li>
            </ul>

            <h2>Aceptación de la política de cookies</h2>
            <p>Pulsando el botón “OK” o continuando la navegación por la web de unmundodeprincesas.com, se asume que usted acepta el uso de cookies.</p>

            <h2>Cómo modificar la configuración de las cookies</h2>
            <p>Usted puede restringir, bloquear o borrar las cookies de la web de unmundodeprincesas.com o cualquier otra página web utilizando su navegador. En cada navegador la operativa es diferente, la función de “Ayuda” le mostrará cómo hacerlo.</p>
        </div>
        <footer>
        <?php include 'views/includes/footer.php'; ?>
        </footer>
    </div>    
</body>
</html>
