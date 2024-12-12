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
                <h1>Tendencias en Calzado Infantil: Cómodo, Estiloso y Seguro </h1>
                <img src="../../MEDIA/seccionArticulos/pArticulo12.jpg" alt="">
            </div>

<!--SEGUNDA SECCION --> 
<!--  AQUI EMPIEZA EL ARTICULO  -->	 

        <section class="articulosC">
            <h2 id="tituloTendencia">El Desarrollo de los Pies</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="../../MEDIA/seccionArticulos/img22.jpg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                    El calzado infantil ha evolucionado significativamente en los últimos años, convirtiéndose
                    en un elemento clave no solo para la protección de los pies de los niños, sino también para
                    su desarrollo saludable y su bienestar. Con una creciente preocupación por la comodidad, la
                    seguridad y la moda, las tendencias actuales en calzado infantil buscan equilibrar estos tres
                    aspectos, brindando opciones que acompañen el crecimiento físico y emocional de los más pequeños.
                    </p>   
                </div>
            </div>
        </section>
<!-- TERCERA SECCION  -->        
        <section class="articulosD">
			
			<h2 id="consejos" class="titSeccionCons">Enfoque en el confort y la ergonomía</h2>
				
				<div id="contenedorConsejo">

					<div class="txtConsejo">
                            <ul>
                                <li>
                                    <h5>Comodidad</h5>
                                    La suela debe ser flexible, antideslizante y permitir el movimiento libre de los dedos, lo que favorece
                                     el desarrollo muscular y óseo adecuado. Además, materiales como el cuero natural y las telas transpirables
                                      ayudan a evitar el sudor excesivo y las incomodidades durante el día                                
                                    </li>
                                <br>
                                <li>
                                    <h5>Calzado con tecnología</h5>
                                    
                                    En la actualidad, muchos zapatos infantiles incorporan tecnologías innovadoras que favorecen el desarrollo saludable
                                     del pie. Los diseños incluyen características como plantillas ortopédicas, refuerzos en zonas clave como 
                                     el talón y la puntera, y suelas de goma con buen agarre para prevenir caídas.                                </li>
                                <br>
                                <li>
                                    <h5>Tendencias de diseño y estilo</h5>
                                    Los diseños coloridos, con personajes de moda, estampados llamativos y detalles en 3D, siguen siendo populares. Sin embargo,
                                     también crece la tendencia hacia el minimalismo, con zapatos en tonos neutros y formas más simples, que 
                                     permiten mayor versatilidad y fácil combinación con diferentes estilos de ropa.
                             
                             <br>
                             <li>
                                <h5>Seguridad ante todo </h5>
                                Es fundamental que el zapato no solo sea cómodo, sino también seguro para evitar lesiones. Los zapatos con cierres de velcro o cordones
                                 ajustables ofrecen un buen soporte, mientras que las características como los reflectores en la parte posterior ayudan a que los niños 
                                 sean más visibles cuando juegan al aire libre, especialmente en condiciones de poca luz.  
                             </li>
                             
                             </ul>     
					</div>
				</div>	
		</section>
<!--CUARTA SECCION --> 
        <section class="articulosC">
			
			<h2 class="titSeccionCons">Sostenibilidad y materiales ecológicos</h2>
				
				<div id="contenedorConsejo">

					<div class="imgConsejo">
						<img src="../../MEDIA/seccionArticulos/img34.jpg" alt="">
					</div>

					<div class="txtConsejo">
						<ul>
                            <p>Una tendencia cada vez más presente es la preferencia por materiales ecológicos
                                 y sostenibles. Muchos fabricantes están optando por materiales reciclados, 
                                 veganos y de bajo impacto ambiental en la fabricación del calzado infantil. 
                                 Además, el uso de tintes naturales y procesos de producción éticos refleja un
                                  mayor compromiso con el medio ambiente y con la salud de los niños.
                                  <br>
                                  Con estas tendencias, los padres pueden estar seguros de que sus hijos caminarán con confianza,
                                   mientras cuidan su salud y desarrollan su propio estilo personal.
                            </p>
                            
					</div>
				</div>	
				
		</section>
     
    <!-- QUINTA SECCION -->
         
        <section class="articulosD">	
            <h2 id="tituloTendencia">Quizás te interese:</h2>
            <div class="contArtExtras">
                <div class="columArtExtras">
                    <a href="articulo1.php"><img src="../../MEDIA/seccionArticulos/img10.jpg" id="imgTendencia" alt="">Ropa para fiesta y Ocasiones Especiales</a>
                </div>
                <div class="columArtExtras">
                    <a href="articulo2.php"><img src="../../MEDIA/seccionArticulos/img12.jpg" id="imgTendencia" alt="">Aprende a escoger la talla adecuada</a>
                </div>
            </div>
            <a class="verArticuloD" href= "./articulos.php">Ver todos los Artículos</a>
        </section>
    <footer>
    <?php include '../includes/footer.php'; ?>
    </footer>
</body>
</html>