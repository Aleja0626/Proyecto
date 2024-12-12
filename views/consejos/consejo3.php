<?php
define('BASE_URL', 'http://localhost/Proyecto/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consejos</title>
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
                <h1>Evento BabyKid Spain + FIMI 2025</h1>
                <img src="../../MEDIA/consejos/img9.jpg" alt="">
            </div>

<!--SEGUNDA SECCION --> 
<!--  AQUI EMPIEZA EL ARTICULO  -->	 

        <section class="seccionConsejoA">
            <h2 id="tituloTendencia">Una de las ferias más importantes de moda</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="../MEDIA/seccionArticulos/articulo10.jpg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                        Es una de las más importantes de la moda infantil y productos para niños en España. 
                        Se celebra anualmente en la ciudad de Valencia y reúne a marcas, fabricantes, 
                        diseñadores, distribuidores, y compradoresdel sector infantil, tanto a nivel nacional como internacional.
                    </p> 
                    <br>   
                     <ul>
                        Se centra en productos para bebés y niños, como puericultura, juguetes, artículos de decoración, 
                        productos de higiene, y tecnología. Es una excelente oportunidad para que los fabricantes y 
                        distribuidores presenten sus nuevos productos y soluciones para padres y niños
                     <br>
                     </ul> 
                </div>
            </div>
        </section>
<!-- TERCERA SECCION  -->        
        <section class="seccionConsejoB">
			
			<h2 id="consejos" class="titSeccionCons">Innovación y Tendencias</h2>
				
				<div id="contenedorConsejo">

					<div class="txtConsejo">
						<p>
							Tanto FIMI como BabyKid Spain se caracterizan por ser escaparates de las últimas innovaciones y tendencias
                             en el sector infantil. Los asistentes pueden descubrir nuevos productos y ver las próximas tendencias en moda, diseño y tecnología para niños.
                        </p>
                        <br>
                        <p>
                            Además de ser un espacio para conocer las últimas novedades, el evento es una plataforma de networking para profesionales del sector, donde compradores
                            y proveedores pueden establecer relaciones comerciales, negociar acuerdos y explorar nuevas oportunidades de negocio.
                        </p>   
						<br>
                        <p>
                        el Evento BabyKid Spain + FIMI 2025 es una cita clave para todos aquellos involucrados en la industria de la moda infantil y productos para bebés, 
                        proporcionando una plataforma para descubrir nuevas tendencias, hacer negocios y establecer conexiones en el sector
                        </p>
                        <br>
                        <p>
                        A lo largo del evento se realizan desfiles de moda, presentaciones de colecciones, y otros espectáculos relacionados con la moda y los productos para niños. También se celebran conferencias y talleres dirigidos a profesionales del sector.
                        </p>
					</div>
				</div>	
		</section>

     
    <!-- CUARTA SECCION -->
         
    <section class="seccionConsejoA">	
            <h2 id="tituloTendencia">Quizás te interese:</h2>
            <div class="contArtExtras">
                <div class="columArtExtras">
                    <a href="consejo1.php">
                    <img src="../../MEDIA/consejos/img11.jpg" id="imgTendencia" alt="">Moda infantil del 2024
                    </a>
                </div>
                <div class="columArtExtras">
                    <a href="consejo2.php">
                    <img src="../../MEDIA/consejos/img12.jpg" id="imgTendencia" alt="">Colorimetria 
                    </a>
                </div>
            </div>
            <a id="verArticulo" href="<?php echo BASE_URL; ?>" class="button">Página Principal</a>
        </section>
    <footer>
    <?php include '../includes/footer.php'; ?>
    </footer>
</body>
</html>