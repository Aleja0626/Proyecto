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
                <h1>Moda Infantil: Tendencias, Innovaciones y Desafíos</h1>
                <img src="../../MEDIA/seccionArticulos/pArticulo5.jpg" alt="">
            </div>

<!--SEGUNDA SECCION --> 
<!--  AQUI EMPIEZA EL ARTICULO  -->	 

        <section class="articulosC">
            <h2 id="tituloTendencia">El Panorama Actual</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="../../MEDIA/seccionArticulos/img25.jpg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                    La moda infantil ha evolucionado considerablemente en las últimas décadas, transformándose
                    de una industria tradicionalmente orientada a lo funcional y básico a un sector dinámico y
                    lleno de creatividad. En 2024, la moda para niños sigue ganando terreno, con una creciente
                    influencia tanto en el mundo de la moda global como en la cultura popular. El mercado de 
                    la moda infantil no solo está experimentando un auge en términos de diseño y diversidad, 
                    sino también en cuanto a la sostenibilidad, la tecnología y las nuevas formas de consumo.
                    En este artículo, analizamos el panorama actual de la moda infantil, sus principales 
                    tendencias, las innovaciones que están marcando la pauta, y los desafíos que enfrenta este
                    sector en constante cambio.
                    </p>   
                </div>
            </div>
        </section>
<!-- TERCERA SECCION  -->        
        <section class="articulosD">
			
			<h2 id="consejos" class="titSeccionCons">Las Principales Tendencias en la Moda Infantil</h2>
				
				<div id="contenedorConsejo">

					<div class="txtConsejo">
						
                            <ul>
                                <li>
                                    <h5>Estilo y comodidad como prioridad</h5>
                                    La comodidad siempre ha sido un factor clave al elegir ropa para niños, pero hoy en día, este factor va de la
                                    mano con el estilo. Los padres ya no se conforman con prendas prácticas, sino que buscan diseños modernos que 
                                    también sean funcionales. Esto ha llevado al auge de la moda cómoda: pantalones elásticos, prendas sin costuras
                                    incómodas, tejidos suaves y transpirables, y diseños que permiten a los niños moverse libremente.                                 
                                </li>
                                <br>
                                <li>
                                    <h5>Estilo unisex</h5>
                                    
                                    Una de las tendencias más destacadas en la moda infantil actual es la moda unisex. Las líneas que antes eran
                                    exclusivamente para niños o niñas han dado paso a colecciones que no se limitan por género. Colores neutros como el gris,
                                    el blanco, el negro y el beige, así como prendas como sudaderas, chaquetas oversized, pantalones jogger y camisetas de 
                                    corte básico, están disponibles tanto para niños como para niñas.
                                </li>
                                <br>
                                <li>
                                    <h5>Moda consciente y sostenible</h5>
                                    En 2024, la sostenibilidad se ha convertido en una de las principales preocupaciones tanto para consumidores como para marcas. 
                                    Los padres están cada vez más interesados en comprar ropa que sea respetuosa con el medio ambiente, lo que ha impulsado a muchas
                                    marcas a adoptar prácticas sostenibles. El uso de materiales orgánicos, la producción ética y la ropa reciclada están ganando 
                                    terreno en las colecciones infantiles.
                                </li>
                                
                             </ul>
					</div>
				</div>	
		</section>
<!--CUARTA SECCION --> 
        <section class="articulosC">
			
			<h2 class="titSeccionCons">Desafíos de la Moda Infantil en 2024</h2>
				
				<div id="contenedorConsejo">

					<div class="imgConsejo">
						<img src="../../MEDIA/seccionArticulos/img28.jpg" alt="">
					</div>

					<div class="txtConsejo">
						<ul>
                            <p> El panorama de la moda infantil en 2024 es emocionante, lleno de innovación, 
                                creatividad y cambios significativos. La sostenibilidad, la tecnología, la 
                                comodidad y la inclusión de géneros son las claves que dominan las tendencias 
                                ctuales, mientras que las marcas luchan por adaptarse a las expectativas de un 
                                consumidor cada vez más exigente. Aunque la industria enfrenta desafíos como la
                                creciente competencia y las demandas éticas, las oportunidades para innovar y
                                crear ropa infantil que sea funcional, estilosa y responsable siguen siendo
                                enormes. Con la continua evolución de las tendencias y la tecnología, el futuro 
                                de la moda infantil parece prometedor y lleno de posibilidades.
                            </p> 
					</div>
				</div>	
		</section>
     
    <!-- QUINTA SECCION -->
         
        <section class="articulosD">	
            <h2 id="tituloTendencia">Quizás te interese:</h2>
            <div class="contArtExtras">
                <div class="columArtExtras">
                    <a href="articulo6.php"><img src="../../MEDIA/seccionArticulos/img9.jpg" id="imgTendencia" alt=""> ¿Skincare para niñas?</a>
                </div>
                <div class="columArtExtras">
                    <a href="articulo7.php"><img src="../../MEDIA/seccionArticulos/img10.jpg" id="imgTendencia" alt="">Moda infantil de segunda mano</a>
                </div>
            </div>
            <a class="verArticuloD" href= "./articulos.php">Ver todos los Artículos</a>
        </section>
    <footer>
    <?php include '../includes/footer.php'; ?>
    </footer>
</body>
</html>