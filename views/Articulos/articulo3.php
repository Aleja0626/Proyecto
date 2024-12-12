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
                <h1>España: Superpotencia en Moda Infantil en 2024</h1>
                <img src="../../MEDIA/seccionArticulos/pArticulo3.png" alt="">
            </div>

<!--SEGUNDA SECCION --> 
<!--  AQUI EMPIEZA EL ARTICULO  -->	 

        <section class="articulosC">
            <h2 id="tituloTendencia">La Evolución de la Moda Infantil en España</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="../../MEDIA/seccionArticulos/img23.jpg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                        "La moda infantil en España ha experimentado una notable evolución en las últimas décadas.
                         Durante muchos años, la ropa para niños en España se centraba principalmente en lo básico
                          y lo funcional, sin demasiada preocupación por las tendencias o la estética. Sin embargo,
                           con el paso de los años, las marcas españolas comenzaron a comprender que los padres no 
                           solo buscan prendas cómodas, sino también opciones que ofrezcan estilo y originalidad."
                    </p>   
                </div>
            </div>
        </section>
<!-- TERCERA SECCION  -->        
        <section class="articulosD">
			
			<h2 id="consejos" class="titSeccionCons">Claves del Éxito de la Moda Infantil en España</h2>
				
				<div id="contenedorConsejo">

					<div class="txtConsejo">
						
                            <ul>
                                <li>
                                    <h5>Calidad y Sostenibilidad</h5>
                                    La calidad es uno de los pilares fundamentales de la moda infantil española. Las marcas españolas apuestan
                                     por materiales de alta gama, como algodón orgánico, lino, lana y tejidos sostenibles, que aseguran que las 
                                     prendas sean duraderas y cómodas para los niños. Además, muchas marcas están adoptando prácticas más ecológicas 
                                     en sus procesos de producción, alineándose con la creciente demanda de los consumidores por opciones más sostenibles.
                                     <br>
                                    En 2024, la sostenibilidad ha dejado de ser una tendencia pasajera para convertirse en una necesidad para las
                                     marcas que quieren posicionarse como líderes en el mercado. La moda infantil española está adoptando
                                      modelos circulares, como la ropa reciclada y el uso de tintes naturales, lo que contribuye a la 
                                      preservación del medio ambiente y la reducción de la huella de carbono.                                
                                </li>
                                <br>
                                <li>
                                    <h5>Diseño Creativo y Vanguardia</h5>
                                    Desde prendas de corte minimalista hasta opciones más elaboradas con estampados originales y detalles únicos, 
                                    los diseñadores españoles saben cómo capturar la esencia de la moda sin perder de vista las necesidades de los niños.
                                    <br>
                                    Los diseñadores españoles también se han destacado por su capacidad para crear ropa que no solo se ve bien,
                                    sino que también permite a los niños moverse libremente y disfrutar de su día a día. Esto ha sido clave 
                                    en su éxito, ya que la comodidad es esencial cuando se trata de ropa para niños.
                                </li>
                                
                             </ul>
					</div>
				</div>	
		</section>
<!--CUARTA SECCION --> 
        <section class="articulosC">
			
			<h2 class="titSeccionCons">Moda</h2>
				
				<div id="contenedorConsejo">

					<div class="imgConsejo">
						<img src="../../MEDIA/seccionArticulos/img26.jpg" alt="">
					</div>

					<div class="txtConsejo">
						<ul>
                            <p>En los años 2000, las grandes cadenas de ropa como Zara Kids y Mango Kids comenzaron a transformar el mercado,
                                 ofreciendo colecciones de alta calidad y diseños innovadores a precios accesibles. Este cambio en la 
                                 industria marcó el inicio de una era dorada para la moda infantil en España, con un enfoque cada vez más
                                  centrado en el diseño, la calidad de los materiales y la adaptación a las tendencias de la moda adulta.
                                Hoy en día, España se destaca no solo por ser el hogar de algunas de las marcas más exitosas a nivel mundial,
                                 sino también por ser un centro neurálgico de la creatividad y el diseño en la moda infantil.
                            </p>
                            
					</div>
				</div>	
				
		</section>
     
    <!-- QUINTA SECCION -->
         
        <section class="articulosD">	
            <h2 id="tituloTendencia">Quizás te interese:</h2>
            <div class="contArtExtras">
                <div class="columArtExtras">
                    <a href="articulo4.php"><img src="../../MEDIA/seccionArticulos/img5.jpg" id="imgTendencia" alt="">Ropa infantil en expasion por Europa</a>
                </div>
                <div class="columArtExtras">
                    <a href="articulo5.php"><img src="../../MEDIA/seccionArticulos/img6.jpg" id="imgTendencia" alt="">Panorama actual de la moda infantil</a>
                </div>
            </div>
            <a class="verArticuloD" href= "./articulos.php">Ver todos los Artículos</a>
        </section> 
    <footer>
    <?php include '../includes/footer.php'; ?>
    </footer>
</body>
</html>