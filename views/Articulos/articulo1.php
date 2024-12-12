<?php
define('BASE_URL', 'http://localhost/Proyecto/');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulos</title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>CSS/style.css">
</head>
<body>
    <header>
        <?php include '../includes/header.php'; ?>
    </header>
<!--PRIMERA SECCION --> 
    <div class="container">
        <section class="articulos">
            <div class="pPrincipal">
                <h1>Ropa para fiesta y Ocasiones Especiales</h1>
                <img src="../../MEDIA/seccionArticulos/pArticulo1.jpg" alt="">
            </div>

<!--SEGUNDA SECCION --> 
<!--  AQUI EMPIEZA EL ARTICULO  -->	 

        <section class="articulosC">
            <h2 id="tituloTendencia">Estar a la vanguardia Infantil</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="../../MEDIA/seccionArticulos/articulo1-1.jpg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                        "En los últimos años, la moda sostenible también ha comenzado a tomar protagonismo en
                         las fiestas infantiles. Los padres están optando por prendas hechas con materiales 
                         orgánicos, reciclados y de producción responsable, lo que no solo es beneficioso para
                          el planeta, sino que también ofrece productos más seguros para los niños. Además, 
                          la moda reciclada o de segunda mano, con ropa que se puede reutilizar para futuras
                           celebraciones, es una opción que cada vez toma más fuerza.
                        <br>
                        El color es fundamental en las fiestas infantiles, y las tonalidades brillantes como
                         el amarillo, el azul, el rosa y el verde están de moda. Los vestidos y conjuntos de
                          estos colores no solo son llamativos, sino que también aportan un toque alegre y 
                          festivo a la celebración. Para los niños más pequeños, los monos o conjuntos con 
                          estampados llamativos de animales, flores o personajes de dibujos animados son 
                          siempre una apuesta segura."
                    </p>   
                </div>
            </div>
        </section>
<!-- TERCERA SECCION  -->        
        <section class="articulosD">
			
			<h2 id="consejos" class="titSeccionCons">Moda Equilibrada</h2>
				<br>
				<div id="contenedorConsejo">

					<div class="txtConsejo">
						<p>
							"La moda infantil para 2024 se enfoca en un equilibrio entre estilo, comodidad y sostenibilidad. 
							<br>
							Los diseños se adaptan a las necesidades de los más pequeños, ofreciendo prendas que permiten la libertad de
							movimiento sin sacrificar el aspecto visual. A su vez, las marcas están cada vez más comprometidas con la 
							conciencia ecológica, utilizando materiales orgánicos y procesos de fabricación responsables. 
							<br>
							Este año, las tendencias apuestan por colores vibrantes, estampados creativos y un enfoque inclusivo, 
							donde la funcionalidad y el confort siguen siendo prioritarios.
                            Los accesorios juegan un papel clave en la moda para fiestas infantiles. Desde coronas, sombreros y diademas 
                            hasta pulseras, mochilas y gafas, los niños disfrutan de agregar un toque personal a su atuendo. Estos 
                            pequeños detalles permiten que cada niño pueda expresar su personalidad mientras se divierte. Además, 
                            los accesorios como los globos o las tiaras pueden ser parte del vestuario temático, haciendo que la fiesta
                             sea aún más especial."
						</p>
					</div>
				</div>	
		</section>
<!--CUARTA SECCION --> 
        <section class="articulosC">
			
			<h2 class="titSeccionCons">Tendencia de fiestas infantiles</h2>
				
				<div id="contenedorConsejo">

					<div class="imgConsejo">
						<img src="../../MEDIA/seccionArticulos/articulo1-2.jpg" alt="">
					</div>

					<div class="txtConsejo">
						<p>
							"Aunque la estética es importante, la comodidad siempre será la prioridad 
                            número uno para los padres. Las prendas con telas suaves, elásticas y que 
                            permiten movimiento son fundamentales. Los vestidos para niñas con pantalones 
                            debajo, los pantalones cortos o leggings, y las camisetas con botones o cremalleras
                             son opciones populares para que los pequeños puedan jugar sin restricciones."
						</p>
					</div>
				</div>	
				
		</section>
     
    <!-- QUINTA SECCION -->
         
        <section class="articulosD">	
            <h2 id="tituloTendencia">Quizás te interese:</h2>
            <div class="contArtExtras">
                <div class="columArtExtras">
                    <a href="articulo2.php"><img src="../../MEDIA/seccionArticulos/img1.jpg" id="imgTendencia" alt="">Aprende a escoger la talla adecuada</a>
                </div>
                <div class="columArtExtras">
                    <a href="articulo3.php"><img src="../../MEDIA/seccionArticulos/img2.jpg" id="imgTendencia" alt="">España, superpotencia en moda infantil</a>
                </div>
            </div>
            <a class="verArticuloD" href= "./articulos.php">Ver todos los Artículos</a>
        </section> 
    <footer>
    <?php include '../includes/footer.php'; ?>
    </footer>
</body>
</html>