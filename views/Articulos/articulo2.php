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
                <h1>Escoger la Talla Adecuada: Guía para Padres</h1>
                <img src="../../MEDIA/seccionArticulos/pArticulo2.png" alt="">
            </div>

<!--SEGUNDA SECCION --> 
<!--  AQUI EMPIEZA EL ARTICULO  -->	 

        <section class="articulosC">
            <h2 id="tituloTendencia">Estar a la vanguardia Infantil</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="../../MEDIA/seccionArticulos/articulo2-1.jpg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                        "Cuando se trata de comprar ropa para niños, elegir la talla adecuada puede ser un desafío,
                        ya que los niños crecen rápidamente y sus cuerpos varían en forma y tamaño. Además, las tallas
                        de ropa infantil no siempre siguen el mismo estándar en todas las marcas, lo que puede generar
                        confusión. Sin embargo, con algunos consejos prácticos y un poco de atención, puedes 
                        asegurarte de que las prendas sean cómodas y se ajusten perfectamente. Aquí te ofrecemos una
                        guía para aprender a escoger la talla adecuada para tus hijos."
                    </p>   
                </div>
            </div>
        </section>
<!-- TERCERA SECCION  -->        
        <section class="articulosD">
			
			<h2 id="consejos" class="titSeccionCons">Conocer las Medidas del Niño</h2>
				
				<div id="contenedorConsejo">

					<div class="txtConsejo">
						
                            <ul>
							La clave para elegir la talla correcta es tener a mano las medidas actuales del niño. Para ello, necesitarás:</p>
                                <li>
                                    <h5>Altura:</h5>Mide la altura del niño de pie, desde la cabeza hasta los pies. Esta es una medida fundamental para determinar qué ropa le quedará mejor.
                                </li>
                                <li>
                                    <h5>Contorno del Pecho:</h5>Mide alrededor del pecho, justo debajo de las axilas, y asegúrate de que la cinta métrica esté ajustada pero no apretada. 
                                </li>
                                <li>
                                    <h5>Contorno de la Cintura:</h5>Mide la cintura natural, que es la parte más estrecha del torso, justo encima del ombligo.
                                </li>
                                <li>
                                    <h5>Contorno de la Cadera:</h5>Mide alrededor de la parte más ancha de las caderas, donde la tela de los pantalones o faldas se ajusta.
                                </li>
                                <li>
                                    <h5>Largo de Pierna (para pantalones):</h5>Mide desde la parte superior del muslo hasta el tobillo, siguiendo el contorno de la pierna.
                                </li>
                                <li>
                                    Con estas medidas, podrás comparar las dimensiones de tu hijo con las tablas de tallas de las marcas y elegir la talla más adecuada.
                                </li>
                             </ul>
					</div>
				</div>	
		</section>
<!--CUARTA SECCION --> 
        <section class="articulosC">
			
			<h2 class="titSeccionCons">Entender las Tablas de Tallas para Niños</h2>
				
				<div id="contenedorConsejo">

					<div class="imgConsejo">
						<img src="<?php echo BASE_URL; ?>MEDIA/seccionArticulos/guiaTalla.jpg" alt="">
					</div>

					<div class="txtConsejo">
						<ul>
                            <p>La mayoría de las tablas de tallas están basadas en la edad y la altura, 
                                pero no todos los niños tienen la misma complexión, no siempre la talla será la más precisa.</p>
                            <li>
                                <h5>Tallas por Edad:</h5>Muchas marcas organizan sus tallas en rangos de edad
                                 (por ejemplo, 0-3 meses, 3-6 meses, 1-2 años, etc.), pero esta clasificación
                                  no siempre es exacta. Es común que algunos niños de la misma edad tengan una 
                                  altura y peso muy diferentes.
                            </li>
                            <li>
                                <h5>Tallas por Medidas:</h5>: Algunas marcas ofrecen una tabla de tallas más detallada
                                 que está basada en las medidas específicas del niño, como el contorno del pecho, la 
                                 cintura y las caderas, además de la altura.
                            </li>
                        </ul>
					</div>
				</div>	
				
		</section>
     
    <!-- QUINTA SECCION -->
         
        <section class="articulosD">	
            <h2 id="tituloTendencia">Quizás te interese:</h2>
            <div class="contArtExtras">
                <div class="columArtExtras">
                    <a href="articulo3.php"><img src="../../MEDIA/seccionArticulos/img3.jpg" id="imgTendencia" alt="">Ropa infantil en expansion por Europa</a>
                </div>
                <div class="columArtExtras">
                    <a href="articulo4.php"><img src="../../MEDIA/seccionArticulos/img4.jpg" id="imgTendencia" alt="">Panorama actual de la moda infantil</a>
                </div>
            </div>
            <a class="verArticuloD" href= "./articulos.php">Ver todos los Artículos</a>
        </section> 
    <footer>
    <?php include '../includes/footer.php'; ?>
    </footer>
</body>
</html>