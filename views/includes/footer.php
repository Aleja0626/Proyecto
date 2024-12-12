<?php
if (!defined('BASE_URL')) {
    define('BASE_URL', 'http://localhost/Proyecto/');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>CSS/style.css">

</head>
<body>
    <div id="pie">

        <!-- AQUI EMPIEZA EL MENU H -->
            <nav class="menuH">
    
                <!-- ESTAS SON LAS POLITICAS -->

                <div class="politicas">
                    <a href="<?php echo BASE_URL; ?>privacidad.php" >Politicas de Privacidad</a>
                </div>
    
                <!-- TITULOS -->
                <div class="politicas">
                    <a href="<?php echo BASE_URL; ?>cookies.php">Politicas de Cookies</a>
                </div>
        <!-- REDES SOCIALES -->
                <div class="rssPie">
    
                    <!-- ENLACE DE WHATSAPP -->
                    <div class="iconosPie">
                             <a href="https://wa.me/573114060044?text=Hola%20Bienvenid%40s%20a%20Chikiticas%20pero%20lindas%2C%20encantados%20de%20conocerte%2C%20%C2%BFen%20qu%C3%A9%20podemos%20ayudarte%3F" target="_blank" rel="noopener noreferrer">
                             <img src="<?php echo BASE_URL; ?>MEDIA/whatsapp.png" alt="">
                            </a>
    
                    <!-- ENLACE DE FACEBOOK -->
                 
                    
                            <a href="https://www.facebook.com/profile.php?id=100086729575474&locale=es_ES" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo BASE_URL; ?>MEDIA/facebook.png" alt="">
                            </a>
                           
                            <!-- ENLACE DE INSTAGRAM -->
                           
                              <a href="https://www.instagram.com/chikiticasperolindas?igsh=MW05enMzNTBtMmZ1NQ==" target="_blank" rel="noopener noreferrer">
                              <img src="<?php echo BASE_URL; ?>MEDIA/instagram.png" alt="">
                            </a>
                    </div>
                  </div>
            </nav> 
        </div>
</body>
</html>