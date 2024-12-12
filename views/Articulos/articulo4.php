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
                <h1>Influencia Global y Expansión Internacional</h1>
                <img src="../../MEDIA/seccionArticulos/pArticulo4.jpg" alt="">
            </div>

<!--SEGUNDA SECCION --> 
<!--  AQUI EMPIEZA EL ARTICULO  -->	 

        <section class="articulosC">
            <h2 id="tituloTendencia">La Influencia de la Cultura Española</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="../../MEDIA/seccionArticulos/img24.jpg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                        Las raíces culturales y la tradición española juegan un papel importante en la moda infantil
                        del país. La estética española se caracteriza por la mezcla de influencias mediterráneas, 
                        que se reflejan en la paleta de colores cálidos, los tejidos naturales y los cortes sencillos
                        pero elegantes. Esta fusión de lo tradicional con lo moderno ha hecho que la moda infantil 
                        española sea apreciada por padres que buscan ropa con personalidad, pero que también sea 
                        respetuosa con el legado cultural.
                        Las fiestas tradicionales como la Feria de Abril en Sevilla o las celebraciones de Navidad 
                        también influyen en las colecciones de moda infantil, con vestidos de flamenco o abrigos 
                        con detalles especiales que se han vuelto populares no solo en España, sino en otros países.
                    </p>   
                </div>
            </div>
        </section>
<!-- TERCERA SECCION  -->        
        <section class="articulosD">
			
			<h2 id="consejos" class="titSeccionCons">Marcas Españolas Líderes en Moda Infantil en 2024</h2>
				
				<div id="contenedorConsejo">

					<div class="txtConsejo">
						
                            <ul>
                                <li>
                                    <h5>Zara Kids</h5>
                                    Como parte del gigante Inditex, Zara Kids es una de las marcas más reconocidas a nivel mundial. 
                                    En 2024, sigue siendo un referente en moda infantil gracias a su capacidad para ofrecer colecciones
                                    que combinan las últimas tendencias con la comodidad que los padres buscan. Con una fuerte presencia 
                                    tanto en tiendas físicas como en línea, Zara Kids continúa marcando el ritmo de la moda infantil global.                                
                                </li>
                                <br>
                                <li>
                                    <h5>Mayoral</h5>
                                    
                                    Fundada en Málaga en 1941, Mayoral es otra de las grandes marcas de moda infantil de España. Con su estilo 
                                    clásico y elegante, Mayoral se ha convertido en un símbolo de la moda infantil de calidad en todo el mundo. 
                                    En 2024, la marca sigue destacando por su diseño atemporal y su amplia variedad de prendas para todas las 
                                    edades.
                                </li>
                                <li>
                                    <h5>Nanos</h5>
                                    Conocida por sus diseños sofisticados y sus tejidos de alta calidad, Nanos es una marca que ha sabido crear
                                    una identidad única dentro de la moda infantil. Sus colecciones para ocasiones especiales, como bodas o 
                                    eventos familiares, siguen siendo muy demandadas por padres que buscan ropa elegante y de lujo para sus 
                                    hijos.
                                </li>
                                
                             </ul>
					</div>
				</div>	
		</section>
<!--CUARTA SECCION --> 
        <section class="articulosC">
			
			<h2 class="titSeccionCons">calidad, la creatividad y la sostenibilidad</h2>
				
				<div id="contenedorConsejo">

					<div class="imgConsejo">
						<img src="../../MEDIA/seccionArticulos/img27.jpg" alt="">
					</div>

					<div class="txtConsejo">
						<ul>
                            <p> España ha demostrado ser una superpotencia en la moda infantil en 2024,
                                destacando por la calidad, la creatividad y la sostenibilidad de sus prendas.
                                Las marcas españolas no solo han logrado mantenerse a la vanguardia de las tendencias
                                globales, sino que han sabido adaptarse a las necesidades de los consumidores modernos,
                                ofreciendo ropa cómoda, elegante y responsable con el medio ambiente. Con una fuerte 
                                presencia internacional y una rica tradición cultural, la moda infantil española continuará
                                siendo un referente mundial en los próximos años.
                            </p>
                            
					</div>
				</div>	
				
		</section>
     
    <!-- QUINTA SECCION -->
         
        <section class="articulosD">	
            <h2 id="tituloTendencia">Quizás te interese:</h2>
            <div class="contArtExtras">
                <div class="columArtExtras">
                    <a href="articulo5.php"><img src="../../MEDIA/seccionArticulos/img7.jpg" id="imgTendencia" alt="">Panorama actual de la moda infantil</a>
                </div>
                <div class="columArtExtras">
                    <a href="articulo6.php"><img src="../../MEDIA/seccionArticulos/img8.jpg" id="imgTendencia" alt="">¿Skincare para niñas?</a>
                </div>
            </div>
            <a class="verArticuloD" href= "./articulos.php">Ver todos los Artículos</a>
        </section> 
    <footer>
    <?php include '../includes/footer.php'; ?>
    </footer>
</body>
</html>