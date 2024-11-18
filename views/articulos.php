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
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>CSS/articulos.css">
</head>
<body>
    <header>
        <?php include 'includes/header.php'; ?>
    </header>
    <div class="container">
        <section class="articulos" id="artPrincipal">
            <div id="pPrincipal">
                <h1>ARTICULOS</h1>
                <img src="./MEDIA/" alt="">
            </div>
        </section>
        <!-- SECCIONES DE ARTICULOS -->
        <section class="articulos">
            <!-- ARTICULO 1 -->			
            <h2 id="tituloTendencia">Articulo 1</h2>
            <h3 class="titSeccionTen">Tendencia infantssil según ASEPRI</h3>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="<?php echo BASE_URL; ?>MEDIA/tendencia1.jpeg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                        "Somos una tienda de ropa exclusiva para niñas brindando a sus clientas altos estándares de calidad.
                        Especializados en vestidos para cumpleaños y ocasiones especiales.
                        <br></br>
                        Estamos a la vanguardia de la moda infantil, te ndencias.
                        Fomentamos valores positivos y una cultura de autoestima saludable entre las niñas, enseñándoles a expresarse a través de la moda y la creatividad, y contribuyendo así a su desarrollo integral.
                        <br></br>		
                        Nos aseguramos de la durabilidad de las prendas y estamos comprometidos con la sostenibilidad en los procesos de producción y distribución, contribuyendo así al cuidado del medio ambiente "
                    </p>   
                </div>
            </div>
            <a id="verArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo1.php" class="button">Ver Artículo</a>
        </section>  
        <!-- ARTICULO 2 -->
        <section class="articulos">
            <!-- ARTICULO 2 -->			
            <h2 id="tituloTendencia">Articulo 2</h2>
            <h3 class="titSeccionTen">Colores tendencia el 2024</h3>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="<?php echo BASE_URL; ?>MEDIA/tendencia2.jpeg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                        "Somos una tienda de ropa exclusiva para niñas brindando a sus clientas altos estándares de calidad.
                        Especializados en vestidos para cumpleaños y ocasiones especiales.
                        <br></br>
                        Estamos a la vanguardia de la moda infantil, tendencias.
                        Fomentamos valores positivos y una cultura de autoestima saludable entre las niñas, enseñándoles a expresarse a través de la moda y la creatividad, y contribuyendo así a su desarrollo integral.
                        <br></br>		
                        Nos aseguramos de la durabilidad de las prendas y estamos comprometidos con la sostenibilidad en los procesos de producción y distribución, contribuyendo así al cuidado del medio ambiente "
                    </p>   
                </div>
            </div>
            <a id="verArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo2.php" class="button">Ver Artículo</a>
        </section>  
        <!-- ARTICULO 3 -->
        <section class="articulos">
            <h2>articulo 3</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="<?php echo BASE_URL; ?>MEDIA/tendencia1.jpeg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                        "Somos una tienda de ropa exclusiva para niñas brindando a sus clientas altos estándares de calidad.
                        Especializados en vestidos para cumpleaños y ocasiones especiales.
                        <br></br>
                        Estamos a la vanguardia de la moda infantil, tendencias.
                        Fomentamos valores positivos y una cultura de autoestima saludable entre las niñas, enseñándoles a expresarse a través de la moda y la creatividad, y contribuyendo así a su desarrollo integral.
                        <br></br>		
                        Nos aseguramos de la durabilidad de las prendas y estamos comprometidos con la sostenibilidad en los procesos de producción y distribución, contribuyendo así al cuidado del medio ambiente "
                    </p>   
                </div>
            </div>
            <a id ="verArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo3.php" class="button">Ver Artículo</a>
        </section> 
        <!-- ARTICULO 4 -->
        <section class="articulos">
            <h2>articulo 4</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="<?php echo BASE_URL; ?>MEDIA/tendencia1.jpeg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                        "Somos una tienda de ropa exclusiva para niñas brindando a sus clientas altos estándares de calidad.
                        Especializados en vestidos para cumpleaños y ocasiones especiales.
                        <br></br>
                        Estamos a la vanguardia de la moda infantil, tendencias.
                        Fomentamos valores positivos y una cultura de autoestima saludable entre las niñas, enseñándoles a expresarse a través de la moda y la creatividad, y contribuyendo así a su desarrollo integral.
                        <br></br>		
                        Nos aseguramos de la durabilidad de las prendas y estamos comprometidos con la sostenibilidad en los procesos de producción y distribución, contribuyendo así al cuidado del medio ambiente "
                    </p>   
                </div>
            </div>
            <a id ="verArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo4.php" class="button">Ver Artículo</a>
        </section> 
        <!-- ARTICULO 5 -->
        <section class="articulos">
            <h2>articulo 5</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="<?php echo BASE_URL; ?>MEDIA/tendencia1.jpeg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                        "Somos una tienda de ropa exclusiva para niñas brindando a sus clientas altos estándares de calidad.
                        Especializados en vestidos para cumpleaños y ocasiones especiales.
                        <br></br>
                        Estamos a la vanguardia de la moda infantil, tendencias.
                        Fomentamos valores positivos y una cultura de autoestima saludable entre las niñas, enseñándoles a expresarse a través de la moda y la creatividad, y contribuyendo así a su desarrollo integral.
                        <br></br>		
                        Nos aseguramos de la durabilidad de las prendas y estamos comprometidos con la sostenibilidad en los procesos de producción y distribución, contribuyendo así al cuidado del medio ambiente "
                    </p>   
                </div>
            </div>
            <a id ="verArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo5.php" class="button">Ver Artículo</a>
        </section> 
        <!-- ARTICULO 6 -->
        <section class="articulos">
            <h2>articulo 6</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="<?php echo BASE_URL; ?>MEDIA/tendencia1.jpeg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                        "Somos una tienda de ropa exclusiva para niñas brindando a sus clientas altos estándares de calidad.
                        Especializados en vestidos para cumpleaños y ocasiones especiales.
                        <br></br>
                        Estamos a la vanguardia de la moda infantil, tendencias.
                        Fomentamos valores positivos y una cultura de autoestima saludable entre las niñas, enseñándoles a expresarse a través de la moda y la creatividad, y contribuyendo así a su desarrollo integral.
                        <br></br>		
                        Nos aseguramos de la durabilidad de las prendas y estamos comprometidos con la sostenibilidad en los procesos de producción y distribución, contribuyendo así al cuidado del medio ambiente "
                    </p>   
                </div>
            </div>
            <a id ="verArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo6.php" class="button">Ver Artículo</a>
        </section> 
        <!-- ARTICULO 7 -->
        <section class="articulos">
            <h2>articulo 7</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="<?php echo BASE_URL; ?>MEDIA/tendencia1.jpeg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                        "Somos una tienda de ropa exclusiva para niñas brindando a sus clientas altos estándares de calidad.
                        Especializados en vestidos para cumpleaños y ocasiones especiales.
                        <br></br>
                        Estamos a la vanguardia de la moda infantil, tendencias.
                        Fomentamos valores positivos y una cultura de autoestima saludable entre las niñas, enseñándoles a expresarse a través de la moda y la creatividad, y contribuyendo así a su desarrollo integral.
                        <br></br>		
                        Nos aseguramos de la durabilidad de las prendas y estamos comprometidos con la sostenibilidad en los procesos de producción y distribución, contribuyendo así al cuidado del medio ambiente "
                    </p>   
                </div>
            </div>
            <a id ="verArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo7.php" class="button">Ver Artículo</a>
        </section> 
        <!-- ARTICULO 8 -->
        <section class="articulos">
            <h2>articulo 8</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="<?php echo BASE_URL; ?>MEDIA/tendencia1.jpeg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                        "Somos una tienda de ropa exclusiva para niñas brindando a sus clientas altos estándares de calidad.
                        Especializados en vestidos para cumpleaños y ocasiones especiales.
                        <br></br>
                        Estamos a la vanguardia de la moda infantil, tendencias.
                        Fomentamos valores positivos y una cultura de autoestima saludable entre las niñas, enseñándoles a expresarse a través de la moda y la creatividad, y contribuyendo así a su desarrollo integral.
                        <br></br>		
                        Nos aseguramos de la durabilidad de las prendas y estamos comprometidos con la sostenibilidad en los procesos de producción y distribución, contribuyendo así al cuidado del medio ambiente "
                    </p>   
                </div>
            </div>
            <a id ="verArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo8.php" class="button">Ver Artículo</a>
        </section> 
        <!-- ARTICULO 9 -->
        <section class="articulos">
            <h2>articulo 9</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="<?php echo BASE_URL; ?>MEDIA/tendencia1.jpeg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                        "Somos una tienda de ropa exclusiva para niñas brindando a sus clientas altos estándares de calidad.
                        Especializados en vestidos para cumpleaños y ocasiones especiales.
                        <br></br>
                        Estamos a la vanguardia de la moda infantil, tendencias.
                        Fomentamos valores positivos y una cultura de autoestima saludable entre las niñas, enseñándoles a expresarse a través de la moda y la creatividad, y contribuyendo así a su desarrollo integral.
                        <br></br>		
                        Nos aseguramos de la durabilidad de las prendas y estamos comprometidos con la sostenibilidad en los procesos de producción y distribución, contribuyendo así al cuidado del medio ambiente "
                    </p>   
                </div>
            </div>
            <a id ="verArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo9.php" class="button">Ver Artículo</a>
        </section> 
        <!-- ARTICULO 10 -->
        <section class="articulos">
            <h2>articulo 10</h2>
            <div class="contenedorTendencia">

                <div class="columTendencia">
					<img src="<?php echo BASE_URL; ?>MEDIA/tendencia1.jpeg" id="imgTendencia" alt="">
				</div>
				<div class="textoTendencia">
					<p>
						"Somos una tienda de ropa exclusiva para niñas brindando a sus clientas altos estándares de calidad.
						Especializados en vestidos para cumpleaños y ocasiones especiales.
						<br></br>
						Estamos a la vanguardia de la moda infantil, tendencias.
						Fomentamos valores positivos y una cultura de autoestima saludable entre las niñas, enseñándoles a expresarse a través de la moda y la creatividad, y contribuyendo así a su desarrollo integral.
						<br></br>		
						Nos aseguramos de la durabilidad de las prendas y estamos comprometidos con la sostenibilidad en los procesos de producción y distribución, contribuyendo así al cuidado del medio ambiente "

					</p>   
				</div>
			</div>
			<a id ="verArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo10.php" class="button">Ver Artículo</a>

		</section> 
         <!-- ARTICULO 11 -->
         <section class="articulos">
				
				<h2>articulo 11</h2>
			
			<div class="contenedorTendencia">

				<div class="columTendencia">
					<img src="<?php echo BASE_URL; ?>MEDIA/tendencia1.jpeg" id="imgTendencia" alt="">
				</div>

				<div class="textoTendencia">
					<p>
						"Somos una tienda de ropa exclusiva para niñas brindando a sus clientas altos estándares de calidad.
						Especializados en vestidos para cumpleaños y ocasiones especiales.
						<br></br>
						Estamos a la vanguardia de la moda infantil, tendencias.
						Fomentamos valores positivos y una cultura de autoestima saludable entre las niñas, enseñándoles a expresarse a través de la moda y la creatividad, y contribuyendo así a su desarrollo integral.
						<br></br>		
						Nos aseguramos de la durabilidad de las prendas y estamos comprometidos con la sostenibilidad en los procesos de producción y distribución, contribuyendo así al cuidado del medio ambiente "

					</p>   
				</div>
			</div>
			<a id ="verArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo11.php" class="button">Ver Artículo</a>

		</section> 
         <!-- ARTICULO 12 -->
         <section class="articulos">
				
				<h2>articulo 12</h2>
			
			<div class="contenedorTendencia">

				<div class="columTendencia">
					<img src="<?php echo BASE_URL; ?>MEDIA/tendencia1.jpeg" id="imgTendencia" alt="">
				</div>

				<div class="textoTendencia">
					<p>
						"Somos una tienda de ropa exclusiva para niñas brindando a sus clientas altos estándares de calidad.
						Especializados en vestidos para cumpleaños y ocasiones especiales.
						<br></br>
						Estamos a la vanguardia de la moda infantil, tendencias.
						Fomentamos valores positivos y una cultura de autoestima saludable entre las niñas, enseñándoles a expresarse a través de la moda y la creatividad, y contribuyendo así a su desarrollo integral.
						<br></br>		
						Nos aseguramos de la durabilidad de las prendas y estamos comprometidos con la sostenibilidad en los procesos de producción y distribución, contribuyendo así al cuidado del medio ambiente "

					</p>   
				</div>
			</div>
			<a id ="verArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo12.php" class="button">Ver Artículo</a>

		</section> 
    </div>
    <footer id="footer">
        <?php include 'includes/footer.php'; ?>
    </footer>
</body>
</html>