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
                <h1>Moda infantil del 2024</h1>
                <img src="../../MEDIA/consejos/img1.jpg" alt="">
            </div>

<!--SEGUNDA SECCION --> 
<!--  AQUI EMPIEZA EL ARTICULO  -->	 

        <section class="seccionConsejoA">
            <h2 id="tituloTendencia">Tendencias del 2024 </h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="../../MEDIA/consejos/img2.jpeg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                    La moda infantil para 2024 presenta varias tendencias interesantes que combinan comodidad,
                     estilo y funcionalidad. A continuación, te doy algunos consejos clave para estar al tanto 
                     de lo que se lleva en la moda para niños en este año:"
                     
                     <ul>
                     <br>
                        <li>
                             Colores vibrantes y pasteles vivos como el rojo, azul, verde y naranja estarán muy presentes, pero también se destacan los tonos más suaves y pasteles como el lavanda, menta y rosa claro.
                        </li>
                        <br>
                        <li>
                            Estilos cómodos y prácticos. Los conjuntos de dos piezas, como pantalones elásticos o leggins con camisetas y sudaderas, siguen siendo muy populares.
                        </li>
                        <br>
                        <li>
                            Sostenibilidad, las marcas están adoptando materiales ecológicos y técnicas de producción que minimizan el impacto ambiental.
                        </li>
                        <br>
                        <li>
                            Estilo "athleisure", se refiere a ropa deportiva que se puede usar en cualquier lugar continúa siendo una tendencia fuerte. Prendas como sudaderas con capucha, leggings y zapatillas deportivas estarán muy de moda
                        </li>
                     </ul>
                    </p>   
                </div>
            </div>
        </section>
<!-- TERCERA SECCION  -->        
        <section class="seccionConsejoB">
			
			<h2 id="consejos" class="titSeccionCons">la moda infantil para 2024 apuesta por la comodidad</h2>
				
				<div id="contenedorConsejo">

					<div class="txtConsejo">
						<p>
							"Los estampados gráficos, los dibujos animados, los animales y los motivos florales son muy populares.
                             Los niños adoran ropa con ilustraciones divertidas que les permitan expresar su personalidad y pasatiempos. 
                             Además, los patrones a rayas y los cuadros clásicos siguen siendo imprescindibles.
							<br>
                            <br>
							En lugar de pensar en colores y diseños que sean estrictamente para niños o niñas, muchas marcas están 
                            apostando por ropa unisex que funcione para cualquier niño. Esto favorece la inclusión y permite mayor 
                            libertad de elección.
							<br>
                            <br>
							Para el invierno, las capas siguen siendo esenciales. Abrigos oversize, chaquetas de punto grueso y chalecos
                             acolchados seguirán estando en auge. Las prendas de abrigo no solo se usan por su función, sino también 
                             para completar el look, creando estilos de capas elegantes."
						</p>
					</div>
				</div>	
		</section>

     
    <!-- CUARTA SECCION -->
         
        <section class="seccionConsejoA">	
            <h2 id="tituloTendencia">Quizás te interese:</h2>
            <div class="contArtExtras">
                <div class="columArtExtras">
                    <a href="consejo2.php">
                    <img src="../../MEDIA/consejos/img4.jpg" id="imgTendencia" alt="">Colorimetria
                    </a>
                </div>
                    <div class="columArtExtras">
                    <img src="../../MEDIA/consejos/img5.jpg" id="imgTendencia" alt=""> Evento BabyKid Spain + FIMI 2025
                    </a>
                </div>
            </div>
            <a class="verArticuloD" href="<?php echo BASE_URL; ?>" class="button">Página Principal</a>
        </section> 
    <footer>
    <?php include '../includes/footer.php'; ?>
    </footer>
</body>
</html>
</body>
</html>